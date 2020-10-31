<?php 
    get_header();
?>

    <?php 
        if(is_page('about-us'))
        {
            ?>
            <!-- product info -->
            <section class="product-info product-pattern">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="product-h1">About us</h1>
                            <div class="underline-center mb-3"></div>
                            <p class="tx-16">
                                <?php echo get_theme_mod('description_about_page'); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end of product info -->

            <!-- about us -->
            <section class="about-us">
                <div class="container">
                    <div class="row mb-4">
                        <div class="col-lg-6">
                            <h2 class="uppercase mb-3">About for al-mustafa dates</h2>
                            <div class="underline-left-lg"></div>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <!-- <p class="tx-16">     -->
                                <?php echo get_the_content(); ?>
                            <!-- </p> -->
                            <!-- <p class="tx-16 mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste quidem est quaerat
                                nesciunt
                                sint libero
                                reiciendis, repellendus commodi nemo placeat voluptatem consequatur perspiciatis aspernatur. Veniam,
                                necessitatibus? Corrupti nulla cupiditate nihil?</p>
                            <p class="tx-16 mb-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate eveniet harum
                                blanditiis sapiente
                                libero soluta quo nesciunt saepe placeat quibusdam ex iste explicabo suscipit labore sint nulla
                                voluptatibus itaque sed, hic pariatur? Reprehenderit cupiditate necessitatibus in voluptatem
                                mollitia
                                veniam exercitationem, eos deserunt nam laudantium reiciendis unde consequatur provident officia id
                                ratione esse repudiandae iure quibusdam perspiciatis nobis quo beatae dolorum architecto? Officiis
                                non
                                officia laboriosam nobis eveniet, optio obcaecati vitae?</p>  -->
                            <!-- <p class="tx-16 mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus nisi magni
                                quam
                                tempore
                                cupiditate
                                est voluptate sit, amet atque minima excepturi harum sunt corporis officia ipsam eligendi, incidunt
                                quasi vero?</p> -->
                        </div>
                    </div>

                    <?php 
                        $args = array(
                            'post_type' => 'our-mission',
                        );

                        $missionQuery = new WP_Query($args);

                        if($missionQuery->have_posts())
                        {
                            ?>
                            <div class="row item-center">
                                <div class="col-md-12 col-lg-6 mb-4">
                                    <div class="collapse-one">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/About.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6">
                                    <div class="right-col-img">
                                        <h2>Our Mission</h2>
                                        <div class="underline-left mb-4"></div>
                                        <?php 
                                            while($missionQuery->have_posts())
                                            {
                                                $missionQuery->the_post();
                                                ?>
                                                <p class="tx-16 mb-1">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/about/1.png" class="dots" alt=""> 
                                                    <?php echo get_the_content(); ?>
                                                </p>
                                                <?php 
                                            }
                                        ?>
                                        <!-- <div style="display: none;">
                                            <button class="btn btn-dates-outline">read more</button>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <?php 
                        }
                    ?>
                </div>
            </section>
            <!-- end of about us -->

            <!-- our team -->
            <section class="our-team">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <h2>Meet Our Professional Team</h2>
                            <div class="underline-center mb-3"></div>
                        </div>
                    </div>
                <div class="row mb-5">
                    <?php 
                        $args = array(
                            'post_type' => 'our-team',
                            'posts_per_page' => -1,
                        );
                        $teamQuery = new WP_Query($args);

                        while($teamQuery->have_posts())
                        {
                            $teamQuery->the_post();
                            ?>
                                <div class="col-lg-4">
                                    <div class="card border-0 team-shadow">
                                        <div class="card-body">
                                            <div class="team-img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/about/roman.png" alt="">
                                            </div>
                                            <h4><?php echo get_the_title(); ?></h4>
                                            <p class="tx-16 dark-color mb-3"><?php echo get_field('designation'); ?></p>
                                            <div class="testi-underline mb-3"></div>
                                            <p class="mb-3"><?php echo get_the_content(); ?></p>
                                            <ul class="icon-list">
                                                <li>
                                                    <a target="_blank" href="<?php echo get_field('facebook_link'); ?>">
                                                        <div><i class="fab fa-facebook-f"></i></div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="<?php echo get_field('twitter_link'); ?>">
                                                        <div><i class="fab fa-twitter"></i></div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="<?php echo get_field('linkedin_link'); ?>">
                                                        <div><i class="fab fa-linkedin-in"></i></div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <?php 
                        }
                        wp_reset_postdata();
                    ?>
                    </div>
                </div>
            </section>
            <!-- end of our team -->
            <?php 
        }
        elseif(is_page('our-gallery'))
        {
            ?>
            <!-- product info -->
            <section class="product-info product-pattern">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="product-h1">our gallery</h1>
                            <div class="underline-center mb-3"></div>
                            <p class="tx-16">
                                <?php echo get_theme_mod('description_gallery_page'); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end of product info -->

            <!-- type of dates -->
            <section class="dates-types bg-pattern">
                <div class="container">
                    <div class="row">

                        <?php 
                            $args = array(
                                'post_type' => 'gallery',
                                'posts_per_page' => 10,
                            );
                            $dateQuery = new WP_Query($args);

                            if($dateQuery->have_posts())
                            {
                                ?>
                                <div class="card-columns">
                                <?php
                                while($dateQuery->have_posts())
                                {
                                    $dateQuery->the_post();
                                    if(has_post_thumbnail())
                                    {
                                        $featureImage = get_the_post_thumbnail_url();
                                        $imageID = get_post_thumbnail_id();
                                        $altImage = get_post_meta($imageID, '_wp_attachment_image_alt', true);
                                    }
                                    ?>
                                    <div class="card">
                                        <img class="card-img-top" src="<?php echo $featureImage; ?>" alt="<?php echo get_the_title(); ?>">
                                    </div>
                                    <?php
                                }
                            ?>
                                </div>
                                <?php
                            }
                            else
                            {
                                ?>
                                <div class="col-12 mb-4">
                                    <div class="item" style="display: flex; justify-content: center; align-items: center;">
                                        <h3 class="text-muted">No Post in Gallery</h3>
                                    </div>
                                </div>
                                <?php
                            }
                        ?>

                    </div>
                </div>
            </section>
            <!-- end of type of dates -->
            <?php   
        }
    ?>

<?php
    get_footer();
?>