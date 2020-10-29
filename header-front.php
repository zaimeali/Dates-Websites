<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <title><?php bloginfo('title'); ?></title>

    <?php wp_head(); ?>
</head>
<body>
<!-- header -->
<header class="main-header bg-pattern">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="<?php echo site_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo of Al-Mustafa">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <?php 
                    // $args = array(
                    //     'theme_location' => 'primary',
                    //     'container' => false,
                    //     'menu_class' => 'navbar-nav nav-dates',
                    //     'add_li_class'  => 'nav-item'
                    // );
                    // wp_nav_menu($args);
                ?>
                <ul class="navbar-nav nav-dates">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo site_url(); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('/about-us'); ?>">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="product.html" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dates
                        </a>
                        <?php 
                            $args = array(
                                'post_type' => 'dateproduct',
                                'posts_per_page' => -1,
                                'order' => 'ASC',
                            );
                            $menuItem = new WP_Query($args);
                        ?>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php 
                                while($menuItem->have_posts())
                                {
                                    $menuItem->the_post();
                                    ?>
                                        <a class="dropdown-item" href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a>
                                    <?php
                                }
                                wp_reset_postdata();
                            ?>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('/our-gallery'); ?>">Our Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a href="#q-form" class="btn btn-dates">contact us</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container">
        <?php 
            $args = array(
                'post_type' => 'slider'
            );
            $sliderImage = new WP_Query($args);
            if($sliderImage->have_posts())
            {
                ?>
                <div id="banner-slider" class="owl-carousel owl-theme">
                    <?php
                        while($sliderImage->have_posts())
                        {
                            $sliderImage->the_post();
                            ?>
                                <div class="item">
                                    <div class="banner" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>);">
                                        <div class="row">
                                            <div class="col-md-7">
                                                <h1 class="main-heading"><?php echo get_the_title(); ?></h1>
                                                <p class="mb-4"><?php echo get_the_content(); ?></p>
                                                <a href="#q-form" class="btn btn-dates">get a quote</a href="#q-form">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                        }
                    ?>
                </div>
            <?php
            }
            wp_reset_postdata();
        ?>
    </div>
</header>
<!-- end of header -->