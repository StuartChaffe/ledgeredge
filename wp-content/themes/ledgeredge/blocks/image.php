<?php
/**
* The template used for displaying an image block.
*/

$image = get_field( 'image');
?>
<div class="fade image">
	<img loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />	
</div>