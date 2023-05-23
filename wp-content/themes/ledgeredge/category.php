<?php get_header(); ?>

<section class="fade bkg__darkblue">
	<div class="banner banner__small container">
		<div class="banner--content fade fade--delay__2">
			<p>News</p>
			<h2>See who's talking about LedgerEdge</h2>
		</div>
		<div class="banner--image fade fade--delay__3" style="background-image: url('<?php echo get_template_directory_uri(); ?>/src/images/news-banner.png')">
			<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/src/images/news-banner.png" alt="News banner image" />
		</div>
	</div>
</section>

<?php if ( have_posts() ): ?>
	<section class="content fade fade--visible">
		<h5 style="text-align: center; margin-bottom: 0;">Category: <?php echo single_cat_title( '', false ); ?></h5>
	</section>

	<div class="container">
		<section class="posts">
		<?php while ( have_posts() ) : the_post(); ?>
		<?php
				$categories = get_the_category(get_the_ID());
				foreach( $categories as $category) {
					$cat = $category->name;
					$category_link = get_category_link( $category->term_id );
				}
			?>
			<div class="posts-item posts-item__featured fade">	
					
				<?php if (has_post_thumbnail() ) { ?><a href="<?php esc_url( the_permalink() ); ?>" class="posts-item--image"><?php the_post_thumbnail(); ?></a><?php } ?>
				<div class="posts-item--content">
					<div class="posts-item--meta"><p><strong><a href="<?php echo esc_url( $category_link ); ?>"><?php echo $cat ?></a></strong></p>&nbsp; / &nbsp;<p><?php echo get_the_date('d.m.y'); ?></p></div>
					<a href="<?php esc_url( the_permalink() ); ?>" title="Article: <?php the_title(); ?>">
						<!-- <p class="lead"><strong><?php the_title(); ?></strong></p> -->
						<h4><?php the_title(); ?></h4>
					</a>
					<?php if (has_excerpt() ) { ?><p class="small excerpt"><?php echo get_the_excerpt(); ?></p><?php } ?>
					<a class="posts-item--content-link" href="<?php esc_url( the_permalink() ); ?>" title="Article: <?php the_title(); ?>">
						Read more <?php echo get_icon('arrow'); ?>
					</a>
				</div>
			</div>
		<?php endwhile; ?>
		</section>
	</div>

<?php else: ?>

<h2>No posts to display</h2>
<?php endif; ?>

<?php get_footer(); ?>