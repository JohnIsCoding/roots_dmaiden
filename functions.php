<?php
/**
 * Roots functions
 */

if (!defined('__DIR__')) { define('__DIR__', dirname(__FILE__)); }

require_once locate_template('/inc/util.php');            // Utility functions
require_once locate_template('/inc/config.php');          // Configuration and constants
require_once locate_template('/inc/activation.php');      // Theme activation
require_once locate_template('/inc/template-tags.php');   // Template tags
require_once locate_template('/inc/cleanup.php');         // Cleanup
require_once locate_template('/inc/scripts.php');         // Scripts and stylesheets
require_once locate_template('/inc/htaccess.php');        // Rewrites for assets, H5BP .htaccess
require_once locate_template('/inc/hooks.php');           // Hooks
require_once locate_template('/inc/actions.php');         // Actions
require_once locate_template('/inc/widgets.php');         // Sidebars and widgets
require_once locate_template('/inc/custom.php');          // Custom functions

function roots_setup() {

  // Make theme available for translation
  load_theme_textdomain('roots', get_template_directory() . '/lang');

  // Register wp_nav_menu() menus (http://codex.wordpress.org/Function_Reference/register_nav_menus)
  register_nav_menus(array(
    'primary_navigation' => __('Primary Navigation', 'roots'),
  ));

  // Add post thumbnails (http://codex.wordpress.org/Post_Thumbnails)
  add_theme_support('post-thumbnails');
  // set_post_thumbnail_size(150, 150, false);
  // add_image_size('category-thumb', 300, 9999); // 300px wide (and unlimited height)

  // Add post formats (http://codex.wordpress.org/Post_Formats)
  // add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));

  // Tell the TinyMCE editor to use a custom stylesheet
  add_editor_style('css/editor-style.css');

}

add_action('after_setup_theme', 'roots_setup');



/*
//register a new post type
add_action( 'init', 'register_cpt_gallery' );
    function register_cpt_gallery() {
    $labels = array(
    'name' => _x( 'Exhibits', 'gallery' ),
    'singular_name' => _x( 'Exhibit', 'gallery' ),
    'add_new' => _x( 'Add New', 'gallery' ),
    'add_new_item' => _x( 'Add New Exhibit', 'gallery' ),
    'edit_item' => _x( 'Edit Exhibit', 'gallery' ),
    'new_item' => _x( 'New Exhibit', 'gallery' ),
    'view_item' => _x( 'View Exhibit', 'gallery' ),
    'search_items' => _x( 'Search the Gallery', 'gallery' ),
    'not_found' => _x( 'Not found', 'gallery' ),
    'not_found_in_trash' => _x( 'Not found in Trash', 'gallery' ),
    'parent_item_colon' => _x( 'Parent Exhibit:', 'gallery' ),
    'menu_name' => _x( 'Exhibits', 'gallery' ),
    );
    $args = array(
    'labels' => $labels,
    'hierarchical' => false,
    'description' => 'Exhibits here will be displayed in the Gallery. Remember to set a "Featured Image". ',
    'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'post-formats' ),
    'taxonomies' => array( 'category', 'post_tag' ),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'show_in_nav_menus' => true,
    'publicly_queryable' => true,
    'exclude_from_search' => false,
    'has_archive' => true,
    'query_var' => true,
    'can_export' => true,
    'rewrite' => true,
    'capability_type' => 'post'
    );
    register_post_type( 'gallery', $args );
    } 
*/
    
   
   
    if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'thumbnail-small', 60, 60, true ); //(cropped)
}

