<?php
require_once __DIR__ . '/includes/config.php';
$current_page = 'about';
$page_title = 'Our Story | ' . SITE_NAME;
$page_description = 'Learn about Birrieria Los Gonzalez - Lunch Truck on Maple Ave in Los Angeles: authentic Tijuana-style beef birria, fast service, and local hospitality.';
require_once __DIR__ . '/includes/header.php';
?>

<section class="page-banner">
    <div class="container" data-reveal>
        <span class="eyebrow">Maple Avenue, Los Angeles</span>
        <h1>Our Story &amp; Birria Craft</h1>
        <p>Rooted in authentic borderland flavors, Birrieria Los Gonzalez - Lunch Truck brings slow-simmered beef birria to South Los Angeles seven days a week.</p>
    </div>
</section>

<section class="section">
    <div class="container split-grid">
        <div class="split-media" data-reveal>
            <img src="assets/images/plato-birria.jpg" alt="Traditional Plato de Birria with warm corn tortillas" loading="lazy">
        </div>
        <div class="split-content" data-reveal data-delay="100">
            <span class="eyebrow">Tradition on Wheels</span>
            <h2>No-Frills Street Food, Serious Flavor</h2>
            <p>
                Located at <strong>2524 Maple Ave, Los Angeles, CA 90011</strong>, our lunch truck is built for neighbors, commuters, students, and birria lovers who want honest, deeply flavorful Mexican comfort food without the formality of a sit-down restaurant.
            </p>
            <p>
                From our signature <strong>Plato de Birria</strong> and soft corn tortilla <strong>Tacos de Birria de Res</strong> to crispy <strong>Quesatacos Dorados</strong> and steaming bowls of <strong>Birria Ramen</strong>, every plate is served with care, generous portions, and our famously lively red salsa.
            </p>
            <ul class="check-list">
                <li><strong>Best Time to Visit:</strong> Early afternoon around 1:00 PM for peak freshness and quick turnaround</li>
                <li><strong>Dining Style:</strong> Fast takeout, solo dining, and casual outdoor seating</li>
                <li><strong>Accessibility &amp; Parking:</strong> Wheelchair-accessible entrance, free street parking &amp; free parking lot</li>
            </ul>
            <a href="menu.php" class="btn btn-primary">Explore the Menu</a>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
