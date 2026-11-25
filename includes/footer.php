    </main>

    <!-- Site Footer -->
    <footer class="site-footer">
        <div class="container footer-grid">
            <div class="footer-col">
                <div class="brand footer-brand">
                    <span class="brand-emblem" aria-hidden="true">🔥</span>
                    <span class="brand-text">
                        <strong>Birrieria Los Gonzalez</strong>
                        <small>Lunch Truck • Los Angeles</small>
                    </span>
                </div>
                <p class="footer-desc">
                    Serving authentic, slow-simmered Tijuana-style beef birria, crispy quesatacos dorados, birria ramen, and rich consommé on Maple Avenue in Los Angeles.
                </p>
                <p class="footer-badges">
                    <span>Wheelchair Accessible</span> • <span>Free Street &amp; Lot Parking</span> • <span>Takeout &amp; Casual Seating</span>
                </p>
            </div>

            <div class="footer-col">
                <h3>Visit &amp; Contact</h3>
                <ul class="footer-list">
                    <li><strong>Address:</strong><br><a href="<?= e(GOOGLE_MAPS_URL) ?>" target="_blank" rel="noopener noreferrer"><?= e(BUSINESS_ADDRESS) ?></a></li>
                    <li><strong>Phone:</strong><br><a href="tel:<?= e(BUSINESS_PHONE_RAW) ?>"><?= e(BUSINESS_PHONE_DISPLAY) ?></a></li>
                    <li><strong>Best Time to Visit:</strong><br>Early afternoon (~1:00 PM) for fastest service &amp; peak freshness</li>
                </ul>
            </div>

            <div class="footer-col">
                <h3>Opening Hours (PT)</h3>
                <ul class="footer-hours">
                    <?php foreach ($business_hours as $day => $info): ?>
                        <li><span><?= e($day) ?></span><span><?= e($info['label']) ?></span></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="footer-col">
                <h3>Navigation &amp; Policies</h3>
                <ul class="footer-list">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="menu.php">Full Birria Menu</a></li>
                    <li><a href="about.php">Our Story &amp; Craft</a></li>
                    <li><a href="contact.php">Contact &amp; Catering Inquiry</a></li>
                    <li><a href="privacy-policy.php">Privacy Policy</a></li>
                    <li><a href="terms-of-service.php">Terms of Service</a></li>
                    <li><button type="button" class="link-btn" id="open-cookie-prefs">Cookie Preferences</button></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container footer-bottom-inner">
                <p>&copy; <?= date('Y') ?> <?= e(SITE_NAME) ?>. All rights reserved.</p>
                <p class="footer-legal-note">Transparent pricing &amp; menu descriptions. All inquiries are handled directly by our Los Angeles team.</p>
            </div>
        </div>
    </footer>

    <!-- Dish Quick-View Modal -->
    <div id="dish-modal" class="modal" role="dialog" aria-modal="true" aria-labelledby="modal-title" hidden>
        <div class="modal-backdrop" data-close-modal></div>
        <div class="modal-card">
            <button type="button" class="modal-close" data-close-modal aria-label="Close dish preview">&times;</button>
            <div class="modal-img-wrap">
                <img id="modal-img" src="" alt="">
            </div>
            <div class="modal-body">
                <span id="modal-badge" class="dish-badge"></span>
                <h3 id="modal-title"></h3>
                <p id="modal-spice" class="modal-meta"></p>
                <p id="modal-desc"></p>
                <div class="modal-actions">
                    <a href="tel:<?= e(BUSINESS_PHONE_RAW) ?>" class="btn btn-primary">Call to Order: <?= e(BUSINESS_PHONE_DISPLAY) ?></a>
                    <a href="<?= e(GOOGLE_MAPS_URL) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline">Get Directions</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Google Ads / Consent Mode v2 Cookie Banner -->
    <aside id="cookie-banner" class="cookie-banner" aria-label="Cookie consent" hidden>
        <div class="cookie-inner">
            <div class="cookie-text">
                <strong>Your Privacy Matters</strong>
                <p>We use essential cookies for site security and optional analytics/advertising cookies to measure performance. See our <a href="privacy-policy.php">Privacy Policy</a>.</p>
            </div>
            <div class="cookie-actions">
                <button type="button" class="btn btn-sm btn-outline-light" id="cookie-decline">Essential Only</button>
                <button type="button" class="btn btn-sm btn-gold" id="cookie-accept">Accept All</button>
            </div>
        </div>
    </aside>

    <script src="assets/js/main.js"></script>
</body>
</html>
