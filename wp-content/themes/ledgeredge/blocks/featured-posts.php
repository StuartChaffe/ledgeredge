<?php
/**
* The template used for displaying a featured posts block.
*/
$title = get_field('featured_posts_title');
$featuredposts = get_field( 'select_posts' );
?>

<div class="container">
	<section class="posts">

	<?php if ( $title ) { ?>
		<div class="posts--title fade"><?php echo $title; ?></div>
	<?php } ?>

	<?php if( $featuredposts ): ?>		
		<?php foreach( $featuredposts as $featuredpost ):
			$title = get_the_title($featuredpost);
			$desc = get_field( 'event_desc', $featuredpost);
			// $image = get_field( 'event_image', $featuredpost);
			$image = get_field('square_image', $featuredpost);
			$categories = get_the_category($featuredpost);
			foreach( $categories as $category) {
				$cat = $category->name;
				$category_link = get_category_link( $category->term_id );
			}
		?>
		<div class="posts-item fade">
		<?php if (has_post_thumbnail($featuredpost) ) { ?><a href="<?php esc_url( the_permalink($featuredpost) ); ?>" class="posts-item--image"><img src="<?php echo get_the_post_thumbnail_url($featuredpost); ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id($featuredpost), '_wp_attachment_image_alt', true); ?>"></a><?php } ?>
			<div class="posts-item--content">
				<div class="posts-item--meta"><p><?php echo get_the_date('d.m.y', $featuredpost); ?></p></div>
				<a href="<?php esc_url( the_permalink($featuredpost) ); ?>" title="Article: <?php the_title(); ?>">
					<h4><?php echo $title; ?></h4>
				</a>
				<?php if (has_excerpt($featuredpost) ) { ?><p class="small excerpt"><?php echo get_the_excerpt($featuredpost); ?></p><?php } ?>
				<a class="posts-item--content-link" href="<?php esc_url( the_permalink($featuredpost) ); ?>" title="Article: <?php the_title($featuredpost); ?>">
					Read >
				</a>
			</div>
		</div>
	 
		<?php endforeach; ?>
	<?php endif; ?>
	</section>
</div>
