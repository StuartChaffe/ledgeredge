<?php
/**
* The template used for displaying all team members.
*/
?>
<?php
	$team = new WP_Query( array(
		'post_type' => 'team',
		'posts_per_page' => -1,
		'orderby' => 'menu_order',
		'order' => 'ASC'
	));
?>
<div class="container">
<section class="team">
	<?php while($team->have_posts()) : $team->the_post(); ?>

	<?php
		$image = get_field('team_image', get_the_ID());
		$job = get_field('team_job_title', get_the_ID());
		$bio = get_field('team_bio', get_the_ID());
		$link = get_field('team_link', get_the_ID());
	?>
	<div class="team-item fade">
		<!-- <div class="team-item--image" style="background-image: url('<?php echo $image['url']; ?>')"> -->
		<?php if ($image) { ?>
		<div class="team-item--image">
			<svg class="icon"><?php echo get_icon('asset-team'); ?></svg>
			<div class="team-item--image__clip" style="background-image: url('<?php echo $image['url']; ?>">
				<img loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			</div>
		</div>
		<?php } ?>
		<h4><?php the_title(); ?></h4>
		<?php if ($job) { ?><h4 class="team-item--job"><?php echo $job; ?></h4><?php } ?>
		<?php if ($bio) { ?><p class="team-item--bio"><?php echo $bio; ?></p><?php } ?>
		<?php if ($link) { ?><span class="btn btn--primary btn__small"><a href="<?php echo $link['url']; ?>" title="<?php echo $link['title']; ?>"><?php echo $link['title']; ?> <?php echo get_icon('arrow'); ?></a></span><?php } ?>
	</div>

	<?php endwhile; wp_reset_query(); ?>
</section>
</div>