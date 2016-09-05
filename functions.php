<?php
define( 'HOME_URL', trailingslashit( home_url() ) );
define( 'THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'THEME_URL', trailingslashit( get_template_directory_uri() ) );

if (!function_exists('progression_theme_options')) {
	function progression_theme_options() {
		if (!class_exists( 'ReduxFramework' )) {
			require_once( THEME_DIR . 'library/options/framework.php' );
		}
		require_once( THEME_DIR . 'includes/options-config.php' );

		// global $progression_framework_options, $progression_options;
		// $g5plus_options = $g5plus_innovation_options;
	}
	progression_theme_options();
}


if (!function_exists('progression_library')) {
	function progression_library() {
		require_once( THEME_DIR . 'library/progression-framework.php');
		require_once( THEME_DIR . 'includes/admin-enqueue.php');
		require_once( THEME_DIR . 'includes/frontend-enqueue.php');
		require_once( THEME_DIR . 'includes/metabox-config.php');
		require_once( THEME_DIR . 'includes/theme-functions.php');
		require_once( THEME_DIR . 'includes/theme-setup.php');

		// require_once( THEME_DIR . 'includes/register-require-plugin.php');
		// require_once( THEME_DIR . 'includes/sidebar.php');
		// require_once( THEME_DIR . 'includes/theme-action.php');
		// require_once( THEME_DIR . 'includes/theme-filter.php');
		// require_once( THEME_DIR . 'includes/tax-meta.php');
	}
}

?>
