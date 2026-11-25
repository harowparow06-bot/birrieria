<?php
if (!isset($page_title)) {
    $page_title = SITE_NAME . ' | ' . SITE_TAGLINE;
}
if (!isset($page_description)) {
    $page_description = 'Authentic Tijuana-style beef birria tacos, quesatacos dorados, birria ramen, torta ahogada, and rich consommé at 2524 Maple Ave, Los Angeles, CA 90011.';
}
if (!isset($current_page)) {
    $current_page = 'home';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= e($page_title) ?></title>
    <meta name="description" content="<?= e($page_description) ?>">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#140F0D">

    <!-- Open Graph -->
    <meta property="og:title" content="<?= e($page_title) ?>">
    <meta property="og:description" content="<?= e($page_description) ?>">
    <meta property="og:type" content="restaurant.restaurant">
    <meta property="og:image" content="assets/images/hero-birria.jpg">

    <!-- Typography -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;0,700;0,800;1,600&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Google Consent Mode v2 (Default Denied until user consents) -->
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('consent', 'default', {
            'ad_storage': 'denied',
            'ad_user_data': 'denied',
            'ad_personalization': 'denied',
            'analytics_storage': 'denied',
            'wait_for_update': 500
        });
    </script>
    <?php if (GOOGLE_ADS_ID !== '' || GA4_MEASUREMENT_ID !== ''):
        $primary_tag = GOOGLE_ADS_ID !== '' ? GOOGLE_ADS_ID : GA4_MEASUREMENT_ID;
    ?>
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?= e($primary_tag) ?>"></script>
    <script>
        gtag('js', new Date());
        <?php if (GA4_MEASUREMENT_ID !== ''): ?>
        gtag('config', '<?= e(GA4_MEASUREMENT_ID) ?>');
        <?php endif; ?>
        <?php if (GOOGLE_ADS_ID !== ''): ?>
        gtag('config', '<?= e(GOOGLE_ADS_ID) ?>');
        <?php endif; ?>
    </script>
    <?php endif; ?>

    <!-- Structured Data (Schema.org Restaurant) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Restaurant",
      "name": "<?= e(SITE_NAME) ?>",
      "servesCuisine": "Mexican, Birria, Tacos",
      "priceRange": "$",
      "telephone": "<?= e(BUSINESS_PHONE_RAW) ?>",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "2524 Maple Ave",
        "addressLocality": "Los Angeles",
        "addressRegion": "CA",
        "postalCode": "90011",
        "addressCountry": "US"
      },
      "openingHoursSpecification": [
        { "@type": "OpeningHoursSpecification", "dayOfWeek": ["Monday","Tuesday","Wednesday","Friday"], "opens": "10:00", "closes": "22:00" },
        { "@type": "OpeningHoursSpecification", "dayOfWeek": "Thursday", "opens": "11:00", "closes": "22:00" },
        { "@type": "OpeningHoursSpecification", "dayOfWeek": ["Saturday","Sunday"], "opens": "08:00", "closes": "22:00" }
      ],
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.6",
        "reviewCount": "1042"
      }
    }
    </script>
</head>
<body>
    <a href="#main-content" class="skip-link">Skip to main content</a>

    <!-- Top Utility Bar (Transparent NAP for Google Ads Trust) -->
    <div class="top-bar">
        <div class="container top-bar-inner">
            <div class="top-bar-info">
                <span><strong>Location:</strong> <?= e(BUSINESS_ADDRESS) ?></span>
                <span class="sep" aria-hidden="true">•</span>
                <span id="live-status-badge" class="status-pill">Checking LA Hours...</span>
            </div>
            <div class="top-bar-actions">
                <a href="tel:<?= e(BUSINESS_PHONE_RAW) ?>" class="top-phone">Call <?= e(BUSINESS_PHONE_DISPLAY) ?></a>
            </div>
        </div>
    </div>

    <!-- Main Navigation -->
    <header class="site-header" id="site-header">
        <div class="container nav-inner">
            <a href="index.php" class="brand" aria-label="<?= e(SITE_NAME) ?> Home">
                <span class="brand-emblem" aria-hidden="true">🔥</span>
                <span class="brand-text">
                    <strong>Birrieria Los Gonzalez</strong>
                    <small>Lunch Truck • Maple Ave, LA</small>
                </span>
            </a>

            <button class="nav-toggle" id="nav-toggle" aria-expanded="false" aria-controls="primary-nav" aria-label="Toggle navigation">
                <span></span><span></span><span></span>
            </button>

            <nav id="primary-nav" class="primary-nav" aria-label="Main navigation">
                <a href="index.php" <?= active_nav('home', $current_page) ?>>Home</a>
                <a href="menu.php" <?= active_nav('menu', $current_page) ?>>Menu</a>
                <a href="about.php" <?= active_nav('about', $current_page) ?>>Our Story</a>
                <a href="contact.php" <?= active_nav('contact', $current_page) ?>>Contact &amp; Catering</a>
                <a href="<?= e(GOOGLE_MAPS_URL) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-gold">Get Directions</a>
            </nav>
        </div>
    </header>
    <main id="main-content">
