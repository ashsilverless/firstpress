<?php
/*
// ========= Custom Post Types - Job and Candidate ============
*/

add_action( 'init', 'custom_post_type_job', 0 );
add_action( 'init', 'custom_post_type_candidate', 0 );

// ====== Job
function custom_post_type_job() {
	
    $labels = array(
        'name'                => _x( 'Jobs', 'Post Type General Name',  'firstpress' ),
        'singular_name'       => _x( 'Job',  'Post Type Singular Name', 'firstpress' ),
        'menu_name'           => __( 'Jobs',        'firstpress' ),
        'parent_item_colon'   => __( 'Parent Jobs', 'firstpress' ),
        'all_items'           => __( 'All Jobs',    'firstpress' ),
        'view_item'           => __( 'View Jobs',   'firstpress' ),
        'add_new_item'        => __( 'Add New Job', 'firstpress' ),
        'add_new'             => __( 'Add Job',     'firstpress' ),
        'edit_item'           => __( 'Edit Job',    'firstpress' ),
        'update_item'         => __( 'Update Job',  'firstpress' ),
        'search_items'        => __( 'Search Jobs', 'firstpress' ),
        'not_found'           => __( 'Not Found',   'firstpress' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'firstpress' )
    );
    
    $args = array(
        'label'               => __( 'job', 'firstpress' ),
        'description'         => __( 'Job', 'firstpress' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'taxonomies' ),
        'taxonomies'          => array( 'job' ),
        'menu_icon'			  => 'dashicons-clipboard',
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 110,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page'
    );
    register_post_type( 'job', $args );
}

// ====== Candidate
function custom_post_type_candidate() {
	
    $labels = array(
        'name'                => _x( 'Candidates', 'Post Type General Name', 'firstpress' ),
        'singular_name'       => _x( 'Candidate',  'Post Type Singular Name', 'firstpress' ),
        'menu_name'           => __( 'Candidates',         'firstpress' ),
        'parent_item_colon'   => __( 'Parent Candidates',  'firstpress' ),
        'all_items'           => __( 'All Candidates',     'firstpress' ),
        'view_item'           => __( 'View Candidates',    'firstpress' ),
        'add_new_item'        => __( 'Add New Candidate',  'firstpress' ),
        'add_new'             => __( 'Add Candidate',      'firstpress' ),
        'edit_item'           => __( 'Edit Candidate',     'firstpress' ),
        'update_item'         => __( 'Update Candidate',   'firstpress' ),
        'search_items'        => __( 'Search Candidates',  'firstpress' ),
        'not_found'           => __( 'Not Found',          'firstpress' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'firstpress' )
    );
    
    $args = array(
        'label'               => __( 'candidate', 'firstpress' ),
        'description'         => __( 'Candidate', 'firstpress' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'taxonomies' ),
        'taxonomies'          => array( 'candidate' ),
        'menu_icon'			  => 'dashicons-businessman',
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 110,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page'
        
    );
    register_post_type( 'candidate', $args );
}
