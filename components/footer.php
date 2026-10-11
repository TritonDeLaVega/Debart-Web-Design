<?php
    // components/footer.php
?>
<footer class="site-footer">
    <div class="site-footer__inner">
        <p class="site-footer__brand">Debart Web Design</p>
        <p class="site-footer__meta">
            &copy; <?php echo date('Y'); ?> — <?= t('footer_meta') ?>
        </p>
        <p class="site-footer__note">
            <?= t('footer_note') ?>
        </p>
    </div>
</footer>

<!-- Chargement du JavaScript -->
<script src="assets/js/main.js"></script>
</body>
</html>
