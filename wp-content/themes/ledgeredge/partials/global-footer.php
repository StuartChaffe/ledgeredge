<footer class="global-footer">
	<div class="global-footer--inner">
		<div class="global-footer--info">
			<a href="<?php echo home_url(); ?>" class="global-footer--logo"><img src="<?php echo get_template_directory_uri(); ?>/src/images/logo-dark.svg" alt="Ledger Edge logo" /></a>
			<div class="global-footer--copy hidemobile"><p>&copy; <?php echo date('Y'); ?> LedgerEdge</p> <?php wp_nav_menu( array('theme_location' => 'privacy') ); ?></div>
		</div>
		<div class="global-footer--links">
			<?php wp_nav_menu( array('theme_location' => 'footer-left') ); ?>
			<?php wp_nav_menu( array('theme_location' => 'footer-right') ); ?>
			<div class="global-footer--links__connect">
				<p>Connect</p>
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
			</div>
		</div>
		<div class="global-footer--copy hidedesktop"><p>&copy; <?php echo date('Y'); ?> LedgerEdge</p> <?php wp_nav_menu( array('theme_location' => 'privacy') ); ?></div>
	</div>
</footer>
