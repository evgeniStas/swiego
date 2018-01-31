<?
/*
Template Name: Articles
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
    <?php get_header(); ?>

    <div id='section1' class="section">
        <div id="fh5co-services-section">
            <div class="container">
                <div class="row">
                    <?php
                    $posts = get_posts();

                    foreach($posts as $post){ setup_postdata($post);
                    ?>
                    <div class="col-md-12 animate-box fadeInUp animated">
                        <div class="services">
                            <div class="desc rtl">
                                <h3><a href="<?php the_permalink(); ?>"><?php echo $post->post_title;?></a></h3>
                            </div>
                        </div>
                    </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>


	</div>

    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:50px;overflow:hidden;visibility:hidden;">
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:100px;overflow:hidden;">
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
                <div class="tech-icon">
                    <div class="tech-title"><?php echo $Technologie->post_title; ?></div>
                    <i class="<?php echo $meta_values[0]; ?>"></i>
                </div>
                <?php
            }
            $post = $tmp_post;
            ?>
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
    <!-- MAIN JS -->
    <script src="<?php echo get_template_directory_uri();?>/js/main.js"></script>

    </body>
</html>