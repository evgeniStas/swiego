;(function () {
    'use strict';

//paste this code under the head tag or in a separate js file.
    // Wait for window load
    $(window).load(function() {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");
            setTimeout(function () {
                var owl = $('.owl-carousel-fullwidth');
                owl.owlCarousel({
                    animateOut: 'fadeOut',
                    items: 1,
                    loop: true,
                    margin: 0,
                    responsiveClass: true,
                    nav: false,
                    dots: true,
                    smartSpeed: 500,
                    autoHeight: true,
                    autoplay:true
                });
            }, 2000);
    });

    var paramsUrl = window
        .location
        .search
        .replace('?','')
        .split('&')
        .reduce(
            function(p,e){
                var a = e.split('=');
                p[ decodeURIComponent(a[0])] = decodeURIComponent(a[1]);
                return p;
            },
            {}
        );
    var langStore = localStorage.getItem('swiegoLang');
    var lang = paramsUrl["lang"];

    localStorage.setItem('swiegoLang', JSON.stringify(lang));
    if (!langStore) {
        localStorage.setItem('swiegoLang', JSON.stringify('en'));
    }



    var jssor_1_slider_init = function() {
        var jssor_1_options = {
            $AutoPlay: 1,
            $Idle: 0,
            $SlideDuration: 5000,
            $SlideEasing: $Jease$.$Linear,
            $PauseOnHover: 4,
            $SlideWidth: 140,
            $Cols: 7
        };
        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
        /*#region responsive code begin*/

        var MAX_WIDTH = screen.width;
        function ScaleSlider() {
            var containerElement = jssor_1_slider.$Elmt.parentNode;
            var containerWidth = containerElement.clientWidth;
            if (containerWidth) {
                var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);
                jssor_1_slider.$ScaleWidth(expectedWidth);
            }
            else {
                window.setTimeout(ScaleSlider, 30);
            }
        }
        ScaleSlider();
        $Jssor$.$AddEvent(window, "load", ScaleSlider);
        $Jssor$.$AddEvent(window, "resize", ScaleSlider);
        $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
        /*#endregion responsive code end*/
    };

    var isMobile = false;
    isMobile = {
        Android: function () {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function () {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function () {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function () {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function () {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function () {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    };



    var fullHeight = function () {
        if (!isMobile.any()) {
            $('.js-fullheight').css('height', $(window).height());
            $(window).resize(function () {
                $('.js-fullheight').css('height', $(window).height());
            });
        }
    };

    var sliderMain = function () {
        $('#fh5co-hero .flexslider').flexslider({
            animation: "fade",
            slideshowSpeed: 5000,
            directionNav: true,
            start: function () {
                setTimeout(function () {
                    $('.slider-text').removeClass('animated fadeInUp');
                    $('.flex-active-slide').find('.slider-text').addClass('animated fadeInUp');
                }, 500);
            },
            before: function () {
                setTimeout(function () {
                    $('.slider-text').removeClass('animated fadeInUp');
                    $('.flex-active-slide').find('.slider-text').addClass('animated fadeInUp');
                }, 500);
            }

        });
        $('#fh5co-hero .flexslider .slides > li').css('height', $(window).height());
        $(window).resize(function () {
            $('#fh5co-hero .flexslider .slides > li').css('height', $(window).height());
        });
    };

    var centerBlock = function () {
        $('.fh5co-section-with-image .fh5co-box').css('margin-top', -($('.fh5co-section-with-image .fh5co-box').outerHeight() / 2));
        $(window).resize(function () {
            $('.fh5co-section-with-image .fh5co-box').css('margin-top', -($('.fh5co-section-with-image .fh5co-box').outerHeight() / 2));
        });
    };

    var responseHeight = function () {
        setTimeout(function () {
            $('.js-responsive > .v-align').css('height', $('.js-responsive > img').height());
        }, 1);

        $(window).resize(function () {
            setTimeout(function () {
                $('.js-responsive > .v-align').css('height', $('.js-responsive > img').height());
            }, 1);
        })
    };


    var mobileMenuOutsideClick = function () {
    /*
        $(document).click(function (e) {
            var container = $("#fh5co-offcanvas, .js-fh5co-nav-toggle");
            if (container.is(e.target) && container.has(e.target).length === 0) {
                alert(1);
                if ($('body').hasClass('offcanvas-visible')) {
                    $('body').removeClass('offcanvas-visible');
                    $('.js-fh5co-nav-toggle').removeClass('active');
                }
            }
        });*/
    };

    var offcanvasMenu = function () {
        $('body').prepend('<div id="fh5co-offcanvas" />');
        $('#fh5co-offcanvas').prepend('<ul id="fh5co-side-links">');
        $('body').prepend('<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>');
        $('#fh5co-offcanvas').append($('#fh5co-header nav').clone());
    };

    var burgerMenu = function () {

        $('body').on('click', '.js-fh5co-nav-toggle', function (event) {
            var $this = $(this);
            $('body').toggleClass('fh5co-overflow offcanvas-visible');
            $this.toggleClass('active');
            event.preventDefault();
        });

        $(window).resize(function () {
            if ($('body').hasClass('offcanvas-visible')) {
                $('body').removeClass('offcanvas-visible');
                $('.js-fh5co-nav-toggle').removeClass('active');
            }
        });

        $(window).scroll(function () {
            if ($('body').hasClass('offcanvas-visible')) {
                $('body').removeClass('offcanvas-visible');
                $('.js-fh5co-nav-toggle').removeClass('active');
            }
        });
    };

    var toggleBtnColor = function () {
        if ($('#fh5co-hero').length > 0) {
            $('#fh5co-hero').waypoint(function (direction) {
                if (direction === 'down') {
                    $('.fh5co-nav-toggle').addClass('dark');
                }
            }, {offset: -$('#fh5co-hero').height()});

            $('#fh5co-hero').waypoint(function (direction) {
                if (direction === 'up') {
                    $('.fh5co-nav-toggle').removeClass('dark');
                }
            }, {
                offset: function () {
                    return -$(this.element).height() + 0;
                }
            });
        }
    };



    var contentWayPoint = function () {
        var i = 0;
        $('.animate-box').waypoint(function (direction) {

            if (direction === 'down' && !$(this.element).hasClass('animated')) {
                i++;
                $(this.element).addClass('item-animate');

                setTimeout(function () {
                    $('body .animate-box.item-animate').each(function (k) {
                        var el = $(this);
                        setTimeout(function () {
                            var effect = el.data('animate-effect');
                            if (effect === 'fadeIn') {
                                el.addClass('fadeIn animated');
                            } else if (effect === 'fadeInLeft') {
                                el.addClass('fadeInLeft animated');
                            } else if (effect === 'fadeInRight') {
                                el.addClass('fadeInRight animated');
                            } else {
                                el.addClass('fadeInUp animated');
                            }

                            el.removeClass('item-animate');
                        }, k * 200, 'easeInOutExpo');
                    });

                }, 100);
            }

        }, {offset: '85%'});
    };

    $(function () {
        fullHeight();
        sliderMain();
        centerBlock();
        responseHeight()
        mobileMenuOutsideClick();
        offcanvasMenu();
        burgerMenu();
        toggleBtnColor();
        contentWayPoint();
        //testimonialCarousel();
        watchScript();
        //jssor_1_slider_init();
    });

    function watchScript() {
        jQuery('#phone').keyup(function () {
            this.value = this.value.replace(/[^0-9\.]/g, '');
        });
        $('.form-inline input').keyup(function () {
            if (($('#name').val().length > 0) && ($('#email').val().length > 0) && ($('#phone').val().length > 0))
                $("#submit").prop('disabled', false);
            else
                $("#submit").prop('disabled', true);
        });
        $(".target").change(function() {
            var val = $(this).val();
            if(val !== 0){
                if(val == 1){
                    if (window.location.href.indexOf('he') > -1)
                    {
                        localStorage.setItem('swiegoLang', JSON.stringify('en'));
                        //location.replace("http://localhost:8080/flew");
                        location.replace("https://swiego.com");
                    }
                }

                if(val == 2){
                    if (!window.location.href.indexOf('he') > -1)
                    {
                        localStorage.setItem('swiegoLang', JSON.stringify('he'));
                        window.location = 'http://localhost/wordpress/?lang=he';
                    }
                }
            }
        });
    }
}());


function scrollToElement(type) {
    if(type === 1){
        $('html, body').animate({
            scrollTop: $(".fh5co-cta").offset().top
        }, 2000);
    }
    if(type === 2){
        $('html, body').animate({
            scrollTop: $("#section3").offset().top
        }, 1000);
    }
}



function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}

function sendContact(ev) {
    var successBtnElement = document.querySelector('.js_success-animation-trigger');
    var failBtnElement = document.querySelector('.js_fail-animation-trigger');

    var pendingClassName = 'loading-btn--pending';

    var successClassName = 'loading-btn--success';
    var failClassName = 'loading-btn--fail';

    var stateDuration = 1500;
    var elem = '';
    if (ev.srcElement.localName == 'span'){
        elem = $(ev.target).parent();
        elem = elem[0];
    }else {
        elem = ev.target;
    }


    elem.classList.add(pendingClassName);
    var obj = {};
    var validateEmail = false;
    var validateName = false;
    var validatePhone = false;
    var send = false;

    var inputs = $('.form-inline :input').map(function () {
        var key = $(this).context.id;
        var value = $(this).val();
        if (key == 'email') {
            if (value.length > 1) {
                $('#errorEmail').html('');
                var validate = isEmail(value);
                if (validate) {
                    obj[key] = value;
                    validateEmail = true;
                } else {
                    window.setTimeout(function () {
                        elem.classList.remove(pendingClassName);
                        elem.classList.add(failClassName);
                        window.setTimeout(function () {
                            return elem.classList.remove(failClassName);
                        }, stateDuration);
                    }, stateDuration);

                    if (window.location.href.indexOf('he') > -1)
                    {
                        $('#errorEmail').html('×ž×™×™×œ ×œ× ×—×•×§×™');
                    }else{
                        $('#errorEmail').html('Invalid email');
                    }
                }
            } else {
                window.setTimeout(function () {
                    elem.classList.remove(pendingClassName);
                    elem.classList.add(failClassName);
                    window.setTimeout(function () {
                        return elem.classList.remove(failClassName);
                    }, stateDuration);
                }, stateDuration);
                if (window.location.href.indexOf('he') > -1)
                {
                    $('#errorEmail').html('×©×“×” ×–×” ×—×•×‘×”');
                }else{
                    $('#errorEmail').html('This field is required');
                }

            }
        }
        if (key == 'name') {
            if (value.length > 1) {
                $('#errorName').html('');
                validateName = true;
                obj[key] = value;
            } else {
                window.setTimeout(function () {
                    elem.classList.remove(pendingClassName);
                    elem.classList.add(failClassName);
                    window.setTimeout(function () {
                        return elem.classList.remove(failClassName);
                    }, stateDuration);
                }, stateDuration);

                if (window.location.href.indexOf('he') > -1)
                {
                    $('#errorName').html('×©×“×” ×–×” ×—×•×‘×”');
                }else{
                    $('#errorName').html('This field is required');
                }
            }
        }
        if (key == 'phone') {
            if (value.length > 0) {
                $('#errorPhone').html('');
                if (value.length == 10 || value.length == 9) {
                    obj[key] = value;
                    validatePhone = true;
                } else {
                    window.setTimeout(function () {
                        elem.classList.remove(pendingClassName);
                        elem.classList.add(failClassName);
                        window.setTimeout(function () {
                            return elem.classList.remove(failClassName);
                        }, stateDuration);
                    }, stateDuration);
                    if (window.location.href.indexOf('he') > -1)
                    {
                        $('#errorPhone').html('×ž×¡×¤×¨ ×”×˜×œ×¤×•×Ÿ ×—×™×™×‘ ×œ×”×™×•×ª 9 ×¡×¤×¨×•×ª ×œ×¤×—×•×ª');
                    }else{
                        $('#errorPhone').html('The phone number must be at least 9 digits');
                    }
                }
            } else {
                window.setTimeout(function () {
                    elem.classList.remove(pendingClassName);
                    elem.classList.add(failClassName);
                    window.setTimeout(function () {
                        return elem.classList.remove(failClassName);
                    }, stateDuration);
                }, stateDuration);
                if (window.location.href.indexOf('he') > -1)
                {
                    $('#errorPhone').html('×©×“×” ×–×” ×—×•×‘×”');
                }else{
                    $('#errorPhone').html('This field is required');
                }
            }
        }
        if (validateEmail && validateName && validatePhone && !send) {
            var url = window.location.origin+'/wordpress/wp-admin/admin-ajax.php';
            console.log(url);
            send = true;
            $.ajax({
                type: "GET",
                url: ajax_url,
                data: {
                    action: 'contact',
                    name: obj["name"],
                    email: obj["email"],
                    phone: obj["phone"],
                    data: JSON.stringify(obj)
                },
                success: function (response) {
                    console.log('AJAX response : ',response);
                    window.setTimeout(function () {
                        elem.classList.remove(pendingClassName);
                        elem.classList.add(successClassName);
                    }, stateDuration);
                },
                error: function (e) {

                    window.setTimeout(function () {
                        elem.classList.remove(pendingClassName);
                        elem.classList.add(failClassName);

                        window.setTimeout(function () {
                            return elem.classList.remove(failClassName);
                        }, stateDuration);
                    }, stateDuration);
                }
            });
        }
    });
}
function loadCSS(href){
    var ss = window.document.createElement('link'),
        ref = window.document.getElementsByTagName('head')[0];

    ss.rel = 'stylesheet';
    ss.href = href;

    // temporarily, set media to something non-matching to ensure it'll
    // fetch without blocking render
    ss.media = 'only x';

    ref.parentNode.insertBefore(ss, ref);

    setTimeout( function(){
        // set media back to `all` so that the stylesheet applies once it loads
        ss.media = 'all';
    },0);
}


