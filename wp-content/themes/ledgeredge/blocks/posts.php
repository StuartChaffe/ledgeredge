<?php
/**
* The template used for displaying all posts.
*/
$title = get_field('posts_title');
$intro = get_field('posts_intro');
// get sticky posts from DB
$sticky = get_option('sticky_posts');
?>

<?php if (!empty($sticky)) { ?>
<div class="container">
	<section class="posts">
	<?php rsort($sticky);
		$posts = array(
			'post__in' => $sticky,
			'posts_per_page' => 2,
			'ignore_sticky_posts' => 1,
   			'orderby' => 'date',
		);
	?>
    <?php query_posts($posts); while (have_posts()) { the_post(); ?>
		<?php
			$categories = get_the_category(get_the_ID());
			foreach( $categories as $category) {
				$cat = $category->name;
				$category_link = get_category_link( $category->term_id );
			}
		?>
		<div class="posts-item posts-item--featured fade">	
			<?php if (has_post_thumbnail() ) { ?><a href="<?php esc_url( the_permalink() ); ?>" class="posts-item--image"><?php the_post_thumbnail(); ?></a><?php } ?>
			<div class="posts-item--content">
				<div class="posts-item--meta"><p><a href="<?php echo esc_url( $category_link ); ?>"><?php echo $cat ?>:</a></p>&nbsp;<p><?php echo get_the_date('d.m.y'); ?>:</p></div>
				<a href="<?php esc_url( the_permalink() ); ?>" title="Article: <?php the_title(); ?>">
					<!-- <p class="lead"><strong><?php the_title(); ?></strong></p> -->
					<h4><?php the_title(); ?></h4>
				</a>
				<?php if (has_excerpt() ) { ?><p class="small excerpt"><?php echo get_the_excerpt(); ?></p><?php } ?>
				<a class="posts-item--content-link" href="<?php esc_url( the_permalink() ); ?>" title="Article: <?php the_title(); ?>">
					Read >
				</a>
			</div>
		</div>
	<?php } ?>
	</section>
</div>
<?php } ?>

<?php
	$posts = new WP_Query( array(
		'post_type' => 'post',
		'post__not_in' => get_option( 'sticky_posts' ) ,
		'posts_per_page' => 9,
		'orderby' => 'date',
		'order' => 'DESC',
	));
?>

<?php if ($posts->have_posts()) { ?>
<div class="container">
	<section class="posts">
	
		<?php while($posts->have_posts()) : $posts->the_post(); ?>

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
					<div class="posts-item--meta"><p><a href="<?php echo esc_url( $category_link ); ?>"><?php echo $cat ?>:</a></p>&nbsp;<p><?php echo get_the_date('d.m.y'); ?>:</p></div>
					<a href="<?php esc_url( the_permalink() ); ?>" title="Article: <?php the_title(); ?>">
						<!-- <p class="lead"><strong><?php the_title(); ?></strong></p> -->
						<h4><?php the_title(); ?></h4>
					</a>
					<?php if (has_excerpt() ) { ?><p class="small excerpt"><?php echo get_the_excerpt(); ?></p><?php } ?>
					<a class="posts-item--content-link" href="<?php esc_url( the_permalink() ); ?>" title="Article: <?php the_title(); ?>">
						Read >
					</a>
				</div>
			</div>
			
		<?php endwhile; wp_reset_query(); ?>
	</section>
	<div class="posts-btn">
		<span class="btn btn--secondary"><a href="/archive">View archive</a></span>
	</div>
</div>
<?php } ?>