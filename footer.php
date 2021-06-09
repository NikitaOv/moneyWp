<footer class="footer">
        <div class="container">
            <div class="footer__inner">
                <a href="<?php echo get_option('home'); ?>/">
                    <img src="<?php echo bloginfo('template_url');?>/assets/icons/logo.svg" alt="logo" class="logo">
                </a>
                <div class="footer__text">LLC “The Coolest Company”</div>
                <a href="#">
                    <img src="<?php echo bloginfo('template_url');?>/assets/icons/instagram.svg" alt="instagram" class="instagram">
                </a>
            </div>
        </div>
    </footer>

    <?php
        wp_footer();
    ?>
</body>
</html>