console.log('main.js chargé');

let initialized = false; // 🔒 empêche double init

function init() {
    if (initialized) return;
    initialized = true;

    // --- EmailJS contact form ---
    const contactForm = document.querySelector('#contact-form');

    if (contactForm) {
        const formStatus = document.querySelector('#contact-form-status');
        const submitButton = contactForm.querySelector('button[type="submit"]');
        let emailJsInitialized = false;

        contactForm.addEventListener('submit', async event => {
            event.preventDefault();

            if (!window.emailjs) {
                formStatus.dataset.state = 'error';
                formStatus.textContent = contactForm.dataset.unavailable;
                console.error('EmailJS failed to load.');
                return;
            }

            submitButton.disabled = true;
            formStatus.dataset.state = 'sending';
            formStatus.textContent = contactForm.dataset.sending;

            try {
                if (!emailJsInitialized) {
                    window.emailjs.init({ publicKey: 'MdUw2ddt_VjtXIZvw' });
                    emailJsInitialized = true;
                }

                await window.emailjs.sendForm('service-debart', 'template_hhqp7ig', contactForm);
                formStatus.dataset.state = 'success';
                formStatus.textContent = contactForm.dataset.success;
                contactForm.reset();
            } catch (error) {
                console.error('EmailJS failed to send the contact form.', error);
                formStatus.dataset.state = 'error';
                formStatus.textContent = contactForm.dataset.error;
            } finally {
                submitButton.disabled = false;
            }
        });
    }

    // --- Burger menu ---
    const toggle = document.querySelector('.site-header__toggle');
    const nav = document.querySelector('.site-nav');

    if (toggle && nav) {
        console.log('toggle =', toggle);
        console.log('nav =', nav);

        toggle.addEventListener('click', () => {
            console.log('burger cliqué');
            toggle.classList.toggle('is-open');
            nav.classList.toggle('is-open');
            toggle.setAttribute('aria-expanded', toggle.classList.contains('is-open'));
        });

        nav.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                toggle.classList.remove('is-open');
                nav.classList.remove('is-open');
                toggle.setAttribute('aria-expanded', 'false');
            });
        });
    } else {
        console.log('❌ toggle ou nav introuvable');
    }

    // --- Scroll reveal ---
    const revealEls = document.querySelectorAll('.section, .service-card, .portfolio-card, .contact__form');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.15 });

    revealEls.forEach(el => {
        el.classList.add('will-reveal');
        observer.observe(el);
    });

    // --- Background slider ---
    const slides = document.querySelectorAll('.background-slider .slide');
    let current = 0;

    if (slides.length > 0) {
        slides[0].classList.add('active');

        setInterval(() => {
            slides[current].classList.remove('active');
            current = (current + 1) % slides.length;
            slides[current].classList.add('active');
        }, 5000);
    }

    // --- Project screenshot galleries ---
    function initializeScreenshotGallery(galleryId, prefix) {
        const gallery = document.querySelector(galleryId);
        if (!gallery) return;

        const selector = name => `[data-${prefix}-gallery-${name}]`;
        const openButtons = document.querySelectorAll(selector('open'));
        const closeButton = gallery.querySelector(selector('close'));
        const pageFilter = gallery.querySelector(`[data-${prefix}-gallery-filter="page"]`);
        const deviceFilter = gallery.querySelector(`[data-${prefix}-gallery-filter="device"]`);
        const thumbnails = Array.from(gallery.querySelectorAll(selector('thumbnail')));
        const image = gallery.querySelector(selector('image'));
        const caption = gallery.querySelector(selector('caption'));
        const count = gallery.querySelector(selector('count'));
        const previousButton = gallery.querySelector(selector('prev'));
        const nextButton = gallery.querySelector(selector('next'));
        let visibleThumbnails = [];
        let currentIndex = 0;

        function showScreenshot(index) {
            if (visibleThumbnails.length === 0) return;

            currentIndex = (index + visibleThumbnails.length) % visibleThumbnails.length;
            const selected = visibleThumbnails[currentIndex];
            image.src = selected.dataset.src;
            image.alt = selected.dataset.caption;
            caption.textContent = selected.dataset.caption;
            count.textContent = `${currentIndex + 1} / ${visibleThumbnails.length}`;
            previousButton.disabled = visibleThumbnails.length < 2;
            nextButton.disabled = visibleThumbnails.length < 2;

            thumbnails.forEach(thumbnail => {
                thumbnail.setAttribute('aria-pressed', String(thumbnail === selected));
            });
        }

        function applyFilters() {
            const previousSelection = visibleThumbnails[currentIndex];
            visibleThumbnails = thumbnails.filter(thumbnail => {
                const matchesPage = pageFilter.value === 'all' || thumbnail.dataset.page === pageFilter.value;
                const matchesDevice = deviceFilter.value === 'all' || thumbnail.dataset.device === deviceFilter.value;
                const isVisible = matchesPage && matchesDevice;
                thumbnail.hidden = !isVisible;
                return isVisible;
            });

            const selectedIndex = visibleThumbnails.indexOf(previousSelection);
            showScreenshot(selectedIndex >= 0 ? selectedIndex : 0);
        }

        openButtons.forEach(button => {
            button.addEventListener('click', () => {
                pageFilter.value = 'all';
                deviceFilter.value = 'all';
                applyFilters();
                gallery.showModal();
            });
        });

        thumbnails.forEach(thumbnail => {
            thumbnail.addEventListener('click', () => {
                showScreenshot(visibleThumbnails.indexOf(thumbnail));
            });
        });

        pageFilter.addEventListener('change', applyFilters);
        deviceFilter.addEventListener('change', applyFilters);
        previousButton.addEventListener('click', () => showScreenshot(currentIndex - 1));
        nextButton.addEventListener('click', () => showScreenshot(currentIndex + 1));
        closeButton.addEventListener('click', () => gallery.close());

        gallery.addEventListener('click', event => {
            if (event.target === gallery) gallery.close();
        });

        gallery.addEventListener('keydown', event => {
            if (event.target instanceof HTMLSelectElement) return;
            if (event.key === 'ArrowLeft') showScreenshot(currentIndex - 1);
            if (event.key === 'ArrowRight') showScreenshot(currentIndex + 1);
        });

        applyFilters();
    }

    initializeScreenshotGallery('#wolf-gallery-dialog', 'wolf');
    initializeScreenshotGallery('#planty-gallery-dialog', 'planty');

    // --- Energy flow ---
    const flow = document.querySelector(".energy-flow");

    if (!flow) {
        console.log('❌ .energy-flow introuvable');
        return;
    }

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
    const resolution = 200;

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
            d += ` L${points[i].x},${points[i].y}`;
        }
        return d;
    }

    let t = 0;

    function animate() {
        t += 16;

        snakes.forEach(snake => {
            const el = document.getElementById(snake.id);
            if (!el) return;
            const pts = generateWave(snake.baseY, snake.amp, t, snake.speed);
            el.setAttribute("d", pointsToPath(pts));
        });

        requestAnimationFrame(animate);
    }

    animate();

    // --- Particles ---
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
}

// 🔒 Appel unique garanti
document.addEventListener('DOMContentLoaded', init);