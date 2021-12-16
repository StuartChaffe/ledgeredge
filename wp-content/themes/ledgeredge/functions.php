<?php

// Set theme defaults, tidy up WP
require_once( 'lib/theme-setup.php' );

// Load scrips
require_once( 'lib/enqueue.php' );

// Images
require_once( 'lib/images.php' );

// Configure menus
require_once( 'lib/menus.php' );

// ACF configuration
require_once( 'lib/acf.php' );

// Custom Gutenberg blocks
require_once( 'lib/blocks.php' );

// Vendor specific functions
require_once( 'lib/vendors.php' );

// Helper functions
require_once( 'lib/helpers.php' );



function my_login_logo() { ?>
	<style type="text/css">
		#login h1 a, .login h1 a {
		background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/src/images/logo-dark.svg);
		height:85px;
		width: 200px;
		background-size: 200px 85px;
		background-repeat: no-repeat;
			padding-bottom: 30px;
		}
		.wp-core-ui .button-primary {
			background: #f77f64 !important;
			background-color: #f77f64 !important;
			border: 0 !important;
		}
		.wp-core-ui .button.button-large {
			padding: 5px 22px !important;
			border-radius: 0;
			font-size: 16px !important;
		}
		a {
			color: #000 !important;
		}
		.privacy-policy-page-link {
			display: none;
		}
		.login-action-login {
			display: flex;
    		flex-direction: column;
			background-color: #efece6 !important;
		}
		.login label {
			font-size: 16px !important;
		}
		.login form {
			padding: 0px !important; 
			background: transparent !important;
			border: 0 !important;
			box-shadow: none !important;
		}
		#login {
			/* width: 370px !important; */
			padding: 0 !important;
		}
		.login #nav,
		.login #backtoblog {
			padding: 0 !important;
		}
		#login input[type=text],
		#login input[type=password] {
			border-radius: 0 !important;
			border: 0 !important;
			padding: 10px 10px !important;
			box-shadow: none !important;
		}
		.login .button.wp-hide-pw .dashicons {
			top: 10px !important;
		}
	</style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );