<?php
/**
* The template used for displaying an image block.
*/

$image = get_field( 'image');
$bkg = get_field('bkg-colour');
?>
<div class="fade image <?php if ( $bkg ) { ?><?php echo $bkg ?><?php } ?>">
	<img loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />	
</div>