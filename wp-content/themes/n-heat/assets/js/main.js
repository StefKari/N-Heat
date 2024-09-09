$(document).ready(function() {

    jQuery(function($) {



        $(".sub-menu").hide();

        $(".menu-item-has-children").click(function() {

            $(".sub-menu").slideToggle();
        });

        // $(".menu-item-has-children").mouseleave(function (e) {
        //     e.preventDefault();
        //     $(".sub-menu").slideUp();
        // });

        // if (window.innerWidth > 901) {
        //     $(".sub-menu").show();
        // }


        // // SIDE MENU ANIMATION
        // $('.menu_btn').click(function() {
        //     $(this).toggleClass('open');
        //     $('.sidemenu').toggleClass('open');
        //     $('body').toggleClass('no-scroll')
        // });


        // MOBILE MENU
        $('.menu-mobile .toggle-menu').click(function() {
            $(this).toggleClass('active');
            $('.menu').toggleClass('openMenu');
            $('html').toggleClass('overflow');
        });

        $('.menu-mobile .toggle-menu').click(function() {
            $('.nav').toggleClass('openMenu');
        });

        $(".menu ul li").click(function() {
            $('.menu').removeClass('openMenu')
        })
        $('.menu ul li').click(function() {
            $('.toggle-menu').removeClass('active');
        })



        $('.velika_slika').hide();
        $('.mala_slika').click(function() {
            $('.velika_slika').fadeToggle();
        })

        // Drop down menu - Header

        /* const $dropdown = $(".dropdown");
        const $dropdownToggle = $(".dropdown-toggle");
        const $dropdownMenu = $(".dropdown-menu");
        const showClass = "show";
        $(window).on("load resize", function() {
            if (this.matchMedia("(min-width: 768px)").matches) {
                $dropdown.hover(
                    function() {
                        const $this = $(this);
                        $this.addClass(showClass);
                        $this.find($dropdownToggle).attr("aria-expanded", "true");
                        $this.find($dropdownMenu).addClass(showClass);
                    },
                    function() {
                        const $this = $(this);
                        $this.removeClass(showClass);
                        $this.find($dropdownToggle).attr("aria-expanded", "false");
                        $this.find($dropdownMenu).removeClass(showClass);
                    }
                );
            } else {
                $dropdown.off("mouseenter mouseleave");
            }
        });
        */

        // Home slider

        if ($('.home-slider').length) {
            var tiny_slider = tns({
                container: '.home-slider',
                navAsThumbnails: false,
                items: 1,
                autoplay: false,
                navPosition: "bottom",
                // gutter: 30,
                mouseDrag: true,
                autoplayTimeout: 6000,
                controls: false,
                autoplayButton: false,
                autoplayButtonOutput: false,
                responsive: {
                    0: {
                        items: 1,
                    },
                    991: {
                        items: 1,
                    }
                },
            });
        }
        // Product slider
        if ($('.product-slider').length) {
            var tiny_slider1 = tns({
                container: '.product-slider',
                navAsThumbnails: false,
                items: 3,
                autoplay: false,
                gutter: 200,
                mouseDrag: true,
                autoplayTimeout: 6000,
                controls: false,
                autoplayButton: false,
                autoplayButtonOutput: false,
                responsive: {
                    0: {
                        items: 1,
                    },
                    586: {
                        items: 2,
                    },
                    991: {
                        items: 3,
                    },
                    1400: {
                        items: 3,
                    },

                },
            });
        }
        // Video play button - Home page

        $('.play').click(function() {
            if ($(this).parent().prev().get(0).paused) {
                $(this).parent().prev().get(0).play();
                $(this).parent().prev().removeClass('blurEffect');
                $('.content').hide();
            }
        });
        $('#video').on('ended', function() {
            $('.content').show();
        });


        new fullpage('#fullpage', {
            // anchors: ['page1', 'page2', 'page3', 'page4'],
            // navigationTooltips: ['Section 1', 'Section 2', 'Section 3', 'Section 4', 'Footer'],
            responsiveWidth: 786,
            css3: true,
            scrollingSpeed: 1000,
            scrollBar: true,
            navigation: true,
            scrollOverflow: true,
            slidesNavigation: true,
            //responsiveWidth: 768,
            controlArrows: false,
            paddingTop: '102px',
        });

        $(".banner-section .tns-nav").wrapAll('<div class="container"></div>');

        // var counterUp = window.counterUp["default"]; // import counterUp from "counterup2"

        // var $counters = $(".counter");

        // /* Start counting, do this on DOM ready or with Waypoints. */
        // $counters.each(function (ignore, counter) {
        //     var waypoint = new Waypoint( {
        //         element: $(this),
        //         handler: function() {
        //             counterUp(counter, {
        //                 duration: 5000,
        //                 delay: 16
        //             });
        //           //  this.destroy(); uncomment if we don't want the count to work on each scroll
        //         },
        //         offset: 'bottom-in-view',
        //     } );
        // });


        $('.counter').countUp({
            delay: 10,
            time: 2000
        });



        // if ($('#customize').length) {
        //     var tiny_slider4 = tns({
        //         container: "#customize",
        //         items: 1,
        //         controlsContainer: "#customize-controls",
        //         navContainer: "#customize-thumbnails",
        //         navAsThumbnails: true,
        //         autoplayButton: false,
        //         autoplay: false,
        //         autoplayTimeout: 5000,
        //         swipeAngle: false,
        //         speed: 400,
        //         mode: 'gallery',
        //         animateIn: 'fadeIn',
        //         // animateNormal: 'tns-normal',
        //         animateDelay: 500

        //     });
        // }

        if ($('.project-single-slider').length) {
            var tiny_slider1 = tns({
                container: ".project-single-slider",
                items: 1,
                controlsContainer: "#customize-controls",
                swipeAngle: false,
                speed: 400,
                fixedWidth: false,
                nav: false,
                loop: true,
                center: true,
                startIndex: 0,
                slideCount: 'slideCount', // original slide count
                responsive: {
                    992: {
                        items: 2,
                        fixedWidth: 850,
                    }
                },

            });

            let info = tiny_slider1.getInfo(),
                current = document.querySelector('.current-slide'),
                total = document.querySelector('.total');
            current.textContent = tiny_slider1.getInfo().displayIndex;
            total.textContent = info.slideCount;

            tiny_slider1.events.on('transitionEnd', function(info) {
                current.textContent = tiny_slider1.getInfo().displayIndex;
            });
        }

    });
    /* $(document).on('click', '.js-filter-item > a', function(e){
         e.preventDefault();
         var category_var = $(this).data('category');
         $.ajax({
             url:"/wp-admin/admin-ajax.php",
             data: { action: 'filter', category: category_var },
             type: 'post',
             success: function(result) {
                 $('.js-filter').html(result);
             },
             error: function(result) {
                 console.warn(result);
             }
         });
     }); */



    $(".sf-item-5").append('<p class="accordionFormnexans"> <i class="fal fa-angle-down"></i> </p>');
    $('.accordionFormnexans').click(function() {
        $('.accordionFormnexans i').toggleClass('fa-angle-up');
        $('.sf-item-5 .children').slideToggle();
    })
    $(".sf-item-4").append('<p class="accordionFormnexansSecond"> <i class="fal fa-angle-down"></i> </p>');
    $('.accordionFormnexansSecond').click(function() {
        $('.accordionFormnexansSecond i').toggleClass('fa-angle-up');
        $('.sf-item-4 .children').slideToggle();
    })
});








//ACF Background image resize

$(window).bind('resize', function() {

    var windowWidth = $(window).width();

    if (windowWidth <= 768) {
        $('[data-small-src]').each(function() {
            var small_src = $(this).data('small-src');
            $(this).css({ 'background-image': 'url(' + small_src + ')' });
        });
    } else {
        $('[data-lrg-src]').each(function() {
            var lrg_src = $(this).data('lrg-src');
            $(this).css({ 'background-image': 'url(' + lrg_src + ')' });
        });
    }

});

jQuery('.gallery').magnificPopup({
    delegate: 'a',
    type: 'image',
    gallery: {
        enabled: true,
        navigateByImgClick: true,
    }

})


window.addEventListener('load', setup);

const get = document.getElementById.bind(document);
const query = document.querySelector.bind(document);

function setup() {

    let modalRoot = get('n-heat-modal-root');
    let button = get('n-heat-modal-opener');
    let modal = query('.n-heat-modal');

    modalRoot.addEventListener('click', rootClick);
    button.addEventListener('click', openModal);

    function rootClick(e) {
        if (e.target.id == "n-heat-modal-root") {
            modalRoot.classList.remove('visible');
        }
    }

    function openModal() {
        modalRoot.classList.add('visible');
    }
}