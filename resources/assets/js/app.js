$(document).ready(function () {
    // $('.dropdown-toggle').dropdown();

    // jQuery_1_3_2('#selector').function('.itg-tabs-slick1, .itg-tabs-slick2, .itg-tabs-slick3, .itg-tabs-slick4');
    $('.btn-modal').on('click', function () {
        $('.itg-modals #myModal.modal.fade.in').css('display', 'block');
    });


    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        $('.itg-tabs-slick1').slick("setPosition", 0);
        $('.itg-tabs-slick2').slick("setPosition", 0);
        $('.itg-tabs-slick3').slick("setPosition", 0);
        $('.itg-tabs-slick4').slick("setPosition", 0);
    });

    $('.itg-main-tabs .nav-tabs li a').on('click', function () {
        // var hhh = $(this).parent().parent().parent('.row').html();
        // hhh.find('.fa-chevron-right').trigger("click");
        // console.log(hhh);
    });

    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        nextArrow: '<i class="fa fa-chevron-right"><span>fa</span></i>',
        prevArrow: '<i class="fa fa-chevron-left"><span>fa</span></i>',
        fade: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: true,
        centerMode: true,
        focusOnSelect: true,
        // autoplay: true
    });

    /// tabs slider

    $('.itg-tabs-slick1, .itg-tabs-slick2, .itg-tabs-slick3, .itg-tabs-slick4').slick({
        nextArrow: '<i class="fa fa-chevron-right"><span>fa</span></i>',
        prevArrow: '<i class="fa fa-chevron-left"><span>fa</span></i>',
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 500,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });



    $('.manufactories-inner').slick({
        nextArrow: '<i class="fa fa-chevron-right"><span>fa</span></i>',
        prevArrow: '<i class="fa fa-chevron-left"><span>fa</span></i>',
        infinite: false,
        speed: 300,
        slidesToShow: 6,
        slidesToScroll: 2,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

    /**  spoiler **/

            // spoiler
        //
        // $('.read-more-spoiler').on('click', function () {
        //     $('.spoiler-inner').removeClass('spoiler-inner-hidden');
        //     $('.read-more-spoiler-span').addClass('display-hidden');
        //     $('.read-more-spoiler-close').removeClass('display-hidden');
        // });
        //
        // $('.read-more-spoiler-close').on('click', function () {
        //     $(this).addClass('display-hidden');
        //     $('.spoiler-inner').addClass('spoiler-inner-hidden');
        //     $('.read-more-spoiler').removeClass('display-hidden');
        // });




    /**  end spoiler **/

});