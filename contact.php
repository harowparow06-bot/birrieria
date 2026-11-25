<?php
require_once __DIR__ . '/includes/config.php';
$current_page = 'contact';
$page_title = 'Contact & Catering | ' . SITE_NAME;
$page_description = 'Contact Birrieria Los Gonzalez - Lunch Truck at 2524 Maple Ave, Los Angeles, CA 90011 or call +1 323-675-7333 for orders, hours, and catering inquiries.';

$errors = [];
$success = false;
$form_data = [
    'name'    => '',
    'email'   => '',
    'phone'   => '',
    'topic'   => 'General Inquiry',
    'message' => '',
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $csrf = $_POST['csrf_token'] ?? '';
    $honeypot = trim($_POST['website_url'] ?? '');

    if (!verify_csrf_token($csrf)) {
        $errors[] = 'Your session expired. Please refresh the page and try again.';
    }
    if ($honeypot !== '') {
        $errors[] = 'Invalid submission detected.';
    }

    $form_data['name']    = trim((string)($_POST['name'] ?? ''));
    $form_data['email']   = trim((string)($_POST['email'] ?? ''));
    $form_data['phone']   = trim((string)($_POST['phone'] ?? ''));
    $form_data['topic']   = trim((string)($_POST['topic'] ?? 'General Inquiry'));
    $form_data['message'] = trim((string)($_POST['message'] ?? ''));
    $consent              = isset($_POST['privacy_consent']);

    if (mb_strlen($form_data['name']) < 2) {
        $errors[] = 'Please enter your name.';
    }
    if (!filter_var($form_data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Please enter a valid email address.';
    }
    if (mb_strlen($form_data['message']) < 10) {
        $errors[] = 'Please enter a message of at least 10 characters.';
    }
    if (!$consent) {
        $errors[] = 'Please confirm you agree to our Privacy Policy so we can respond to your inquiry.';
    }

    if (empty($errors)) {
        $data_dir = is_writable(__DIR__) ? (__DIR__ . '/data') : (sys_get_temp_dir() . '/birrieria_data');
        if (!is_dir($data_dir)) {
            @mkdir($data_dir, 0750, true);
        }
        $log_file = $data_dir . '/inquiries.json';
        $existing = [];
        if (is_file($log_file)) {
            $decoded = json_decode((string)file_get_contents($log_file), true);
            if (is_array($decoded)) {
                $existing = $decoded;
            }
        }
        $existing[] = [
            'submitted_at' => gmdate('c'),
            'name'         => $form_data['name'],
            'email'        => $form_data['email'],
            'phone'        => $form_data['phone'],
            'topic'        => $form_data['topic'],
            'message'      => $form_data['message'],
        ];
        @file_put_contents($log_file, json_encode($existing, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES), LOCK_EX);

        $success = true;
        $form_data = ['name' => '', 'email' => '', 'phone' => '', 'topic' => 'General Inquiry', 'message' => ''];
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
}

$csrf_token = generate_csrf_token();
require_once __DIR__ . '/includes/header.php';
?>

<section class="page-banner">
    <div class="container" data-reveal>
        <span class="eyebrow">Get In Touch</span>
        <h1>Contact &amp; Catering Inquiries</h1>
        <p>Questions about large group orders, catering, or visiting our Maple Ave truck? Call us directly or send a message below.</p>
    </div>
</section>

<section class="section">
    <div class="container location-grid">
        <div class="form-card" data-reveal>
            <h2 style="font-family: var(--font-display); margin-bottom: 1rem;">Send Us a Message</h2>

            <?php if ($success): ?>
                <div class="alert alert-success" role="status">
                    Thank you! Your inquiry has been received. Our team will follow up shortly—or call us anytime during business hours at <a href="tel:<?= e(BUSINESS_PHONE_RAW) ?>" style="text-decoration: underline;"><?= e(BUSINESS_PHONE_DISPLAY) ?></a>.
                </div>
                <?php if (GOOGLE_ADS_ID !== '' && GOOGLE_ADS_CONV_LABEL !== ''): ?>
                <script>
                    if (typeof gtag === 'function') {
                        gtag('event', 'conversion', { 'send_to': '<?= e(GOOGLE_ADS_ID . '/' . GOOGLE_ADS_CONV_LABEL) ?>' });
                    }
                </script>
                <?php endif; ?>
            <?php endif; ?>

            <?php if (!empty($errors)): ?>
                <div class="alert alert-error" role="alert">
                    <ul style="padding-left: 1.2rem; margin: 0;">
                        <?php foreach ($errors as $err): ?>
                            <li><?= e($err) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <form method="post" action="contact.php" novalidate>
                <input type="hidden" name="csrf_token" value="<?= e($csrf_token) ?>">
                <div class="hp-field" aria-hidden="true">
                    <label for="website_url">Leave blank</label>
                    <input type="text" id="website_url" name="website_url" tabindex="-1" autocomplete="off">
                </div>

                <div class="form-grid">
                    <div class="form-group">
                        <label for="name">Full Name *</label>
                        <input type="text" id="name" name="name" required value="<?= e($form_data['name']) ?>" placeholder="Your name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name="email" required value="<?= e($form_data['email']) ?>" placeholder="you@example.com">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number (Optional)</label>
                        <input type="tel" id="phone" name="phone" value="<?= e($form_data['phone']) ?>" placeholder="(323) 000-0000">
                    </div>
                    <div class="form-group">
                        <label for="topic">Inquiry Type</label>
                        <select id="topic" name="topic">
                            <?php
                            $topics = ['General Inquiry', 'Group / Takeout Order', 'Catering Request', 'Feedback'];
                            foreach ($topics as $t):
                                $sel = ($form_data['topic'] === $t) ? 'selected' : '';
                            ?>
                                <option value="<?= e($t) ?>" <?= $sel ?>><?= e($t) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group full">
                        <label for="message">Message *</label>
                        <textarea id="message" name="message" rows="5" required placeholder="Tell us how we can help..."><?= e($form_data['message']) ?></textarea>
                    </div>
                </div>

                <label class="consent-check">
                    <input type="checkbox" name="privacy_consent" required>
                    <span>I agree to the <a href="privacy-policy.php" style="color: var(--accent-rojo); text-decoration: underline;">Privacy Policy</a> and consent to <?= e(SITE_SHORT_NAME) ?> using my contact details solely to respond to this inquiry.</span>
                </label>

                <button type="submit" class="btn btn-primary">Send Inquiry</button>
            </form>
        </div>

        <div class="info-panel" data-reveal data-delay="100">
            <h3>Direct Truck Info</h3>
            <p style="margin-bottom: 1rem;">
                <strong>Address:</strong><br>
                <a href="<?= e(GOOGLE_MAPS_URL) ?>" target="_blank" rel="noopener noreferrer" style="color: var(--accent-rojo);"><?= e(BUSINESS_ADDRESS) ?></a>
            </p>
            <p style="margin-bottom: 1rem;">
                <strong>Phone:</strong><br>
                <a href="tel:<?= e(BUSINESS_PHONE_RAW) ?>" style="color: var(--accent-rojo); font-weight: 700;"><?= e(BUSINESS_PHONE_DISPLAY) ?></a>
            </p>
            <p style="margin-bottom: 1.5rem; color: var(--text-muted-dark);">
                Free street parking and free parking lot access. Wheelchair-accessible entrance.
            </p>
            <h3 style="margin-top: 1.5rem;">Opening Hours</h3>
            <table class="hours-table">
                <tbody>
                    <?php foreach ($business_hours as $day => $info): ?>
                    <tr>
                        <td><?= e($day) ?></td>
                        <td><?= e($info['label']) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
