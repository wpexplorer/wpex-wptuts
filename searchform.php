<?php
/**
 * The template for displaying search forms.
 *
 * @package WordPress
 * @subpackage WPTuts WPExplorer Theme
 * @since WPTuts 1.0
 */
?>

<form method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
	<input type="search" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php esc_attr_e( 'To search type and hit enter', 'wptuts' ); ?>" />
</form>