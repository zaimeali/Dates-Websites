<?php 

    add_theme_support( 'post-thumbnails' );

    // Register Custom Post Type
    function cpt()
    {
        // Dates Products
        register_post_type( 'dateproduct', array(
            'public' => true,
            'label' => 'Date Product',
            'show_ui' => true,
            'show_in_nav_menus' => true,
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