<?php
if (!function_exists('progression_theme_setup')) {
    function progression_theme_setup() {
        // if ( ! isset( $content_width ) ) $content_width = 1170;

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

      /*
  		 * Enable support for Post Thumbnails on posts and pages.
  		 *
  		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
  		 */
        add_theme_support( 'post-thumbnails' );

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
            'primary'     => __( 'Primary Menu', 'progression-framework' )
        ) );

        // Enable support for Post Formats.
        add_theme_support( 'post-formats', array( 'image', 'gallery', 'video', 'audio', 'quote', 'link', 'aside' ) );


        global $wp_version;

        if (version_compare($wp_version,'4.1','>=')){
            add_theme_support( "title-tag" );
        }

        if ( version_compare( $wp_version, '3.4', '>=' ) ) {
            add_theme_support( "custom-header");
            add_theme_support( "custom-background");
        }

        // Enable support for HTML5 markup.
        add_theme_support( 'html5', array(
            'comment-list',
            'search-form',
            'comment-form',
            'gallery',
        ) );

        $language_path = get_stylesheet_directory() .'/languages';
        if(!is_dir($language_path)){
            $language_path = get_template_directory() . '/languages';
        }
        load_theme_textdomain( 'progression-framework', $language_path );

        // Apply filter do_shortcode
        // add_filter('widget_text', 'do_shortcode');
		    // add_filter('widget_content', 'do_shortcode');

        /*Thumbnail size*/
        // add_image_size( 'blog-grid', 570, 378, true);
        //add_image_size( 'blog-classic', 1170, 510, true);
        // add_image_size( 'blog-classic', 1170, 775, true);

	    // add_editor_style( array( '/assets/css/editor-style.css' ) );
    }
    add_action( 'after_setup_theme', 'progression_theme_setup');
}
?>
