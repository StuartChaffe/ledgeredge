<section class="connect">
	<h2>Connect with LedgerEdge and never miss an update</h2>

	<ul class="social-links">
		<?php if(get_field('twitter', 'options')): ?>
			<li class="social-links__item"><a href="<?php the_field('twitter', 'options'); ?>" target="_blank" class="social-links__link"><?php echo get_icon('twitter'); ?></a></li>
		<?php endif; ?>
		<?php if(get_field('facebook', 'options')): ?>
			<li class="social-links__item"><a href="<?php the_field('facebook', 'options'); ?>" target="_blank" class="social-links__link"><?php echo get_icon('facebook'); ?></a></li>
		<?php endif; ?>
		<?php if(get_field('instagram', 'options')): ?>
			<li class="social-links__item"><a href="<?php the_field('instagram', 'options'); ?>" target="_blank" class="social-links__link"><?php echo get_icon('instagram'); ?></a></li>
		<?php endif; ?>
		<?php if(get_field('youtube', 'options')): ?>
			<li class="social-links__item"><a href="<?php the_field('youtube', 'options'); ?>" target="_blank" class="social-links__link"><?php echo get_icon('youtube'); ?></a></li>
		<?php endif; ?>
		<?php if(get_field('vimeo', 'options')): ?>
			<li class="social-links__item"><a href="<?php the_field('vimeo', 'options'); ?>" target="_blank" class="social-links__link"><?php echo get_icon('vimeo'); ?></a></li>
		<?php endif; ?>
		<?php if(get_field('linkedin', 'options')): ?>
			<li class="social-links__item"><a href="<?php the_field('linkedin', 'options'); ?>" target="_blank" class="social-links__link"><?php echo get_icon('linkedin'); ?></a></li>
		<?php endif; ?>
	</ul>
</section>