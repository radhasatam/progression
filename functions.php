<?php
define( 'HOME_URL', trailingslashit( home_url() ) );
define( 'THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'THEME_URL', trailingslashit( get_template_directory_uri() ) );

if (!function_exists('progression_theme_options')) {
	function progression_theme_options() {
  }
}

if (!function_exists('progression_library')) {
	function progression_library() {
	}
}

?>
