<?php
/**
* The template used for displaying a columns block.
*/
$cols = get_field('cols');
?>
<section class="container">
		<?php if( have_rows('cols') ): ?>
			<div class="cols">
			<?php while( have_rows('cols') ): the_row();
				$cols = get_sub_field('cols_content');
			?>
				<div class="cols-item fade">
					<?php echo $cols; ?>
				</div>
			<?php endwhile; ?>
			</div>
		<?php endif; ?>
</section>

