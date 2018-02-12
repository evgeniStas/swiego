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
<script defer src="<?php echo get_template_directory_uri();?>/js/jquery.min.js"></script>
<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
<link rel="shortcut icon" href="favicon.ico"/>
<!--‎<link rel="alternate" href="https://swiego.com" hreflang="en" />-->
<!--<link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,700" rel="stylesheet">-->
<!-- jQuery -->

<style>

    /* =======================================================
    *
    * 	Template Style
    *	Edit this section
    *
    * ======================================================= */
    body {
        font-family: "Raleway", Arial, sans-serif;
        font-weight: 400;
        font-size: 16px;
        line-height: 1.7;
        color: #7f7f7f;
        background: #fff;
        height: 100%;
        position: relative;
    }

    @font-face {
        font-family: 'fontello';
        src: url('<?php echo get_template_directory_uri();?>/css/fonts/fontello.eot?90777727');
        src: url('<?php echo get_template_directory_uri();?>/css/fonts/fontello.eot?90777727#iefix') format('embedded-opentype'),
        url('<?php echo get_template_directory_uri();?>/css/fonts/fontello.woff?90777727') format('woff'),
        url('<?php echo get_template_directory_uri();?>/css/fonts/fontello.ttf?90777727') format('truetype'),
        url('<?php echo get_template_directory_uri();?>/css/fonts/fontello.svg?90777727#fontello') format('svg');
        font-weight: normal;
        font-style: normal;
    }


    .soc-icon
    {
        font-family: "fontello";
        font-style: normal;
        font-weight: normal;
        speak: none;
        font-size: 35px;
        display: inline-block;
        text-decoration: inherit;
        width: 1em;
        margin-right: .2em;
        text-align: center;
        /* opacity: .8; */

        /* For safety - reset parent styles, that can break glyph codes*/
        font-variant: normal;
        text-transform: none;

        /* fix buttons height, for twitter bootstrap */
        line-height: 1em;

        /* Animation center compensation - margins should be symmetric */
        /* remove if not needed */
        margin-left: .2em;

        /* You can be more comfortable with increased icons size */
        /* font-size: 120%; */

        /* Font smoothing. That was taken from TWBS */
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;

        /* Uncomment for 3D effect */
        /* text-shadow: 1px 1px 1px rgba(127, 127, 127, 0.3); */
    }

    .section, .slide{
        height: auto !important;
    }

    *:before, *:after {
        box-sizing: inherit;
        -webkit-font-smoothing: antialiased;
    }

    /*
    a {
        color: #27E1CE;
        -webkit-transition: 0.5s;
        -o-transition: 0.5s;
        transition: 0.5s;
    }

    a:hover, a:active, a:focus {
        color: #27E1CE;
        outline: none;
    }
    */

    p {
        margin-bottom: 30px;
    }

    h1, h2, h3, h4, h5, h6, figure {
        color: #000;
        font-family: "Raleway", Arial, sans-serif;
        font-weight: 400;
        margin: 0 0 30px 0;
    }

    ::-webkit-selection {
        color: #fff;
        background: #337ab7;
    }

    ::-moz-selection {
        color: #fff;
        background: #337ab7;
    }

    ::selection {
        color: #fff;
        background: #337ab7;
    }

    .btn {
        margin-right: 4px;
        margin-bottom: 4px;
        font-family: "Raleway", Arial, sans-serif;
        font-size: 16px;
        font-weight: 400;
        -webkit-border-radius: 30px;
        -moz-border-radius: 30px;
        -ms-border-radius: 30px;
        border-radius: 30px;
        -webkit-transition: 0.5s;
        -o-transition: 0.5s;
        transition: 0.5s;
    }

    .btn.btn-md {
        padding: 10px 20px !important;
    }

    .btn.btn-lg {
        padding: 18px 36px !important;
    }

    .btn:hover, .btn:active, .btn:focus {
        box-shadow: none !important;
        outline: none !important;
    }

    /*
    .btn-primary {
        background: #27E1CE;
        color: #fff;
        border: 2px solid #27E1CE;
    }

    .btn-primary:hover, .btn-primary:focus, .btn-primary:active {
        background: #3de4d3 !important;
        border-color: #3de4d3 !important;
    }

    .btn-primary.btn-outline {
        background: transparent;
        color: #27E1CE;
        border: 2px solid #27E1CE;
    }

    .btn-primary.btn-outline:hover, .btn-primary.btn-outline:focus, .btn-primary.btn-outline:active {
        background: #27E1CE;
        color: #fff;
    }
    */
    .btn-success {
        background: #5cb85c;
        color: #fff;
        border: 2px solid #5cb85c;
    }

    .btn-success:hover, .btn-success:focus, .btn-success:active {
        background: #4cae4c !important;
        border-color: #4cae4c !important;
    }

    .btn-success.btn-outline {
        background: transparent;
        color: #5cb85c;
        border: 2px solid #5cb85c;
    }

    .btn-success.btn-outline:hover, .btn-success.btn-outline:focus, .btn-success.btn-outline:active {
        background: #5cb85c;
        color: #fff;
    }

    .btn-info {
        background: #5bc0de;
        color: #fff;
        border: 2px solid #5bc0de;
    }

    .btn-info:hover, .btn-info:focus, .btn-info:active {
        background: #46b8da !important;
        border-color: #46b8da !important;
    }

    .btn-info.btn-outline {
        background: transparent;
        color: #5bc0de;
        border: 2px solid #5bc0de;
    }

    .btn-info.btn-outline:hover, .btn-info.btn-outline:focus, .btn-info.btn-outline:active {
        background: #5bc0de;
        color: #fff;
    }

    .btn-warning {
        background: #f0ad4e;
        color: #fff;
        border: 2px solid #f0ad4e;
    }

    .btn-warning:hover, .btn-warning:focus, .btn-warning:active {
        background: #eea236 !important;
        border-color: #eea236 !important;
    }

    .btn-warning.btn-outline {
        background: transparent;
        color: #f0ad4e;
        border: 2px solid #f0ad4e;
    }

    .btn-warning.btn-outline:hover, .btn-warning.btn-outline:focus, .btn-warning.btn-outline:active {
        background: #f0ad4e;
        color: #fff;
    }

    .btn-danger {
        background: #d9534f;
        color: #fff;
        border: 2px solid #d9534f;
    }

    .btn-danger:hover, .btn-danger:focus, .btn-danger:active {
        background: #d43f3a !important;
        border-color: #d43f3a !important;
    }

    .btn-danger.btn-outline {
        background: transparent;
        color: #d9534f;
        border: 2px solid #d9534f;
    }

    .btn-danger.btn-outline:hover, .btn-danger.btn-outline:focus, .btn-danger.btn-outline:active {
        background: #d9534f;
        color: #fff;
    }

    .btn-outline {
        background: none;
        border: 2px solid gray;
        font-size: 16px;
        -webkit-transition: 0.3s;
        -o-transition: 0.3s;
        transition: 0.3s;
    }

    .btn-outline:hover, .btn-outline:focus, .btn-outline:active {
        box-shadow: none;
    }

    .btn.with-arrow {
        position: relative;
        -webkit-transition: 0.3s;
        -o-transition: 0.3s;
        transition: 0.3s;
    }

    .btn.with-arrow i {
        visibility: hidden;
        opacity: 0;
        position: absolute;
        right: 0px;
        top: 50%;
        margin-top: -8px;
        -webkit-transition: 0.2s;
        -o-transition: 0.2s;
        transition: 0.2s;
    }

    .btn.with-arrow:hover {
        padding-right: 50px;
    }

    .btn.with-arrow:hover i {
        color: #fff;
        right: 18px;
        visibility: visible;
        opacity: 1;
    }

    .form-control {
        box-shadow: none;
        background: #ffffff17;
        border: 2px solid rgba(252, 250, 250, 0.43);
        height: 54px;
        font-size: 18px;
        font-weight: 300;
    }

    .form-control:active, .form-control:focus {
        outline: none;
        box-shadow: none;
        border-color: #27E1CE;
    }

    .errorFrom {
        position: absolute;
        top: -25px;
        right: 0;
        left: 0;
    }

    .top-buffer {
        margin-top: 50px;
    }

    .fh5co-social {
        padding: 0;
        margin: 0;
    }

    .fh5co-social li {
        padding: 0;
        margin: 0;
        list-style: none;
        display: -moz-inline-stack;
        display: inline-block;
        zoom: 1;
        *display: inline;
    }

    .fh5co-social li a {
        font-size: 22px;
        color: #fff;
        padding: 0;
        margin: 0;
        padding: 2px;
        display: -moz-inline-stack;
        display: inline-block;
        zoom: 1;
        *display: inline;
        -webkit-border-radius: 7px;
        -moz-border-radius: 7px;
        -ms-border-radius: 7px;
        border-radius: 7px;
    }
    .fh5co-social li a img {
        width:30px;
        height:30px;
    }

    .fh5co-social li a:hover {
        color: #27E1CE;
    }

    .fh5co-social li a:hover, .fh5co-social li a:active, .fh5co-social li a:focus {
        outline: none;
        text-decoration: none;
    }

    @media screen and (max-width: 480px) {
        .col-xxs-12 {
            float: none;
            width: 100%;
        }
        .header h1{
            font-size: 3rem !important;
        }
        .header-inner img{
            width: 180px;
            height: 25px;
            margin-top: 25px !important;
        }
    }

    .row-bottom-padded-lg {
        padding-bottom: 7em;
    }



    .row-bottom-padded-md {
        padding-bottom: 4em;
    }

    @media screen and (max-width: 768px) {
        .row-bottom-padded-md {
            padding-bottom: 1em;
        }
    }

    .row-bottom-padded-sm {
        padding-bottom: 1em;
    }

    @media screen and (max-width: 768px) {
        .row-bottom-padded-sm {
            padding-bottom: 1em;
        }
    }

    #fh5co-header {
        width: 100%;
        margin: 0;
        position: sticky;
        top: 0;
        background: white;
        z-index: 1;
    }

    @media screen and (max-width: 768px) {
        #fh5co-header {
            margin: 0px 0 0 0;
        }
    }

    #fh5co-header .header-inner {
        height: 80px;
        padding-left: 20px;
        padding-right: 20px;
        float: left;
        width: 100%;
        -webkit-border-radius: 7px;
        -moz-border-radius: 7px;
        -ms-border-radius: 7px;
        border-radius: 7px;
    }

    #fh5co-header h1 {
        float: left;
        padding: 0;
        font-weight: 700;
        line-height: 0;
        font-size: 30px;
    }

    #fh5co-header h1 a {
        position: relative;
        color: black;
    }

    #fh5co-header h1 a > span {
        color: #27E1CE;
    }

    #fh5co-header h1 a:hover, #fh5co-header h1 a:active, #fh5co-header h1 a:focus {
        text-decoration: none;
        outline: none;
    }

    #fh5co-header h1 a:after {
        position: absolute;
        bottom: 17px;
        right: -12px;
        content: '';
        width: 8px;
        height: 8px;
        background: #27E1CE;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        -ms-border-radius: 50%;
        border-radius: 50%;
    }
    #fh5co-header img{
        position: relative;
        z-index: 10000;
        display: inline-block;
        margin: 22px 0 0 0;
    }
    #fh5co-header nav{
        margin: -55px 0 0 0;
        position: relative;
        display: inline-block;
    }
    #fh5co-header h1 {

        position: absolute;
        color: white;

    }
    #fh5co-header h1 img{
        vertical-align: super;
    }

    #fh5co-header nav {
        float: right;
        padding: 0;
    }

    @media screen and (max-width: 768px) {
        #fh5co-header nav {
            display: none;
        }
    }

    #fh5co-header nav ul {
        padding: 0;
        margin: 0 -0px 0 0;
        line-height: 0;
    }

    #fh5co-header nav ul li {
        padding: 0;
        margin: 0;
        list-style: none;
        display: -moz-inline-stack;
        display: inline-block;
        zoom: 1;
        *display: inline;
    }

    #fh5co-header nav ul li a {
        color: rgba(0, 0, 0, 0.7);
        font-size: 18px;
        padding: 10px;
        position: relative;
        -webkit-transition: 0.2s;
        -o-transition: 0.2s;
        transition: 0.2s;
    }

    #fh5co-header nav ul li a i {
        line-height: 0;
        font-size: 20px;
        position: relative;
        top: 3px;
    }

    #fh5co-header nav ul li a:after {
        content: "";
        position: absolute;
        height: 2px;
        bottom: 7px;
        left: 10px;
        right: 10px;
        background-color: #337ab7;
        visibility: hidden;
        -webkit-transform: scaleX(0);
        -moz-transform: scaleX(0);
        -ms-transform: scaleX(0);
        -o-transform: scaleX(0);
        transform: scaleX(0);
        -webkit-transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        -moz-transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        -ms-transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        -o-transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }

    #fh5co-header nav ul li a:hover {
        text-decoration: none;
        color: #337ab7;
    }

    #fh5co-header nav ul li a:hover:after {
        visibility: visible;
        -webkit-transform: scaleX(1);
        -moz-transform: scaleX(1);
        -ms-transform: scaleX(1);
        -o-transform: scaleX(1);
        transform: scaleX(1);
    }

    #fh5co-header nav ul li a:active, #fh5co-header nav ul li a:focus {
        outline: none;
        text-decoration: none;
    }

    #fh5co-header nav ul li.cta {
        margin-left: 20px;
    }

    #fh5co-header nav ul li.cta a {
        padding-left: 16px !important;
        padding-right: 16px !important;
        padding-top: 7px !important;
        padding-bottom: 7px !important;
        border: 2px solid #27e1ce;
        color: #27E1CE;
        -webkit-border-radius: 30px;
        -moz-border-radius: 30px;
        -ms-border-radius: 30px;
        border-radius: 30px;
    }

    #fh5co-header nav ul li.cta a:hover {
        color: #fff;
        background: #27E1CE;
    }

    #fh5co-header nav ul li.cta a:hover:after {
        display: none;
    }

    #fh5co-header nav ul li.active a {
        text-decoration: none;
        color: rgba(0, 0, 0, 0.8);
    }

    #fh5co-header nav ul li.active a:after {
        visibility: visible;
        -webkit-transform: scaleX(1);
        -moz-transform: scaleX(1);
        -ms-transform: scaleX(1);
        -o-transform: scaleX(1);
        transform: scaleX(1);
    }

    #fh5co-hero {
        min-height: 700px;
        background: #fff url(<?php echo get_template_directory_uri();?>/images/loader.gif) no-repeat center center;
    }

    #fh5co-hero .btn {
        font-size: 24px;
        height: 54px;
        border: none !important;
        color: #fff;
        font-size: 16px;
        font-weight: 400;
        text-align: center;
        margin: 0 auto;
        margin-top: 10px;
        width: 80%;
        /* padding-left: 50px; */
        /* padding-right: 50px; */
    }

    #fh5co-hero .btn.btn-primary {
        padding: 14px 30px !important;
    }

    #fh5co-hero .flexslider {
        border: none;
        z-index: 1;
        margin-bottom: 0;
    }

    #fh5co-hero .flexslider .slides {
        position: relative;
        overflow: hidden;
    }

    #fh5co-hero .flexslider .slides li {
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
        min-height: 700px;
    }

    #fh5co-hero .flexslider .flex-control-nav {
        bottom: 40px;
        z-index: 1000;
    }

    #fh5co-hero .flexslider .flex-control-nav li a {
        background: rgba(255, 255, 255, 0.2);
        box-shadow: none;
        width: 12px;
        height: 12px;
        cursor: pointer;
    }

    #fh5co-hero .flexslider .flex-control-nav li a.flex-active {
        cursor: pointer;
        background: rgba(255, 255, 255, 0.7);
    }

    #fh5co-hero .flexslider .flex-direction-nav {
        display: none;
    }

    #fh5co-hero .flexslider .slider-text {
        display: table;
        opacity: 0;
        min-height: 700px;
    }

    #fh5co-hero .flexslider .slider-text > .slider-text-inner {
        display: table-cell;
        vertical-align: middle;
        min-height: 700px;
    }

    #fh5co-hero .flexslider .slider-text > .slider-text-inner h2 {
        font-size: 70px;
        font-weight: 400;
        color: #fff;
    }

    @media screen and (max-width: 768px) {
        #fh5co-hero .flexslider .slider-text > .slider-text-inner h2 {
            font-size: 40px;
        }
    }

    #fh5co-hero .flexslider .slider-text > .slider-text-inner .fh5co-lead {
        font-size: 20px;
        color: #fff;
    }

    #fh5co-hero .flexslider .slider-text > .slider-text-inner .fh5co-lead .icon-heart {
        color: #d9534f;
    }

    #fh5co-services-section, #fh5co-work-section, #fh5co-testimony-section,
    #fh5co-blog-section {
        padding: 5em 0;
    }


    @media screen and (max-width: 768px) {
        #fh5co-services-section, #fh5co-work-section, #fh5co-testimony-section,
        #fh5co-blog-section {
            padding: 3em 0;
        }
    }

    #fh5co-services-section .services {
        position: relative;
    }

    #fh5co-services-section .services i {
        font-weight: bold;
        position: absolute;
        top: 0;
        left: 0;
        font-size: 40px;
        color: #31708f;
    }

    #fh5co-services-section .services .desc {
        padding-left: 70px;
    }

    #fh5co-services-section .services .desc h3 {
        font-size: 20px;
        font-weight: 700;
    }

    .fh5co-services {
        margin-top: 4em;
    }

    #fh5co-work-section .item-grid {
        width: 100%;
        float: left;
        position: relative;
        background: #fff;
        margin-bottom: 50px;
        -webkit-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.11);
        -moz-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.11);
        box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.11);
        -webkit-transition: 0.3s;
        -o-transition: 0.3s;
        transition: 0.3s;
        top: 2px;
    }

    #fh5co-work-section .item-grid .image {
        height: 300px;
        overflow: hidden;
        margin-bottom: 20px;
        background-size: cover;
        background-position: center center;
    }

    #fh5co-work-section .item-grid .v-align {
        padding: 30px;
    }

    #fh5co-work-section .item-grid .v-align h3 {
        font-weight: 700;
        font-size: 20px;
    }

    #fh5co-work-section .item-grid .v-align h5 {
        color: rgba(0, 0, 0, 0.3);
    }

    #fh5co-work-section .item-grid:hover, #fh5co-work-section .item-grid:focus {
        text-decoration: none;
        -webkit-box-shadow: 0px 14px 25px -2px rgba(0, 0, 0, 0.14);
        -moz-box-shadow: 0px 14px 25px -2px rgba(0, 0, 0, 0.14);
        box-shadow: 0px 14px 25px -2px rgba(0, 0, 0, 0.14);
        top: -2px;
    }

    .wrap-testimony {
        position: relative;
        width: 100%;
    }

    .wrap-testimony .testimony-slide {
        text-align: center;
        overflow: hidden;
    }

    .wrap-testimony .testimony-slide span {
        font-size: 18px;
    }

    .wrap-testimony .testimony-slide span a.twitter {
        color: #27E1CE;
        font-weight: 300;
    }

    .wrap-testimony .testimony-slide figure {
        margin-bottom: 20px;
        display: -moz-inline-stack;
        display: inline-block;
        zoom: 1;
        *display: inline;
    }

    .wrap-testimony .testimony-slide figure img {
        width: 120px;
        height: 120px;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        -ms-border-radius: 50%;
        border-radius: 50%;
    }

    .wrap-testimony .testimony-slide blockquote {
        border: none;
        margin: 0 auto;
        width: 72%;
        position: relative;
        padding-bottom: 30px;
    }

    @media screen and (max-width: 992px) {
        .wrap-testimony .testimony-slide blockquote {
            width: 100%;
        }
    }

    .wrap-testimony .testimony-slide blockquote p {
        font-size: 20px;
        line-height: 1.6em;
        color: #1a1a1a;
    }

    .wrap-testimony .testimony-slide.active {
        display: block;
    }

    .owl-carousel .owl-controls .owl-dot {
        margin-top: 30px;
    }

    .owl-carousel .owl-controls .owl-dot span {
        background: #e6e6e6;
    }

    .owl-carousel .owl-controls .owl-dot span:hover, .owl-carousel .owl-controls .owl-dot span:focus {
        background: #cccccc;
    }

    .owl-carousel .owl-controls .owl-dot:hover span, .owl-carousel .owl-controls .owl-dot:focus span {
        background: #cccccc;
    }

    .owl-carousel .owl-controls .owl-dot.active span {
        background: transparent;
        border: 2px solid #337ab7;
    }

    #fh5co-blog-section .item-grid {
        width: 100%;
        float: left;
        position: relative;
        background: #fff;
        margin-bottom: 50px;
        -webkit-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.11);
        -moz-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.11);
        box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.11);
        -webkit-transition: 0.3s;
        -o-transition: 0.3s;
        transition: 0.3s;
        top: 2px;
    }

    #fh5co-blog-section .item-grid .image {
        height: 400px;
        overflow: hidden;
        margin-bottom: 20px;
        background-size: cover;
        background-position: center center;
    }

    #fh5co-blog-section .item-grid .v-align {
        padding: 30px;
    }

    #fh5co-blog-section .item-grid .v-align h3 {
        font-weight: 700;
        font-size: 20px;
    }

    #fh5co-blog-section .item-grid .v-align h5 {
        color: rgba(0, 0, 0, 0.3);
    }

    #fh5co-blog-section .item-grid .v-align p {
        color: gray;
    }

    #fh5co-blog-section .item-grid:hover, #fh5co-blog-section .item-grid:focus {
        text-decoration: none;
        -webkit-box-shadow: 0px 14px 25px -2px rgba(0, 0, 0, 0.14);
        -moz-box-shadow: 0px 14px 25px -2px rgba(0, 0, 0, 0.14);
        box-shadow: 0px 14px 25px -2px rgba(0, 0, 0, 0.14);
        top: -2px;
    }

    .item-block {
        margin-bottom: 7em;
        float: left;
    }

    .item-block .icon {
        display: block;
        margin-bottom: 30px;
    }

    .item-block .icon img {
        max-width: inherit;
        height: 90px;
        margin: 0 auto;
    }

    .item-block h3 {
        font-size: 20px;
        font-weight: 700;
    }

    .item-block p:last-child {
        margin-bottom: 0;
    }

    .fh5co-heading {
        margin-bottom: 30px;
    }

    .fh5co-heading h2 {
        margin-bottom: 20px;
        font-weight: 700;
    }

    .googleplus-color {
        color: #dc4e41;
    }

    .facebook-color {
        color: #3b5998;
    }

    .twitter-color {
        color: #55acee;
    }

    .fh5co-about,
    .fh5co-team,
    .fh5co-contact {
        padding: 7em 0;
    }

    @media screen and (max-width: 768px) {
        .fh5co-about,
        .fh5co-team,
        .fh5co-contact {
            padding: 3em 0 10px 0;
        }
    }

    .contact-info {
        margin-bottom: 4em;
        padding: 0;
    }

    .contact-info li {
        list-style: none;
        margin: 0 0 20px 0;
        position: relative;
        padding-left: 40px;
    }

    .contact-info li i {
        position: absolute;
        top: .3em;
        left: 0;
        font-size: 22px;
        color: #27E1CE;
    }

    .contact-info li a {
        color: #27E1CE;
    }

    #map {
        height: 500px;
        width: 100%;
    }

    @media screen and (max-width: 768px) {
        #map {
            height: 400px;
        }
    }

    @media screen and (max-width: 480px) {
        #map {
            height: 200px;
        }
    }

    .fh5co-staff img {
        margin-bottom: 1.5em;
    }

    .fh5co-staff h3 {
        margin: 0 0 20px 0;
        font-weight: 700;
        font-size: 20px;
    }

    .fh5co-staff h4 {
        margin: 0 0 20px 0;
        font-weight: 400;
        color: rgba(0, 0, 0, 0.4);
    }

    .fh5co-staff .fh5co-social {
        text-align: center;
    }

    .fh5co-staff .fh5co-social a {
        color: #000;
    }

    .fh5co-cta {
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
        padding: 13em 0;
        position: relative;
        /*height: 68vh;*/
    }



    @media screen and (max-width: 768px) {
        .fh5co-cta {
            padding: 3em 0;
        }

        #fh5co-offcanvas{
            width: 295px !important;
        }

        span.icon-envelope-o, .icon-phone{
            line-height: 1.5 !important;
            float: left;
            margin-right: 7px;
        }

        .select {
            right: 5px !important;
            left: 0px;
            width: 100% !important;
        }

        ul#menu {
            margin-top: 30px !important;
        }



    }


    .fh5co-cta .overlay {
        background: rgba(0, 0, 0, 0.7);
        left: 0;
        right: 0;
        bottom: 0;
        top: 0;
        position: absolute;
        z-index: 1;
    }

    .fh5co-cta .container {
        position: relative;
        z-index: 2;
    }

    .fh5co-cta p, .fh5co-cta h3 {
        color: #fff;
    }

    .fh5co-cta p:last-child {
        margin-bottom: 0;
    }

    .fh5co-cta .btn {
        color: #fff;
    }

    #fh5co-footer {
        padding: 4em 0;
        padding-bottom: 0;
        float: left;
        width: 100%;
        height: 100%;
        position: relative;
        background: #262626;
    }

    @media screen and (max-width: 768px) {
        #fh5co-footer {
            padding: 3em 0;
        }
    }

    #fh5co-footer h2, #fh5co-footer h3, #fh5co-footer h4 {
        color: #fff;
    }

    #fh5co-footer h3 {
        letter-spacing: 2px;
        font-size: 16px;
        font-weight: bold;
    }

    #fh5co-footer [class*="col"] {
        padding-bottom: 30px;
    }

    #fh5co-footer .btn {
        color: #fff;
    }

    #fh5co-footer .float {
        float: left;
        margin-right: 10%;
    }

    #fh5co-footer ul {
        padding: 0;
        margin: 0;
    }

    #fh5co-footer ul li {
        padding: 0;
        margin: 0 0 10px 0;
        list-style: none;
    }

    #fh5co-footer ul li a {
        color: rgba(255, 255, 255, 0.5);
        text-decoration: none !important;
    }

    #fh5co-footer ul li a:hover {
        color: #fff;
    }

    .fh5co-copyright {
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        clear: both;
        padding: 40px 0 0 0;

    }

    .fh5co-copyright span {
        display: block;
    }

    @media screen and (max-width: 480px) {

        .fh5co-copyright span {
            display: inline;
        }
    }

    #fh5co-page {
        position: relative;
        z-index: 2;
        background: #fff;
    }

    #fh5co-offcanvas, .fh5co-nav-toggle, #fh5co-page {
        -webkit-transition: 0.5s;
        -o-transition: 0.5s;
        transition: 0.5s;
    }

    #fh5co-offcanvas, .fh5co-nav-toggle, #fh5co-page {
        position: relative;
    }

    #fh5co-page {
        z-index: 2;
        -webkit-transition: 0.5s;
        -o-transition: 0.5s;
        transition: 0.5s;
    }

    .offcanvas-visible #fh5co-page {
        -moz-transform: translateX(-275px);
        -webkit-transform: translateX(-275px);
        -ms-transform: translateX(-275px);
        -o-transform: translateX(-275px);
        transform: translateX(-275px);
    }

    #fh5co-offcanvas {
        display: none;
        height: 100%;
        right: 0;
        overflow-y: auto;
        position: fixed;
        z-index: 1;
        top: 0;
        width: 275px;
        background: black;
        padding: 30px;
    }

    @media screen and (max-width: 768px) {
        #fh5co-offcanvas {
            display: block;
        }
        .form-group {
            margin-bottom: 33px;
        }

        .fh5co-cta {
            /*height: 90vh;*/
        }
    }

    #fh5co-offcanvas ul {
        padding: 0;
        margin: 0;
    }

    #fh5co-offcanvas ul li {
        padding: 0;
        margin: 0 0 10px 0;
        list-style: none;
        line-height: 28px;
    }

    #fh5co-offcanvas ul li a {
        font-size: 18px;
        color: rgba(255, 255, 255, 0.7);
        text-decoration: none !important;
    }

    #fh5co-offcanvas ul li a:hover {
        color: #27E1CE;
    }

    #fh5co-offcanvas ul li.active a {
        color: #27E1CE;
    }

    #fh5co-offcanvas ul li.cta {
        margin-left: 0;
        margin-top: 20px;
        display: block;
        float: left;
    }

    #fh5co-offcanvas ul li.cta a {
        padding-left: 16px !important;
        padding-right: 16px !important;
        padding-top: 7px !important;
        padding-bottom: 7px !important;
        border: 2px solid rgba(255, 255, 255, 0.7);
        -webkit-border-radius: 30px;
        -moz-border-radius: 30px;
        -ms-border-radius: 30px;
        border-radius: 30px;
    }

    #fh5co-offcanvas ul li.cta a:hover {
        background: #fff;
        text-decoration: none;
    }

    #fh5co-offcanvas ul li.cta a:hover:after {
        display: none;
    }

    .fh5co-nav-toggle {
        cursor: pointer;
        text-decoration: none;
    }

    .fh5co-nav-toggle.active i::before, .fh5co-nav-toggle.active i::after {
        background: #fff;
    }

    .fh5co-nav-toggle.dark.active i::before, .fh5co-nav-toggle.dark.active i::after {
        background: #fff;
    }

    .fh5co-nav-toggle:hover, .fh5co-nav-toggle:focus, .fh5co-nav-toggle:active {
        outline: none;
        border-bottom: none !important;
    }

    .fh5co-nav-toggle i {
        position: relative;
        display: -moz-inline-stack;
        display: inline-block;
        zoom: 1;
        *display: inline;
        width: 30px;
        height: 2px;
        color: #fff;
        font: bold 14px/.4 Helvetica;
        text-indent: -55px;
        background: #000;
        transition: all .2s ease-out;
    }

    .fh5co-nav-toggle i::before, .fh5co-nav-toggle i::after {
        content: '';
        width: 30px;
        height: 2px;
        background: #000;
        position: absolute;
        left: 0;
        -webkit-transition: 0.2s;
        -o-transition: 0.2s;
        transition: 0.2s;
    }

    .fh5co-nav-toggle.dark i {
        position: relative;
        color: #000;
        background: #000;
        transition: all .2s ease-out;
    }

    .fh5co-nav-toggle.dark i::before, .fh5co-nav-toggle.dark i::after {
        background: #000;
        -webkit-transition: 0.2s;
        -o-transition: 0.2s;
        transition: 0.2s;
    }

    .fh5co-nav-toggle i::before {
        top: -7px;
    }

    .fh5co-nav-toggle i::after {
        bottom: -7px;
    }

    .fh5co-nav-toggle:hover i::before {
        top: -10px;
    }

    .fh5co-nav-toggle:hover i::after {
        bottom: -10px;
    }

    .fh5co-nav-toggle.active i {
        background: transparent;
    }

    .fh5co-nav-toggle.active i::before {
        top: 0;
        -webkit-transform: rotateZ(45deg);
        -moz-transform: rotateZ(45deg);
        -ms-transform: rotateZ(45deg);
        -o-transform: rotateZ(45deg);
        transform: rotateZ(45deg);
    }

    .fh5co-nav-toggle.active i::after {
        bottom: 0;
        -webkit-transform: rotateZ(-45deg);
        -moz-transform: rotateZ(-45deg);
        -ms-transform: rotateZ(-45deg);
        -o-transform: rotateZ(-45deg);
        transform: rotateZ(-45deg);
    }

    .fh5co-nav-toggle {
        position: fixed;
        top: 40px;
        right: 20px;
        z-index: 9999;
        display: block;
        margin: 0 auto;
        display: none;
        cursor: pointer;
    }

    @media screen and (max-width: 768px) {
        .fh5co-nav-toggle {
            display: block;
            top: 20px;
        }
    }

    #fh5co-pricing-section {
        padding: 7em 0;
        background: #fcfcfc;
    }

    @media screen and (max-width: 768px) {
        #fh5co-pricing-section {
            padding: 3em 0;
        }
    }

    #fh5co-pricing-section .pricing {
        display: block;
        float: left;
        margin-bottom: 30px;
    }

    #fh5co-pricing-section .price-box {
        text-align: center;
        padding: 30px;
        background: #fff;
        margin-bottom: 40px;
        position: relative;
        -webkit-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.11);
        -moz-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.11);
        box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.11);
        top: 2px;
        -webkit-transition: 0.3s;
        -o-transition: 0.3s;
        transition: 0.3s;
    }

    #fh5co-pricing-section .price-box.popular .btn-select-plan {
        background: #27E1CE;
    }

    #fh5co-pricing-section .price-box.popular .price {
        color: #27E1CE;
    }

    #fh5co-pricing-section .price-box .btn-select-plan {
        padding: 10px 20px;
        background: #5bc0de;
        color: #fff;
    }

    #fh5co-pricing-section .price-box:hover, #fh5co-pricing-section .price-box:focus {
        -webkit-box-shadow: 0px 14px 25px -2px rgba(0, 0, 0, 0.14);
        -moz-box-shadow: 0px 14px 25px -2px rgba(0, 0, 0, 0.14);
        box-shadow: 0px 14px 25px -2px rgba(0, 0, 0, 0.14);
        top: -2px;
    }

    #fh5co-pricing-section .pricing-plan {
        margin: 0 0 50px 0;
        padding: 0;
        font-size: 13px;
        letter-spacing: 2px;
        font-weight: 700;
        color: #888f94;
    }

    #fh5co-pricing-section .pricing-plan.pricing-plan-offer {
        margin-bottom: 24px;
    }

    #fh5co-pricing-section .pricing-plan span {
        display: block;
        margin-top: 10px;
        margin-bottom: 0;
        color: #d5d8db;
    }

    #fh5co-pricing-section .price {
        font-size: 72px;
        color: #6d6d6d;
        line-height: 50px;
    }

    #fh5co-pricing-section .price .currency {
        font-size: 30px;
        top: -0.9em;
        padding-right: 10px;
    }

    #fh5co-pricing-section .price small {
        font-size: 13px;
        display: block;
        color: #888f94;
    }

    .fh5co-light-grey-section {
        background: rgba(0, 0, 0, 0.03) !important;
    }

    .js .animate-box {
        opacity: 0;
    }

    .btn {
        height: 54px;
        border: none !important;
        /*background: #17B794;*/
        color: #fff;
        font-size: 16px;
        font-weight: 400;
        padding-left: 50px;
        padding-right: 50px;
    }

    .btn-default[disabled] {
        background: #17b794;
    }

    button#scroll {
        /*background: #2ee2cfcf;*/
        line-height: 0.1;
        width: 40%;
        border: 1px solid black;
        color: #4e4a4a;
        /* // box-shadow: 1px 1px 1px; */
        margin-top: 50px;
    }

    .form-inline .btn {
        height: 54px;
        border: none !important;

        color: #fff;
        font-size: 16px;
        font-weight: 400;
        text-align: center;
        margin: 0 auto;
        width: 75%;
        /* padding-left: 50px; */
        /* padding-right: 50px; */
    }

    @import url('https://fonts.googleapis.com/css?family=Josefin+Sans:400,400i,600,600i');
    html, body {
        margin: 0;
        height: 120%;
        font-family: 'Josefin Sans', sans-serif;

    }

    .header {
        position: relative;
        overflow: hidden;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: flex-start;
        align-content: flex-start;
        height: 100vh;
        min-width: 300px;
        color: #eee;
    }

    .header:after {
        content: "";
        width: 100%;
        height: 100%;
        position: absolute;
        bottom: 0;
        left: 0;
        z-index: -1;
        background: #000000a1;
    }

    .header:before {
        /*background: url(../images/dreamstime_101293461-min.jpg) no-repeat fixed right;*/
        background: #26b8a9;
        background-size: cover;
        background-attachment: fixed;
        content: "";
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        -webkit-backface-visibility: hidden;
        -webkit-transform: translateZ(0) scale(1.0, 1.0);
        transform: translateZ(0);
        animation: grow 60s linear 10ms infinite;
        transition: all 0.2s ease-in-out;
        z-index: -2
    }

    .header a {
        color: #eee
    }

    .info h1 {
        color: white;
    }

    .menu {
        display: block;
        width: 30px;
        height: 30px;
        border: 2px solid #fff;
        border-radius: 3px;
        position: absolute;
        right: 20px;
        top: 20px;
        text-decoration: none
    }

    .menu:after {
        content: "";
        display: block;
        width: 20px;
        height: 3px;
        background: #fff;
        position: absolute;
        margin: 0 auto;
        top: 5px;
        left: 0;
        right: 0;
        box-shadow: 0 8px, 0 16px;
    }

    .logo {
        border: 2px solid #fff;
        border-radius: 3px;
        text-decoration: none;
        display: inline-block;
        margin: 20px;
        padding: 5px 10px;
        font-weight: 600;
        font-size: 1.2em;
        box-sizing: border-box
    }

    .sides, .info {
        flex: 0 0 auto;
        width: 50%
    }

    .info {
        width: 100%;
        text-align: center;
        text-shadow: 0 2px 3px rgba(0, 0, 0, 0.2);
        z-index: 2;
    }

    .author {
        display: inline-block;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: url(http://favim.com/media/uploads/images/610/140308/black-n-white-cute-funny-iron-man-Favim.com-1462744.jpg) center no-repeat;
        background-size: cover;
        box-shadow: 0 2px 3px rgba(0, 0, 0, 0.3);
        margin-bottom: 3px
    }

    .info h4, .meta {
        font-size: 0.7em
    }

    .meta {
        font-style: italic;
    }

    @keyframes grow {
        0% {
            transform: scale(1)
        }
        50% {
            transform: scale(1.2)
        }
    }

    .content {
        padding: 5% 10%;
        text-align: justify
    }

    .btn {
        color: #333;
        border: 2px solid;
        border-radius: 3px;
        text-decoration: none;
        display: inline-block;
        padding: 5px 10px;
        font-weight: 600
    }

    .twtr {
        margin-top: 100px
    }

    .btn.twtr:after {
        content: "\1F426";
        padding-left: 5px
    }

    .btn.disabled, .btn[disabled], fieldset[disabled] .btn {
        cursor: auto;
    }

    .form-control {
        color: #ffffff;
    }

    @media only screen and (max-width: 400px) and (max-height: 570px) and (max-height: 570px) {
        button#scroll {
            width: 100%;
        }

        .form-inline .btn {
            width: 100%;
        }

        .header {
            height: 640px;
        }
    }

    @media only screen and (max-width: 400px) and (max-height: 570px) {
        button#scroll {
            width: 100%;
        }

        .form-inline .btn {
            width: 100%;
        }

        .header {
            height: 487px;
        }
    }


    @media only screen and (min-width: 375px) and (max-width: 700px) {
        .header {
            height: 90vh;
        }
    }


    @media only screen and (min-width: 400px) and (max-width: 1024px) {
        span.icon-envelope-o, .icon-phone {
            /* line-height: 1.7 !important;
             position: absolute;
             left: 8px;*/
        }
        .header {
            height: 90vh;
        }

        .loading-btn-wrapper {
            width: 100% !important;
        }

        .top-buffer {
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 35px;
        }
    }

    @media only screen and (min-width: 400px) and (max-width: 1024px)  and (max-height: 1026px) and (min-height: 1010px) {
        .header {
            height: 100vh;
        }

        .info {
            padding: 50% 10% 0 10%;
        }

        .col-sm-4 {
            width: 100%;
        }

        .form-inline .form-group {
            margin-bottom: 15px;
        }

        .form-inline .btn {
            width: 40%;
        }

        .top-buffer {
            margin-top: 30px;
        }
    }

    button {
        background-color: #337ab7;
        border: none;
        border-radius: 3px;
        color: #fff;
        padding: 1rem 1.6rem;
        font-size: 22px;
        font-weight: 600;
        letter-spacing: .03em;
        position: relative;
        -webkit-animation: button-bounce 2200ms forwards infinite cubic-bezier(0.165, 0.84, 0.44, 1);
        -moz-animation: button-bounce 2200ms forwards infinite cubic-bezier(0.165, 0.84, 0.44, 1);
        animation: button-bounce 2200ms forwards infinite cubic-bezier(0.165, 0.84, 0.44, 1);
        -webkit-transition: background-color 0.3s ease;
        -moz-transition: background-color 0.3s ease;
        transition: background-color 0.3s ease;
    }


    @-webkit-keyframes button-bounce {
        0% {
            transform: scale(1);
        }
        10% {
            transform: scale(0.96);
        }
        20% {
            transform: scale(1.04);
        }
        52%,
        100% {
            transform: scale(1);
        }
    }

    @-moz-keyframes button-bounce {
        0% {
            transform: scale(1);
        }
        10% {
            transform: scale(0.96);
        }
        20% {
            transform: scale(1.04);
        }
        52%,
        100% {
            transform: scale(1);
        }
    }

    @keyframes button-bounce {
        0% {
            transform: scale(1);
        }
        10% {
            transform: scale(0.96);
        }
        20% {
            transform: scale(1.04);
        }
        52%,
        100% {
            transform: scale(1);
        }
    }

    @-webkit-keyframes button-blip {
        0% {
            transform: scaleX(1) scaleY(1);
            opacity: 0;
        }
        10% {
            transform: scaleX(1) scaleY(1);
            opacity: .7;
        }
        30%,
        99% {
            transform: scaleX(1.08) scaleY(1.35);
            opacity: 0;
        }
        100% {
            transform: scaleX(1) scaleY(1);
            opacity: 0;
        }
    }

    @-moz-keyframes button-blip {
        0% {
            transform: scaleX(1) scaleY(1);
            opacity: 0;
        }
        10% {
            transform: scaleX(1) scaleY(1);
            opacity: .7;
        }
        30%,
        99% {
            transform: scaleX(1.08) scaleY(1.35);
            opacity: 0;
        }
        100% {
            transform: scaleX(1) scaleY(1);
            opacity: 0;
        }
    }

    @keyframes button-blip {
        0% {
            transform: scaleX(1) scaleY(1);
            opacity: 0;
        }
        10% {
            transform: scaleX(1) scaleY(1);
            opacity: .7;
        }
        30%,
        99% {
            transform: scaleX(1.08) scaleY(1.35);
            opacity: 0;
        }
        100% {
            transform: scaleX(1) scaleY(1);
            opacity: 0;
        }
    }

    .text--line {
        font-size: .5em;
    }

    svg {
        position: relative;
        width: 10%;
        height: 10%;
    }

    .text-copy {
        fill: none;
        stroke: white;
        stroke-dasharray: 7% 28%;
        stroke-width: 3px;
        -webkit-animation: stroke-offset 9s infinite linear;
        animation: stroke-offset 9s infinite linear;
    }

    .text-copy:nth-child(1) {
        stroke: #360745;
        stroke-dashoffset: 7%;
    }

    .text-copy:nth-child(2) {
        stroke: #D61C59;
        stroke-dashoffset: 14%;
    }

    .text-copy:nth-child(3) {
        stroke: #E7D84B;
        stroke-dashoffset: 21%;
    }

    .text-copy:nth-child(4) {
        stroke: #EFEAC5;
        stroke-dashoffset: 28%;
    }

    .text-copy:nth-child(5) {
        stroke: #1B8798;
        stroke-dashoffset: 35%;
    }

    @-webkit-keyframes stroke-offset {
        50% {
            stroke-dashoffset: 35%;
            stroke-dasharray: 0 87.5%;
        }
    }

    @keyframes stroke-offset {
        50% {
            stroke-dashoffset: 35%;
            stroke-dasharray: 0 87.5%;
        }
    }

    header {
        margin: 0;
        height: 100%;
    }

    header-body {
        margin: 0;
        height: 100%;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        background: black;
        color: #ccc;
    }

    header::before,
    header::after,
    .header-body::before,
    .header-body::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        display: block;
        width: .5vmin;
        height: .5vmin;
        border-radius: 50%;
        color: transparent;
    }

    .header-text {
        margin: 0;
        height: 12vmin;
        width: 120vmin;
        display: flex;
        justify-content: center;
        position: relative;
    }

    .header-text::before {
        content: "";
        display: block;
        position: absolute;
        z-index: -1;
        /* top: -26vmin; */
        top: 25vmin;
        left: 40vmin;
        width: 40vmin;
        height: 40vmin;
        border-radius: 50%;
        border: 1.3vmin solid #0000007a;
        box-sizing: border-box;
    }




    span.icon-envelope-o, .icon-phone {
        color: #337ab7;
        line-height: 4;
    }

    i.icon-twitter {
        color: #1da1f2;
    }

    i.icon-facebook {
        color: #425f9b;
    }

    .instagram {
        background: -webkit-radial-gradient(circle farthest-corner at 35% 90%, #fec564, rgba(0, 0, 0, 0) 50%), -webkit-radial-gradient(circle farthest-corner at 0 140%, #fec564, rgba(0, 0, 0, 0) 50%), -webkit-radial-gradient(ellipse farthest-corner at 0 -25%, #5258cf, rgba(0, 0, 0, 0) 50%), -webkit-radial-gradient(ellipse farthest-corner at 20% -50%, #5258cf, rgba(0, 0, 0, 0) 50%), -webkit-radial-gradient(ellipse farthest-corner at 100% 0, #893dc2, rgba(0, 0, 0, 0) 50%), -webkit-radial-gradient(ellipse farthest-corner at 60% -20%, #893dc2, rgba(0, 0, 0, 0) 50%), -webkit-radial-gradient(ellipse farthest-corner at 100% 100%, #d9317a, rgba(0, 0, 0, 0)), -webkit-linear-gradient(#6559ca, #bc318f 30%, #e33f5f 50%, #f77638 70%, #fec66d 100%);
        background: radial-gradient(circle farthest-corner at 35% 90%, #fec564, rgba(0, 0, 0, 0) 50%), radial-gradient(circle farthest-corner at 0 140%, #fec564, rgba(0, 0, 0, 0) 50%), radial-gradient(ellipse farthest-corner at 0 -25%, #5258cf, rgba(0, 0, 0, 0) 50%), radial-gradient(ellipse farthest-corner at 20% -50%, #5258cf, rgba(0, 0, 0, 0) 50%), radial-gradient(ellipse farthest-corner at 100% 0, #893dc2, rgba(0, 0, 0, 0) 50%), radial-gradient(ellipse farthest-corner at 60% -20%, #893dc2, rgba(0, 0, 0, 0) 50%), radial-gradient(ellipse farthest-corner at 100% 100%, #d9317a, rgba(0, 0, 0, 0)), linear-gradient(#6559ca, #bc318f 30%, #e33f5f 50%, #f77638 70%, #fec66d 100%);
        border-radius: .2em;
        font-size: 50vmin;
        height: 1em;
        position: relative;
        width: 1em;
    }
    .instagram:before, .instagram:after {
        color: #fff;
        content: '';
        display: block;
        position: absolute;
        border: .075em solid;
    }
    .instagram:before {
        border-radius: inherit;
        height: .75em;
        -webkit-transform: translate(0.125em, 0.125em);
        transform: translate(0.125em, 0.125em);
        width: .75em;
    }
    .instagram:after {
        border-radius: 1em;
        box-shadow: .2em -.2em 0 -.16em;
        height: .4em;
        -webkit-transform: translate(0.3em, 0.3em);
        transform: translate(0.3em, 0.3em);
        width: .4em;
    }

    i.icon-facebook {
        color: #425f9b;
    }

    i.icon-twitter {
        color: #1da1f2;
    }

    i.icon-linkedin {
        background: #0077B5;
        padding: 3px;
        border-radius: 2px;
        padding-left: 5px;
        padding-right: 5px;
    }

    input:focus {
        box-shadow: none;
        outline: 0;
    }

    .loading-btn-wrapper {
        display: inline-block;
        width: 75%;
        height: 55px;
        text-align: center;
    }

    button[disabled], html input[disabled] {
        opacity: 0.7;
    }

    .loading-btn {
        position: relative;
        display: inline-block;
        width: 100%;
        height: 100%;
        border: 0;
        cursor: pointer;
        -webkit-transition: all .33s ease-in-out;
        transition: all .33s ease-in-out;
    }
    .loading-btn:hover {
        background: #5bc0de;
    }
    .loading-btn, .loading-btn:focus {
        outline: none;
    }
    .loading-btn--pending, .loading-btn--success, .loading-btn--fail {
        width: 40px;
        pointer-events: none;
        cursor: default;
    }
    .loading-btn--pending .loading-btn__text, .loading-btn--success .loading-btn__text, .loading-btn--fail .loading-btn__text {
        opacity: 0;
    }
    .loading-btn--pending:before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        display: inline-block;
        height: 28px;
        width: 28px;
        border: 3px solid rgba(255, 255, 255, 0.33);
        border-top-color: #fff;
        border-radius: 50%;
        -webkit-animation: loading-btn--fade-in .33s ease, loading-btn--rotation .66s linear 0s infinite;
        animation: loading-btn--fade-in .33s ease, loading-btn--rotation .66s linear 0s infinite;
    }
    .loading-btn--success, .loading-btn--success:hover {
        background: #8bc34a;
    }

    .loading-btn--success{
        border-radius: 24px;
        display: inline-block;
        height: 75%;
    }

    .loading-btn--success:after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        display: inline-block;
        height: 25%;
        width: 50%;
        border: 3px solid #fff;
        border-top-width: 0;
        border-right-width: 0;
        -webkit-transform: translate(-50%, -75%) rotate(-45deg);
        transform: translate(-50%, -75%) rotate(-45deg);
        -webkit-animation: loading-btn--fade-in .6s ease;
        animation: loading-btn--fade-in .6s ease;
    }
    .loading-btn--fail, .loading-btn--fail:hover {
        background: #ff5722;
        border-radius: 24px;
        display: inline-block;
        height: 100%;
        width: 52px;

    }
    .loading-btn--fail:after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        display: inline-block;
        height: 65%;
        width: 65%;
        background: -webkit-linear-gradient(top, transparent 44%, #fff 44%, #fff 56%, transparent 56%), -webkit-linear-gradient(left, transparent 44%, #fff 44%, #fff 56%, transparent 56%);
        background: linear-gradient(to bottom, transparent 44%, #fff 44%, #fff 56%, transparent 56%), linear-gradient(to right, transparent 44%, #fff 44%, #fff 56%, transparent 56%);
        -webkit-transform: translate(-50%, -50%) rotate(-45deg);
        transform: translate(-50%, -50%) rotate(-45deg);
        -webkit-animation: loading-btn--fade-in .6s ease;
        animation: loading-btn--fade-in .6s ease;
    }
    .loading-btn__text {
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        font-size: 17px;
        color: #fff;
        -webkit-transition: inherit;
        transition: inherit;
    }

    /**
     * Animations
     */
    @-webkit-keyframes loading-btn--fade-in {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }
    @keyframes loading-btn--fade-in {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }
    @-webkit-keyframes loading-btn--rotation {
        0% {
            -webkit-transform: translate(-50%, -50%) rotate(0deg);
            transform: translate(-50%, -50%) rotate(0deg);
        }
        100% {
            -webkit-transform: translate(-50%, -50%) rotate(360deg);
            transform: translate(-50%, -50%) rotate(360deg);
        }
    }
    @keyframes loading-btn--rotation {
        0% {
            -webkit-transform: translate(-50%, -50%) rotate(0deg);
            transform: translate(-50%, -50%) rotate(0deg);
        }
        100% {
            -webkit-transform: translate(-50%, -50%) rotate(360deg);
            transform: translate(-50%, -50%) rotate(360deg);
        }
    }
    /**
     * Optical stuff - has nothing todo with button animation.
     */
    .state-list {
        margin-bottom: 12px;
    }
    .state-list .loading-btn-wrapper {
        background: -webkit-repeating-linear-gradient(45deg, #fff, #fff 10px, #f0f0f0 10px, #f0f0f0 20px);
        background: repeating-linear-gradient(45deg, #fff, #fff 10px, #f0f0f0 10px, #f0f0f0 20px);
    }

    .loading-btn-wrapper + .loading-btn-wrapper {
        margin-left: 8px;
    }

    .arrow,
    .arrow:before {
        position: absolute;
        left: 50%;
    }

    .arrow {
        width: 40px;
        height: 40px;
        bottom: 10%;
        margin: -20px 0 0 -20px;
        -webkit-transform: rotate(45deg);
        border-left: none;
        border-top: none;
        border-right: 2px #fff solid;
        border-bottom: 2px #fff solid;
        cursor: pointer;
    }

    .arrow:before {
        content: "";
        width: 20px;
        height: 20px;
        top: 50%;
        margin: -10px 0 0 -10px;
        border-left: none;
        border-top: none;
        border-right: 1px #fff solid;
        border-bottom: 1px #fff solid;
        animation-duration: 2s;
        animation-iteration-count: infinite;
        animation-name: arrow;
    }

    @keyframes arrow {
        0% {
            opacity: 1;
        }
        100% {
            opacity: 0;
            transform: translate(-10px, -10px);
        }
    }



    .content {
        position: relative;
        width: 100vw;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #333333;
        z-index: -2;
    }
    .content:after {
        display: block;
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 10px;
        height: 10px;
        background-size: 100% 100%;
        transition: all ease-out 1s;
        opacity: 0;
        z-index: -1;
    }
    .content.is-change:after {
        width: inherit;
        height: inherit;
        background-color: #ffffff;
        opacity: 1;
    }

    .title--main {
        overflow: hidden;
    }
    .title--main span {
        display: block;
        color: #333333;
        font-family: "vdl-linegr";
        font-size: 60px;
        text-align: center;
        transform: translateY(1em);
        transition: all ease-out 1s;
    }
    .title--main.is-view span {
        transform: translateY(0em);
    }

    .title--border {
        display: block;
        content: '';
        width: 0;
        height: 2px;
        margin: 10px 0;
        background-color: #ffffff;
        transition: all ease-out 2s;
    }
    .title--border.is-view {
        width: 100%;
        background-color: #333333;
    }

    .title--sub {
        overflow: hidden;
    }
    .title--sub span {
        display: block;
        color: #333333;
        font-family: "vdl-linegr";
        font-size: 18px;
        text-align: center;
        transform: translateY(-1em);
        transition: all ease-out 1s;
    }
    .title--sub.is-view span {
        transform: translateY(0em);
    }

    .header {
        position: relative;
        min-height: 92vh;
        background-image: linear-gradient(to top, black 0%, transparent 90%), repeating-linear-gradient(135deg, rgba(255, 255, 255, 0) 0, rgba(255, 255, 255, 0.05) 400px);
        display: flex;
        justify-content: center;
        align-items: center;
        overflow-x: hidden;
    }
    .header h1 {
        position: relative;
        z-index: 2;
        font-family: "Josefin Sans",sans-serif;
        color: white;
        font-size: 5rem;
    }

    .header h2 {
        color: #b8babc;
    }

    .header-canvas {
        position: absolute;
        z-index: 1;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        overflow: hidden;
    }

    select {
        -webkit-appearance: none;
        -moz-appearance: none;
        -ms-appearance: none;
        appearance: none;
        outline: 0;
        box-shadow: none;
        border: 0 !important;
        background: #2c3e50;
        background-image: none;
    }
    /* Custom Select */
    .select {
        position: relative;
        top: 4px;
        right: -25px;
        width: 10em;
        height: 3em;
        font-size: 15px;
        line-height: 3;
        margin-top: 9px;
        background: #2c3e50;
        overflow: hidden;
        border-radius: .25em;
    }
    select {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0 0 0 .5em;
        color: #fff;
        cursor: pointer;
    }
    select::-ms-expand {
        display: none;
    }
    /* Arrow */
    .select::after {
        content: '\25BC';
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        padding: 0 1em;
        background: #34495e;
        pointer-events: none;
    }
    /* Transition */
    .select:hover::after {
        color: #27e1ce;
    }
    .select::after {
        -webkit-transition: .25s all ease;
        -o-transition: .25s all ease;
        transition: .25s all ease;
    }

    #jssor_1 i{
        font-size: 150%;
    }

    .tech-icon {
        text-align: center;
        margin: 0 auto;
        padding: 20px;
        /*background: #262626;*/
    }
    .tech-icon:hover {
        background: #e8e8e8;
    }



    div#jssor_1 {
        background: #262626;
    }

    @media screen and (max-width: 768px) {
        .row-bottom-padded-lg {
            padding-bottom: 1em;
        }
        div#jssor_1 {
            padding: 20px;
        }
        .tech-title{
            font-size:25px
        }

        #jssor_1 i{
            font-size: 300%;
        }
    }

    .no-js #loader { display: none;  }
    .js #loader { display: block; position: absolute; left: 100px; top: 0; }
    .se-pre-con {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url(<?php echo get_template_directory_uri();?>/images/Preloader_8.gif) center no-repeat #fff;
    }

    .jssorl-009-spin img {
        animation-name: jssorl-009-spin;
        animation-duration: 1.6s;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
    }
    @keyframes jssorl-009-spin {
        from {
            transform: rotate(0deg);
        }
        to {
            transform: rotate(360deg);
        }
    }

    /* Header */
    .large-header {
        position: relative;
        width: 100%;
        background: #333;
        overflow: hidden;
        background-size: cover;
        background-position: center center;
        z-index: 1;
    }

    #large-header {
        background-image: url('<?php echo get_template_directory_uri();?>/images/demo-1-bg.jpg');
    }

    .main-title {
        position: absolute;
        margin: 0;
        padding: 0;
        color: #f9f1e9;
        text-align: center;
        top: 50%;
        left: 50%;
        -webkit-transform: translate3d(-50%,-50%,0);
        transform: translate3d(-50%,-50%,0);
    }
    .main-title h1, .main-title h2 {
        color: #f9f1e9;
    }

    .demo-1 .main-title {
        text-transform: uppercase;
        font-size: 4.2em;
        letter-spacing: 0.1em;
    }

    .main-title .thin {
        font-weight: 200;
    }

    @media only screen and (max-width : 768px) {
        .demo-1 .main-title {
            font-size: 3em;
        }
    }

</style>
<script>
    window.onload = function() {

        //loadCSS("<?php echo get_template_directory_uri();?>/css/style.css");

        loadCSS("https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css");
        loadCSS("https://fonts.googleapis.com/css?family=Josefin+Sans");
        loadCSS("<?php echo get_template_directory_uri();?>/css/animate.css");
        loadCSS("<?php echo get_template_directory_uri();?>/css/icomoon.css");
        loadCSS("<?php echo get_template_directory_uri();?>/css/bootstrap.css");
        loadCSS("<?php echo get_template_directory_uri();?>/css/flexslider.css");
        loadCSS("<?php echo get_template_directory_uri();?>/css/owl.carousel.min.css");
        loadCSS("<?php echo get_template_directory_uri();?>/css/owl.theme.default.min.css");
        <?php if(get_locale()=='he_IL'){?>
        loadCSS("<?php echo get_template_directory_uri();?>/css/jquery.fullPage.css);
        loadCSS("<?php echo get_template_directory_uri();?>/css/rtl.scss);
        <?php }?>

    };
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
                                <a href="<?php echo site_url();?>/?lang=en">English</a>
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
