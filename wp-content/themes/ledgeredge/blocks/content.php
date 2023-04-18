<?php
/**
* The template used for displaying a content block.
*/
$content = get_field('content');
$bkg = get_field('bkg-colour');
?>
<section class="content--container <?php if ( $bkg ) { ?><?php echo $bkg ?><?php } ?>">
	<div class="content fade">
		<?php echo $content; ?>
	</div>
</section>