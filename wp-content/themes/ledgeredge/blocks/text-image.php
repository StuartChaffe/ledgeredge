<?php
/**
* The template used for displaying a text with image block.
*/
$blocks = get_field('no_blocks');
$bkg = get_field('bkg-colour');
$bkgimage = get_field('bkg-image');

$text = get_field('text-image-text');
$image = get_field('text-image-image');
?>
<div class="container">
<section class="text-image <?php echo $bkg ?><?php if ( $blocks == 'text-image__single' ) { ?> fade text-image__single<?php } ?>">
<?php if ( $blocks == 'text-image__single' ) { ?>
	<div class="text-image--text text-image__single--text fade fade--delay__2">
		<?php echo $text ?>
		<a href="" class="btn">Book a demo</a>
	</div>
	<div class="text-image--image fade fade--delay__3">
		<img loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
	</div>
<?php } ?>
<?php if ( $blocks == 'text-image__double' ) { ?>
	<?php if( have_rows('blocks') ): ?>
		<?php while( have_rows('blocks') ): the_row();
			$bkg = get_sub_field('bkg-colour');
			// $bkgimage = get_sub_field('bkg-image');

			$text = get_sub_field('text-image-text');
			$image = get_sub_field('text-image-image');
		?>
		<div class="text-image__double <?php echo $bkg ?> fade">
			<div class="text-image--text text-image__double--text">
				<?php echo $text ?>
				<a href="" class="btn">Book a demo</a>
			</div>
			<?php if ( $image ) { ?>
			<div class="text-image--image">
				<img loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			</div>
			<?php } ?>
		</div>

		<?php endwhile; ?>
	<?php endif; ?>
<?php } ?>
</section>
</div>