<!-- footer -->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="footer-logo">
                    <a href="index.html">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/footer-logo.jpg" alt="">
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-2 mb-4">
                <h6>Our Links</h6>
                <div class="underline-left mb-3 mobo-auto"></div>
                <?php 
                    $args = array(
                        'theme_location' => 'secondary',
                        'container_class' => 'footer-menu',
                    );
                    wp_nav_menu($args); 
                ?>
                <!-- <div class="footer-menu">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About us</a></li>
                        <li><a href="product.html">Dates</a></li>
                        <li><a href="gallery.html">Our Gallery</a></li>
                        <li><a href="#!">Contact us</a></li>
                    </ul>
                </div> -->
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <h6>Contact With Us</h6>
                <div class="underline-left mb-3 mobo-auto"></div>
                <div class="row mb-4">
                    <div class="col-md-2">
                        <div class="icon-wrapper mobo-auto">
                            <i class="fas fa-phone"></i>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <p>Phone No</p>
                        <small><a href="#!">+966 56 210 8155</a></small>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-2">
                        <div class="icon-wrapper mobo-auto">
                            <i class="fas fa-envelope"></i>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <p>Email</p>
                        <small><a href="#!">info@almustafadates.com</a></small>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <div class="icon-wrapper mobo-auto">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <p>Website</p>
                        <small><a href="#!">Al-Mustafa-Dates</a></small>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <h6>Contact With Us</h6>
                <div class="underline-left mb-3 mobo-auto"></div>
                <div class="footer-gallery">
                    <div class="item1">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/1.jpg" alt="">
                    </div>
                    <div class="item2">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/2.jpg" alt="">
                    </div>
                    <div class="item3">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/3.jpg" alt="">
                    </div>
                    <div class="item4">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/4.jpg" alt="">
                    </div>
                    <div class="item5">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/5.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row text-center">
            <div class="col-md-12">
                <p>Copyright 2022 - All Rights Reserved</p>
            </div>
        </div>
    </div>
    <?php wp_footer(); ?>
</footer>
<!-- end of footer -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://kit.fontawesome.com/274c7ce535.js" crossorigin="anonymous"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.5.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/owl-slider.js"></script>
</body>

</html>
