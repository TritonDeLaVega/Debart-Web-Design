<?php
require_once 'components/translations.php';
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">

<head>
    <meta charset="UTF-8">
    <title><?= t('page_title') ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= t('page_description') ?>">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="background-slider"></div>
    <div class="energy-flow"></div>
    <?php include 'components/header.php'; ?>

    <main>
        <!-- HERO -->
        <section class="hero" id="home">
            <div class="hero__content">
                <p class="hero__eyebrow">Debart Web Design</p>
                <h1 class="hero__title">
                    <?= t('hero_title') ?><br>
                    <span><?= t('hero_title_highlight') ?></span>
                </h1>
                <p class="hero__subtitle">
                    <?= t('hero_description') ?>
                </p>
                <div class="hero__actions">
                    <a href="#contact" class="btn btn--primary"><?= t('discuss_project') ?></a>
                    <a href="#portfolio" class="btn btn--ghost"><?= t('view_projects') ?></a>
                </div>
            </div>
            <div class="hero__visual">
                <div class="hero__logo-card">
                    <img src="assets/img/BonLogoDWD.svg" alt="<?= t('logo_alt') ?>" class="hero__logo">
                    <p class="hero__tagline"><?= t('hero_tagline') ?></p>
                </div>
            </div>
        </section>

        <!-- ABOUT -->
        <section class="section section--about" id="about">
            <div class="section__inner">
                <div class="section__header">
                    <p class="section__eyebrow"><?= t('about') ?></p>
                    <h2 class="section__title"><?= t('about_heading') ?></h2>
                    <img
                        src="assets/img/MoPhotoSuisse.jpg"
                        alt="Jonathan Debart"
                        class="about__photo"
                    >
                </div>
                <div class="about__grid">
                    <div class="about__text">
                        <p>
                            <?= t('about_intro') ?>
                            <strong><?= t('about_intro_highlight') ?></strong>.
                        </p>
                        <p>
                            <?= t('about_location') ?>
                            <strong><?= t('about_location_highlight') ?></strong>.
                        </p>
                        <p>
                            <?= t('about_approach') ?>
                        </p>
                    </div>
                    <div class="about__highlights">
                        <div class="highlight-card">
                            <h3><?= t('tech_stack') ?></h3>
                            <p>HTML5, CSS3 / SASS, JavaScript, PHP, Node.js, MySQL.</p>
                        </div>
                        <div class="highlight-card">
                            <h3><?= t('languages') ?></h3>
                            <p><?= t('languages_description') ?></p>
                        </div>
                        <div class="highlight-card">
                            <h3><?= t('remote_friendly') ?></h3>
                            <p><?= t('remote_description') ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SERVICES -->
        <section class="section section--services" id="services">
            <div class="section__inner">
                <div class="section__header">
                    <p class="section__eyebrow"><?= t('services') ?></p>
                    <h2 class="section__title"><?= t('services_heading') ?></h2>
                </div>
                <div class="cards-grid">
                    <article class="service-card">
                        <h3><?= t('service_showcase') ?></h3>
                        <p><?= t('service_showcase_description') ?></p>
                    </article>
                    <article class="service-card">
                        <h3><?= t('service_frontend') ?></h3>
                        <p><?= t('service_frontend_description') ?></p>
                    </article>
                    <article class="service-card">
                        <h3><?= t('service_backend') ?></h3>
                        <p><?= t('service_backend_description') ?></p>
                    </article>
                    <article class="service-card">
                        <h3><?= t('service_optimization') ?></h3>
                        <p><?= t('service_optimization_description') ?></p>
                    </article>
                </div>
            </div>
        </section>

        <!-- PORTFOLIO -->
        <section class="section section--portfolio" id="portfolio">
            <div class="section__inner">
                <div class="section__header">
                    <p class="section__eyebrow"><?= t('portfolio') ?></p>
                    <h2 class="section__title"><?= t('portfolio_heading') ?></h2>
                </div>
                <div class="cards-grid cards-grid--portfolio">
                    <article class="portfolio-card">
                        <div class="portfolio-card__thumb placeholder-thumb">
                            <span><?= t('project') ?> #1</span>
                        </div>
                        <div class="portfolio-card__body">
                            <h3>Fallout Fans</h3>
                            <p><?= t('fallout_description') ?></p>
                            <a href="https://github.com/TritonDeLaVega/FalloutFansite" target="_blank" class="btn-github">
                                <?= t('view_code') ?>
                            </a>

                        </div>
                    </article>
                    <article class="portfolio-card">
                        <div class="portfolio-card__thumb placeholder-thumb">
                            <span><?= t('project') ?> #2</span>
                        </div>
                        <div class="portfolio-card__body">
                            <h3>Debart Web Design</h3>
                            <p><?= t('dwd_description') ?></p>
                            <a href="https://github.com/TritonDeLaVega/Debart-Web-Design.git" target="_blank" class="btn-github">
                                <?= t('view_code') ?>
                            </a>
                        </div>
                    </article>
                    <article class="portfolio-card">
                        <div class="portfolio-card__thumb placeholder-thumb">
                            <span><?= t('project') ?> #3</span>
                        </div>
                        <div class="portfolio-card__body">
                            <h3>Wolf Soft Eure</h3>
                            <p><?= t('wolfsoft_description') ?></p>
                            <a href="https://github.com/TritonDeLaVega/WolfSoftEure.git" target="_blank" class="btn-github">
                                <?= t('view_code') ?>
                            </a>
                        </div>
                    </article>
                    <article class="portfolio-card">
                        <div class="portfolio-card__thumb placeholder-thumb">
                            <span><?= t('project') ?> #4</span>
                        </div>
                        <div class="portfolio-card__body">
                            <h3>Planty</h3>
                            <p><?= t('planty_description') ?></p>
                            <a href="https://github.com/TritonDeLaVega/planty.git" target="_blank" class="btn-github">
                                <?= t('view_code') ?>
                            </a>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- CONTACT -->
        <section class="section section--contact" id="contact">
            <div class="section__inner">
                <div class="section__header">
                    <p class="section__eyebrow"><?= t('contact') ?></p>
                    <h2 class="section__title"><?= t('contact_heading') ?></h2>
                </div>
                <div class="contact__grid">
                    <div class="contact__text">
                        <p>
                            <?= t('contact_description') ?>
                        </p>
                        <ul class="contact__list">
                            <li><strong><?= t('email') ?> :</strong> debartwebdesign@gmail.com</li>
                            <li><strong>GitHub :</strong> TritonDeLaVega</li>
                            <li><strong><?= t('based_in') ?> :</strong> Dauis, Bohol, Philippines</li>
                        </ul>
                    </div>
                    <form
                        class="contact__form"
                        id="contact-form"
                        data-sending="<?= t('form_sending') ?>"
                        data-success="<?= t('form_success') ?>"
                        data-error="<?= t('form_error') ?>"
                        data-unavailable="<?= t('form_service_unavailable') ?>"
                    >
                        <div class="form__field">
                            <label for="name"><?= t('name') ?></label>
                            <input type="text" id="name" name="name" placeholder="<?= t('your_name') ?>" autocomplete="name" minlength="2" maxlength="100" required>
                        </div>
                        <div class="form__field">
                            <label for="email"><?= t('email') ?></label>
                            <input type="email" id="email" name="email" placeholder="<?= t('your_email') ?>" autocomplete="email" maxlength="254" required>
                        </div>
                        <div class="form__field">
                            <label for="message"><?= t('message') ?></label>
                            <textarea id="message" name="message" rows="4" placeholder="<?= t('message_placeholder') ?>" minlength="10" maxlength="5000" required></textarea>
                        </div>
                        <button type="submit" class="btn btn--primary"><?= t('send') ?></button>
                        <p class="form__note"><?= t('form_note') ?></p>
                        <p class="form__status" id="contact-form-status" role="status" aria-live="polite"></p>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <?php include 'components/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>