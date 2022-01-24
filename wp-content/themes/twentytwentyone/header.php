<?php

/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()) . '/node_modules/hc-offcanvas-nav/dist/hc-offcanvas-nav.css'; ?>">
	<script src="<?php echo esc_url(get_template_directory_uri()) . '/node_modules/hc-offcanvas-nav/src/js/hc-offcanvas-nav.js'; ?>"></script>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'twentytwentyone'); ?></a>

		<?php get_template_part('template-parts/header/site-header'); ?>

		<div id="content" class="site-content">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
					<nav id="main-nav">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">About</a></li>
							<li>
								<a href="#">Services</a>
								<ul>
									<li>
										<a href="#">Hosting</a>
										<ul>
											<li><a href="#">Private Server</a></li>
											<li><a href="#">Managed Hosting</a></li>
										</ul>
									</li>
									<li><a href="#">Domains</a></li>
									<li><a href="#">Websites</a></li>
								</ul>
							</li>
							<li><a href="#">Contact</a></li>
						</ul>
					</nav>