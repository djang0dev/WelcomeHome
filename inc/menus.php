<?php
// declare a new menu
add_action( 'after_setup_theme', function () {
	register_nav_menu( 'header', __( 'Main Navigation', 'wh' ) );
} );
require_once( 'widgets/social.php' );

// create a widget sidebar
add_action( 'widgets_init', function () {
	// declare footer widget zone
	register_widget( WH_Social_Widget::class );
	register_sidebar( [
		                  'id'            => 'footer',
		                  'name'          => __( 'Footer', 'wh' ),
		                  'before_title'  => '<div class="footer__title">',
		                  'after_title'   => '</div>',
		                  'before_widget' => '<div class="footer__col">',
		                  'after_widget'  => '</div>'
	                  ] );


} );

