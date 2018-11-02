<?php 

// Register Sidebars
function wpcourse_sidebar() {

	$args = array(
		'id'            => 'Custom-sidebar',
		'class'         => 'Custom-sidebar',
		'name'          => __( 'Custom sidebar', 'wpcourse' ),
		'description'   => __( 'for a custom sidebar', 'wpcourse' ),
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
	);
	register_sidebar( $args );
	
	$args = array(
		'id'            => 'my-sidebar',
		'class'         => 'my-sidebar',
		'name'          => __( 'my sidebar', 'wpcourse' ),
		'description'   => __( 'its my sidebar', 'wpcourse' ),
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
	);
	register_sidebar( $args );

}


add_action( 'widgets_init', 'wpcourse_sidebar' );

// Register Sidebars
function wpsidebar() {

	$args = array(
		'id'            => 'wp-sidebar',
		'class'         => 'wp-sidebar',
		'name'          => __( 'wp sidebar', 'wpcourse' ),
		'description'   => __( 'this is wp sidebar', 'wpcourse' ),
		'after_title'   => '</h2>',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
	);
	register_sidebar( $args );

}
add_action( 'widgets_init', 'wpsidebar' );


// Register Navigation Menus
function custom_menu() {

	$locations = array(
		'menu' => __( 'this is my menu', 'wpcourse' ),
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'custom_menu' );

// Register Sidebars
function amrit_sidebar() {

	$args = array(
		'id'            => 'amrit-sidebar',
		'class'         => 'amrit-sidebar',
		'name'          => __( 'amrit sidebar', 'wpcourse' ),
		'description'   => __( 'this is amritsidebar', 'wpcourse' ),
		'after_title'   => '</h2>',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
	);
	register_sidebar( $args );

}
add_action( 'widgets_init', 'amrit_sidebar' );

// Register Sidebars
function nejit_sidebar() {

	$args = array(
		'id'            => 'nejit_sidebar',
		'class'         => 'nejit_sidebar',
		'name'          => __( 'nejit', 'wpcourse' ),
		'description'   => __( 'nejit', 'wpcourse' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
	);
	register_sidebar( $args );

}
add_action( 'widgets_init', 'nejit_sidebar' );

// Register Sidebars
function nejit_sidebar1() {

	$args = array(
		'id'            => 'nejit_sidebar1',
		'class'         => 'nejit_sidebar1',
		'name'          => __( 'nejit1', 'wpcourse' ),
		'description'   => __( 'nejit1', 'wpcourse' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
	);
	register_sidebar( $args );

}
add_action( 'widgets_init', 'nejit_sidebar1' );

 // Register Navigation Menus
function custom_menu1() {

	$locations = array(
		'menu1' => __( 'this is my menu1', 'wpcourse' ),
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'custom_menu1' );




function wpcourse_assets(){
    wp_enqueue_style('my-wpcourse', get_stylesheet_uri());
	wp_enqueue_style('my-wpcourse-blog', get_template_directory_uri() .'/assets/css/blog.css');
	wp_enqueue_style('my-wpcourse-fontawesome',  get_template_directory_uri() .'/assets/css/fontawesome.css');
	wp_enqueue_style('my-wpcourse-fontawesome1', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css');
	wp_enqueue_style('my-wpcourse-slick',  get_template_directory_uri() .'/assets/css/slick.css');
	wp_enqueue_style('my-wpcourse-slick1',  get_template_directory_uri() .'/assets/css/slick-theme.css');
	
	wp_enqueue_script('my-wpcourse-slick2',  get_template_directory_uri() .'/assets/js/slick.min.js');
	wp_enqueue_script('my-wpcourse-slick3',  get_template_directory_uri() .'/assets/js/app.js');

    //wp_enqueue_script('my-wpcourse-holder', get_template_directory_uri(). '/assets/js/holder.min.js', array(), '2.9.4', true);
}
add_action('wp_enqueue_scripts', 'wpcourse_assets');



// Register Custom Post Type
function wpcourse_register_teammembers() {

	$labels = array(
		'name'                  => _x( 'Team Members', 'Post Type General Name', 'wpcourse' ),
		'singular_name'         => _x( 'Team Member', 'Post Type Singular Name', 'wpcourse' ),
		'menu_name'             => __( 'Team Member', 'wpcourse' ),
		'name_admin_bar'        => __( 'Team Member', 'wpcourse' ),
		'archives'              => __( 'Team Member Archives', 'wpcourse' ),
		'attributes'            => __( 'Team Member Attributes', 'wpcourse' ),
		'parent_item_colon'     => __( 'Parent Team Member', 'wpcourse' ),
		'all_items'             => __( 'All Team Member', 'wpcourse' ),
		'add_new_item'          => __( 'Add Team Member', 'wpcourse' ),
		'add_new'               => __( 'Add Team Member', 'wpcourse' ),
		'new_item'              => __( 'New Team Member', 'wpcourse' ),
		'edit_item'             => __( 'Edit Team Member', 'wpcourse' ),
		'update_item'           => __( 'Update Team Member', 'wpcourse' ),
		'view_item'             => __( 'View Team Member', 'wpcourse' ),
		'view_items'            => __( 'View Team Member', 'wpcourse' ),
		'search_items'          => __( 'Search Team Member', 'wpcourse' ),
		'not_found'             => __( 'Not found', 'wpcourse' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'wpcourse' ),
		'featured_image'        => __( 'Featured Image', 'wpcourse' ),
		'set_featured_image'    => __( 'Set featured image', 'wpcourse' ),
		'remove_featured_image' => __( 'Remove featured image', 'wpcourse' ),
		'use_featured_image'    => __( 'Use as featured image', 'wpcourse' ),
		'insert_into_item'      => __( 'Insert into item', 'wpcourse' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'wpcourse' ),
		'items_list'            => __( 'Team Members list', 'wpcourse' ),
		'items_list_navigation' => __( 'Team Member list navigation', 'wpcourse' ),
		'filter_items_list'     => __( 'Team Member items list', 'wpcourse' ),
	);
	$args = array(
		'label'                 => __( 'Team Member', 'wpcourse' ),
		'description'           => __( 'this is for team', 'wpcourse' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'team', $args );

}
add_action( 'init', 'wpcourse_register_teammembers', 0 );


// Register Custom Post Type
function wpcourse_assigement() {

	$labels = array(
		'name'                  => _x( 'Assignment', 'Post Type General Name', 'wpcourse' ),
		'singular_name'         => _x( 'Assignment', 'Post Type Singular Name', 'wpcourse' ),
		'menu_name'             => __( 'Assignment', 'wpcourse' ),
		'name_admin_bar'        => __( 'Assignment', 'wpcourse' ),
		'archives'              => __( 'Assigement Archives', 'wpcourse' ),
		'attributes'            => __( 'Assigement Attributes', 'wpcourse' ),
		'parent_item_colon'     => __( 'Parent Assigement', 'wpcourse' ),
		'all_items'             => __( 'All Assigement', 'wpcourse' ),
		'add_new_item'          => __( 'Add New Assigement', 'wpcourse' ),
		'add_new'               => __( 'Add Assigement', 'wpcourse' ),
		'new_item'              => __( 'New Assigement', 'wpcourse' ),
		'edit_item'             => __( 'Edit Assigement', 'wpcourse' ),
		'update_item'           => __( 'Update Assigement', 'wpcourse' ),
		'view_item'             => __( 'View Assigement', 'wpcourse' ),
		'view_items'            => __( 'View Assigement', 'wpcourse' ),
		'search_items'          => __( 'Search Assigement', 'wpcourse' ),
		'not_found'             => __( 'Not found', 'wpcourse' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'wpcourse' ),
		'featured_image'        => __( 'Featured Image', 'wpcourse' ),
		'set_featured_image'    => __( 'Set featured image', 'wpcourse' ),
		'remove_featured_image' => __( 'Remove featured image', 'wpcourse' ),
		'use_featured_image'    => __( 'Use as featured image', 'wpcourse' ),
		'insert_into_item'      => __( 'Insert into Assigement', 'wpcourse' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Assigement', 'wpcourse' ),
		'items_list'            => __( 'Assigement list', 'wpcourse' ),
		'items_list_navigation' => __( 'Assigement list navigation', 'wpcourse' ),
		'filter_items_list'     => __( 'Filter Assigement list', 'wpcourse' ),
	);
	$args = array(
		'label'                 => __( 'Assigement', 'wpcourse' ),
		'description'           => __( 'This Is for assigement', 'wpcourse' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'post-formats' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Assigement', $args );

}
add_action( 'init', 'wpcourse_assigement', 0 );

?>


