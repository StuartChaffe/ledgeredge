<?php
/**
* The template used for displaying a testimonial.
*/
$title = get_field('testimonial_title');
$quote = get_field('quote', false, false);
$author = get_field('author');
$company = get_field('company');
?>

<section class="fade testimonial">
	<?php if ( $title ) { ?><p class="testimonial--title"><?php echo $title; ?></p><?php } ?>
	<?php if ( $quote ) { ?><p class="lead"><strong><?php echo $quote; ?></strong></p><?php } ?>
	<?php if ( $author ) { ?><p class="testimonial--author"><?php echo $author; ?></p><?php } ?>
	<?php if ( $company ) { ?><p class="testimonial--company"><?php echo $company; ?></p><?php } ?>
</section>