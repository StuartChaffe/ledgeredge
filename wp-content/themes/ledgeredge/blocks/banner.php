<?php
/**
* The template used for displaying a banner.
*/
$bkgcolor = get_field('background_colour');
$bkgimage = get_field('background_image');
$asset = get_field('banner_colour');
$logo = get_field('banner_logo');
$label = get_field('banner_label');
$title = get_field('banner_title');
$text = get_field('banner_text');
$buttons = get_field('buttons');
$image = get_field('banner_image');

// banner_button
// banner_button_2
// $title = get_field('banner_title', false, false);
?>

<section class="fade <?php echo $bkgcolor ?><?php if ($asset) { ?> <?php echo $asset ?><?php } ?>" <?php if ( $bkgcolor == 'banner--bkg__image' ) { ?> style="background-image: url('<?php echo $bkgimage['url']; ?>')"<?php } ?>>
	<div class="banner container">
	<?php if ( $bkgcolor == 'banner--bkg__image' ) { ?><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 899.95 843.78" class="banner--bkg__asset fade fade--delay__2 <?php echo $asset ?>"><g data-name="Layer 2"><g data-name="Layer 1"><polygon points="590.24 0 899.95 419.57 596.61 843.78 99.44 686.38 95.5 164.89 590.24 0"/><polygon fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="3.94px" points="403.32 13.89 2.36 347.36 195.6 831.73 715.99 797.63 844.36 292.18 403.32 13.89"/></g></g></svg><?php } ?>
		<div class="banner--content fade fade--delay__2">
		<?php if ($label) { ?>
			<p><?php echo $label ?></p>
		<?php } ?>
		<?php if ($logo) { ?>
			<img class="logo" loading="lazy" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
		<?php } ?>
		<?php if ($title) { ?>
			<h1><?php echo $title ?></h1>
		<?php } ?>
		<?php if ($text) { ?>
			<?php echo $text ?>
		<?php } ?>
		<?php if ($buttons['banner_button']) { ?>
			<span class="btn btn--primary"><a href="#" data-featherlight="#banner-video" data-featherlight-iframe-allow="autoplay">Play Video</a></span>
		<?php } ?>
		<?php if ($buttons['banner_button_2']) { ?>
			<span class="btn btn--white"><a href="<?php echo $buttons['banner_button_2']['url']; ?>" href="<?php echo $buttons['banner_button_2']['url']; ?>"><?php echo $buttons['banner_button_2']['title']; ?></a></span>
		<?php } ?>
		
		<a class="hide" href="<?php echo $buttons['banner_button']; ?>" data-featherlight="iframe" allow="autoplay; fullscreen" allowfullscreen >Inline</a>
		<a class="hide" href="https://player.vimeo.com/video/219014507?autoplay=1&loop=1&autopause=0" data-featherlight="iframe" allow="autoplay; fullscreen" allowfullscreen > YT</a>
			
		</div>
		<div class="banner--image fade fade--delay__3">
		<?php if ($image) { ?>
			<img loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		<?php } ?>
		</div>
	</div>
</section>

<div class="lightbox" id="banner-video">
	<video src="<?php echo $buttons['banner_button']; ?>" loop="false" muted="false" data-poster="" preload="" playsinline="" scrollspy="" autoplay="true" poster=""></video>
</div>