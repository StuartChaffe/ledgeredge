<?php
/**
* The template used for displaying a text with image block.
*/
$blocks = get_field('no_blocks');
$bkg = get_field('bkg-colour');
$bkgimage = get_field('bkg-image');

$text = get_field('text-image-text');
$image = get_field('image');
?>
<div class="container--large">
<section class="text-image <?php if ( $bkg ) { ?><?php echo $bkg ?><?php } ?><?php if ( $bkgimage ) { ?>bkg__image<?php } ?><?php if ( $blocks == 'text-image__single' ) { ?> fade text-image__single<?php } ?>" <?php if ( $bkgimage ) { ?>style="background-image:url(<?php echo $bkgimage['url'] ?>);"<?php } ?>>
<?php if ( $blocks == 'text-image__single' ) { ?>
	<div class="text-image--text text-image__single--text">
		<?php echo $text ?>
	</div>
	<?php if ( $image['text-image-image'] ) { ?>
	<div class="text-image--image<?php if ( $image['text-image-pad'] == '1' ) { ?> text-image--image__pad<?php } elseif ( $image['text-image-pad-left'] == '0' ) { ?> text-image--image__pad-left<?php } else { ?> text-image--image__nopad<?php } ?>" <?php if ( $image['text-image-pad'] == '0' ) { ?>style="background-image: url('<?php echo $image['text-image-image']['url']; ?>')"<?php } ?>>
		<img loading="lazy" src="<?php echo $image['text-image-image']['url']; ?>" alt="<?php echo $image['text-image-image']['alt']; ?>" />
	</div>
	<?php } ?>
<?php } ?>
<?php if ( $blocks == 'text-image__double' ) { ?>
	<?php if( have_rows('blocks') ): ?>
		<?php while( have_rows('blocks') ): the_row();
			$bkg = get_sub_field('bkg-colour');
			// $bkgimage = get_sub_field('bkg-image');

			$text = get_sub_field('text-image-text');
			$image = get_sub_field('text-image-image');
		?>
		<div class="text-image__double fade <?php echo $bkg ?> <?php if ( $image ) { ?>text-image--text__half<?php } ?>">
			<div class="text-image--text text-image__double--text">
				<?php echo $text ?>

				<?php if( have_rows('icons') ): ?>
					<div class="text-image--text__icons">
					<?php while( have_rows('icons') ): the_row();
						$icon = get_sub_field('icon');
					?>
						<img loading="lazy" src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
					<?php endwhile; ?>
					</div>
				<?php endif; ?>

			</div>
			<?php if ( $image ) { ?>
			<div class="text-image__double--image">
				<img loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			</div>
			<?php } ?>
		</div>

		<?php endwhile; ?>
	<?php endif; ?>
<?php } ?>
</section>
</div>