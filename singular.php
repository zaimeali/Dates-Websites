<?php get_header(); ?>

    <?php 
        if(is_singular() && get_post_type() === "dateproduct")
        {
            ?>

            <!-- product info -->
            <section class="product-info product-pattern">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="product-h1">our product</h1>
                            <div class="underline-center mb-3"></div>
                            <p class="tx-16">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis reiciendis neque
                                veniam in,
                                dolores obcaecati dolorem modi. Cumque, consequatur alias?</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end of product info -->

            <?php
                if(have_posts())
                {
                    while(have_posts())
                    {
                        the_post();
                        ?>
                            <section class="product-detail">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <div class="row slider-for">
                                                <div class="col-12">
                                                    <div class="product-img-lg">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/img/Type-1.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="product-img-lg">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/img/Type-2.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="product-img-lg">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/img/Type-3.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="product-img-lg">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/img/Type-4.jpg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <ul class="product-img-list slider-nav">
                                                        <li>
                                                            <div class="product-img-sm">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/img/Type-1.jpg" alt="">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="product-img-sm">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/img/Type-2.jpg" alt="">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="product-img-sm">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/img/Type-3.jpg" alt="">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="product-img-sm">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/img/Type-4.jpg" alt="">
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <h2 class="uppercase mb-3"><?php echo get_the_title(); ?></h2>
                                            <p class="product-price">RS.<?php echo get_field('new_price'); ?> <span>RS.<?php echo get_field('old_price'); ?></span></p>
                                            <p class="tx-16 mb-4">
                                                <?php echo get_the_content(); ?>
                                            </p>
                                            <!-- <button class="btn btn-dates">get a quote</button> -->
                                            <a href="#q-form" class="btn btn-dates">get a quote</a>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        <?php
                    }
                }
            ?>
            <!-- product detail -->
            
            <!-- end of product detail -->

            <!-- type of dates -->
            <section class="dates-types bg-pattern">
                <div class="container">
                    <div class="row">
                        <div class="col-8 col-lg-10">
                            <h2>Types Of Dates</h2>
                            <div class="underline-left mb-3"></div>

                        </div>
                        <div class="col-4 col-lg-2" style="display: none;">
                            <a href="#" class="btn btn-dates-outline float-right">view all</a>
                        </div>

                    </div>
                    <div class="row mb-4">
                        <div class="col-md-8">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate architecto cumque ut adipisci
                                illo
                                excepturi at atque dicta cupiditate tempora!</p>
                        </div>
                    </div>
                    <div class="row">
                        <?php 
                            $args = array(
                                'post_type' => 'dateproduct',
                                'order'     => 'DESC',
                            );
                            $dateQuery = new WP_Query($args);
                            
                            if($dateQuery->have_posts())
                            {
                                while($dateQuery->have_posts())
                                {
                                    $dateQuery->the_post();
                                    ?>
                                        <div class="col-12 col-md-4 col-lg-3 mb-4">
                                            <div class="item">
                                                <a href="<?php echo get_the_permalink(); ?>">
                                                    <div class="card card-border h-302">
                                                        <div class="card-body">
                                                            <?php 
                                                                if(has_post_thumbnail())
                                                                {
                                                                    $featureImage = get_the_post_thumbnail_url();
                                                                    $imageID = get_post_thumbnail_id();
                                                                    $altImage = get_post_meta($imageID, '_wp_attachment_image_alt', true);
                                                                    ?>
                                                                        <img src="<?php echo $featureImage; ?>" alt="<?php if($altImage) { echo $altImage; } else { echo get_the_title(); } ?>">
                                                                    <?php
                                                                }
                                                                else
                                                                {
                                                                    ?>
                                                                        <img src="<?php echo get_template_directory_uri(); ?>/img/Type-1.jpg" alt="Test Image">
                                                                    <?php
                                                                }
                                                            ?>
                                                        </div>
                                                        <div class="card-footer text-center">
                                                            <h5><?php echo ucwords(get_the_title()); ?></h5>
                                                            <p><?php echo get_the_excerpt(); ?></p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    <?php
                                }
                            }
                            wp_reset_postdata();
                        ?>
                        <!-- <div class="col-12 col-md-4 col-lg-3 mb-4">
                            <div class="item">
                                <a href="product.html">
                                    <div class="card card-border h-302">
                                        <div class="card-body">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/Type-1.jpg" alt="">
                                        </div>
                                        <div class="card-footer text-center">
                                            <h5>Dates Type 1</h5>
                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing...</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-3 mb-4">
                            <div class="item">
                                <a href="product.html">
                                    <div class="card card-border h-302">
                                        <div class="card-body">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/Type-2.jpg" alt="">
                                        </div>
                                        <div class="card-footer text-center">
                                            <h5>Dates Type 2</h5>
                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing...</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-3 mb-4">
                            <div class="item">
                                <a href="product.html">
                                    <div class="card card-border h-302">
                                        <div class="card-body">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/Type-3.jpg" alt="">
                                        </div>
                                        <div class="card-footer text-center">
                                            <h5>Dates Type 3</h5>
                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing...</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-3 mb-4">
                            <div class="item">
                                <a href="product.html">
                                    <div class="card card-border h-302">
                                        <div class="card-body">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/Type-4.jpg" alt="">
                                        </div>
                                        <div class="card-footer text-center">
                                            <h5>Dates Type 4</h5>
                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing...</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-3 mb-4">
                            <div class="item">
                                <a href="product.html">
                                    <div class="card card-border h-302">
                                        <div class="card-body">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/Type-5.jpg" alt="">
                                        </div>
                                        <div class="card-footer text-center">
                                            <h5>Dates Type 5</h5>
                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing...</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-3 mb-4">
                            <div class="item">
                                <a href="product.html">
                                    <div class="card card-border h-302">
                                        <div class="card-body">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/Type-6.jpg" alt="">
                                        </div>
                                        <div class="card-footer text-center">
                                            <h5>Dates Type 6</h5>
                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing...</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-3 mb-4">
                            <div class="item">
                                <a href="product.html">
                                    <div class="card card-border h-302">
                                        <div class="card-body">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/Type-7.jpg" alt="">
                                        </div>
                                        <div class="card-footer text-center">
                                            <h5>Dates Type 7</h5>
                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing...</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-3 mb-4">
                            <div class="item">
                                <a href="product.html">
                                    <div class="card card-border h-302">
                                        <div class="card-body">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/Type-8.jpg" alt="">
                                        </div>
                                        <div class="card-footer text-center">
                                            <h5>Dates Type 8</h5>
                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing...</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </section>
            <!-- end of type of dates -->

            <!-- query form -->
            <section id="q-form" class="q-form">
                <div class="container">
                    <div class="card border-0 card-form shadow">
                        <div class="card-body">
                            <form>
                                <div class="row text-center">
                                    <div class="col-md-12">
                                        <h2>Query Form</h2>
                                        <div class="underline-center mb-3"></div>
                                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, iusto.</p>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label for="">Enter Name*</label>
                                            <input type="text" class="form-control" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label for="">Enter Email*</label>
                                            <input type="text" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <label for="">Enter Contact*</label>
                                            <input type="text" class="form-control" placeholder="Contact">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="">Enter City*</label>
                                            <input type="text" class="form-control" placeholder="City">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="">Enter Country*</label>
                                            <input type="text" class="form-control" placeholder="Country">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="">Enter type of Dates*</label>
                                            <select name="" id="" class="form-control">
                                                <option selected>Select Dates Type</option>
                                                <option value="1">Dates Type 1</option>
                                                <option value="2">Dates Type 2</option>
                                                <option value="3">Dates Type 3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="">Enter Quatity*</label>
                                            <select name="" id="" class="form-control">
                                                <option selected>Quantity</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row text-center">
                                    <div class="col-md-12">
                                        <button class="btn btn-dates form-btn">submit now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end of query form -->

            <?php
        }
        else
        {
            echo "<script>window.location = '" . site_url() . "';</script>";
            exit;
        }
    ?>
<?php get_footer(); ?>