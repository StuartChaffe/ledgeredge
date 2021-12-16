<?php
/**
* The template used for displaying a banner.
*/
$bkgcolor = get_field('background_colour');
$imagemobile = get_field('banner_image_mobile');
$title = get_field('banner_title', false, false);
?>

<section class="banner <?php echo $bkgcolor ?>">
	&nbsp;
</section>