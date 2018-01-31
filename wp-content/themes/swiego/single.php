<!DOCTYPE html>
<!--[if lt IE 7]>
<html amp class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <?php get_header(); ?>

    <div id='section1' class="section">
        <div id="fh5co-services-section">
            <div class="container">
                <div class="row">
                    <?php
                    $post_id = get_the_ID();
                    $queried_post = get_post($post_id);
                    ?>
                    <h3><?php echo $queried_post->post_title;?></h3>
                    <p><?php echo $queried_post->post_content;?></p>
                </div>
            </div>
        </div>


    </div>

    <div id='section5' class="section">
        <?php get_footer(); ?>
    </div>
    </div>

    <!-- jQuery -->

    <script src="<?php echo get_template_directory_uri();?>/js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="<?php echo get_template_directory_uri();?>/js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo get_template_directory_uri();?>/js/modernizr-2.6.2.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="<?php echo get_template_directory_uri();?>/js/jquery.waypoints.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/jssor.slider.min.js"></script>

    <!-- Owl Carousel -->
    <script src="<?php echo get_template_directory_uri();?>/js/owl.carousel.min.js"></script>
    <!-- Flexslider -->
    <script src="<?php echo get_template_directory_uri();?>/js/jquery.flexslider-min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/canvas.js"></script>
    <!-- MAIN JS -->
    <script src="<?php echo get_template_directory_uri();?>/js/main.js"></script>

    </body>
</html>
