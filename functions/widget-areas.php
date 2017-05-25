<?php
/**
 * Define sidebars for use in this theme
 * @package WordPress
 * @subpackage WPTuts WPExplorer Theme
 * @since WPTuts 1.0
 */

// Sidebar
register_sidebar(array(
	'name'			=> esc_html__( 'Sidebar', 'wptuts' ),
	'id'			=> 'sidebar',
	'description'	=> esc_html__( 'Widgets in this area are used in the sidebar region.', 'wptuts' ),
	'before_widget'	=> '<div class="sidebar-widget %2$s clr">',
	'after_widget'	=> '</div>',
	'before_title'	=> '<h5 class="widget-title">',
	'after_title'	=> '</h5>',
));
// Footer 1
register_sidebar(array(
	'name'			=> esc_html__( 'Footer 1', 'wptuts' ),
	'id'			=> 'footer-one',
	'description'	=> esc_html__( 'Widgets in this area are used in the first footer region.', 'wptuts' ),
	'before_widget'	=> '<div class="footer-widget %2$s clr">',
	'after_widget'	=> '</div>',
	'before_title'	=> '<h6 class="widget-title">',
	'after_title'	=> '</h6>',
));
// Footer 2
register_sidebar(array(
	'name'			=> esc_html__( 'Footer 2', 'wptuts' ),
	'id'			=> 'footer-two',
	'description'	=> esc_html__( 'Widgets in this area are used in the second footer region.', 'wptuts' ),
	'before_widget'	=> '<div class="footer-widget %2$s clr">',
	'after_widget'	=> '</div>',
	'before_title'	=> '<h6 class="widget-title">',
	'after_title'	=> '</h6>',
));
// Footer 3
register_sidebar(array(
	'name'			=> esc_html__( 'Footer 3', 'wptuts' ),
	'id'			=> 'footer-three',
	'description'	=> esc_html__( 'Widgets in this area are used in the third footer region.', 'wptuts' ),
	'before_widget'	=> '<div class="footer-widget %2$s clr">',
	'after_widget'	=> '</div>',
	'before_title'	=> '<h6 class="widget-title">',
	'after_title'	=> '</h6>',
));