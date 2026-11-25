<?php
declare(strict_types=1);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/**
 * Birrieria Los Gonzalez - Lunch Truck
 * Central Configuration & Google Ads Tracking Settings
 */
define('SITE_NAME', 'Birrieria Los Gonzalez - Lunch Truck');
define('SITE_SHORT_NAME', 'Birrieria Los Gonzalez');
define('SITE_TAGLINE', 'Authentic Tijuana-Style Beef Birria in Los Angeles');
define('SITE_URL', 'https://birrieria-los-gonzalez-lunch-truck.localoria.com/');

// Verified Business NAP (Name, Address, Phone) - Required for Google Ads Transparency
define('BUSINESS_ADDRESS', '2524 Maple Ave, Los Angeles, CA 90011, United States');
define('BUSINESS_STREET', '2524 Maple Ave');
define('BUSINESS_CITY_STATE_ZIP', 'Los Angeles, CA 90011');
define('BUSINESS_PHONE_DISPLAY', '+1 (323) 675-7333');
define('BUSINESS_PHONE_RAW', '+13236757333');
define('BUSINESS_EMAIL', 'contact@birrierialosgonzalez.example.com'); // Replace with your active business email
define('GOOGLE_MAPS_URL', 'https://www.google.com/maps/search/?api=1&query=2524+Maple+Ave+Los+Angeles+CA+90011');

// Google Ads & Analytics (Leave empty until you add your live IDs)
define('GA4_MEASUREMENT_ID', '');      // e.g. 'G-XXXXXXXXXX'
define('GOOGLE_ADS_ID', '');           // e.g. 'AW-XXXXXXXXXX'
define('GOOGLE_ADS_CONV_LABEL', '');   // e.g. 'AbCdEfGhIjKlMnOpQrSt'

// Operating Hours (America/Los_Angeles)
$business_hours = [
    'Monday'    => ['open' => '10:00', 'close' => '22:00', 'label' => '10:00 AM – 10:00 PM'],
    'Tuesday'   => ['open' => '10:00', 'close' => '22:00', 'label' => '10:00 AM – 10:00 PM'],
    'Wednesday' => ['open' => '10:00', 'close' => '22:00', 'label' => '10:00 AM – 10:00 PM'],
    'Thursday'  => ['open' => '11:00', 'close' => '22:00', 'label' => '11:00 AM – 10:00 PM'],
    'Friday'    => ['open' => '10:00', 'close' => '22:00', 'label' => '10:00 AM – 10:00 PM'],
    'Saturday'  => ['open' => '08:00', 'close' => '22:00', 'label' => '8:00 AM – 10:00 PM'],
    'Sunday'    => ['open' => '08:00', 'close' => '22:00', 'label' => '8:00 AM – 10:00 PM'],
];

// Full Menu Catalog with Matched Food Photography
$menu_items = [
    [
        'id'          => 'quesatacos-dorados',
        'name'        => 'Quesatacos Dorados (Quesabirria)',
        'category'    => 'tacos',
        'category_label' => 'Tacos & Quesatacos',
        'badge'       => 'Customer Favorite',
        'spice'       => 'Mild / Spicy Salsa on Side',
        'image'       => 'assets/images/quesatacos.jpg',
        'description' => 'Crispy corn tortillas dipped in rich chili oil, griddled golden with melted cheese and slow-simmered beef birria, topped with fresh onion and cilantro. Best paired with warm consommé for dipping.',
        'featured'    => true,
    ],
    [
        'id'          => 'tacos-birria-res',
        'name'        => 'Tacos de Birria de Res',
        'category'    => 'tacos',
        'category_label' => 'Tacos & Quesatacos',
        'badge'       => 'Classic',
        'spice'       => 'Mild / Spicy Red Salsa',
        'image'       => 'assets/images/tacos-birria.jpg',
        'description' => 'Soft, warm corn tortillas generously filled with tender, juicy shredded beef birria, garnished with crisp diced white onion, fresh cilantro, and a squeeze of lime.',
        'featured'    => true,
    ],
    [
        'id'          => 'plato-de-birria',
        'name'        => 'Plato de Birria',
        'category'    => 'plates',
        'category_label' => 'Plates & Bowls',
        'badge'       => 'House Signature',
        'spice'       => 'Rich Guajillo Broth',
        'image'       => 'assets/images/plato-birria.jpg',
        'description' => 'A hearty traditional plate of slow-braised beef birria served in its savory guajillo chili consommé, accompanied by warm corn tortillas, fresh onion, cilantro, limes, and lively red salsa.',
        'featured'    => true,
    ],
    [
        'id'          => 'birria-ramen',
        'name'        => 'Birria Ramen',
        'category'    => 'plates',
        'category_label' => 'Plates & Bowls',
        'badge'       => 'Local Hit',
        'spice'       => 'Savory & Warming',
        'image'       => 'assets/images/birria-ramen.jpg',
        'description' => 'Springy ramen noodles steeped in steaming, spiced beef birria consommé and topped with tender shredded beef, diced white onion, cilantro, radish slices, and lime.',
        'featured'    => true,
    ],
    [
        'id'          => 'torta-ahogada',
        'name'        => 'Torta Ahogada de Birria',
        'category'    => 'specialty',
        'category_label' => 'Tortas, Burritos & Mulitas',
        'badge'       => 'Bold Flavor',
        'spice'       => 'Medium-Hot Red Salsa',
        'image'       => 'assets/images/birria-torta.jpg',
        'description' => 'Crusty Mexican telera roll packed with slow-cooked beef birria, melted cheese, fresh avocado, onion, and cilantro, finished with our signature spicy red birria salsa.',
        'featured'    => true,
    ],
    [
        'id'          => 'mulitas-birria',
        'name'        => 'Mulitas & Quesadillas de Birria',
        'category'    => 'specialty',
        'category_label' => 'Tortas, Burritos & Mulitas',
        'badge'       => 'Cheesy Crunch',
        'spice'       => 'Mild',
        'image'       => 'assets/images/birria-mulita.jpg',
        'description' => 'Two griddled corn tortillas layered with melted Oaxaca-style cheese, tender shredded beef birria, fresh cilantro, and white onions—crispy outside, gooey inside.',
        'featured'    => true,
    ],
    [
        'id'          => 'birria-burrito',
        'name'        => 'Birria Burrito',
        'category'    => 'specialty',
        'category_label' => 'Tortas, Burritos & Mulitas',
        'badge'       => 'Hearty Portion',
        'spice'       => 'Customizable',
        'image'       => 'assets/images/birria-burrito.jpg',
        'description' => 'Large toasted flour tortilla wrapped around tender beef birria, seasoned rice, beans, melted cheese, onion, and cilantro. Great for a filling lunch or dinner on the go.',
        'featured'    => false,
    ],
    [
        'id'          => 'consomme-salsa',
        'name'        => 'Consommé & House Red Salsa',
        'category'    => 'sides',
        'category_label' => 'Consommé & Sides',
        'badge'       => 'Essential Side',
        'spice'       => 'Mild Broth / Hot Salsa',
        'image'       => 'assets/images/consomme-salsa.jpg',
        'description' => 'Rich, slow-simmered beef birria broth topped with fresh onion and cilantro for dipping tacos, paired with our lively, spicy house-made red salsa and fresh lime wedges.',
        'featured'    => false,
    ],
];

// Verified Guest Reviews
$reviews = [
    [
        'author' => 'Jordan Washington',
        'date'   => 'Dec 25, 2025',
        'rating' => 5,
        'quote'  => 'My favorite birria place I\'ve tried this side of the border. The food is excellent and it reminded me of my time living in Tijuana.',
    ],
    [
        'author' => 'Adonai Menjivar',
        'date'   => 'Dec 16, 2025',
        'rating' => 5,
        'quote'  => 'If you\'re a local this is a MUST GO TO place. Really good tacos and staff are friendly and very clear on the service. Went around 1 in the afternoon—definitely VERY good tacos.',
    ],
    [
        'author' => 'April Bolden',
        'date'   => 'Nov 13, 2025',
        'rating' => 5,
        'quote'  => 'Tried birria for the first time and the food was AMAZING AND DELICIOUS! The flavors of the meat and consommé were perfect. Nice shareable size portions and great service.',
    ],
    [
        'author' => 'Aaron Castellanos',
        'date'   => 'Sep 23, 2025',
        'rating' => 5,
        'quote'  => 'There\'s lots of birria spots in LA, but this one was delicious and worth coming back to. Had the quesotacos dorados with a side of consommé, and oh man, bomb.',
    ],
];

// Security & Escaping Helpers
function e(string $value): string {
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function generate_csrf_token(): string {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

function verify_csrf_token(?string $token): bool {
    if (empty($_SESSION['csrf_token']) || empty($token)) {
        return false;
    }
    return hash_equals($_SESSION['csrf_token'], $token);
}

function active_nav(string $page, string $current): string {
    return $page === $current ? 'aria-current="page" class="nav-link active"' : 'class="nav-link"';
}
