<?php

add_filter( 'block_categories_all', 'magus_block_categories', 10, 2 );
function magus_block_categories( $categories, $post )
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

add_action('acf/init', 'magus_acf_blocks');
function magus_acf_blocks() {
	if( function_exists('acf_register_block') ) {
		// acf_register_block(array(
		// 	'name'				=> 'accordion',
		// 	'title'				=> __('Accordion'),
		// 	'description'		=> __('Add expanding content'),
		// 	'render_callback'	=> 'magus_acf_block_render_callback',
		// 	'category'			=> 'ledgeredge-blocks',
		// 	'icon'				=> 'insert',
		// 	'align' 			=> 'wide',
		// 	'keywords'			=> array( 'accordion, expanding' ),
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'awards',
		// 	'title'				=> __('Awards'),
		// 	'description'		=> __('Add an award block'),
		// 	'render_callback'	=> 'magus_acf_block_render_callback',
		// 	'category'			=> 'ledgeredge-blocks',
		// 	'icon'				=> 'awards',
		// 	'align' 			=> 'wide',
		// 	'keywords'			=> array( 'award' ),
		// ));
		acf_register_block(array(
			'name'				=> 'banner',
			'title'				=> __('Banner'),
			'description'		=> __('Add a banner block'),
			'render_callback'	=> 'magus_acf_block_render_callback',
			'category'			=> 'ledgeredge-blocks',
			'icon'				=> 'format-image',
			'align' 			=> 'full',
			'keywords'			=> array( 'banner' ),
		));
		// acf_register_block(array(
		// 	'name'				=> 'careers',
		// 	'title'				=> __('Careers'),
		// 	'description'		=> __('Add a careers block'),
		// 	'render_callback'	=> 'magus_acf_block_render_callback',
		// 	'category'			=> 'ledgeredge-blocks',
		// 	'icon'				=> 'admin-users',
		// 	'align' 			=> 'full',
		// 	'keywords'			=> array( 'careers, jobs' ),
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'carousel',
		// 	'title'				=> __('Carousel'),
		// 	'description'		=> __('Add a carousel'),
		// 	'render_callback'	=> 'magus_acf_block_render_callback',
		// 	'category'			=> 'ledgeredge-blocks',
		// 	'icon'				=> 'slides',
		// 	'align' 			=> 'full',
		// 	'keywords'			=> array( 'carousel' ),
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'content',
		// 	'title'				=> __('Content'),
		// 	'description'		=> __('Add a content block'),
		// 	'render_callback'	=> 'magus_acf_block_render_callback',
		// 	'category'			=> 'ledgeredge-blocks',
		// 	'icon'				=> 'format-aside',
		// 	'align' 			=> 'wide',
		// 	'mode' => 'auto',
		// 	'keywords'			=> array( 'content' ),
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'cta',
		// 	'title'				=> __('Call to action'),
		// 	'description'		=> __('Add a CTA block'),
		// 	'render_callback'	=> 'magus_acf_block_render_callback',
		// 	'category'			=> 'ledgeredge-blocks',
		// 	'icon'				=> 'megaphone',
		// 	'align' 			=> 'wide',
		// 	'keywords'			=> array( 'cta, call to action' ),
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'download',
		// 	'title'				=> __('Download'),
		// 	'description'		=> __('Add a download block'),
		// 	'render_callback'	=> 'magus_acf_block_render_callback',
		// 	'category'			=> 'ledgeredge-blocks',
		// 	'icon'				=> 'download',
		// 	'align' 			=> 'wide',
		// 	'keywords'			=> array( 'download' ),
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'featured-posts',
		// 	'title'				=> __('Featured posts'),
		// 	'description'		=> __('Add featured posts'),
		// 	'render_callback'	=> 'magus_acf_block_render_callback',
		// 	'category'			=> 'ledgeredge-blocks',
		// 	'icon'				=> 'screenoptions',
		// 	'align' 			=> 'wide',
		// 	'keywords'			=> array( 'posts, featured' ),
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'featured-lists',
		// 	'title'				=> __('Featured lists'),
		// 	'description'		=> __('Add a featured list'),
		// 	'render_callback'	=> 'magus_acf_block_render_callback',
		// 	'category'			=> 'ledgeredge-blocks',
		// 	'icon'				=> 'screenoptions',
		// 	'align' 			=> 'wide',
		// 	'keywords'			=> array( 'list, featured' ),
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'featured-team',
		// 	'title'				=> __('Featured team members'),
		// 	'description'		=> __('Add team members'),
		// 	'render_callback'	=> 'magus_acf_block_render_callback',
		// 	'category'			=> 'ledgeredge-blocks',
		// 	'icon'				=> 'admin-users',
		// 	'align' 			=> 'wide',
		// 	'keywords'			=> array( 'team, featured' ),
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'form',
		// 	'title'				=> __('Form'),
		// 	'description'		=> __('Add a form'),
		// 	'render_callback'	=> 'magus_acf_block_render_callback',
		// 	'category'			=> 'ledgeredge-blocks',
		// 	'icon'				=> 'email-alt',
		// 	'align' 			=> 'wide',
		// 	'keywords'			=> array( 'form, contact' ),
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'highlighted-service',
		// 	'title'				=> __('Highlighted service'),
		// 	'description'		=> __('Add highlighted service'),
		// 	'render_callback'	=> 'magus_acf_block_render_callback',
		// 	'category'			=> 'ledgeredge-blocks',
		// 	'icon'				=> 'align-full-width',
		// 	'align' 			=> 'wide',
		// 	'keywords'			=> array( 'services, highlight' ),
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'highlighted-text',
		// 	'title'				=> __('Highlighted text'),
		// 	'description'		=> __('Add highlighted text'),
		// 	'render_callback'	=> 'magus_acf_block_render_callback',
		// 	'category'			=> 'ledgeredge-blocks',
		// 	'icon'				=> 'menu-alt3',
		// 	'align' 			=> 'wide',
		// 	'keywords'			=> array( 'text, highlight' ),
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'link-list',
		// 	'title'				=> __('Link list'),
		// 	'description'		=> __('Add link list block'),
		// 	'render_callback'	=> 'magus_acf_block_render_callback',
		// 	'category'			=> 'ledgeredge-blocks',
		// 	'icon'				=> 'columns',
		// 	'align' 			=> 'wide',
		// 	'keywords'			=> array( 'link list, links' ),
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'offices',
		// 	'title'				=> __('Office list'),
		// 	'description'		=> __('Add office list'),
		// 	'render_callback'	=> 'magus_acf_block_render_callback',
		// 	'category'			=> 'ledgeredge-blocks',
		// 	'icon'				=> 'columns',
		// 	'align' 			=> 'wide',
		// 	'keywords'			=> array( 'office' ),
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'platforms',
		// 	'title'				=> __('Platform list'),
		// 	'description'		=> __('Add platform list'),
		// 	'render_callback'	=> 'magus_acf_block_render_callback',
		// 	'category'			=> 'ledgeredge-blocks',
		// 	'icon'				=> 'columns',
		// 	'align' 			=> 'wide',
		// 	'keywords'			=> array( 'platform' ),
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'posts',
		// 	'title'				=> __('Posts'),
		// 	'description'		=> __('Add all posts'),
		// 	'render_callback'	=> 'magus_acf_block_render_callback',
		// 	'category'			=> 'ledgeredge-blocks',
		// 	'icon'				=> 'calendar-alt',
		// 	'align' 			=> 'wide',
		// 	'keywords'			=> array( 'posts, blogs' ),
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'signup',
		// 	'title'				=> __('Signup'),
		// 	'description'		=> __('Add a signup form'),
		// 	'render_callback'	=> 'magus_acf_block_render_callback',
		// 	'category'			=> 'ledgeredge-blocks',
		// 	'icon'				=> 'email-alt',
		// 	'align' 			=> 'wide',
		// 	'keywords'			=> array( 'form, signup' ),
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'team',
		// 	'title'				=> __('Team'),
		// 	'description'		=> __('Add all team members'),
		// 	'render_callback'	=> 'magus_acf_block_render_callback',
		// 	'category'			=> 'ledgeredge-blocks',
		// 	'icon'				=> 'groups',
		// 	'align' 			=> 'wide',
		// 	'keywords'			=> array( 'team, people' ),
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'testimonial',
		// 	'title'				=> __('Testimonial'),
		// 	'description'		=> __('Add testimonial'),
		// 	'render_callback'	=> 'magus_acf_block_render_callback',
		// 	'category'			=> 'ledgeredge-blocks',
		// 	'icon'				=> 'format-status',
		// 	'align' 			=> 'wide',
		// 	'keywords'			=> array( 'testimonial, quote' ),
		// ));
		// acf_register_block(array(
		// 	'name'				=> 'video',
		// 	'title'				=> __('Video'),
		// 	'description'		=> __('Add a video'),
		// 	'render_callback'	=> 'magus_acf_block_render_callback',
		// 	'category'			=> 'ledgeredge-blocks',
		// 	'icon'				=> 'video-alt3',
		// 	'align' 			=> 'wide',
		// 	'keywords'			=> array( 'video' ),
		// ));
	}
}

function magus_acf_block_render_callback( $block ) {
	$slug = str_replace('acf/', '', $block['name']);

	if( file_exists( get_theme_file_path("/blocks/{$slug}.php") ) ) {
		include( get_theme_file_path("/blocks/{$slug}.php") );
	}
}

add_filter( 'allowed_block_types_all', 'magus_allowed_block_types' );
 
function magus_allowed_block_types( $allowed_blocks ) {
 
	return array(
		// 'acf/accordion',
		// 'acf/awards',
		'acf/banner',
		// 'acf/careers',
		// 'acf/carousel',
		// 'acf/content',
		// 'acf/cta',
		// 'acf/download',
		// 'acf/featured-posts',
		// 'acf/featured-lists',
		// 'acf/featured-team',
		// 'acf/form',
		// 'acf/highlighted-text',
		// 'acf/link-list',
		// 'acf/offices',
		// 'acf/platforms',
		// 'acf/posts',
		// 'acf/signup',
		// 'acf/team',
		// 'acf/testimonial',
		// 'acf/video'
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