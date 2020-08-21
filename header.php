<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package midan
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'midan_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://use.typekit.net/tek1lrh.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'midan' ); ?></a>

		<nav class="navbar navbar-expand-md navbar-dark bg-primary">
			
			<div class="row special-container wideblock ghost">
						<ul class="special-nav">
							<a class="header-buttons" href="#"><li class="header-texts"><span>JOIN</span> OUR TEAM </li></a>
							<a class="header-buttons" href="/our-farm/cattle-producers/"><li class="header-texts"><span>SELL US</span> CATTLE </li></a>
							<a class="header-buttons" href="/contact-us/"><li class="header-textsnone"><span>CONTACT</span> SALES TEAM </li></a>
						</ul>
					</div>

		<?php if ( 'container' == $container ) : ?>
			<div class="container">
		<?php endif; ?>
					
					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

						<?php endif; ?>


					<?php } else {
						the_custom_logo();
					} ?><!-- end custom logo -->

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'midan' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new midan_WP_Bootstrap_Navwalker(),
					)
				); ?>
				
			<?php if ( 'container' == $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>
			<div class="special-container showhere">
				<ul class="special-nav">
				<a class="header-buttons" href="https://workforcenow.adp.com/jobs/apply/posting.html?client=fplfood&ccId=19000101_000001&type=MP&lang=en_US" target="blank"><li class="header-texts"><span>JOIN</span> OUR TEAM </li></a>
				<a class="header-buttons" href="/our-farm/cattle-producers/"><li class="header-texts"><span>SELL US</span> CATTLE </li></a>
				<a class="header-buttons" href="/contact-us/"><li class="header-textsnone"><span>CONTACT</span> SALES TEAM </li></a>
				</ul>
			</div>

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
