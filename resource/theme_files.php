<?php 

    add_theme_support( 'post-thumbnails' );

    // Register Custom Post Type
    function cpt()
    {
        // Slider
        register_post_type( 'slider', array(
            'public' => true,
            'label' => 'Slider',
            'show_ui' => true,
            'show_in_nav_menus' => true,
            'descriptions' => 'Carousel Slider',
            'menu_icon' => 'dashicons-cover-image',
            'labels' => array(
                'edit_item' => 'Edit Image',
                'add_new' => 'Add Image',
                'add_new_item' => 'Add New Image',
                'new_item' => 'New Image',
                'view_item' => 'View Image',
                'all_items' => 'All Images',
                'singular_name' => 'Image',
                'menu_name' => 'Slider',
            ),
            'supports' => array(
                'title',
                'thumbnail',
                'editor',
            ),
        ) );

        // Dates Products
        register_post_type( 'dateproduct', array(
            'public' => true,
            'label' => 'Date Product',
            'show_ui' => true,
            'show_in_nav_menus' => true,
            'show_in_rest' => true,
            'descriptions' => 'For Selling Date',
            'menu_icon' => 'dashicons-products',
            'labels' => array(
                'edit_item' => 'Edit Date',
                'add_new' => 'Add Date',
                'add_new_item' => 'Add New Date',
                'new_item' => 'New Date',
                'view_item' => 'View Date',
                'all_items' => 'All Dates',
                'singular_name' => 'Date',
                'menu_name' => 'Dates',
            ),
            'supports' => array(
                'title',
                'thumbnail',
                'editor',
                'excerpt',
            ),
        ) );

        // Testimonials
        register_post_type( 'testimonials', array(
            'public' => true,
            'label' => 'Testimonials',
            'show_ui' => true,
            'show_in_nav_menus' => true,
            'descriptions' => 'Reviews by our beloved customers',
            'menu_icon' => 'dashicons-testimonial',
            'labels' => array(
                'edit_item' => 'Edit Testimonial',
                'add_new' => 'Add Testimonial',
                'add_new_item' => 'Add New Testimonial',
                'new_item' => 'New Testimonial',
                'view_item' => 'View Testimonial',
                'all_items' => 'All Testimonials',
                'singular_name' => 'Testimonial',
                'menu_name' => 'Testimonials',
            ),
            'supports' => array(
                'title',
                'thumbnail',
                'editor',
            ),
        ) );

        // Gallery
        register_post_type( 'gallery', array(
            'public' => true,
            'label' => 'Gallery',
            'show_ui' => true,
            'show_in_nav_menus' => true,
            'descriptions' => 'Our Gallery',
            'menu_icon' => 'dashicons-format-gallery',
            'supports' => array(
                'title',
                'thumbnail',
            ),
            'labels' => array(
                'edit_item' => 'Edit Picture',
                'add_new' => 'Add Picture',
                'add_new_item' => 'Add New Picture',
                'new_item' => 'New Picture',
                'view_item' => 'View Picture',
                'all_items' => 'All Pictures',
                'singular_name' => 'Picture',
                'menu_name' => 'Our Gallery',
            ),
        ) );

        // Team
        register_post_type( 'our-team', array(
            'public' => true,
            'label' => 'Our Team',
            'show_ui' => true,
            'show_in_nav_menus' => true,
            'descriptions' => 'Our Team',
            'menu_icon' => 'dashicons-groups',
            'supports' => array(
                'title',
                'thumbnail',
                'editor',
            ),
            'labels' => array(
                'edit_item' => 'Edit Team Member',
                'add_new' => 'Add Team Member',
                'add_new_item' => 'Add New Team Member',
                'new_item' => 'New Team Member',
                'view_item' => 'View Team Member',
                'all_items' => 'All Team Members',
                'singular_name' => 'Team Member',
                'menu_name' => 'Our Team',
            ),
        ) );

        // Mission
        register_post_type( 'our-mission', array(
            'public' => true,
            'label' => 'Our Mission',
            'show_ui' => true,
            'show_in_nav_menus' => true,
            'descriptions' => 'Our Mission',
            'menu_icon' => 'dashicons-universal-access-alt',
            'supports' => array(
                'title',
                'editor',
            ),
            'labels' => array(
                'edit_item' => 'Edit Mission',
                'add_new' => 'Add Mission',
                'add_new_item' => 'Add New Mission',
                'new_item' => 'New Mission',
                'view_item' => 'View Mission',
                'all_items' => 'All Missions',
                'singular_name' => 'Mission',
                'menu_name' => 'Our Mission',
            ),
        ) );
    }
    add_action( 'init', 'cpt' );    


    function rnm()
    {
        $args = array(
            'primary' => 'Primary Menu',
            'secondary' => 'Secondary Menu',
        );
        register_nav_menus($args);
    }
    add_action( 'after_setup_theme', 'rnm' );
?>