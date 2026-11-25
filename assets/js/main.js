/**
 * Birrieria Los Gonzalez - Lunch Truck
 * Interactive UI, Scroll Animations, Live LA Hours & Google Consent Mode v2
 */
document.addEventListener('DOMContentLoaded', () => {
    // 1. Sticky Header Elevation
    const header = document.getElementById('site-header');
    if (header) {
        const onScroll = () => {
            header.classList.toggle('scrolled', window.scrollY > 24);
        };
        window.addEventListener('scroll', onScroll, { passive: true });
        onScroll();
    }

    // 2. Mobile Navigation Drawer
    const navToggle = document.getElementById('nav-toggle');
    const primaryNav = document.getElementById('primary-nav');
    if (navToggle && primaryNav) {
        navToggle.addEventListener('click', () => {
            const expanded = navToggle.getAttribute('aria-expanded') === 'true';
            navToggle.setAttribute('aria-expanded', String(!expanded));
            primaryNav.classList.toggle('open');
        });
    }

    // 3. Scroll Reveal Observer
    const revealEls = document.querySelectorAll('[data-reveal]');
    if ('IntersectionObserver' in window && revealEls.length > 0) {
        const observer = new IntersectionObserver((entries, obs) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const delay = entry.target.getAttribute('data-delay') || '0';
                    entry.target.style.transitionDelay = `${delay}ms`;
                    entry.target.classList.add('is-visible');
                    obs.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12 });
        revealEls.forEach((el) => observer.observe(el));
    } else {
        revealEls.forEach((el) => el.classList.add('is-visible'));
    }

    // 4. Live Los Angeles Open/Closed Status
    const statusBadge = document.getElementById('live-status-badge');
    if (statusBadge) {
        try {
            const nowLA = new Date(new Date().toLocaleString('en-US', { timeZone: 'America/Los_Angeles' }));
            const day = nowLA.getDay(); // 0=Sun, 4=Thu
            const mins = nowLA.getHours() * 60 + nowLA.getMinutes();
            let openMins = 10 * 60; // Mon-Wed, Fri: 10 AM
            if (day === 4) openMins = 11 * 60; // Thu: 11 AM
            if (day === 0 || day === 6) openMins = 8 * 60; // Sat-Sun: 8 AM
            const closeMins = 22 * 60; // 10 PM daily

            const isOpen = mins >= openMins && mins < closeMins;
            statusBadge.textContent = isOpen ? 'Open Now in LA (Until 10:00 PM)' : 'Closed Now • Opens Daily in LA';
            statusBadge.classList.add(isOpen ? 'is-open' : 'is-closed');
        } catch (err) {
            statusBadge.textContent = 'Open Daily in Los Angeles';
        }
    }

    // 5. Menu Category Filter
    const filterButtons = document.querySelectorAll('.filter-btn');
    const menuCards = document.querySelectorAll('.menu-card[data-category]');
    if (filterButtons.length > 0 && menuCards.length > 0) {
        filterButtons.forEach((btn) => {
            btn.addEventListener('click', () => {
                const target = btn.getAttribute('data-filter');
                filterButtons.forEach((b) => b.classList.remove('active'));
                btn.classList.add('active');

                menuCards.forEach((card) => {
                    const cat = card.getAttribute('data-category');
                    const show = target === 'all' || cat === target;
                    card.classList.toggle('is-hidden', !show);
                });
            });
        });
    }

    // 6. Dish Quick-View Modal
    const modal = document.getElementById('dish-modal');
    if (modal) {
        const modalImg = document.getElementById('modal-img');
        const modalBadge = document.getElementById('modal-badge');
        const modalTitle = document.getElementById('modal-title');
        const modalSpice = document.getElementById('modal-spice');
        const modalDesc = document.getElementById('modal-desc');

        document.querySelectorAll('[data-dish-trigger]').forEach((trigger) => {
            trigger.addEventListener('click', () => {
                modalImg.src = trigger.getAttribute('data-img') || '';
                modalImg.alt = trigger.getAttribute('data-name') || 'Birria Dish';
                modalBadge.textContent = trigger.getAttribute('data-badge') || '';
                modalTitle.textContent = trigger.getAttribute('data-name') || '';
                modalSpice.textContent = trigger.getAttribute('data-spice') || '';
                modalDesc.textContent = trigger.getAttribute('data-desc') || '';
                modal.hidden = false;
                document.body.style.overflow = 'hidden';
            });
        });

        modal.querySelectorAll('[data-close-modal]').forEach((el) => {
            el.addEventListener('click', () => {
                modal.hidden = true;
                document.body.style.overflow = '';
            });
        });

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && !modal.hidden) {
                modal.hidden = true;
                document.body.style.overflow = '';
            }
        });
    }

    // 7. Google Consent Mode v2 Cookie Banner
    const cookieBanner = document.getElementById('cookie-banner');
    const acceptBtn = document.getElementById('cookie-accept');
    const declineBtn = document.getElementById('cookie-decline');
    const openPrefsBtn = document.getElementById('open-cookie-prefs');

    const applyConsent = (granted) => {
        if (typeof gtag === 'function') {
            gtag('consent', 'update', {
                'ad_storage': granted ? 'granted' : 'denied',
                'ad_user_data': granted ? 'granted' : 'denied',
                'ad_personalization': granted ? 'granted' : 'denied',
                'analytics_storage': granted ? 'granted' : 'denied'
            });
        }
    };

    if (cookieBanner) {
        const saved = localStorage.getItem('blg_cookie_consent');
        if (!saved) {
            cookieBanner.hidden = false;
        } else {
            applyConsent(saved === 'accepted');
        }

        if (acceptBtn) {
            acceptBtn.addEventListener('click', () => {
                localStorage.setItem('blg_cookie_consent', 'accepted');
                applyConsent(true);
                cookieBanner.hidden = true;
            });
        }

        if (declineBtn) {
            declineBtn.addEventListener('click', () => {
                localStorage.setItem('blg_cookie_consent', 'essential');
                applyConsent(false);
                cookieBanner.hidden = true;
            });
        }

        if (openPrefsBtn) {
            openPrefsBtn.addEventListener('click', () => {
                cookieBanner.hidden = false;
            });
        }
    }
});
