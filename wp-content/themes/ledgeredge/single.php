<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<?php
	$categories = get_the_category(get_the_ID());
	foreach( $categories as $category) {
		$cat = $category->name;
		$category_link = get_category_link( $category->term_id );
	}
	$hide = get_field('hide_featured');
?>


	<section class="fade bkg__lightblue">
		<div class="banner banner__small">
			<div class="banner--content fade fade--delay__2">
				<h1>See who's talking about LedgerEdge</h1>
			</div>
		
		</div>
	</section>
	<div class="container">
		<div class="post-header">
			<a href="/news"><?php echo get_icon('arrow'); ?> Back to list</a> <div class="addthis_inline_share_toolbox"><p><strong>Share:</strong></p></div>
		</div>
	</div>
	<article>

	<?php if ( $hide == '0' ) { ?><div class="posts-item--image"><?php the_post_thumbnail(); ?></div><?php } ?>
		<div class="posts-item--meta"><p><strong><a href="<?php echo esc_url( $category_link ); ?>"><?php echo $cat ?></a></strong></p>&nbsp; / &nbsp;<p><?php echo get_the_date('d.m.y'); ?></p></div>
		<h1><?php the_title(); ?></h1>
		<p class="lead"><?php echo get_the_excerpt(); ?></p>
		<?php the_content(); ?>
	</article>
	<div class="container">
		<div class="post-header post-footer">
			<a href="/news"><?php echo get_icon('arrow'); ?> Back to list</a> <div class="addthis_inline_share_toolbox"><p><strong>Share:</strong></p></div>
		</div>
	</div>
	
<?php endwhile; ?>

<?php include 'blocks/newsletter.php';?>

<?php get_footer(); ?>