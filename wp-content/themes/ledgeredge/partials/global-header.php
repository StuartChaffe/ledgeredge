<?php
/**
* The template used for displaying an accordion.
*/
$color = get_field( 'header_colour');
?>
<header class="global-header <?php if ( $color == 'global-header__light' ) { ?><?php echo 'global-header__light' ?><?php } else { ?><?php echo 'global-header__dark' ?><?php } ?>">
	<div class="global-header--inner">
		<nav class="global-header--nav global-header--nav__primary">
			<?php wp_nav_menu( array('theme_location' => 'primary') ); ?>
		</nav>
		<?php if ( $color == 'global-header__light' ) { ?><h1 class="global-header--logo global-header--logo__light"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/src/images/logo.svg" alt="Ledger Edge logo" /></a></h1>
		<?php } else { ?>
		<h1 class="global-header--logo global-header--logo__dark"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/src/images/logo-dark.svg" alt="Ledger Edge logo" /></a></h1><?php } ?>
		<nav class="global-header--nav global-header--nav__secondary">
			<?php wp_nav_menu( array('theme_location' => 'secondary') ); ?>
		</nav>

		<button class="global-header--nav-btn" type="button">
			<span class="global-header--nav-box">
				<span class="global-header--nav-inner"><span>Show menu</span></span>
			</span>
		</button>
		<nav class="global-header--nav global-header--nav__mobile">
			<?php wp_nav_menu( array('theme_location' => 'mobile') ); ?>
		</nav>
	</div>
</header>