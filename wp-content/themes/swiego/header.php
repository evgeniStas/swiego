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

<noscript id="css1">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Josefin+Sans"/>
</noscript>
<noscript id="css2">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/animate.css"/>
</noscript>
<noscript id="css3">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/icomoon.css"/>
</noscript>
<noscript id="css4">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/bootstrap.css"/>
</noscript>
<noscript id="css5">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/flexslider.css"/>
</noscript>
<noscript id="css6">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/owl.carousel.min.css"/>
</noscript>
<noscript id="css7">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/owl.theme.default.min.css"/>
</noscript>
<noscript id="css8">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/style.css"/>
</noscript>
<?php if(get_locale()=='he_IL'){?>
<noscript id="css9">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/jquery.fullPage.css"/>
</noscript>
<noscript id="css10">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/rtl.scss"/>
</noscript>
<?php }?>
<script>
    var loadDeferredStyles = function() {
        var addStylesNode = document.getElementById("css1");
        var replacement = document.createElement("div");
        replacement.innerHTML = addStylesNode.textContent;
        document.body.appendChild(replacement);
        addStylesNode.parentElement.removeChild(addStylesNode);

        var addStylesNode2 = document.getElementById("css2");
        var replacement2 = document.createElement("div");
        replacement.innerHTML = addStylesNode.textContent;
        document.body.appendChild(replacement2);
        addStylesNode.parentElement.removeChild(addStylesNode2);

        var addStylesNode3 = document.getElementById("css3");
        var replacement3 = document.createElement("div");
        replacement.innerHTML = addStylesNode.textContent;
        document.body.appendChild(replacement3);
        addStylesNode.parentElement.removeChild(addStylesNode3);

        var addStylesNode4 = document.getElementById("css4");
        var replacement4 = document.createElement("div");
        replacement.innerHTML = addStylesNode.textContent;
        document.body.appendChild(replacement4);
        addStylesNode.parentElement.removeChild(addStylesNode4);

        var addStylesNode5 = document.getElementById("css5");
        var replacement5 = document.createElement("div");
        replacement.innerHTML = addStylesNode.textContent;
        document.body.appendChild(replacement5);
        addStylesNode.parentElement.removeChild(addStylesNode5);

        var addStylesNode6 = document.getElementById("css6");
        var replacement6 = document.createElement("div");
        replacement.innerHTML = addStylesNode.textContent;
        document.body.appendChild(replacement6);
        addStylesNode.parentElement.removeChild(addStylesNode6);

        var addStylesNode7 = document.getElementById("css7");
        var replacement7 = document.createElement("div");
        replacement.innerHTML = addStylesNode.textContent;
        document.body.appendChild(replacement7);
        addStylesNode.parentElement.removeChild(addStylesNode7);

        var addStylesNode8 = document.getElementById("css8");
        var replacement8 = document.createElement("div");
        replacement.innerHTML = addStylesNode.textContent;
        document.body.appendChild(replacement8);
        addStylesNode.parentElement.removeChild(addStylesNode8);
        <?php if(get_locale()=='he_IL'){?>
        var addStylesNode9 = document.getElementById("css9");
        var replacement9 = document.createElement("div");
        replacement.innerHTML = addStylesNode.textContent;
        document.body.appendChild(replacement9);
        addStylesNode.parentElement.removeChild(addStylesNode9);

        var addStylesNode10 = document.getElementById("css10");
        var replacement10 = document.createElement("div");
        replacement.innerHTML = addStylesNode.textContent;
        document.body.appendChild(replacement10);
        addStylesNode.parentElement.removeChild(addStylesNode10);
        <?php }?>
    };
    var raf = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
        window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
    if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });
    else window.addEventListener('load', loadDeferredStyles);
</script>

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
<script async src="js/respond.min.js"></script>

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
