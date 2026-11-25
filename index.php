<?php
require_once __DIR__ . '/includes/config.php';
$current_page = 'home';
$page_title = SITE_NAME . ' | Authentic Beef Birria in Los Angeles';
$page_description = 'Visit Birrieria Los Gonzalez - Lunch Truck at 2524 Maple Ave, Los Angeles, CA 90011 for slow-simmered beef birria tacos, quesatacos dorados, birria ramen, and consommé.';
require_once __DIR__ . '/includes/header.php';
?>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-bg" style="background-image: url('assets/images/hero-birria.jpg');" aria-hidden="true"></div>
    <div class="hero-overlay" aria-hidden="true"></div>
    <div class="container hero-content" data-reveal>
        <span class="eyebrow">2524 Maple Ave, Los Angeles • Open Daily</span>
        <h1>Authentic Tijuana-Style <span>Beef Birria</span> on Maple Ave</h1>
        <p class="hero-lead">
            Slow-simmered shredded beef birria, crispy quesatacos dorados, savory birria ramen, and rich consommé—served hot and fresh from our Los Angeles lunch truck.
        </p>
        <div class="hero-cta-group">
            <a href="menu.php" class="btn btn-primary">Explore Full Menu</a>
            <a href="<?= e(GOOGLE_MAPS_URL) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-gold">Get Directions</a>
            <a href="tel:<?= e(BUSINESS_PHONE_RAW) ?>" class="btn btn-outline-light">Call <?= e(BUSINESS_PHONE_DISPLAY) ?></a>
        </div>
        <div class="hero-trust-row">
            <div class="trust-item">
                <strong>1,042+ Reviews</strong>
                <span>Loved by LA locals &amp; travelers</span>
            </div>
            <div class="trust-item">
                <strong>Fast Service</strong>
                <span>Ideal for quick lunch &amp; late dinner</span>
            </div>
            <div class="trust-item">
                <strong>Easy Parking</strong>
                <span>Free street &amp; lot parking nearby</span>
            </div>
        </div>
    </div>
</section>

<!-- Signature Menu Highlights -->
<section class="section" id="featured-menu">
    <div class="container">
        <div class="section-header" data-reveal>
            <span class="eyebrow">Crafted Fresh Daily</span>
            <h2>Signature Birria Favorites</h2>
            <p>Every dish is built around tender, slow-braised beef birria, warm tortillas, fresh onion &amp; cilantro, and our lively house red salsa.</p>
        </div>

        <div class="menu-grid">
            <?php
            $delay = 0;
            foreach ($menu_items as $item):
                if (!$item['featured']) continue;
            ?>
            <article class="menu-card" data-reveal data-delay="<?= $delay ?>">
                <div class="menu-card-media">
                    <img src="<?= e($item['image']) ?>" alt="<?= e($item['name']) ?>" loading="lazy">
                    <span class="dish-badge"><?= e($item['badge']) ?></span>
                </div>
                <div class="menu-card-body">
                    <span class="menu-cat-label"><?= e($item['category_label']) ?></span>
                    <h3><?= e($item['name']) ?></h3>
                    <p><?= e($item['description']) ?></p>
                    <div class="menu-card-footer">
                        <span><?= e($item['spice']) ?></span>
                        <button type="button"
                                class="quick-view-btn"
                                data-dish-trigger
                                data-name="<?= e($item['name']) ?>"
                                data-badge="<?= e($item['badge']) ?>"
                                data-spice="<?= e($item['spice']) ?>"
                                data-desc="<?= e($item['description']) ?>"
                                data-img="<?= e($item['image']) ?>">
                            Quick View →
                        </button>
                    </div>
                </div>
            </article>
            <?php
                $delay = ($delay + 80) % 320;
            endforeach;
            ?>
        </div>

        <div style="text-align: center; margin-top: 2.75rem;" data-reveal>
            <a href="menu.php" class="btn btn-primary">View All Menu Items &amp; Sides</a>
        </div>
    </div>
</section>

<!-- Why Locals Love Us (Dark Contrast Band) -->
<section class="section section-dark">
    <div class="container">
        <div class="section-header" data-reveal>
            <span class="eyebrow">Street Food Done Right</span>
            <h2>Why Angelenos Swing By Maple Ave</h2>
            <p>No-frills lunch truck energy paired with generous portions, welcoming staff, and unmistakable hometown birria flavor.</p>
        </div>

        <div class="features-grid">
            <div class="feature-box" data-reveal data-delay="0">
                <div class="feature-icon" aria-hidden="true">🍲</div>
                <h3>Rich Slow-Simmered Consommé</h3>
                <p>Our beef birria broth is deeply spiced and served piping hot—perfect for dipping crispy quesatacos or enjoying in a Plato de Birria.</p>
            </div>
            <div class="feature-box" data-reveal data-delay="80">
                <div class="feature-icon" aria-hidden="true">⚡</div>
                <h3>Fast &amp; Friendly Window Service</h3>
                <p>Designed for busy lunch breaks and evening cravings, with clear wait-time communication and generous, shareable portions.</p>
            </div>
            <div class="feature-box" data-reveal data-delay="160">
                <div class="feature-icon" aria-hidden="true">♿</div>
                <h3>Accessible &amp; Convenient</h3>
                <p>Wheelchair-accessible entrance, casual outdoor seating, solo-friendly dining, and free street and parking lot options.</p>
            </div>
            <div class="feature-box" data-reveal data-delay="240">
                <div class="feature-icon" aria-hidden="true">🌶️</div>
                <h3>Lively House Red Salsa</h3>
                <p>Crafted to complement our rich beef offerings—bright, bold, and spicy for guests who love an authentic kick.</p>
            </div>
        </div>
    </div>
</section>

<!-- Story Split Section -->
<section class="section section-sand">
    <div class="container split-grid">
        <div class="split-media" data-reveal>
            <img src="assets/images/consomme-salsa.jpg" alt="Steaming beef birria consommé and spicy red salsa in molcajete" loading="lazy">
        </div>
        <div class="split-content" data-reveal data-delay="100">
            <span class="eyebrow">Our Craft</span>
            <h2>Hometown Border Flavors in South Los Angeles</h2>
            <p>
                At Birrieria Los Gonzalez - Lunch Truck, we focus on doing one tradition exceptionally well: authentic Mexican beef birria. From soft corn tortilla tacos to crispy quesatacos dorados and hearty birria ramen, every order is prepared fresh to order.
            </p>
            <p>
                <strong>Local Tip:</strong> Visit around 1:00 PM for shorter lines and peak afternoon freshness, or stop by on weekends starting at 8:00 AM.
            </p>
            <ul class="check-list">
                <li>Serving lunch, dinner &amp; late-night bites 7 days a week</li>
                <li>Takeout &amp; casual seating available</li>
                <li>Group orders &amp; local catering inquiries welcome</li>
            </ul>
            <a href="about.php" class="btn btn-outline">Read Our Story</a>
        </div>
    </div>
</section>

<!-- Customer Reviews -->
<section class="section">
    <div class="container">
        <div class="section-header" data-reveal>
            <span class="eyebrow">Community Voices</span>
            <h2>What Locals &amp; Travelers Say</h2>
            <p>Real feedback from guests who stopped by 2524 Maple Ave.</p>
        </div>

        <div class="reviews-grid">
            <?php
            $rDelay = 0;
            foreach ($reviews as $rev):
            ?>
            <article class="review-card" data-reveal data-delay="<?= $rDelay ?>">
                <div>
                    <div class="review-stars" aria-label="<?= (int)$rev['rating'] ?> out of 5 stars">★★★★★</div>
                    <blockquote>“<?= e($rev['quote']) ?>”</blockquote>
                </div>
                <div class="review-meta">
                    <strong><?= e($rev['author']) ?></strong> • <span><?= e($rev['date']) ?></span>
                </div>
            </article>
            <?php
                $rDelay = ($rDelay + 80) % 320;
            endforeach;
            ?>
        </div>
    </div>
</section>

<!-- Location & Hours -->
<section class="section section-sand" id="visit-us">
    <div class="container">
        <div class="section-header" data-reveal>
            <span class="eyebrow">Visit Us Today</span>
            <h2>Location &amp; Opening Hours</h2>
            <p>Find our lunch truck on Maple Avenue in Los Angeles, CA 90011.</p>
        </div>

        <div class="location-grid">
            <div class="info-panel" data-reveal>
                <h3>Find Birrieria Los Gonzalez</h3>
                <p style="margin-bottom: 1rem;">
                    <strong>Address:</strong><br>
                    <?= e(BUSINESS_ADDRESS) ?>
                </p>
                <p style="margin-bottom: 1rem;">
                    <strong>Phone:</strong><br>
                    <a href="tel:<?= e(BUSINESS_PHONE_RAW) ?>" style="color: var(--accent-rojo); font-weight: 700;"><?= e(BUSINESS_PHONE_DISPLAY) ?></a>
                </p>
                <p style="margin-bottom: 1.5rem; color: var(--text-muted-dark);">
                    Wheelchair-accessible entrance • Free street parking &amp; free parking lot available.
                </p>
                <div style="display: flex; flex-wrap: wrap; gap: 0.75rem;">
                    <a href="<?= e(GOOGLE_MAPS_URL) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary">Open in Google Maps</a>
                    <a href="contact.php" class="btn btn-outline">Catering &amp; Inquiries</a>
                </div>
            </div>

            <div class="info-panel" data-reveal data-delay="100">
                <h3>Weekly Hours (Pacific Time)</h3>
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
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
