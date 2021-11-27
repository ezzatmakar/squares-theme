<!-- Footer -->

<footer>
    <div class="container">
        <div class="col-lg-12 text-center mb-3">
            <img src="<?php echo get_field('footer_logo', 'option'); ?>" class="img-fluid" alt="" />
        </div>
        <div class="col-lg-12 text-center">
            <a href="<?php echo get_field('facebook', 'option'); ?>" target="_blank"><img
                    src="<?php echo get_template_directory_uri() ?>/assets/img/facebook.svg" class="social-img"
                    alt="" /></a>
            <a href="<?php echo get_field('twitter', 'option'); ?>" target="_blank"><img
                    src="<?php echo get_template_directory_uri() ?>/assets/img/twitter.svg" class="social-img"
                    alt="" /></a>
            <a href="<?php echo get_field('linkedin', 'option'); ?>" target="_blank"><img
                    src="<?php echo get_template_directory_uri() ?>/assets/img/linkedin.svg" class="social-img"
                    alt="" /></a>
            <a href="<?php echo get_field('instagram', 'option'); ?>" target="_blank"><img
                    src="<?php echo get_template_directory_uri() ?>/assets/img/instagram.svg" class="social-img"
                    alt="" /></a>
        </div>
    </div>
</footer>

<!-- End Footer -->



<!-- JS -->

<?php wp_footer(); ?>

<!-- End JS -->

</body>

</html>