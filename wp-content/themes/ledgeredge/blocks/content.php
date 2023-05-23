<?php
/**
* The template used for displaying a content block.
*/
$content = get_field('content');
$bkg = get_field('bkg-colour');
$cols = get_field('content_column');
$btn = get_field('content_button');
?>
<section class="content--container <?php if ( $bkg ) { ?><?php echo $bkg ?><?php } ?>">
	<div class="content fade">
		<?php echo $content; ?>
		<?php if( have_rows('content_column') ): ?>
			<div class="content-cols">
			<?php while( have_rows('content_column') ): the_row();
				$cols = get_sub_field('content');
			?>
				<div class="content-cols-item fade">
					<?php echo $cols; ?>
				</div>
			<?php endwhile; ?>
			</div>
		<?php endif; ?>

		<?php if ( $btn ) { ?><span class="u-center btn btn--secondary"><a href="<?php echo $btn['url']; ?>" target="<?php echo $btn['target']; ?>"><?php echo $btn['title']; ?></a></span><?php } ?>
	</div>
</section>