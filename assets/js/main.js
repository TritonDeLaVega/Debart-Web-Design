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


    // Réseau d’énergie complet
    const flow = document.createElement("div");
    flow.className = "energy-flow";
    document.body.appendChild(flow);

    // 5 serpents
    for (let i = 0; i < 5; i++) {
        const wave = document.createElement("div");
        wave.className = "energy-wave";
        flow.appendChild(wave);
    }

    // Particules
    const particleCount = 60;
    for (let i = 0; i < particleCount; i++) {
        const p = document.createElement("div");
        p.className = "particle";
        p.style.top = 40 + Math.random() * 20 + "vh";
        p.style.left = Math.random() * 100 + "vw";
        p.style.animationDuration = 4 + Math.random() * 6 + "s";
        p.style.animationDelay = Math.random() * 8 + "s";
        flow.appendChild(p);
    }

});
