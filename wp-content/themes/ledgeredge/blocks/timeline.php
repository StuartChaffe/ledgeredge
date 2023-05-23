<?php
/**
* The template used for displaying a timeline block.
*/
$button = get_field('timeline_button');

?>

<section class="timeline" id="timeline">
	<div class="timeline-line">&nbsp;</div>
	<?php if( have_rows('timeline') ): ?>
		<?php while( have_rows('timeline') ): the_row();
			$date = get_sub_field('timeline_date');
			$content = get_sub_field('timeline_content');
			$image = get_sub_field('timeline_image');
		?>
		<div class="timeline-item fade">
			<?php if ($date) { ?><div class="timeline-item--date"><span><?php echo $date; ?></span></div><?php } ?>
			<div class="timeline-item--container">
				<?php if ($image) { ?>
				<div class="timeline-item--image">
					<img loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
				</div>
				<?php } ?>
				<div class="timeline-item--content" <?php if (!$image) { ?> style="margin-top: 50px"<?php } ?>>
					<?php echo $content; ?>
				</div>
			</div>
		</div>
		<?php endwhile; ?>
	<?php endif; ?>

	<?php if ($button) { ?>
		<span class="fade btn btn--secondary"><a href="<?php echo $button['url']; ?>"><?php echo $button['title']; ?></a></span>
	<?php } ?>
</section>