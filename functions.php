<?php

function wpt_theme_styles() {

	wp_enqueue_style ( 'foundation_css', get_template_directory_uri() . '/css/foundation.css' );
	wp_enqueue_style ( 'normalize_css', get_template_directory_uri() . '/css/normalize.css' );
	wp_enqueue_style ( 'main_css', get_template_directory_uri() . '/style.css' );

}

add_action( 'wp_enqueue_scripts', 'wpt_theme_styles');

function wpt_theme_js() {

	wp_enqueue_script( 'modernizr_js', get_template_directory_uri() . '/js/modernizr.js', '', '', false );
	wp_enqueue_script( 'foundation_js', get_template_directory_uri() . '/js/foundation.js', array('jquery'), '', true );
	wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/app.js', array('jquery'), 'foundation_js', true );
}
add_action( 'wp_enqueue_scripts', 'wpt_theme_js' );
?>
<?php

add_theme_support( 'post-thumbnails' );
add_image_size( 'large', 764, 267, true );
add_theme_support( 'menus' );

function register_theme_menus() {

	register_nav_menus(
		array(
			'primary-menu' => __( 'Primary Menu', 'day-street') 

		)	
			);
}
add_action( 'init', 'register_theme_menus' );

?>
<?php

function my_search_form( $form ) {
	$form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
	<div><label class="screen-reader-text" for="s">' . __( ' ' ) . '</label>
	<input type="text" value="' . get_search_query() . '" name="s" id="s" />
	<input type="submit" id="searchsubmit" value="'. esc_attr__( 'Search' ) .'" />
	</div>
	</form>';

	return $form;
}

add_filter( 'get_search_form', 'my_search_form' );

?>