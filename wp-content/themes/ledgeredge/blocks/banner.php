<?php
/**
* The template used for displaying a banner.
*/
$bkgcolor = get_field('background_colour');
$bkgimage = get_field('background_image');
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

<section class="fade <?php echo $bkgcolor ?>" <?php if ( $bkgcolor == 'bkg__image' ) { ?>style="background-image: url('<?php echo $bkgimage['url']; ?>')"<?php } ?>>
	<div class="banner container">
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
			<a class="btn" target="" href="">Play Video</a>
		<?php } ?>
		<?php if ($buttons['banner_button_2']) { ?>
			<a class="btn btn--secondary" href="<?php echo $buttons['banner_button_2']['url']; ?>" href="<?php echo $buttons['banner_button_2']['url']; ?>"><?php echo $buttons['banner_button_2']['title']; ?></a>
		<?php } ?>
			
		</div>
		<div class="banner--image fade fade--delay__3">
		<?php if ($image) { ?>
			<img loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		<?php } ?>
		</div>
	</div>
</section>