<?php
require_once __DIR__ . '/includes/config.php';
$current_page = 'privacy';
$page_title = 'Privacy Policy | ' . SITE_NAME;
$page_description = 'Privacy Policy, Cookie Notice, and California Privacy Rights for Birrieria Los Gonzalez - Lunch Truck.';
require_once __DIR__ . '/includes/header.php';
?>

<section class="page-banner">
    <div class="container">
        <span class="eyebrow">Legal &amp; Transparency</span>
        <h1>Privacy Policy</h1>
        <p>Last updated: <?= date('F j, Y') ?></p>
    </div>
</section>

<section class="section">
    <div class="container">
        <article class="legal-prose">
            <h2>1. Who We Are</h2>
            <p>
                This website is operated by <strong><?= e(SITE_NAME) ?></strong>, located at <?= e(BUSINESS_ADDRESS) ?> (Phone: <?= e(BUSINESS_PHONE_DISPLAY) ?>). We respect your privacy and are committed to transparent data practices.
            </p>

            <h2>2. Information We Collect</h2>
            <p>We collect only the information you voluntarily provide and minimal technical data:</p>
            <ul>
                <li><strong>Contact &amp; Catering Inquiries:</strong> Name, email address, optional phone number, and message details submitted via our contact form.</li>
                <li><strong>Essential Cookies &amp; Session Data:</strong> Used solely for form security (CSRF protection) and remembering your cookie preferences.</li>
                <li><strong>Optional Analytics &amp; Advertising Cookies:</strong> If you click "Accept All" on our cookie banner, Google Analytics / Google Ads tags may measure aggregate site visits and conversions in accordance with Google Consent Mode v2.</li>
            </ul>

            <h2>3. How We Use Your Information</h2>
            <ul>
                <li>To respond to your questions, group order requests, or catering inquiries.</li>
                <li>To maintain website security and prevent automated spam.</li>
                <li>To measure website performance (only when you grant consent).</li>
            </ul>
            <p>We do <strong>not</strong> sell, rent, or trade your personal information to third parties.</p>

            <h2>4. Managing Cookies &amp; Consent</h2>
            <p>
                You can update or withdraw your cookie consent at any time by clicking <strong>Cookie Preferences</strong> in the footer of any page, or by adjusting your browser settings.
            </p>

            <h2>5. California Privacy Rights (CCPA / CPRA)</h2>
            <p>
                California residents have the right to request access to or deletion of personal information we hold about them. To exercise these rights, please call us at <a href="tel:<?= e(BUSINESS_PHONE_RAW) ?>" style="color: var(--accent-rojo);"><?= e(BUSINESS_PHONE_DISPLAY) ?></a> or contact us through our <a href="contact.php" style="color: var(--accent-rojo);">Contact Page</a>.
            </p>
        </article>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
