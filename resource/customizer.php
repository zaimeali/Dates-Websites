<?php

    // About Us Section
    function about_us($wp_customize)
    {
        // Section
        $wp_customize->add_section('about_section', array(
            'title'           => 'About Section',
            'priority'        => 24,
            'active_callback' => 'is_home',
        ));

        // Description
        $wp_customize->add_setting('description_about', array(
            'default'    => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos libero ut quis deleniti qui aut ullam ea non dolorem, ducimus eligendi sequi odio vitae voluptas, reprehenderit distinctio minus corporis nam?',
            'capability' => 'edit_theme_options',
        ));

        $wp_customize->add_control('show_description_about', array(
            'label'    => 'Description',
            'section'  => 'about_section',
            'settings' => 'description_about',
            'type'     => 'textarea',
        ));
    }
    add_action( 'customize_register', 'about_us' );


    // What We Do Section
    function what_we_do($wp_customize)
    {
        // Section
        $wp_customize->add_section('what_we_do_section', array(
            'title'           => 'What We Do Section',
            'priority'        => 26,
            'active_callback' => 'is_home',
        ));

        // Description
        $wp_customize->add_setting('description_what_we_do', array(
            'default'    => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos libero ut quis deleniti qui aut ullam ea non dolorem, ducimus eligendi sequi odio vitae voluptas, reprehenderit distinctio minus corporis nam?',
            'capability' => 'edit_theme_options',
        ));

        $wp_customize->add_control('show_description_what_we_do', array(
            'label'    => 'Description',
            'section'  => 'what_we_do_section',
            'settings' => 'description_what_we_do',
            'type'     => 'textarea',
        ));
    }
    add_action( 'customize_register', 'what_we_do' );


    // About Us Section Page
    function check_about_page()
    {
        return is_page('about-us');
    }

    function about_page($wp_customize)
    {
        // Section
        $wp_customize->add_section('about_page_section', array(
            'title'           => 'About Us Page',
            'priority'        => 26,
            'active_callback' => 'check_about_page',
        ));

        // Description
        $wp_customize->add_setting('description_about_page', array(
            'default'    => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis reiciendis neque veniam in, dolores obcaecati dolorem modi. Cumque, consequatur alias?',
            'capability' => 'edit_theme_options',
        ));

        $wp_customize->add_control('show_description_about_page', array(
            'label'    => 'Description',
            'section'  => 'about_page_section',
            'settings' => 'description_about_page',
            'type'     => 'textarea',
        ));
    }
    add_action( 'customize_register', 'about_page' );

    // Our Gallery Section Page
    function check_gallery_page()
    {
        return is_page('our-gallery');
    }

    function gallery_page($wp_customize)
    {
        // Section
        $wp_customize->add_section('gallery_page_section', array(
            'title'           => 'Gallery Us Page',
            'priority'        => 26,
            'active_callback' => 'check_gallery_page',
        ));

        // Description
        $wp_customize->add_setting('description_gallery_page', array(
            'default'    => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis reiciendis neque veniam in, dolores obcaecati dolorem modi. Cumque, consequatur alias?',
            'capability' => 'edit_theme_options',
        ));

        $wp_customize->add_control('show_description_gallery_page', array(
            'label'    => 'Description',
            'section'  => 'gallery_page_section',
            'settings' => 'description_gallery_page',
            'type'     => 'textarea',
        ));

        $wp_customize->selective_refresh->add_partial('description_gallery_page_refresh', array(
            'selector' => '.tx-16',
        ));
    }
    add_action( 'customize_register', 'gallery_page' );

?>