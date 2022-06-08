<?php

/**
 * Add theme support
 */
add_theme_support( 'post-thumbnails' );
add_theme_support( 'align-wide' );
add_theme_support( 'disable-custom-font-sizes' );



/**
 * Tidy up head
 */
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'feed_links', 2  );
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'wlwmanifest_link') ;	
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );

/**
 * Editor styles
 */
add_theme_support( 'editor-styles' );
add_editor_style( 'assets/css/editor-style.css' );


/**
 * Editor formats
 */
function add_style_select_buttons( $buttons ) {
	array_unshift( $buttons, 'styleselect' );
	return $buttons;
}
add_filter( 'mce_buttons_2', 'add_style_select_buttons' );
function my_custom_styles( $init_array ) {  
	$style_formats = array(  
		array(  
			'title' => 'Paragraph lead',  
			'block' => 'p',  
			'classes' => 'lead',
			'wrapper' => false,
		), 
		array(  
			'title' => 'White button',  
			'block' => 'span',  
			'classes' => 'btn',
			'wrapper' => false,
		),  
		array(  
			'title' => 'Orange button',  
			'block' => 'span',  
			'classes' => 'btn btn--primary',
			'wrapper' => false,
		),  
		array(  
			'title' => 'Green button',  
			'block' => 'span',  
			'classes' => 'btn btn--secondary',
			'wrapper' => false,
		), 
		array(  
			'title' => 'Teal button',  
			'block' => 'span',  
			'classes' => 'btn btn--tertiary',
			'wrapper' => false,
		),  
		array(  
			'title' => 'Blue button',  
			'block' => 'span',  
			'classes' => 'btn--quaternary',
			'wrapper' => false,
		), 
		array(  
			'title' => 'Orange',  
			'block' => 'span',  
			'classes' => 'orange',
			'wrapper' => false,
		), 
		array(  
			'title' => 'Blue',  
			'block' => 'span',  
			'classes' => 'blue',
			'wrapper' => false,
		), 
		array(  
			'title' => 'Green',  
			'block' => 'span',  
			'classes' => 'green',
			'wrapper' => false,
		), 
		array(  
			'title' => 'White',  
			'block' => 'span',  
			'classes' => 'white',
			'wrapper' => false,
		), 
	);  
	// Insert the array, JSON ENCODED, into 'style_formats'
	$init_array['style_formats'] = json_encode( $style_formats );  

	return $init_array;  

	} 
// Attach callback to 'tiny_mce_before_init' 
add_filter( 'tiny_mce_before_init', 'my_custom_styles' );



/**
 * Add no-js class to body
 */
 
function origin_no_js_body_classes( $classes ) {
	return array_merge( $classes, array( 'no-js' ) );
}
add_filter( 'body_class', 'origin_no_js_body_classes', 20 );

function filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

add_filter('the_content', 'filter_ptags_on_images');

/**
 * Tidy up body classes
 */
function origin_clean_body_classes( $classes ) {
	$allowed_classes = [
		'single',
		'page',
		'archive',
		'admin-bar',
		'no-js',
	];
	return array_intersect( $classes, $allowed_classes );
}
add_filter( 'body_class', 'origin_clean_body_classes', 20 );


function my_password_form() {
    global $post;
    $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
    $o = '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post" class="post-password-form">
    ' . __( "This content is password protected.<br /> To view it please enter your password below:" ) . '
    <p><label for="' . $label . '">' . __( "Password:" ) . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" /><input type="submit" name="Submit" value="' . esc_attr__( "Submit" ) . '" /></p>
    </form>
    ';
    return $o;
}
add_filter( 'the_password_form', 'my_password_form' );

add_filter( 'protected_title_format', 'remove_protected_text' );
	function remove_protected_text() {
	return __('%s');
}