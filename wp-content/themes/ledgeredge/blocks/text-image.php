<?php
/**
* The template used for displaying a text with image block.
*/
$bkg = get_field('bkg-colour');
$bkgimage = get_field('bkg-image');

$text = get_field('text-image-text');
$image = get_field('text-image-image');
?>
<section class="fade text-image <?php echo $bkg ?> text-image__single">
	<div class="text-image--text fade fade--delay__2">
		<?php echo $text ?>
	</div>
	<div class="text-image--image fade fade--delay__3">
		<img loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
	</div>
</section>