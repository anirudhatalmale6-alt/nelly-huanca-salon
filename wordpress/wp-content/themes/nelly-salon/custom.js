/**
 * Nelly Salon - Custom JavaScript
 */
(function($) {
    'use strict';

    // Back to top button
    var backToTop = document.createElement('button');
    backToTop.id = 'nh-back-to-top';
    backToTop.innerHTML = '&#8593;';
    backToTop.setAttribute('aria-label', 'Back to top');
    document.body.appendChild(backToTop);

    window.addEventListener('scroll', function() {
        if (window.scrollY > 400) {
            backToTop.style.display = 'flex';
        } else {
            backToTop.style.display = 'none';
        }
    });

    backToTop.addEventListener('click', function() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    // Fade-in animation on scroll
    var fadeElements = document.querySelectorAll('.nh-fade-in');
    if (fadeElements.length > 0) {
        var observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15 });

        fadeElements.forEach(function(el) {
            observer.observe(el);
        });
    }

    // Header shrink on scroll
    window.addEventListener('scroll', function() {
        var header = document.querySelector('.site-header');
        if (header) {
            if (window.scrollY > 50) {
                header.style.boxShadow = '0 2px 20px rgba(0,0,0,0.3)';
                header.style.transition = 'box-shadow 0.3s ease';
            } else {
                header.style.boxShadow = 'none';
            }
        }
    });

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
        anchor.addEventListener('click', function(e) {
            var target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });

})(jQuery);
