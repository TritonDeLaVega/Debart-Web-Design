document.addEventListener('DOMContentLoaded', () => {

    // --- Burger menu ---
    const toggle = document.querySelector('.site-header__toggle');
    const nav = document.querySelector('.site-nav');

    if (toggle && nav) {
        toggle.addEventListener('click', () => {
            toggle.classList.toggle('is-open');
            nav.classList.toggle('is-open');
        });

        nav.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                toggle.classList.remove('is-open');
                nav.classList.remove('is-open');
            });
        });
    }

    // --- Scroll reveal ---
    const revealEls = document.querySelectorAll('.section, .service-card, .portfolio-card, .contact__form');

    const observer = new IntersectionObserver(
        entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.15 }
    );

    revealEls.forEach(el => {
        el.classList.add('will-reveal');
        observer.observe(el);
    });

    // --- Background slider ---
    const slides = document.querySelectorAll('.background-slider .slide');
    let current = 0;

    function changeSlide() {
        slides[current].classList.remove('active');
        current = (current + 1) % slides.length;
        slides[current].classList.add('active');
    }

    setInterval(changeSlide, 5000); // toutes les 5 secondes
});
