<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage WPTuts WPExplorer Theme
 * @since WPTuts 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area clr">
		<div id="content" class="site-content clr" role="main">
			<div id="error-page" class="clr boxed">
				<h1 id="error-page-title">404</h1>
				<p id="error-page-text">
				<?php esc_html_e( 'Unfortunately, the page you tried accessing could not be retrieved.', 'wptuts' ); ?>
				</p>
			</div><!-- #error-page -->
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>