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
                    <p class="services__intro"><?= t('services_intro') ?></p>
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
                <p class="services__quote-note"><?= t('service_quote_note') ?></p>
            </div>
        </section>

        <!-- PORTFOLIO -->
        <section class="section section--portfolio" id="portfolio">
            <div class="section__inner">
                <div class="section__header">
                    <p class="section__eyebrow"><?= t('portfolio') ?></p>
                    <h2 class="section__title"><?= t('portfolio_heading') ?></h2>
                </div>
                <?php
                $wolfSoftScreenshots = [
                    ['file' => 'accueil-desktop.webp', 'page' => 'home', 'device' => 'desktop', 'caption' => 'wolf_shot_home_desktop'],
                    ['file' => 'accueil-tablette.webp', 'page' => 'home', 'device' => 'tablet', 'caption' => 'wolf_shot_home_tablet'],
                    ['file' => 'accueil-mobile.webp', 'page' => 'home', 'device' => 'mobile', 'caption' => 'wolf_shot_home_mobile'],
                    ['file' => 'accueil.webp', 'page' => 'home', 'device' => 'desktop', 'caption' => 'wolf_shot_home_alternate'],
                    ['file' => 'menu-navigation.webp', 'page' => 'home', 'device' => 'desktop', 'caption' => 'wolf_shot_navigation'],
                    ['file' => 'espace-membre.webp', 'page' => 'member', 'device' => 'desktop', 'caption' => 'wolf_shot_member_dashboard'],
                    ['file' => 'connexion.webp', 'page' => 'member', 'device' => 'desktop', 'caption' => 'wolf_shot_login'],
                    ['file' => 'inscription-membre.webp', 'page' => 'member', 'device' => 'desktop', 'caption' => 'wolf_shot_registration'],
                    ['file' => 'inscription-membre-details.webp', 'page' => 'member', 'device' => 'desktop', 'caption' => 'wolf_shot_registration_details'],
                    ['file' => 'inscription-membre-formulaire.webp', 'page' => 'member', 'device' => 'desktop', 'caption' => 'wolf_shot_registration_form'],
                    ['file' => 'confidentialite.webp', 'page' => 'legal', 'device' => 'desktop', 'caption' => 'wolf_shot_privacy'],
                    ['file' => 'boutique.webp', 'page' => 'store', 'device' => 'desktop', 'caption' => 'wolf_shot_store'],
                    ['file' => 'fiche-consommable.webp', 'page' => 'store', 'device' => 'desktop', 'caption' => 'wolf_shot_product_consumable'],
                    ['file' => 'fiche-replique.webp', 'page' => 'store', 'device' => 'desktop', 'caption' => 'wolf_shot_product_replica'],
                    ['file' => 'panier.webp', 'page' => 'store', 'device' => 'desktop', 'caption' => 'wolf_shot_cart'],
                    ['file' => 'commande-resume.webp', 'page' => 'store', 'device' => 'desktop', 'caption' => 'wolf_shot_order_summary'],
                    ['file' => 'commande-facturation.webp', 'page' => 'store', 'device' => 'desktop', 'caption' => 'wolf_shot_order_billing'],
                    ['file' => 'forum.webp', 'page' => 'community', 'device' => 'desktop', 'caption' => 'wolf_shot_forum'],
                    ['file' => 'galerie-photos.webp', 'page' => 'field', 'device' => 'desktop', 'caption' => 'wolf_shot_photos'],
                    ['file' => 'terrain-et-carte.webp', 'page' => 'field', 'device' => 'desktop', 'caption' => 'wolf_shot_field'],
                ];
                $plantyScreenshots = [
                    ['file' => 'accueil-desktop.webp', 'page' => 'home', 'device' => 'desktop', 'caption' => 'planty_shot_home_desktop'],
                    ['file' => 'saveurs-temoignages-desktop.webp', 'page' => 'flavors', 'device' => 'desktop', 'caption' => 'planty_shot_flavors_desktop'],
                    ['file' => 'accueil-mobile.webp', 'page' => 'home', 'device' => 'mobile', 'caption' => 'planty_shot_home_mobile'],
                    ['file' => 'saveurs-mobile.webp', 'page' => 'flavors', 'device' => 'mobile', 'caption' => 'planty_shot_flavors_mobile'],
                    ['file' => 'accueil-smartphone.webp', 'page' => 'home', 'device' => 'mobile', 'caption' => 'planty_shot_home_smartphone'],
                    ['file' => 'saveurs-smartphone.webp', 'page' => 'flavors', 'device' => 'mobile', 'caption' => 'planty_shot_flavors_smartphone'],
                    ['file' => 'temoignages-smartphone.webp', 'page' => 'testimonials', 'device' => 'mobile', 'caption' => 'planty_shot_testimonials_smartphone'],
                ];
                ?>
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
                            <div class="portfolio-card__actions">
                                <button
                                    type="button"
                                    class="btn btn--primary wolf-gallery__button"
                                    data-wolf-gallery-open
                                    aria-haspopup="dialog"
                                    aria-controls="wolf-gallery-dialog"
                                >
                                    <?= t('wolfsoft_open_gallery') ?>
                                </button>
                                <a href="https://github.com/TritonDeLaVega/WolfSoftEure.git" target="_blank" class="btn-github">
                                    <?= t('view_code') ?>
                                </a>
                            </div>
                        </div>
                    </article>
                    <article class="portfolio-card">
                        <div class="portfolio-card__thumb placeholder-thumb">
                            <span><?= t('project') ?> #4</span>
                        </div>
                        <div class="portfolio-card__body">
                            <h3>Planty</h3>
                            <p><?= t('planty_description') ?></p>
                            <div class="portfolio-card__actions">
                                <button
                                    type="button"
                                    class="btn btn--primary wolf-gallery__button"
                                    data-planty-gallery-open
                                    aria-haspopup="dialog"
                                    aria-controls="planty-gallery-dialog"
                                >
                                    <?= t('planty_open_gallery') ?>
                                </button>
                                <a href="https://github.com/TritonDeLaVega/planty.git" target="_blank" class="btn-github">
                                    <?= t('view_code') ?>
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
                <dialog class="wolf-gallery" id="wolf-gallery-dialog" aria-labelledby="wolf-gallery-title">
                    <div class="wolf-gallery__header">
                        <div>
                            <p class="section__eyebrow">Wolf Soft Eure</p>
                            <h2 id="wolf-gallery-title"><?= t('wolfsoft_gallery_title') ?></h2>
                        </div>
                        <button type="button" class="wolf-gallery__close" data-wolf-gallery-close aria-label="<?= t('wolfsoft_close_gallery') ?>">&times;</button>
                    </div>
                    <div class="wolf-gallery__filters">
                        <label>
                            <?= t('wolfsoft_filter_page') ?>
                            <select data-wolf-gallery-filter="page">
                                <option value="all"><?= t('wolfsoft_all_pages') ?></option>
                                <option value="home"><?= t('wolfsoft_page_home') ?></option>
                                <option value="member"><?= t('wolfsoft_page_member') ?></option>
                                <option value="legal"><?= t('wolfsoft_page_legal') ?></option>
                                <option value="store"><?= t('wolfsoft_page_store') ?></option>
                                <option value="community"><?= t('wolfsoft_page_community') ?></option>
                                <option value="field"><?= t('wolfsoft_page_field') ?></option>
                            </select>
                        </label>
                        <label>
                            <?= t('wolfsoft_filter_device') ?>
                            <select data-wolf-gallery-filter="device">
                                <option value="all"><?= t('wolfsoft_all_devices') ?></option>
                                <option value="desktop"><?= t('wolfsoft_device_desktop') ?></option>
                                <option value="tablet"><?= t('wolfsoft_device_tablet') ?></option>
                                <option value="mobile"><?= t('wolfsoft_device_mobile') ?></option>
                            </select>
                        </label>
                    </div>
                    <div class="wolf-gallery__stage">
                        <button type="button" class="wolf-gallery__nav" data-wolf-gallery-prev aria-label="<?= t('wolfsoft_previous') ?>">&lsaquo;</button>
                        <img src="assets/img/wolf-soft-eure/accueil-desktop.webp" alt="<?= t('wolf_shot_home_desktop') ?>" data-wolf-gallery-image>
                        <button type="button" class="wolf-gallery__nav" data-wolf-gallery-next aria-label="<?= t('wolfsoft_next') ?>">&rsaquo;</button>
                    </div>
                    <p class="wolf-gallery__caption" data-wolf-gallery-caption aria-live="polite"><?= t('wolf_shot_home_desktop') ?></p>
                    <p class="wolf-gallery__count" data-wolf-gallery-count role="status" aria-live="polite"></p>
                    <div class="wolf-gallery__thumbnails" aria-label="<?= t('wolfsoft_gallery_thumbnails') ?>">
                        <?php foreach ($wolfSoftScreenshots as $index => $screenshot): ?>
                            <button
                                type="button"
                                class="wolf-gallery__thumbnail"
                                data-wolf-gallery-thumbnail
                                data-index="<?= $index ?>"
                                data-src="assets/img/wolf-soft-eure/<?= htmlspecialchars($screenshot['file'], ENT_QUOTES, 'UTF-8') ?>"
                                data-page="<?= htmlspecialchars($screenshot['page'], ENT_QUOTES, 'UTF-8') ?>"
                                data-device="<?= htmlspecialchars($screenshot['device'], ENT_QUOTES, 'UTF-8') ?>"
                                data-caption="<?= t($screenshot['caption']) ?>"
                                aria-pressed="false"
                            >
                                <img src="assets/img/wolf-soft-eure/<?= htmlspecialchars($screenshot['file'], ENT_QUOTES, 'UTF-8') ?>" alt="" loading="lazy">
                                <span><?= t($screenshot['caption']) ?></span>
                            </button>
                        <?php endforeach; ?>
                    </div>
                </dialog>
                <dialog class="wolf-gallery" id="planty-gallery-dialog" aria-labelledby="planty-gallery-title">
                    <div class="wolf-gallery__header">
                        <div>
                            <p class="section__eyebrow">Planty</p>
                            <h2 id="planty-gallery-title"><?= t('planty_gallery_title') ?></h2>
                        </div>
                        <button type="button" class="wolf-gallery__close" data-planty-gallery-close aria-label="<?= t('planty_close_gallery') ?>">&times;</button>
                    </div>
                    <div class="wolf-gallery__filters">
                        <label>
                            <?= t('planty_filter_page') ?>
                            <select data-planty-gallery-filter="page">
                                <option value="all"><?= t('planty_all_pages') ?></option>
                                <option value="home"><?= t('planty_page_home') ?></option>
                                <option value="flavors"><?= t('planty_page_flavors') ?></option>
                                <option value="testimonials"><?= t('planty_page_testimonials') ?></option>
                            </select>
                        </label>
                        <label>
                            <?= t('planty_filter_device') ?>
                            <select data-planty-gallery-filter="device">
                                <option value="all"><?= t('planty_all_devices') ?></option>
                                <option value="desktop"><?= t('planty_device_desktop') ?></option>
                                <option value="mobile"><?= t('planty_device_mobile') ?></option>
                            </select>
                        </label>
                    </div>
                    <div class="wolf-gallery__stage">
                        <button type="button" class="wolf-gallery__nav" data-planty-gallery-prev aria-label="<?= t('planty_previous') ?>">&lsaquo;</button>
                        <img src="assets/img/planty/accueil-desktop.webp" alt="<?= t('planty_shot_home_desktop') ?>" data-planty-gallery-image>
                        <button type="button" class="wolf-gallery__nav" data-planty-gallery-next aria-label="<?= t('planty_next') ?>">&rsaquo;</button>
                    </div>
                    <p class="wolf-gallery__caption" data-planty-gallery-caption aria-live="polite"><?= t('planty_shot_home_desktop') ?></p>
                    <p class="wolf-gallery__count" data-planty-gallery-count role="status" aria-live="polite"></p>
                    <div class="wolf-gallery__thumbnails" aria-label="<?= t('planty_gallery_thumbnails') ?>">
                        <?php foreach ($plantyScreenshots as $index => $screenshot): ?>
                            <button
                                type="button"
                                class="wolf-gallery__thumbnail"
                                data-planty-gallery-thumbnail
                                data-index="<?= $index ?>"
                                data-src="assets/img/planty/<?= htmlspecialchars($screenshot['file'], ENT_QUOTES, 'UTF-8') ?>"
                                data-page="<?= htmlspecialchars($screenshot['page'], ENT_QUOTES, 'UTF-8') ?>"
                                data-device="<?= htmlspecialchars($screenshot['device'], ENT_QUOTES, 'UTF-8') ?>"
                                data-caption="<?= t($screenshot['caption']) ?>"
                                aria-pressed="false"
                            >
                                <img src="assets/img/planty/<?= htmlspecialchars($screenshot['file'], ENT_QUOTES, 'UTF-8') ?>" alt="" loading="lazy">
                                <span><?= t($screenshot['caption']) ?></span>
                            </button>
                        <?php endforeach; ?>
                    </div>
                </dialog>
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
                            <li><strong><?= t('email') ?> :</strong> <a href="mailto:info.debartwebdesign@gmail.com">info.debartwebdesign@gmail.com</a></li>
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