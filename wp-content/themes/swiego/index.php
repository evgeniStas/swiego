<?php
//or, if you DO want a file to cache, use:
header("Cache-Control: max-age=2592000"); //30days (60sec * 60min * 24hours * 30days)

/**
 * Template Name: Index
 * Created by PhpStorm.
 * User: evgeni
 * Date: 30.01.18
 * Time: 10:17
 */
?>
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
    <title><?php bloginfo('description'); ?></title>
    <?php get_header(); ?>

    <div id='section0' class="section">

        <aside id="fh5co-hero" class="js-fullheight" >

            <div id="large-header" class="large-header">
                <canvas id="demo-canvas"></canvas>
                <div class="main-title">
                    <h1><?php the_field('title'); ?></h1>
                    <h2><?php the_field('description'); ?></h2>
                    <button type="button" onclick="scrollToElement(2);" class="btn btn-primary btn-block btn-header"
                            id="scroll"><?php the_field('btn_contact'); ?>
                    </button>
                </div>
            </div>
        </aside>


    </div>
    <div id='section1' class="section">
        <div id="fh5co-services-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center fh5co-heading ">
                        <h2><?php the_field('about_swiego_text'); ?></h2>
                        <p><?php the_field('about_swiego_description'); ?></p>
                    </div>
                </div>
                <?php
                global $post;
                $tmp_post = $post;
                $args = array(  'post_type'=> 'what_we_do', 'order' => 'ASC');
                $myposts = get_posts( $args );
                wp_reset_postdata();
                ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="services">
                            <i class="soc-icon socicon-ic_outsource"></i>
                            <div class="desc">
                                <h3><?php echo $myposts[0]->post_title;?></h3>
                                <p><?php echo $myposts[0]->post_content;?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                    $i=0;
                    foreach( $myposts as $post ){ setup_postdata($post);
                        if($i > 0) {
                            ?>
                            <div class="col-md-6">
                                <div class="services">
                                    <?php echo $post->icon; ?>
                                    <div class="desc">
                                        <h3><?php echo $post->post_title; ?></h3>
                                        <p><?php echo $post->post_content; ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        $i++;
                    }
                    $post = $tmp_post;
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div id='section2' class="section">
        <div class="fh5co-cta">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                        <h2><?php the_field('technologies'); ?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                global $post;
                $tmp_post = $post;
                $args = array(  'post_type'=> 'technologies', 'posts_per_page' => -1);
                $Technologies = get_posts( $args );
                wp_reset_postdata();

                foreach( $Technologies as $Technologie ) {
                    setup_postdata($Technologie);
                    $meta_values = get_post_meta( $Technologie->ID ,"class");
                    ?>
                    <div class="col-md-2">
                        <div class="tech-icon">
                            <div style="font-size: 25px;" class="tech-title"><?php echo $Technologie->post_title; ?></div>
                            <i style="font-size: 100px;" class="<?php echo $meta_values[0]; ?>"></i>
                        </div>
                    </div>
                    <?php
                }
                $post = $tmp_post;
                ?>
                <div style="clear:both;"></div>
            </div>
        </div>
    </div>
    <div id='section3' class="section" >
        <div class="fh5co-cta" style="background-image: url(<?php echo get_template_directory_uri();?>/images/slide_2.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="col-md-12 text-center">
                    <h3><?php the_field('btn_contact'); ?></h3>
                    <div class="gtco-container">
                        <div class="row">
                            <div class="col-md-12">
                                <form class="form-inline">
                                    <div class="col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="email" class="sr-only"><?php the_field('your_email'); ?></label>
                                            <div id="errorEmail" class="errorFrom"></div>
                                            <input type="email" class="form-control" id="email" placeholder="<?php the_field('your_email'); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <div id="errorName" class="errorFrom"></div>
                                            <label for="name" class="sr-only"><?php the_field('your_name'); ?></label>
                                            <input type="text" class="form-control" id="name" placeholder="<?php the_field('your_name'); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="name" class="sr-only"><?php the_field('your_phone'); ?></label>
                                            <div id="errorPhone" class="errorFrom"></div>
                                            <input type="text" class="form-control" id="phone" max="11"
                                                   placeholder="<?php the_field('your_phone'); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-md-offset-4 top-buffer">
                                    <span class="loading-btn-wrapper">
                                      <button type="button" id='submit' class="loading-btn js_success-animation-trigger" disabled onclick="sendContact(event);">
                                        <span class="loading-btn__text">
                                          <?php the_field('send_btn'); ?>
                                        </span>
                                      </button>
                                    </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id='section4' class="section" >
        <div id="fh5co-testimony-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center fh5co-heading ">
                        <h2><?php the_field('clients_feedback_text'); ?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-offset-0">
                        <div class="wrap-testimony rollIn">
                            <div class="owl-carousel-fullwidth">

                                <?php
                                global $post;
                                $tmp_post = $post;
                                $args = array(  'post_type'=> 'clients', 'order' => 'ASC');
                                $clients = get_posts( $args );
                                wp_reset_postdata();

                                foreach( $clients as $client ) {
                                    setup_postdata($client);
                                    $meta_values = get_post_meta( $client->ID ,"photo");
                                    $img = wp_get_attachment_image_src($meta_values[0]);
                                ?>
                                    <div class="item">
                                        <div class="testimony-slide active text-center">
                                            <figure>
                                                <img src="<?php echo $img[0];?>" alt="user">
                                            </figure>
                                            <blockquote>
                                                <p><?php echo $client->post_content; ?></p>
                                            </blockquote>
                                        </div>
                                    </div>
                                <?php
                                    $post = $tmp_post;
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id='section5' class="section">
        <?php get_footer(); ?>
    </div>
</div>
    <script defer src="<?php echo get_template_directory_uri();?>/js/main.js"></script>
<!-- jQuery Easing -->
<script defer src="<?php echo get_template_directory_uri();?>/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script defer src="<?php echo get_template_directory_uri();?>/js/modernizr-2.6.2.min.js"></script>
<script defer src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script defer src="<?php echo get_template_directory_uri();?>/js/jquery.waypoints.min.js"></script>
<script defer src="<?php echo get_template_directory_uri();?>/js/jssor.slider.min.js"></script>

<!-- Owl Carousel -->
<script defer src="<?php echo get_template_directory_uri();?>/js/owl.carousel.min.js"></script>
<!-- Flexslider -->
    <script defer src='<?php echo get_template_directory_uri();?>/js/TweenLite.min.js'></script>
    <script defer src='<?php echo get_template_directory_uri();?>/js/EasePack.min.js'></script>
<script defer src="<?php echo get_template_directory_uri();?>/js/jquery.flexslider-min.js"></script>
<script defer src="<?php echo get_template_directory_uri();?>/js/canvas.js"></script>
<!-- MAIN JS -->
    <?php wp_footer() ?>

</body>
</html>