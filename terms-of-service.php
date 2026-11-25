<?php
require_once __DIR__ . '/includes/config.php';
$current_page = 'terms';
$page_title = 'Terms of Service | ' . SITE_NAME;
$page_description = 'Terms of Service for Birrieria Los Gonzalez - Lunch Truck.';
require_once __DIR__ . '/includes/header.php';
?>

<section class="page-banner">
    <div class="container">
        <span class="eyebrow">Legal &amp; Transparency</span>
        <h1>Terms of Service</h1>
        <p>Last updated: <?= date('F j, Y') ?></p>
    </div>
</section>

<section class="section">
    <div class="container">
        <article class="legal-prose">
            <h2>1. Acceptance of Terms</h2>
            <p>
                By accessing this website for <strong><?= e(SITE_NAME) ?></strong>, you agree to these Terms of Service and our <a href="privacy-policy.php" style="color: var(--accent-rojo);">Privacy Policy</a>.
            </p>

            <h2>2. Menu, Availability &amp; Hours</h2>
            <p>
                Menu items, seasonal availability, and operating hours are subject to change based on daily fresh-ingredient preparation at our Maple Avenue lunch truck. For real-time availability or large group orders, please call <a href="tel:<?= e(BUSINESS_PHONE_RAW) ?>" style="color: var(--accent-rojo);"><?= e(BUSINESS_PHONE_DISPLAY) ?></a>.
            </p>

            <h2>3. Acceptable Use</h2>
            <p>
                You agree not to misuse our contact form, submit automated spam, or attempt to disrupt website operations.
            </p>

            <h2>4. Contact Information</h2>
            <p>
                <?= e(SITE_NAME) ?><br>
                <?= e(BUSINESS_ADDRESS) ?><br>
                Phone: <?= e(BUSINESS_PHONE_DISPLAY) ?>
            </p>
        </article>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
