<?php
// components/header.php
?>
<div class="background-slider">
    <img src="assets/img/CaptionIndex.png" class="slide active">
    <img src="assets/img/BusyDev.png" class="slide">
    <img src="assets/img/CodeUniverse.png" class="slide">
    <img src="assets/img/RealisticPC.png" class="slide">
</div>

<header class="site-header">
    <div class="site-header__inner">
        <a href="#home" class="site-header__brand">
            <img src="assets/img/BonLogoDWD.svg" alt="Debart Web Design logo">
        </a>

        <button class="site-header__toggle" aria-label="Ouvrir le menu">
            <span></span>
            <span></span>
        </button>

        <?php include 'components/nav.php'; ?>
    </div>
</header>