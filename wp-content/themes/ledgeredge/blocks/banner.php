<?php
/**
* The template used for displaying a banner.
*/
$size = get_field('banner_size');
$bkgcolor = get_field('background_colour');
$bkgimage = get_field('background_image');
$edges = get_field('banner_edges');
// $asset = get_field('banner_colour');
// $logo = get_field('banner_logo');
// $label = get_field('banner_label');
// $title = get_field('banner_title');
$text = get_field('banner_text');
$buttons = get_field('buttons');
$image = get_field('banner_image');

// banner_button
// banner_button_2
// $title = get_field('banner_title', false, false);
?>

<section class="fade <?php echo $bkgcolor ?>" <?php if ( $bkgcolor == 'banner--bkg__image' ) { ?> style="background-image: url('<?php echo $bkgimage['url']; ?>')"<?php } ?>>
	<div class="banner<?php if ( $size == 'banner__small' ) { ?> banner__small<?php } ?><?php if ( $edges == ! 'True' ) { ?> banner__pad<?php } ?>">
		<div class="banner--content fade fade--delay__2">
		<?php if ($text) { ?>
			<?php echo $text ?>
		<?php } ?>
		<?php if ($buttons['banner_button']) { ?>
			<span class="btn btn--primary"><a href="#" data-featherlight="#banner-video" data-featherlight-iframe-allow="autoplay">Play Video</a></span>
		<?php } ?>
		<?php if ($buttons['banner_button_2']) { ?>
			<span class="btn btn--primary"><a href="<?php echo $buttons['banner_button_2']['url']; ?>"><?php echo $buttons['banner_button_2']['title']; ?></a></span>
		<?php } ?>
		
		<a class="hide" href="<?php echo $buttons['banner_button']; ?>" data-featherlight="iframe" allow="autoplay; fullscreen" allowfullscreen >Inline</a>
		<a class="hide" href="https://player.vimeo.com/video/219014507?autoplay=1&loop=1&autopause=0" data-featherlight="iframe" allow="autoplay; fullscreen" allowfullscreen > YT</a>
			
		</div>
		<div class="banner--image fade fade--delay__3" <?php if ( $size == 'banner__small' ) { ?>style="background-image: url('<?php echo $image['url']; ?>')"<?php } ?>>
		<?php if ($image) { ?>
			<img loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		<?php } ?>
		</div>
	</div>
</section>

<div class="lightbox" id="banner-video">
	<video src="<?php echo $buttons['banner_button']; ?>" controls="controls" loop="false" muted="false" data-poster="" preload="" playsinline="" scrollspy="" autoplay="true" poster=""></video>
</div>