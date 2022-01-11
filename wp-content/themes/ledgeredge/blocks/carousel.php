<?php
/**
* The template used for displaying a carousel.
*/
$content = get_field('carousel_content');
$items = get_field('carousel');
?>

<section class="fade carousel">
	<div class="container--large">
	<?php if ( $content ) { ?>
		<?php echo $content ?>
	<?php } ?>
		<div class="carousel--slider">
		<?php if( have_rows('carousel') ): ?>

			<?php while( have_rows('carousel') ): the_row();
				$image = get_sub_field('carousel_image');
			?>
			<div class="carousel--slider-item">
				<img loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
			</div>
			<?php endwhile; ?>
		<?php endif; ?>
		</div>
	</div>
</section>