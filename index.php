<?php
    // index.php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Debart Web Design | DWD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Debart Web Design - Développeur full-stack bilingue, sites modernes et performants, France ↔ Philippines.">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include 'components/header.php'; ?>

    <main>
        <!-- HERO -->
        <section class="hero" id="home">
            <div class="hero__content">
                <p class="hero__eyebrow">Debart Web Design</p>
                <h1 class="hero__title">
                    Développeur full‑stack<br>
                    <span>créatif & fiable</span>
                </h1>
                <p class="hero__subtitle">
                    Sites web modernes, performants et sur‑mesure.  
                    Bilingue français / anglais — basé entre l’Europe et les Philippines.
                </p>
                <div class="hero__actions">
                    <a href="#contact" class="btn btn--primary">Discuter d’un projet</a>
                    <a href="#portfolio" class="btn btn--ghost">Voir les réalisations</a>
                </div>
            </div>
            <div class="hero__visual">
                <div class="hero__logo-card">
                    <img src="assets/img/BonLogoDWD.svg" alt="Logo Debart Web Design" class="hero__logo">
                    <p class="hero__tagline">Code propre. Design soigné. Vision long terme.</p>
                </div>
            </div>
        </section>

        <!-- ABOUT -->
        <section class="section section--about" id="about">
            <div class="section__inner">
                <div class="section__header">
                    <p class="section__eyebrow">À propos</p>
                    <h2 class="section__title">Qui se cache derrière DWD ?</h2>
                </div>
                <div class="about__grid">
                    <div class="about__text">
                        <p>
                            Je m’appelle Jonathan Debart. Je conçois et développe des sites web 
                            qui allient <strong>clarté, performance et identité visuelle forte</strong>.
                        </p>
                        <p>
                            Bilingue français / anglais et basé aux Philippines, je propose une 
                            collaboration fluide avec les entreprises européennes tout en 
                            bénéficiant d’un coût de vie plus bas — ce qui me permet d’offrir 
                            un excellent <strong>rapport qualité / prix</strong>.
                        </p>
                        <p>
                            Mon approche : un code propre, maintenable, et un design qui 
                            reflète vraiment votre marque.
                        </p>
                    </div>
                    <div class="about__highlights">
                        <div class="highlight-card">
                            <h3>Stack technique</h3>
                            <p>HTML5, CSS3 / SASS, JavaScript, PHP, Node.js, MySQL.</p>
                        </div>
                        <div class="highlight-card">
                            <h3>Bilingue</h3>
                            <p>Français & anglais — idéal pour les projets internationaux.</p>
                        </div>
                        <div class="highlight-card">
                            <h3>Remote friendly</h3>
                            <p>Organisation, communication claire, livrables documentés.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SERVICES -->
        <section class="section section--services" id="services">
            <div class="section__inner">
                <div class="section__header">
                    <p class="section__eyebrow">Services</p>
                    <h2 class="section__title">Ce que je peux faire pour vous</h2>
                </div>
                <div class="cards-grid">
                    <article class="service-card">
                        <h3>Sites vitrines modernes</h3>
                        <p>
                            Conception et développement de sites vitrines responsive, 
                            pensés pour être rapides, clairs et convaincants.
                        </p>
                    </article>
                    <article class="service-card">
                        <h3>Intégration & front‑end</h3>
                        <p>
                            Intégration pixel‑perfect à partir de maquettes ou de zéro, 
                            animations légères, expérience utilisateur fluide.
                        </p>
                    </article>
                    <article class="service-card">
                        <h3>Back‑end & logique métier</h3>
                        <p>
                            PHP, MySQL, formulaires avancés, gestion de contenu, 
                            fonctionnalités sur‑mesure.
                        </p>
                    </article>
                    <article class="service-card">
                        <h3>Optimisation & refonte</h3>
                        <p>
                            Amélioration de sites existants : performance, responsive, 
                            structure du code, SEO technique.
                        </p>
                    </article>
                </div>
            </div>
        </section>

        <!-- PORTFOLIO -->
        <section class="section section--portfolio" id="portfolio">
            <div class="section__inner">
                <div class="section__header">
                    <p class="section__eyebrow">Portfolio</p>
                    <h2 class="section__title">Quelques projets</h2>
                </div>
                <div class="cards-grid cards-grid--portfolio">
                    <article class="portfolio-card">
                        <div class="portfolio-card__thumb placeholder-thumb">
                            <span>Projet #1</span>
                        </div>
                        <div class="portfolio-card__body">
                            <h3>Fallout Fans</h3>
                            <p>
                                Site de fans développé from scratch avec XAMPP. 
                                Mise en place d’une architecture propre, gestion des routes, 
                                et intégration front‑end personnalisée.
                            </p>
                        </div>
                    </article>
                    <article class="portfolio-card">
                        <div class="portfolio-card__thumb placeholder-thumb">
                            <span>Projet #2</span>
                        </div>
                        <div class="portfolio-card__body">
                            <h3>Debart Web Design</h3>
                            <p>
                                Ce site lui‑même : vitrine professionnelle, design sérieux 
                                et artistique, code organisé et versionné sur GitHub.
                            </p>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- CONTACT -->
        <section class="section section--contact" id="contact">
            <div class="section__inner">
                <div class="section__header">
                    <p class="section__eyebrow">Contact</p>
                    <h2 class="section__title">Parlons de votre projet</h2>
                </div>
                <div class="contact__grid">
                    <div class="contact__text">
                        <p>
                            Un site à créer, une refonte à envisager, ou simplement une idée 
                            à clarifier ? Envoyez‑moi quelques lignes et je vous réponds 
                            rapidement avec des pistes concrètes.
                        </p>
                        <ul class="contact__list">
                            <li><strong>Email :</strong> à renseigner</li>
                            <li><strong>GitHub :</strong> TritonDeLaVega</li>
                            <li><strong>Basé à :</strong> Dauis, Bohol, Philippines</li>
                        </ul>
                    </div>
                    <form class="contact__form">
                        <div class="form__field">
                            <label for="name">Nom</label>
                            <input type="text" id="name" name="name" placeholder="Votre nom">
                        </div>
                        <div class="form__field">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="vous@exemple.com">
                        </div>
                        <div class="form__field">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" rows="4" placeholder="Parlez‑moi de votre projet..."></textarea>
                        </div>
                        <button type="submit" class="btn btn--primary">Envoyer</button>
                        <p class="form__note">Formulaire en démo pour l’instant (à connecter côté back‑end plus tard).</p>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <?php include 'components/footer.php'; ?>

    <script src="assets/js/main.js"></script>
</body>
</html>
