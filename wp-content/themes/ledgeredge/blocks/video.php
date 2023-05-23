<?php
/**
* The template used for displaying a video block.
*/

$video = get_field( 'video');
?>
<div class="fade video">
	<?php if ($video) { ?>
	<video muted preload loop autoplay <?php if ( $poster ) { ?>poster="<?php echo $poster['url']; ?>"<?php } ?>>
		<source src="<?php echo $video['url']; ?>" type="video/mp4">
		<p>Your user agent does not support the HTML5 Video element.</p>
	</video>
	<?php } ?>
</div>