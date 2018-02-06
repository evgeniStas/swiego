<?php
/**
 * Created by PhpStorm.
 * User: evgeni
 * Date: 31.01.18
 * Time: 11:58
 */

$postTRanslate = 5;
if(get_locale()=="he_IL"){
    $postTRanslate = 31;
}
?>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<title>SWIEGO Software Outsourcing & Offshore Development</title>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<meta name="description" content="SWIEGO Software Outsourcing & Offshore Development"/>
<meta name="keywords"
      content="outsourcing, Offshore Development, Software Outsourcing, מיקור חוץ, מיקור חוץ באוקראינה, בית תוכנה, בית תוכנה במיקור חוץ, בית תוכנה באוקראינה, swiego, פיתוח אפליקציות,פיתוח אתרים, בניית אתרים, QA , QA outsourcing,design outsourcing, Web Development , SEO,  Graphic Design, עיצוב אתרים, פיתוח באוקראינה, technology software , Offshore outsourcing , WordPress, woocommerce, Dedicated Team,Fintech Specialization, Project manager,API Connection,outsourcing ukraine , פיתוח אתר לעסק,אתרי תדמית, אתרים מורכבים, מיקור חוץ בהודו, דרושים מתכנתים, צוות פיתוח יעודי,סטארטאפ,startup"/>
<meta name="author" content="Swiego"/>
<meta name="viewport" content="initial-scale=1, maximum-scale=1"/>
<!-- Facebook and Twitter integration -->
<meta property="og:title" content=""/>
<meta property="og:image" content=""/>
<meta property="og:url" content=""/>
<meta property="og:site_name" content=""/>
<meta property="og:description" content=""/>
<meta name="twitter:title" content=""/>
<meta name="twitter:image" content=""/>
<meta name="twitter:url" content=""/>
<meta name="twitter:card" content=""/>
<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
<link rel="shortcut icon" href="favicon.ico"/>
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
<?php wp_head(); ?>
<script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "NewsArticle",
      "headline": "Article headline",
      "image": [
        "thumbnail1.jpg"
      ],
      "datePublished": "2015-02-05T08:00:00+08:00"
    }
    </script>
<script>
    var ajax_url = '<?php echo admin_url('admin-ajax.php');?>';
</script>
<script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>
<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
<script async src="https://cdn.ampproject.org/v0.js"></script>
<!-- FOR IE9 below -->
<!--[if lt IE 9]>
<script src="js/respond.min.js"></script>

<![endif]-->
<!-- Facebook Pixel Code -->
<script>
    !function (f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function () {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1382482161862505');
    fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
               src="https://www.facebook.com/tr?id=1382482161862505&ev=PageView&noscript=1"/></noscript>
<!-- End Facebook Pixel Code -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109341697-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-109341697-1');
</script>
<!-- Hotjar Tracking Code for https://swiego.com/ -->
<script>
    (function (h, o, t, j, a, r) {
        h.hj = h.hj || function () {
            (h.hj.q = h.hj.q || []).push(arguments)
        };
        h._hjSettings = {hjid: 711117, hjsv: 6};
        a = o.getElementsByTagName('head')[0];
        r = o.createElement('script');
        r.async = 1;
        r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
        a.appendChild(r);
    })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
</script>
</head>
<body lang="en">
<div class="se-pre-con"></div>
<div id="fh5co-page">
    <header id="fh5co-header" role="banner">
        <div class="container">
            <div class="header-inner">
                <div class="">
                    <a href="<?php echo site_url();?>"> <img src="<?php echo get_template_directory_uri();?>/images/logo.png" width="250" height="40" alt="SWIEGO"> </a>
                    <h1>SWIEGO</h1>
                </div>
                <nav role="navigation">
                    <ul id="menu">
                        <span class="icon-envelope-o" ></span> <li  aria-hidden="true"><?php the_field('email_text',$postTRanslate); ?>: <a href="mailto:<?php the_field('email',$postTRanslate); ?>"><?php the_field('email',$postTRanslate); ?></a></li>
                        <span class="icon-phone" ></span> <li aria-hidden="true"><?php the_field('phone_text',$postTRanslate); ?>: <a href="tel:<?php the_field('phone',$postTRanslate); ?>"><?php the_field('phone',$postTRanslate); ?></a></li>

                        <li>
                            <?php if(get_locale()=="he_IL"){?>
                                <a href="<?php echo site_url();?>/?lang=en">English version</a>
                            <?php }else{?>
                                <a href="<?php echo site_url();?>/?lang=he">Hebrew</a>
                            <?php }?>
                        </li>
                        <!--<li>
                            <?php //if(get_locale()=="he_IL"){?>
                                <a href="<?php //echo esc_url( get_permalink(150) ); ?>"><?php //the_field('articles',$postTRanslate); ?></a>
                            <?php //}else{?>
                                <a href="<?php //echo esc_url( get_permalink(148) ); ?>"><?php //the_field('articles',$postTRanslate); ?></a>
                            <?php //}?>
                        </li>-->

                    </ul>
                </nav>
            </div>
        </div>
    </header>
