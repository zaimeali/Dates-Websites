<?php 
    get_header("front");
?>

<!-- about us -->
<section class="about-us">
    <div class="container">
        <div class="row item-center">
            <div class="col-md-12 col-lg-6 mb-4">
                <div class="collapse-one">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/About.jpg" alt="">
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="right-col-img">
                    <h2>About Us</h2>
                    <div class="underline-left mb-4"></div>
                    <p class="mb-4">
                        <?php echo get_theme_mod('description_about'); ?>
                    </p>
                    <div>
                        <a href="<?php echo site_url( '/about-us' ); ?>" class="btn btn-dates-outline">read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of about us -->

<!-- type of dates -->
<section class="dates-types bg-pattern">
    <div class="container">
        <div class="row">
            <div class="col-8 col-lg-10">
                <h2>Types Of Dates</h2>
                <div class="underline-left mb-3"></div>

            </div>
            <!-- <div class="col-4 col-lg-2" style="display: none;">
                <button class="btn btn-dates-outline float-right">view all</button>
            </div> -->

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
                    'order'     => 'ASC',

                );
                $dateQuery = new WP_Query($args);

                while($dateQuery->have_posts())
                {
                    $dateQuery->the_post();
                    ?>
                    <div class="col-12 col-md-4 col-lg-3 mb-4">
                        <div class="item">
                            <a href="product.html">
                                <div class="card card-border h-302">
                                    <div class="card-body">
                                        <?php 
                                            $featureImage = get_the_post_thumbnail_url();
                                            $imageID = get_post_thumbnail_id();
                                            $altImage = get_post_meta($imageID, '_wp_attachment_image_alt', true);
                                        ?>
                                        <img src="<?php echo $featureImage; ?>" alt="<?php if($altImage) { echo $altImage; } else { echo get_the_title(); } ?>">
                                    </div>
                                    <div class="card-footer text-center">
                                        <h5><?php echo get_the_title(); ?></h5>
                                        <p><?php echo get_the_excerpt(); ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php 
                }
                wp_reset_postdata();
            ?>
        </div>
    </div>
</section>
<!-- end of type of dates -->

<!-- what we do -->
<section class="work">
    <div class="container">
        <div class="row item-center">
            <div class="col-md-12 col-lg-6 col-left-img mb-4">
                <div class="left-col-img">
                    <h2>What we do</h2>
                    <div class="underline-left mb-4"></div>
                    <p class="mb-4">
                        <?php echo get_theme_mod('description_what_we_do'); ?>
                    </p>
                    <div>
                        <a href="#q-form" class="btn btn-dates-outline">get a quote</a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="collapse-two">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/What-we-do.jpg" class="img-md" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of what we do -->

<!-- our client -->
<section class="client bg-pattern">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Our Clients</h2>
                <div class="underline-center mb-3"></div>
                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non cumque est quasi
                    praesentium, voluptas
                    animi eos. Doloribus neque iste earum?</p>
                <div class="client-img-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Map.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of our client -->

<!-- testimonials -->
<section class="testi">
    <div class="container">
        <h2>Client Testimonials</h2>
        <div class="underline-center mb-3"></div>
        <p class="tx mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non cumque est quasi
            praesentium, voluptas
            animi eos. Doloribus neque iste earum?</p>
        <div id="testimonial-slider" class="owl-carousel owl-theme">

            <?php 
                $testimonialPost = new WP_Query(array(
                    'post_type' => 'testimonials',
                    'posts_per_page' => -1,
                ));
                while($testimonialPost->have_posts())
                {
                    $testimonialPost->the_post();
            ?>
                <div class="card card-border testi-card shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="quote-wrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/Quotes.png" alt="">
                                </div>
                            </div>
                            <div class="col-6">
                                <?php 
                                    if(has_post_thumbnail())
                                    {
                                        $featureImage = get_the_post_thumbnail_url();
                                        $imageID = get_post_thumbnail_id();
                                        $altImage = get_post_meta( $imageID, '_wp_attachment_image_alt', true );
                                ?>
                                    <div class="testi-img">
                                        <img src="<?php echo $featureImage;?>" alt="<?php echo $altImage; ?>">
                                    </div>
                                <?php  
                                    }
                                ?>
                            </div>
                        </div>
                        <h4><?php echo get_the_title(); ?></h4>
                        <div class="testi-underline mb-3"></div>
                        <p>
                            <?php
                                echo get_the_content();
                            ?>
                        </p>
                    </div>
                </div>
            <?php   
                }
                wp_reset_postdata();
            ?>
        </div>
    </div>
</section>
<!-- end of testimonials -->

<!-- query form -->
<section id="q-form" class="q-form">
    <div class="container">
        <div class="card border-0 card-form shadow">
            <div class="card-body">
                <?php echo do_shortcode( '[hf_form slug="contact-form"]' ); ?>
                <!-- <form> -->
                    <!-- <div class="row text-center">
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
                                    <?php 
                                        // $args = array(
                                        //     'post_type' => 'dateproduct',
                                        //     'order' => 'ASC'
                                        // );
                                        // $datesOption = new WP_Query($args);
                                        // while($datesOption->have_posts())
                                        // {
                                        //     $datesOption->the_post();
                                        //     ?>
                                        //     <option value="<?php //echo get_the_ID(); ?>"><?php //echo get_the_title(); ?></option>
                                        //     <?php
                                        // }
                                        ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">Enter Quatity*</label>
                                <input min=0 type="number" class="form-control" placeholder="Quantity">
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-md-12">
                            <button class="btn btn-dates form-btn">submit now</button>
                        </div>
                    </div> -->
                <!-- </form> -->
            </div>
        </div>
    </div>
</section>
<!-- end of query form -->

<?php
    get_footer("front");
?>