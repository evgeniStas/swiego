<?php
/**
 * Created by PhpStorm.
 * User: evgeni
 * Date: 31.01.18
 * Time: 12:02
 */

$postTRanslate = 5;
if(get_locale()=="he_IL"){
    $postTRanslate = 31;
}
?>

<footer id="fh5co-footer" role="contentinfo">
    <div class="container">
        <div class="col-md-3 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
            <h3><?php the_field('about_swiego_text',$postTRanslate); ?></h3>
            <p><?php the_field('about_swiego_description',$postTRanslate); ?></p>
        </div>
        <div class="col-md-6 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
            <h3><?php the_field('our_services_text',$postTRanslate); ?></h3>

            <?php
            global $post;
            $tmp_post = $post;
            $args = array(  'post_type'=> 'our_services', 'posts_per_page' => -1);
            $services = get_posts( $args );
            wp_reset_postdata();
            $i = 0;
            ?>
            <ul class="float">
                <?php
                foreach( $services as $service ) {
                    setup_postdata($service);
                    if($i>4){
                        $i = 0;
                        echo "</ul><ul class=\"float\">";
                    }
                    ?>
                    <li><?php echo $service->post_title; ?></li>
                    <?php
                    $i++;
                }
                $post = $tmp_post;
                ?>
            </ul>
        </div>
        <div class="col-md-2 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
            <h3><?php the_field('follow_us',$postTRanslate); ?></h3>
            <ul class="fh5co-social">

                <?php
                global $post;
                $tmp_post = $post;
                $args = array(  'post_type'=> 'social_networks', 'posts_per_page' => -1);
                $socials = get_posts( $args );
                wp_reset_postdata();
                $i = 0;
                foreach( $socials as $social ) {
                    $meta_values = get_post_meta( $social->ID );
                    setup_postdata($social);
                    ?>
                    <li>
                        <a href="<?php echo $meta_values["link"][0]; ?>" target="_blank">
                            <?php echo $meta_values["image"][0]; ?>
                        </a>
                    </li>
                   <?php
                }
                $post = $tmp_post;
                ?>
            </ul>
        </div>

        <div class="col-md-6 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
            <h3><?php the_field('offices',$postTRanslate); ?></h3>


            <?php
            global $post;
            $tmp_post = $post;
            $args = array(  'post_type'=> 'offices', 'posts_per_page' => -1);
            $offices = get_posts( $args );
            wp_reset_postdata();
            $i = 0;
            foreach( $offices as $office ) {
                $meta_values = get_post_meta( $office->ID ,"map");
                setup_postdata($office);
                ?>
                <p class="col-md-6"><?php echo $office->post_title; ?> <br/>
                    <a href="#"><img src="https://maps.googleapis.com/maps/api/staticmap?autoscale=2&size=200x100&maptype=terrain&format=png&visual_refresh=true&markers=size:mid%7Ccolor:0x61fc03%7Clabel:%7C<?php echo $meta_values[0]["address"];?>&key=AIzaSyARrAHOVdmc2lNZF45lNB89qMKIFZBwLe8" alt="Google Map of israel tel aviv"></a>
                </p>
                <?php
            }
            $post = $tmp_post;
            ?>
            <p class="col-md-6"><?php the_field('coming_soon',$postTRanslate); ?></p>
        </div>
    </div>
    <div class="col-md-12 fh5co-copyright text-center">
        <p><?php the_field('copyright',$postTRanslate); ?></p>
    </div>
</footer>
<!--‎<link rel="alternate" href="https://swiego.com" hreflang="en" />-->
<!--<link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,700" rel="stylesheet">-->
<link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css"/>

<!-- Animate.css -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/animate.css"/>
<!-- Icomoon Icon Fonts-->
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/icomoon.css"/>
<!-- Bootstrap  -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap.css"/>
<!-- Flexslider  -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/flexslider.css"/>
<!-- Owl Carousel  -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/owl.carousel.min.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/owl.theme.default.min.css"/>
<!-- Theme style  -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css"/>
<?php if(get_locale()=='he_IL'){?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/jquery.fullPage.css">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/rtl.scss">
<?php }?>
