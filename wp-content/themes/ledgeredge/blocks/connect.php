<section class="bkg__grey">
	<div class="connect container">
		<?php if(get_field('connect_content', 'options')): ?>
		<div class="connect--title">
			<h4><?php echo the_field('connect_content', 'options'); ?></h4>
		</div>
		<?php endif; ?>
		<div class="connect--social-links">
			<?php if(get_field('twitter', 'options')): ?>
				<div class="connect--social-links-item"><a href="<?php the_field('twitter', 'options'); ?>" target="_blank" class="connect--social-links-item-link"><?php echo get_icon('twitter'); ?>
				<span>Follow us</span></a></div>
			<?php endif; ?>
			<?php if(get_field('linkedin', 'options')): ?>
				<div class="connect--social-links-item"><a href="<?php the_field('linkedin', 'options'); ?>" target="_blank" class="connect--social-links-item-link"><?php echo get_icon('linkedin'); ?>
				<span>Connect</span></a></div>
			<?php endif; ?>
			<div class="connect--social-links-item"><a href="/contact-us" class="connect--social-links-item-link"><?php echo get_icon('email'); ?>
				<span>Contact</span></a></div>
		</div>
	</div>
</section>