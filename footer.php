<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package midan
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'midan_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div>

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">
        <div class="mdn-footer-container">
            <div class="icons">
                <img src="http://qa.fpl.stratus.midandevelopment.com/wp-content/uploads/2020/08/fb-five.png" alt="">
                <img src="http://qa.fpl.stratus.midandevelopment.com/wp-content/uploads/2020/08/twitter-four.png" alt="">
                <img src="http://qa.fpl.stratus.midandevelopment.com/wp-content/uploads/2020/08/linkedin-6.png" alt="">

            </div>
            <div class="mdn-cta-footer">
                Follow us on
            </div>
            <div class="mdn-footer-contact">
                <ul class="mdn-footer-list">
                    <li class="mdn-footer-first-li">
                        <a class="mdn-footer-link" href="https://goo.gl/maps/T3jmyHBy3SQuL7uF9">
                            1301 New Savannah Road, Augusta GA 30901
                        </a>
                    </li>
                    <li>
                        <a class="mdn-footer-link" href="callto:7067222694">706.722.2694</a>
                    </li>
                    <li>
                        <a class="mdn-footer-link" href="mailto:info@fplfod.com">info@fplfood.com</a>
                    </li>
                </ul>

            </div>
            <div class="mdn-footer-portal">
                <a class="mdn-footer-link" href="">SALES PORTAL</a>
            </div>
            <div class="mdn-footer-copyright">
                FPL Food, LLC © 2019
            </div>
        </div>

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

