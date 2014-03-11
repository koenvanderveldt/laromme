<?php 
// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

function mytheme_setup() {

register_nav_menus(
array(
'footer-nav' => __( 'Header Menu', 'bootpress' ),
'top_menu' => __( 'Top Menu', 'bootpress' ),
'sidebar' => __( 'Side bar', 'bootpress')
)
);


}
add_action( 'after_setup_theme', 'mytheme_setup' );

function arphabet_widgets_init() {
register_sidebar( array(
		'name'          => __( 'Primary Sidebar', 'bootpress' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Main sidebar that appears on the left.', 'bootpress' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name' => 'top area',
		'id' => 'top_1',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );

?>