<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Xry
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'xry' ); ?></a>

	<header id="site-header" class="site-header center clear">

		<div id="site-header-inner" class="container site-header-inner clear">

			<div class="site-branding">
				<?php
				the_custom_logo();
				//if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				//endif;
				$xry_description = get_bloginfo( 'description', 'display' );
				if ( $xry_description || is_customize_preview() ) :
					?>
					<p class="site-description">
						<?php echo $xry_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
					</p>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<div id="site-navigation-wrapper" class="main-navigation-wrapper">
				<div id="mobile-navigation"></div>

				<nav id="site-navigation" class="main-navigation desktop-menu">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'xry' ); ?></button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
				</nav><!-- #site-navigation -->

			</div>

		</div>

	</header><!-- #masthead -->
