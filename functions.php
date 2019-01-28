<?php
// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );
add_theme_support( 'post-thumbnails' ); 
/**
* Registers a new post type
* @uses $wp_post_types Inserts new post type object into the list
*
* @param string  Post type key, must not exceed 20 characters
* @param array|string  See optional args description above.
* @return object|WP_Error the registered post type object, or an error object
*/
if ( !class_exists( 'reduxframework' ) && file_exists( dirname( __FILE__ ) . '/reduxframework/ReduxCore/framework.php' ) ) {
    require_once( dirname( __FILE__ ) . '/reduxframework/ReduxCore/framework.php' );
}
if ( !isset( $redux_demo ) && file_exists( dirname( __FILE__ ) . '/reduxframework/sample/sample-config.php' ) ) {
    require_once( dirname( __FILE__ ) . '/reduxframework/sample/sample-config.php' );
}
 add_action( 'init', 'codex_book_init' );
function codex_book_init() {
	$labels = array(
		'name'               => _x( ' OUR SERVICE', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'service', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'OUR SERVICE', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'service', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'service', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New service', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New service', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit service', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View service', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All service', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search service', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent service', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No service found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No service found in Trash.', 'your-plugin-textdomain' )
	);
	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'service' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);
register_post_type( 'service', $args );
}
add_action( 'init', 'create_book_tax1' );

function create_book_tax1() {
        register_taxonomy(
                'Categories',
                'project',
                array(
                        'label' => __( 'Categories' ),
                        'rewrite' => array( 'slug' => 'Categories' ),
                        'hierarchical' => true,
                )
        );
}
add_action( 'init', 'portfolio' );
function portfolio() {
	$labels = array(
		'name'               => _x( ' OUR PORTFOLIO', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'portfolio', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'OUR PORTFOLIO', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'portfolio', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'portfolio', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New portfolio', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New portfolio', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit portfolio', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View portfolio', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All portfolio', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search portfolio', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent portfolio', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No portfolio found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No portfolio found in Trash.', 'your-plugin-textdomain' )
	);
	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'portfolio' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);
register_post_type( 'portfolio', $args );
}
add_action( 'init', 'news' );
function news() {
	$labels = array(
		'name'               => _x( ' FRESH NEWS', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'news', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( ' FRESH NEWS', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'news', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'news', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New news', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New news', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit news', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View news', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All news', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search news', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent news', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No news found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No news found in Trash.', 'your-plugin-textdomain' )
	);
	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'news' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);
register_post_type( 'news', $args );
}
add_action( 'init', 'team' );
function team() {
	$labels = array(
		'name'               => _x( ' OUR TEAM', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'team', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'OUR TEAM', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'team', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'team', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New team', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New team', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit team', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View team', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All team', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search team', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent team', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No team found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No team found in Trash.', 'your-plugin-textdomain' )
	);
	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'team' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);
register_post_type( 'team', $args );
}
function arphabet_widgets_init() {
	register_sidebar( array(
		'name'          => 'Footer One',
		'id'            => 'one',
		'before_widget' => '<div class="footer-wedget-one">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'Footer Two',
		'id'            => 'two',
		'before_widget' => '<div class="footer-wedget-two">',
		'after_widget'  => ' </div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'Footer Three',
		'id'            => 'three',
		'before_widget' => '<div class="footer-wedget-three">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'Footer Four',
		'id'            => 'four',
		'before_widget' => '<div class="footer-wedget-three">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );
add_action( 'wp_head', 'change_color');
function change_color(){
    ?>
   <style>
   #top-bar::after {
    background-color: #ccc;
}
   </style>

   <?php
}
?>