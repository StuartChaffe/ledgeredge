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
		<?php if ($image) { ?>
		<div class="team-item--image">
			<svg class="icon"><?php echo get_icon('asset-team'); ?></svg>
			<div class="hexagone">
				<div class="team-item--image__clip" style="background-image: url('<?php echo $image['url']; ?>')">
					<img loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				</div>
			</div>
			<svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
				<defs>
					<filter id="round">
						<feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur" />    
						<feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
						<feComposite in="SourceGraphic" in2="goo" operator="atop"/>
					</filter>
				</defs>
			</svg>
			<div class="team-item--image__clip hide" style="background-image: url('<?php echo $image['url']; ?>')">
				<img loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			</div>
		</div>
		<?php } ?>
		<h4><?php the_title(); ?></h4>
		<?php if ($job) { ?><h4 class="team-item--job"><?php echo $job; ?></h4><?php } ?>
		<?php if ($bio) { ?><div class="team-item--bio"><?php echo $bio; ?></div><?php } ?>
		<?php if ($link) { ?><a href="<?php echo $link['url']; ?>" title="<?php echo $link['title']; ?>"><?php echo $link['title']; ?></a><?php } ?>
	</div>

	<?php endwhile; wp_reset_query(); ?>
</section>
</div>