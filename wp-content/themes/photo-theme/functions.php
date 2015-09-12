<?php
/**
 * Author: absentees
 * URL: http://absentees.co
 */

/*------------------------------------*\
    External Modules/Files
\*------------------------------------*/

// Load any external files you have here

/*------------------------------------*\
    Theme Support
\*------------------------------------*/

if (!isset($content_width))
{
    $content_width = 900;
}

if (function_exists('add_theme_support'))
{

    // Add Thumbnail Theme Support
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
    //add_image_size('news-home-hero', 708, 470, true); // Large feature image for main news item on home


    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');
}

/*------------------------------------*\
    Functions
\*------------------------------------*/

// HTML5 Blank navigation
function html5blank_nav()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'header-menu',
		'menu'            => '',
		'container'       => '',
		'container_class' => '',
		'container_id'    => '',
		'menu_class'      => 'nav-link',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul id="js-navigation-menu" class="navigation-menu show">%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}

function register_html5_menu()
{
    register_nav_menus(array( // Using array to specify more menus if needed
        'header-menu' => __('Header Menu', 'html5blank'), // Main Navigation
    ));
}



function load_scripts() {
	if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
        wp_deregister_script('jquery');

        wp_register_script(
            'custom-scripts',
            get_template_directory_uri() . '/js/scripts.js',
            array(),
            '1.0.0',
            false);

         wp_register_script(
            'vendor',
            get_template_directory_uri() . '/js/vendor.js',
            array(),
            '1.0.0',
            false);

        wp_enqueue_script('vendor');
        wp_enqueue_script('owl-carousel');
        wp_enqueue_script('custom-scripts');
    }
}
add_action('wp_enqueue_scripts', 'load_scripts'); // Add Custom Scripts to wp_head

function load_styles() {
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
        wp_register_style('custom-styles', get_template_directory_uri() . '/css/main.css', array(), '1.0');
        wp_register_style('slick-styles', get_template_directory_uri() . '/css/vendors/slick.css', array(), '1.0');

        // Register CSS
        wp_enqueue_style('slick-styles');
        wp_enqueue_style('custom-styles');

    }
}
add_action('wp_enqueue_scripts', 'load_styles'); // Add Custom Styles to wp_head


//Returns an excerpt of given text and length

function create_excerpt($text,$excerpt_length) {
	global $post;
	if ( '' != $text ) {
		$text = strip_shortcodes( $text );
		$text = apply_filters('the_content', $text);
		$text = str_replace(']]>', ']]>', $text);
		$text = wp_trim_words( $text, $excerpt_length, null );
	}
	return apply_filters('the_excerpt', $text);
}


// Removes options from wp-admin sidebar
function remove_menu_items() {
    if( !current_user_can( 'administrator' ) ):
        remove_menu_page('edit.php'); // Posts
        remove_menu_page('edit-comments.php'); // Comments
        remove_menu_page( 'edit.php?post_type=page' );    //Pages
    endif;
}
add_action( 'admin_menu', 'remove_menu_items' );


//Add custom post type

function create_post_type_photo() {
    //register post type Team for single person or department
    register_post_type( 'photo',
        array(
            'labels' => array(
                'name' => __( 'Photos' ),
                'singular_name' => __( 'Photo' ),
                'all_items' => __( 'All Photos' ),
                'edit_item' => __( 'Edit Photos' ),
                'add_new_item' => __( 'Add Photo' )
            ),
            'rewrite' => array( 'slug' => 'photos', 'with_front' => false ),
            'menu_icon' => __( 'dashicons-welcome-widgets-menus'),
            'supports' => array('title'),
            'public' => true,
            'has_archive' => true,
        )
    );
}



// Remove Admin bar
function remove_admin_bar()
{
    return false;
}


/*------------------------------------*\
    Actions + Filters + ShortCodes
\*------------------------------------*/

// Add custom post types
//add_action('init', 'create_post_type_photo'); // Add custom post type: news
add_action('init', 'register_html5_menu'); // Add HTML5 Blank Menu


//add_action('init', 'create_post_type_news'); // Add custom post type: news
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
