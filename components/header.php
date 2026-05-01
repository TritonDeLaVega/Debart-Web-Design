<?php
    // components/header.php
?>
<header class="site-header">
    <div class="site-header__inner">
        <a href="#home" class="site-header__brand">
            <img src="assets/img/dwd-logo.png" alt="Debart Web Design logo">
            <span>DWD</span>
        </a>

        <button class="site-header__toggle" aria-label="Ouvrir le menu">
            <span></span>
            <span></span>
        </button>

        <?php include 'components/nav.php'; ?>
    </div>
</header>
