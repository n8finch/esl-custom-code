<?php

/**
 * Plugin Name: ESLJobHunters Custom Code
 * Plugin URI:  https://ESLJobHunters.com
 * Description: Functionality plugin for ESLJobHunters.com
 * Version:     1.0.0
 * Author:      n8finch
 * Author URI:  https://n8finch.com
 * Text Domain: esljobhunters
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */



/**
 * Register a custom post type called "job postings".
 *
 * @see get_post_type_labels() for label keys.
 */
function esl_job_postings_init() {
    $labels = array(
        'name'                  => _x( 'Job Postings', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Job Posting', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Job Postings', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Job Posting', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'add_new_item'          => __( 'Add New Job Posting', 'textdomain' ),
        'new_item'              => __( 'New Job Posting', 'textdomain' ),
        'edit_item'             => __( 'Edit Job Posting', 'textdomain' ),
        'view_item'             => __( 'View Job Posting', 'textdomain' ),
        'all_items'             => __( 'All Job Postings', 'textdomain' ),
        'search_items'          => __( 'Search Job Postings', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent Job Postings:', 'textdomain' ),
        'not_found'             => __( 'No job postings found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No job postings found in Trash.', 'textdomain' ),
        'featured_image'        => _x( 'Job Posting Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'Job Posting archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
        'insert_into_item'      => _x( 'Insert into job postings', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this job postings', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
        'filter_items_list'     => _x( 'Filter job postings list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
        'items_list_navigation' => _x( 'Job Postings list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
        'items_list'            => _x( 'Job Postings list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'job-postings' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 2,
        'supports'           => array( 'title', 'revisions', 'author', 'excerpt', 'page-attributes', 'thumbnail', 'custom-fields' ),
    );

    register_post_type( 'job-postings', $args );
}

add_action( 'init', 'esl_job_postings_init' );
