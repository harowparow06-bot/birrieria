# Birrieria Los Gonzalez - Lunch Truck (PHP Website)

Production-ready, mobile-first PHP 8+ website designed for **Google Ads Policy Compliance** and high-converting restaurant presentation.

## Included Files
- `index.php` — Landing page (Hero, Signature Menu, Highlights, Story, Reviews, Location & Hours)
- `menu.php` — Interactive category-filtered menu with dish quick-view modal
- `about.php` — Story, Maple Ave location, accessibility & parking details
- `contact.php` — CSRF-protected, honeypot-guarded contact & catering form with Privacy Consent
- `privacy-policy.php` & `terms-of-service.php` — Google Ads & CCPA-ready policy pages
- `includes/config.php`, `includes/header.php`, `includes/footer.php` — Modular templates, Schema.org JSON-LD, Google Consent Mode v2
- `assets/css/style.css`, `assets/js/main.js`, `assets/images/*.jpg` — Animated restaurant theme & custom food photography
- `Dockerfile`, `.gitignore`, `.htaccess` — Ready for Git-based cloud/cPanel deployment

## Quick Git Deployment
1. Unzip and push this folder to a GitHub or GitLab repository (`git init && git add . && git commit -m "Initial commit" && git push`).
2. Connect the repository to a PHP host:
   - **Render / Railway / DigitalOcean App Platform:** Select **Docker** (uses the included `Dockerfile`).
   - **cPanel / Hostinger:** Use **Git Version Control** to deploy into `public_html`.
3. Ensure HTTPS is enabled (required for Google Ads).
4. Open `includes/config.php` and add your live `GOOGLE_ADS_ID` (`AW-XXXXXXXXXX`), `GOOGLE_ADS_CONV_LABEL`, and `BUSINESS_EMAIL`.
