<?php
require_once __DIR__ . '/includes/config.php';
$current_page = 'menu';
$page_title = 'Full Birria Menu | ' . SITE_NAME;
$page_description = 'Browse our full menu of Tacos de Birria de Res, Quesatacos Dorados, Plato de Birria, Birria Ramen, Torta Ahogada, Mulitas, Burritos, and Consommé.';
require_once __DIR__ . '/includes/header.php';
?>

<section class="page-banner">
    <div class="container" data-reveal>
        <span class="eyebrow">Fresh From the Truck</span>
        <h1>Our Birria Menu</h1>
        <p>Every item is prepared fresh to order with slow-simmered beef birria, warm tortillas, and house-made red salsa. Filter by category or tap any dish for details.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="filter-bar" role="group" aria-label="Menu category filter" data-reveal>
            <button type="button" class="filter-btn active" data-filter="all">All Dishes</button>
            <button type="button" class="filter-btn" data-filter="tacos">Tacos &amp; Quesatacos</button>
            <button type="button" class="filter-btn" data-filter="plates">Plates &amp; Ramen</button>
            <button type="button" class="filter-btn" data-filter="specialty">Tortas, Burritos &amp; Mulitas</button>
            <button type="button" class="filter-btn" data-filter="sides">Consommé &amp; Sides</button>
        </div>

        <div class="menu-grid">
            <?php
            $delay = 0;
            foreach ($menu_items as $item):
            ?>
            <article class="menu-card" data-category="<?= e($item['category']) ?>" data-reveal data-delay="<?= $delay ?>">
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
                            Details →
                        </button>
                    </div>
                </div>
            </article>
            <?php
                $delay = ($delay + 70) % 280;
            endforeach;
            ?>
        </div>

        <div class="info-panel" style="margin-top: 3rem; text-align: center;" data-reveal>
            <h3>Ordering &amp; Pricing Note</h3>
            <p style="color: var(--text-muted-dark); max-width: 640px; margin: 0.5rem auto 1.25rem;">
                We keep our lunch truck menu focused and budget-friendly ($). Daily window pricing and combo specials are posted right at the truck—call us for large group or catering quotes.
            </p>
            <a href="tel:<?= e(BUSINESS_PHONE_RAW) ?>" class="btn btn-primary">Call <?= e(BUSINESS_PHONE_DISPLAY) ?></a>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
