<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<?php
	$categories = get_the_category(get_the_ID());
	foreach( $categories as $category) {
		$cat = $category->name;
		$category_link = get_category_link( $category->term_id );
	}
?>

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
	<div class="container">
		<div class="post-header">
			<a href="/news"><?php echo get_icon('arrow'); ?> Back to list</a> <div class="addthis_inline_share_toolbox"><p><strong>Share:</strong></p></div>
		</div>
	</div>
	<article>
		<div class="posts-item--meta"><p><strong><?php echo $cat ?></strong></p>&nbsp; / &nbsp;<p><?php echo get_the_date('d.m.y'); ?></p></div>
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</article>
	<div class="container">
		<div class="post-header post-footer">
			<a href="/news"><?php echo get_icon('arrow'); ?> Back to list</a> <div class="addthis_inline_share_toolbox"><p><strong>Share:</strong></p></div>
		</div>
	</div>
	
<?php endwhile; ?>

<?php include '/blocks/newsletter.php';?>

<?php get_footer(); ?>