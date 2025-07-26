<?php
/**
 * Footer template for the Silverline Coaches theme.
 *
 * @package lc-silverline2025
 */

defined( 'ABSPATH' ) || exit;
?>
<footer class="footer pt-5">
    <div class="container">
        <div class="row gx-4 g-lg-2 g-xxl-5">
            <div class="col-sm-6 col-xl-3">
                <div class="footer-title">Get in touch</div>
                <div class="mb-2"><?= do_shortcode( '[contact_phone icon=true]' ); ?></div>
                <div class="mb-4"><?= do_shortcode( '[contact_email icon=true]' ); ?></div>
                <!-- <div><span class="footer-title">Connect:</span> <?= do_shortcode( '[social_icons class="ms-2 d-inline fs-500"]' ); ?> -->
            </div>
            <div class="col-sm-6 col-xl-6">
                <div class="footer-title">Learn more</div>
                <?=
				wp_nav_menu(
                    array(
                        'theme_location'  => 'footer_menu1',
                    	'container_class' => 'footer__menu',
                    )
                );
                ?>
            </div>
            <div class="col-xl-3 text-center text-lg-start mb-3 pe-3">
                <p class="footer-title">We hope to hear from you soon</p>
                <img src="<?= esc_url( get_stylesheet_directory_uri() ); ?>/img/silverline-coaches-logo-500-px-gw-final-01.png" alt="Silverline Coaches" class="footer__logo">
            </div>
        </div>

        <div class="row gx-2 colophon py-3">
            <div class="col-lg-7 text-center text-lg-start">
                &copy; <?= esc_html( gmdate( 'Y' ) ); ?> Silverline Coaches. Registered in England no. 07834992.
            </div>
            <div class="col-lg-5 text-end d-flex gap-2 justify-content-center justify-content-lg-end flex-wrap">
                <a href="/privacy-policy/">Privacy &amp; Cookies</a> |
                <span>Site by <a href="https://www.lamcat.co.uk/" rel="noopener" target="_blank" class="lc" title="Lamcat Design & Consulting">Lamcat</a></span>
            </div>
        </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>