<?php
/**
* The template used for displaying a text with icons block.
*/
$button = get_field('timeline_button');

?>

<section class="text-icon" id="texticon">
	<?php if( have_rows('items') ): ?>
		<?php while( have_rows('items') ): the_row();
			$year = get_sub_field('text_icon_year');
			$content = get_sub_field('text_icon_content');
			$image = get_sub_field('text_icon_image');
		?>
		<div class="text-icon-item fade">
			<div class="text-icon-item--container">
				<?php if ($image) { ?>
				<div class="text-icon-item--image">
					<img loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
				</div>
				<?php } ?>
				<div class="text-icon-item--content" <?php if (!$image) { ?> style="margin-top: 50px"<?php } ?>>
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