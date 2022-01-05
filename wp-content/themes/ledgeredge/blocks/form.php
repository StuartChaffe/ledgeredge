<?php
/**
* The template used for displaying a form block.
*/
$form = get_field('form', false, false);
?>

<section class="form fade">
	<span class="hide">Hubspot form displays here</span>
	<?php echo $form; ?>
</section>