<?php

/**
 * Set image sizes
 */
function origin_image_defaults() {
	update_option('image_default_align', 'center' );
	update_option('image_default_link_type', 'none' );
	update_option('image_default_size', 'large' );

	// Set image sizes
	add_image_size( 'Banner', 600, 450, true );
	add_image_size( 'Square', 400, 400, true );
}
add_action( 'after_setup_theme', 'origin_image_defaults' );



/**
 * Remove image dimensions
 */
function origin_remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}
add_filter( 'post_thumbnail_html', 'origin_remove_thumbnail_dimensions', 10, 3 );

function enable_svg_upload( $upload_mimes ) {
    $upload_mimes['svg'] = 'image/svg+xml';
    $upload_mimes['svgz'] = 'image/svg+xml';
    return $upload_mimes;
}
add_filter( 'upload_mimes', 'enable_svg_upload', 10, 1 );