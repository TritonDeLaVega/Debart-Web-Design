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


    // --- Réseau d’énergie : ondes liquides + particules ---
    const flow = document.createElement("div");
    flow.className = "energy-flow";
    document.body.appendChild(flow);

    // SVG avec 5 paths
    flow.innerHTML = `
<svg viewBox="0 0 1000 600" preserveAspectRatio="xMidYMid slice">
    <path id="snake1" class="snake s1" d="" />
    <path id="snake2" class="snake s2" d="" />
    <path id="snake3" class="snake s3" d="" />
    <path id="snake4" class="snake s4" d="" />
    <path id="snake5" class="snake s5" d="" />
</svg>
`;

    const svgWidth = 1000;
    const resolution = 200; // plus = plus fluide

    const snakes = [
        { id: "snake1", baseY: 300, amp: 40, speed: 0.8 },
        { id: "snake2", baseY: 290, amp: 30, speed: 1.1 },
        { id: "snake3", baseY: 310, amp: 50, speed: 0.7 },
        { id: "snake4", baseY: 295, amp: 25, speed: 1.4 },
        { id: "snake5", baseY: 305, amp: 55, speed: 0.6 }
    ];

    function generateWave(baseY, amp, t, speed) {
        const points = [];
        for (let i = 0; i <= resolution; i++) {
            const x = (i / resolution) * svgWidth;

            // superposition de 4 vagues continues
            const y =
                baseY +
                Math.sin(x * 0.008 - t * speed * 0.002) * amp +
                Math.sin(x * 0.015 - t * speed * 0.003) * (amp * 0.5) +
                Math.sin(x * 0.003 - t * speed * 0.0015) * (amp * 0.8) +
                Math.sin(x * 0.02 - t * speed * 0.004) * (amp * 0.3);

            points.push({ x, y });
        }
        return points;
    }

    function pointsToPath(points) {
        let d = `M${points[0].x},${points[0].y}`;
        for (let i = 1; i < points.length; i++) {
            const p = points[i];
            d += ` L${p.x},${p.y}`;
        }
        return d;
    }

    let t = 0;

    function animate() {
        t += 16;

        snakes.forEach(snake => {
            const el = document.getElementById(snake.id);
            const pts = generateWave(snake.baseY, snake.amp, t, snake.speed);
            el.setAttribute("d", pointsToPath(pts));
        });

        requestAnimationFrame(animate);
    }

    animate();

    // --- Particules ---
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
