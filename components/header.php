<?php
// components/header.php
?>
<div class="background-slider">
    <img src="assets/img/CaptionIndex.png" class="slide active">
    <img src="assets/img/BusyDev.png" class="slide">
    <img src="assets/img/CodeUniverse.png" class="slide">
    <img src="assets/img/RealisticPC.png" class="slide">
</div>

<div class="background-slider"></div>
<div class="energy-flow"></div>

<header class="site-header">
    <div class="site-header__inner">
        <a href="#home" class="site-header__brand">
            <img src="assets/img/BonLogoDWD.svg" alt="<?= t('logo_alt') ?>">
        </a>

        <button class="site-header__toggle" aria-label="<?= t('open_menu') ?>" aria-controls="site-nav" aria-expanded="false">
            <span></span>
            <span></span>
        </button>

        <?php include 'components/nav.php'; ?>

        <nav class="language-switcher" aria-label="Language / Langue">
            <a
                class="language-switcher__link<?= $lang === 'fr' ? ' is-active' : '' ?>"
                href="?lang=fr#home"
                aria-label="<?= t('switch_to_french') ?>"
                <?= $lang === 'fr' ? 'aria-current="page"' : '' ?>
            >
                <svg class="language-switcher__flag" viewBox="0 0 60 30" aria-hidden="true">
                    <rect width="20" height="30" fill="#002395"></rect>
                    <rect x="20" width="20" height="30" fill="#fff"></rect>
                    <rect x="40" width="20" height="30" fill="#ed2939"></rect>
                </svg>
            </a>
            <a
                class="language-switcher__link<?= $lang === 'en' ? ' is-active' : '' ?>"
                href="?lang=en#home"
                aria-label="<?= t('switch_to_english') ?>"
                <?= $lang === 'en' ? 'aria-current="page"' : '' ?>
            >
                <svg class="language-switcher__flag" viewBox="0 0 60 30" aria-hidden="true">
                    <rect width="60" height="30" fill="#012169"></rect>
                    <path d="M0 0 60 30M60 0 0 30" stroke="#fff" stroke-width="6"></path>
                    <path d="M0 0 60 30M60 0 0 30" stroke="#c8102e" stroke-width="2.5"></path>
                    <path d="M30 0v30M0 15h60" stroke="#fff" stroke-width="10"></path>
                    <path d="M30 0v30M0 15h60" stroke="#c8102e" stroke-width="5"></path>
                </svg>
            </a>
        </nav>
    </div>
</header>