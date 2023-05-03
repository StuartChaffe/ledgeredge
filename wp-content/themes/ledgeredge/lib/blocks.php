<?php

add_filter( 'block_categories_all', 'ledgeredge_block_categories', 10, 2 );
function ledgeredge_block_categories( $categories, $post )
{
	return array_merge(
		$categories,
		array(
			array(
				'slug' => 'ledgeredge-blocks',
				'title' => __( 'Ledger Edge Blocks', 'ledgeredgeblocks-master' ),
			),
		)
	);
}

add_action('acf/init', 'ledgeredge_acf_blocks');
function ledgeredge_acf_blocks() {
	if( function_exists('acf_register_block') ) {
		acf_register_block(array(
			'name'				=> 'banner',
			'title'				=> __('Banner'),
			'description'		=> __('Add a banner block'),
			'render_callback'	=> 'ledgeredge_acf_block_render_callback',
			'category'			=> 'ledgeredge-blocks',
			'icon'				=> 'format-image',
			'align' 			=> 'full',
			'keywords'			=> array( 'banner' ),
		));
		acf_register_block(array(
			'name'				=> 'carousel',
			'title'				=> __('Carousel'),
			'description'		=> __('Add a carousel'),
			'render_callback'	=> 'ledgeredge_acf_block_render_callback',
			'category'			=> 'ledgeredge-blocks',
			'icon'				=> 'slides',
			'align' 			=> 'full',
			'keywords'			=> array( 'carousel' ),
		));
		acf_register_block(array(
			'name'				=> 'cols',
			'title'				=> __('Columns'),
			'description'		=> __('Add a columns block'),
			'render_callback'	=> 'ledgeredge_acf_block_render_callback',
			'category'			=> 'ledgeredge-blocks',
			'icon'				=> 'columns',
			'align' 			=> 'wide',
			'mode' => 'auto',
			'keywords'			=> array( 'columns' ),
		));
		acf_register_block(array(
			'name'				=> 'connect',
			'title'				=> __('Connect'),
			'description'		=> __('Add a connect block'),
			'render_callback'	=> 'ledgeredge_acf_block_render_callback',
			'category'			=> 'ledgeredge-blocks',
			'icon'				=> 'megaphone',
			'align' 			=> 'wide',
			'keywords'			=> array( 'connect' ),
		));
		acf_register_block(array(
			'name'				=> 'content',
			'title'				=> __('Content'),
			'description'		=> __('Add a content block'),
			'render_callback'	=> 'ledgeredge_acf_block_render_callback',
			'category'			=> 'ledgeredge-blocks',
			'icon'				=> 'format-aside',
			'align' 			=> 'wide',
			'mode' => 'auto',
			'keywords'			=> array( 'content' ),
		));
		acf_register_block(array(
			'name'				=> 'cta',
			'title'				=> __('Call to action'),
			'description'		=> __('Add a CTA block'),
			'render_callback'	=> 'ledgeredge_acf_block_render_callback',
			'category'			=> 'ledgeredge-blocks',
			'icon'				=> 'megaphone',
			'align' 			=> 'wide',
			'keywords'			=> array( 'cta, call to action' ),
		));
		acf_register_block(array(
			'name'				=> 'featured-posts',
			'title'				=> __('Featured posts'),
			'description'		=> __('Add featured posts'),
			'render_callback'	=> 'ledgeredge_acf_block_render_callback',
			'category'			=> 'ledgeredge-blocks',
			'icon'				=> 'screenoptions',
			'align' 			=> 'wide',
			'keywords'			=> array( 'posts, featured' ),
		));
		acf_register_block(array(
			'name'				=> 'form',
			'title'				=> __('Form'),
			'description'		=> __('Add a form'),
			'render_callback'	=> 'ledgeredge_acf_block_render_callback',
			'category'			=> 'ledgeredge-blocks',
			'icon'				=> 'email-alt',
			'align' 			=> 'wide',
			'keywords'			=> array( 'form, contact' ),
		));
		acf_register_block(array(
			'name'				=> 'image',
			'title'				=> __('Image'),
			'description'		=> __('Add an image block'),
			'render_callback'	=> 'ledgeredge_acf_block_render_callback',
			'category'			=> 'ledgeredge-blocks',
			'icon'				=> 'format-gallery',
			'align' 			=> 'wide',
			'keywords'			=> array( 'images, image' )
		));
		acf_register_block(array(
			'name'				=> 'video',
			'title'				=> __('Video'),
			'description'		=> __('Add a video block'),
			'render_callback'	=> 'ledgeredge_acf_block_render_callback',
			'category'			=> 'ledgeredge-blocks',
			'icon'				=> 'format-gallery',
			'align' 			=> 'wide',
			'keywords'			=> array( 'video' )
		));
		acf_register_block(array(
			'name'				=> 'posts',
			'title'				=> __('Posts'),
			'description'		=> __('Add all posts'),
			'render_callback'	=> 'ledgeredge_acf_block_render_callback',
			'category'			=> 'ledgeredge-blocks',
			'icon'				=> 'calendar-alt',
			'align' 			=> 'wide',
			'keywords'			=> array( 'posts, blogs' ),
		));
		acf_register_block(array(
			'name'				=> 'newsletter',
			'title'				=> __('Newsletter'),
			'description'		=> __('Add a newsletter'),
			'render_callback'	=> 'ledgeredge_acf_block_render_callback',
			'category'			=> 'ledgeredge-blocks',
			'icon'				=> 'email-alt',
			'align' 			=> 'wide',
			'keywords'			=> array( 'form, signup' ),
		));
		acf_register_block(array(
			'name'				=> 'team',
			'title'				=> __('Team'),
			'description'		=> __('Add all team members'),
			'render_callback'	=> 'ledgeredge_acf_block_render_callback',
			'category'			=> 'ledgeredge-blocks',
			'icon'				=> 'groups',
			'align' 			=> 'wide',
			'keywords'			=> array( 'team, people' ),
		));
		acf_register_block(array(
			'name'				=> 'testimonial',
			'title'				=> __('Testimonial'),
			'description'		=> __('Add testimonial'),
			'render_callback'	=> 'ledgeredge_acf_block_render_callback',
			'category'			=> 'ledgeredge-blocks',
			'icon'				=> 'format-status',
			'align' 			=> 'wide',
			'keywords'			=> array( 'testimonial, quote' ),
		));
		acf_register_block(array(
			'name'				=> 'text-icon',
			'title'				=> __('Text with icon'),
			'description'		=> __('Add a standard text with icon block'),
			'render_callback'	=> 'ledgeredge_acf_block_render_callback',
			'category'			=> 'ledgeredge-blocks',
			'icon'				=> 'align-full-width',
			'align' 			=> 'wide',
			'keywords'			=> array( 'icon, text, image' ),
		));
		acf_register_block(array(
			'name'				=> 'text-image',
			'title'				=> __('Text with image'),
			'description'		=> __('Add a standard text with image block'),
			'render_callback'	=> 'ledgeredge_acf_block_render_callback',
			'category'			=> 'ledgeredge-blocks',
			'icon'				=> 'align-pull-right',
			'align' 			=> 'wide',
			'keywords'			=> array( 'content, text, image' ),
		));
		acf_register_block(array(
			'name'				=> 'timeline',
			'title'				=> __('Timeline'),
			'description'		=> __('Add a timeline'),
			'render_callback'	=> 'ledgeredge_acf_block_render_callback',
			'category'			=> 'ledgeredge-blocks',
			'icon'				=> 'airplane',
			'align' 			=> 'wide',
			'keywords'			=> array( 'timeline' ),
		));
	}
}

function ledgeredge_acf_block_render_callback( $block ) {
	$slug = str_replace('acf/', '', $block['name']);

	if( file_exists( get_theme_file_path("/blocks/{$slug}.php") ) ) {
		include( get_theme_file_path("/blocks/{$slug}.php") );
	}
}

add_filter( 'allowed_block_types_all', 'ledgeredge_allowed_block_types' );
 
function ledgeredge_allowed_block_types( $allowed_blocks ) {
 
	return array(
		// 'acf/accordion',
		// 'acf/awards',
		'acf/banner',
		// 'acf/careers',
		'acf/carousel',
		'acf/cols',
		'acf/connect',
		'acf/content',
		// 'acf/cta',
		// 'acf/download',
		'acf/featured-posts',
		// 'acf/featured-lists',
		// 'acf/featured-team',
		'acf/form',
		'acf/image',
		'acf/newsletter',
		// 'acf/link-list',
		// 'acf/offices',
		// 'acf/platforms',
		'acf/posts',
		// 'acf/signup',
		'acf/team',
		'acf/timeline',
		'acf/testimonial',
		'acf/text-icon',
		'acf/text-image',
		'acf/video'
	);
 
}
  
add_action('acf/render_field_settings/type=image', 'add_default_value_to_image_field');
function add_default_value_to_image_field($field) {
	acf_render_field_setting( $field, array(
		'label'			=> 'Default Image',
		'instructions'		=> 'Appears when creating a new post',
		'type'			=> 'image',
		'name'			=> 'default_value',
	));
}
// add_action('acf/render_field_settings/type=file', 'add_default_value_to_file_field');
// function add_default_value_to_file_field($field) {
// 	acf_render_field_setting( $field, array(
// 		'label'			=> 'Default File',
// 		'instructions'		=> 'Appears when creating a new post',
// 		'type'			=> 'file',
// 		'name'			=> 'default_value',
// 	));
// }