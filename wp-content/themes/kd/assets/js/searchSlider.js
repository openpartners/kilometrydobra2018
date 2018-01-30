$.fn.searchSlider = function() {
    this.defaultOptions = {
        centerPadding: 0,
        initialSlide: 0,
        centerMode: true,
        slidesToScroll: 1,
        slidesToShow: 5,
        variableWidth: true,
        infinite: true,
        autoplay: false,
        autoplaySpeed: 500,
        responsive: [
            {
                breakpoint: 1800,
                settings: {
                    centerMode: true,
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 1060,
                settings: {
                    centerMode: true,
                    slidesToShow: 1
                }
            }
        ]
    };

    this.searcherModeOptions = {
        centerPadding: 0,
        initialSlide: 0,
        centerMode: false,
        slidesToScroll: 1,
        slidesToShow: 5,
        variableWidth: true,
        infinite: false,
        autoplay: false,
        autoplaySpeed: 500,
        responsive: [
            {
                breakpoint: 1800,
                settings: {
                    centerMode: false,
                    slidesToShow: 4
                }
            },
            {
                breakpoint: 1430,
                settings: {
                    centerMode: false,
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 1060,
                settings: {
                    centerMode: false,
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 690,
                settings: {
                    centerMode: true,
                    slidesToShow: 1
                }
            }
        ]
    };

    this.options = this.defaultOptions;

    this.slider = $(this.get(0));
    this.slides;
    this.sliderData = $('#slider-data');


    this.initSlider = function() {
        this.slider.html(this.slides);
        this.slider.slick(this.options);
        this.slider.on('setPosition', this.sliderSetPositionCallback);
    }

    this.reinitSlider = function() {
        this.slider.slick('unslick');
        this.initSlider();
        this.slider.slick('slickGoTo', 0);
    }

    this.getSlides = function(category, value) {
        var selector = '> div';

        if (category !== undefined && value !== undefined) {
            selector = '[data-'+category+'="'+value+'"]';
            this.slider.slick('unslick');
        }

        var newSlides = this.sliderData.find(selector);
        var newSlidesHtml = '';

        $.each(newSlides, function(index, value) {
            newSlidesHtml += '<div>'+$(value).html()+'</div>';
        });

        this.slides = newSlidesHtml;
    }

    /**
     * Slickslider issue workaround - https://github.com/kenwheeler/slick/issues/1977
     */
    this.sliderSetPositionCallback = function (event, slick, direction) {
        var slidesToShow = $(this).slick('slickGetOption', 'slidesToShow');

        $('.active-slide', this).removeClass('active-slide');

        switch(slidesToShow) {
            case 1:
                $('.slick-center', this).addClass('active-slide');
                break;
            case 3:
                $('.slick-center', this).addClass('active-slide');
                $('.slick-center', this).prev().addClass('active-slide');
                $('.slick-center', this).next().addClass('active-slide');
                break;
            case 5:
                $('.slick-center', this).addClass('active-slide');
                $('.slick-center', this).prev().addClass('active-slide');
                $('.slick-center', this).next().addClass('active-slide');
                $('.slick-center', this).prev().prev().addClass('active-slide');
                $('.slick-center', this).next().next().addClass('active-slide');
                break;
        }

        var items = $('.slick-slide', this).size();
        var itemsWidth = items*320 + (items-1)*50;
        var windowWidth = $(window).width();
        if (windowWidth >= itemsWidth) {
            $('.slick-track', this.slider).css('left', (windowWidth-itemsWidth)/2+'px');
        }
    }

    this.searcherMode = function(parameter) {
        if (parameter) {
            this.options = this.searcherModeOptions;
        } else {
            this.options = this.defaultOptions;
        }
    }

    this.getSlides();
    this.initSlider();

    return this;
}
