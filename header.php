<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick-theme.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <title><?php bloginfo('title'); ?></title>

    <?php wp_head(); ?>
</head>
<body>
    <!-- header -->
<header class="bg-white">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="index.html">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dates">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="product.html" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dates
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="product.html">Dates Type 1</a>
                            <a class="dropdown-item" href="product.html">Dates Type 2</a>
                            <a class="dropdown-item" href="product.html">Dates Type 3</a>
                            <a class="dropdown-item" href="product.html">Dates Type 4</a>
                            <a class="dropdown-item" href="product.html">Dates Type 5</a>
                            <a class="dropdown-item" href="product.html">Dates Type 6</a>
                            <a class="dropdown-item" href="product.html">Dates Type 7</a>
                            <a class="dropdown-item" href="product.html">Dates Type 8</a>
                        </div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="gallery.html">Our Gallery</a>
                    </li>
                    <li class="nav-item">
                        <!-- <button class="btn btn-dates">contact us</button> -->
                        <a href="#q-form" class="btn btn-dates">contact us</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>