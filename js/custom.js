$('.features-slider').slick({
    lazyLoad: 'ondemand',
    slidesToShow: 4,
    slidesToScroll: 1,

    responsive: [{
            breakpoint: 1200,
            settings: {
                arrows: false,
                dots: true,
                centerMode: true,
                centerPadding: '70px',
                slidesToShow: 3
            }
        },
        {
            breakpoint: 992,
            settings: {
                arrows: false,
                dots: true,
                centerMode: true,
                centerPadding: '70px',
                slidesToShow: 2
            }
        },
        {
            breakpoint: 768,
            settings: {
                arrows: false,
                dots: true,
                centerMode: true,
                centerPadding: '70px',
                slidesToShow: 1
            }
        },
        {
            breakpoint: 500,
            settings: {
                arrows: false,
                dots: true,
                centerMode: false,
                slidesToShow: 1
            }
        }

    ]
});
$('.news-slider').slick({
    lazyLoad: 'ondemand',
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: true,
    responsive: [{
            breakpoint: 992,
            settings: {
                arrows: false,
                dots: true,
                centerMode: true,
                centerPadding: '70px',
                slidesToShow: 2
            }
        },
        {
            breakpoint: 768,
            settings: {
                arrows: false,
                dots: true,
                centerMode: true,
                centerPadding: '70px',
                slidesToShow: 1
            }
        },
        {
            breakpoint: 500,
            settings: {
                arrows: false,
                dots: true,
                centerMode: false,
                slidesToShow: 1
            }
        }
    ]
});