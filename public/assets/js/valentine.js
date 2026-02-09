/**
 * Takalo-Takalo — Animations & Interactions
 * Thème Saint-Valentin
 * (non-bloquant : chargé en defer)
 */

(function () {
    'use strict';

    /* =============================================
       1. Navbar scroll effect
       ============================================= */
    const navbar = document.querySelector('.takalo-nav');
    if (navbar) {
        let ticking = false;
        window.addEventListener('scroll', function () {
            if (!ticking) {
                window.requestAnimationFrame(function () {
                    if (window.scrollY > 50) {
                        navbar.classList.add('scrolled');
                    } else {
                        navbar.classList.remove('scrolled');
                    }
                    ticking = false;
                });
                ticking = true;
            }
        }, { passive: true });
    }

    /* =============================================
       2. Scroll-triggered animations (IntersectionObserver)
       ============================================= */
    const animatedElements = document.querySelectorAll('.animate-on-scroll');
    if (animatedElements.length > 0 && 'IntersectionObserver' in window) {
        const observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });

        animatedElements.forEach(function (el) {
            observer.observe(el);
        });
    } else {
        // Fallback: show everything
        animatedElements.forEach(function (el) {
            el.classList.add('visible');
        });
    }

    /* =============================================
       3. Floating hearts particles (lightweight)
       ============================================= */
    function createHeart() {
        var heart = document.createElement('span');
        heart.classList.add('heart-particle');
        heart.innerHTML = ['♥', '♡', '❤', '💕'][Math.floor(Math.random() * 4)];
        heart.style.left = Math.random() * 100 + 'vw';
        heart.style.fontSize = (Math.random() * 18 + 10) + 'px';
        heart.style.animationDuration = (Math.random() * 6 + 6) + 's';
        heart.style.bottom = '-30px';
        document.body.appendChild(heart);

        // Remove after animation
        heart.addEventListener('animationend', function () {
            heart.remove();
        });
    }

    // Spawn hearts at intervals (light on perf)
    var heartInterval = setInterval(createHeart, 2500);

    // Pause hearts when tab is not visible
    document.addEventListener('visibilitychange', function () {
        if (document.hidden) {
            clearInterval(heartInterval);
        } else {
            heartInterval = setInterval(createHeart, 2500);
        }
    });

    // Create a few initial hearts
    for (var i = 0; i < 3; i++) {
        setTimeout(createHeart, i * 800);
    }

    /* =============================================
       4. Counter animation for stats
       ============================================= */
    function animateCounters() {
        var counters = document.querySelectorAll('.stat-number[data-count]');
        counters.forEach(function (counter) {
            var target = parseInt(counter.getAttribute('data-count'), 10);
            var current = 0;
            var increment = Math.ceil(target / 60);
            var suffix = counter.getAttribute('data-suffix') || '';

            function updateCount() {
                current += increment;
                if (current >= target) {
                    counter.textContent = target.toLocaleString('fr-FR') + suffix;
                    return;
                }
                counter.textContent = current.toLocaleString('fr-FR') + suffix;
                requestAnimationFrame(updateCount);
            }
            updateCount();
        });
    }

    // Trigger counter animation when stats section is visible
    var statsSection = document.querySelector('.stats-row');
    if (statsSection && 'IntersectionObserver' in window) {
        var statsObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    animateCounters();
                    statsObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.3 });
        statsObserver.observe(statsSection);
    }

    /* =============================================
       5. Smooth scroll for anchor links
       ============================================= */
    document.querySelectorAll('a[href^="#"]').forEach(function (link) {
        link.addEventListener('click', function (e) {
            var targetId = this.getAttribute('href');
            if (targetId === '#') return;
            var targetEl = document.querySelector(targetId);
            if (targetEl) {
                e.preventDefault();
                targetEl.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });

})();
