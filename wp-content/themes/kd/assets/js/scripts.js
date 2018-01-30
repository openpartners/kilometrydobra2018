function priceFormat(amount) {
	return amount.split('').reverse().join('').replace(/([0-9]{3})/g, "$1 ").split('').reverse().join('').replace('.', ',');
}

function scrollToDonors() {
	if( window.location.hash.replace('#', '') == 'darczyncy') {
		$('html, body').animate({
			scrollTop: $( '#list' ).offset().top-$('header').height()
		}, 2000);
	}
}

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length,c.length);
        }
    }
    return null;
}

$.urlParam = function(name){
    var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
    if (results==null) {
       return null;
    } else {
       return results[1] || 0;
    }
}

$(window).load(scrollToDonors);

$(document).ready(function(){

	$('.mainGallery').slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		arrows: true,
		autoplay: true,
		 responsive: [
		    {
		      breakpoint: 1024,
		      settings: {
		        slidesToShow: 2,
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
		  ]
	});


	$('.mainLogos').slick({
		infinite: true,
		slidesToShow: 5,
		slidesToScroll: 1,
		arrows: true,
		autoplay: true,
		 responsive: [
		    {
		      breakpoint: 1024,
		      settings: {
		        slidesToShow: 2,
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
		  ]
	});

	$('#customPrice').on('change', function(){
		var price = $('#customPrice').val().replace(',', '.');
		price = parseFloat(price).toFixed(2);
		$(this).parents().find('input[name="price"]').val(price);
		$(this).val(price);
	});

	$('#payment-form .radio-wrapper').on('click', function(){
		$(this).find('input[name="price"]').prop('checked', true);
		$('#payment-form .radio-wrapper').removeClass('active');
		$(this).addClass('active');
	});

	$('#payment-form input[name="phone"]').on('change', function(){
		if ($(this).val().length > 0) {
			$(this).prop('required', true);
		} else {
			$(this).prop('required', false);
		}
	});

	$('#accept-cookies').on('click', function(){
		setCookie('cookiesPolicy', 'accepted', 7);
		$('.cookies-policy').fadeOut('slow');
	});

	if (getCookie('cookiesPolicy') == null) {
		$('.cookies-policy').fadeIn('slow');
	}
});

$(function(){
    var mapOptions = {
        mapMiddle: {lat: 55.3778685, lng: 18.0468363},
        initialZoom: 4,
        maxZoom: 8,
        minZoom: 2,
        ajaxUrl: '?action=getMarkers',
        modalWrapper: $('#map-modal-wrapper'),
        ajaxCallback: function(data) {
            $.each(data, function(key, value) {mapOptions.setMarker(value)});;
        },
        openModalCallback: function(data) {
            $('.organization-box .name', mapOptions.modalWrapper).text(data.organizationName);
            $('.organization-box .description', mapOptions.modalWrapper).text(data.organizationDescription);
            $('.organization-box .pay', mapOptions.modalWrapper).attr('href', data.organizationPayUrl);

			if (data.organizationLogotype != null) {
				$('.organization-box .logotype', mapOptions.modalWrapper).attr('src', data.organizationLogotype);
				$('.organization-box .logotype', mapOptions.modalWrapper).show();
			} else {
				$('.organization-box .logotype', mapOptions.modalWrapper).hide();
			}

            $('.organization-box a:not(.pay)', mapOptions.modalWrapper).attr('href', data.organizationUrl);
            $(mapOptions.modalWrapper).show();
        },
        setMarker: function(item) {
            var marker = new google.maps.Marker({
                position: {lat: item.lat, lng: item.lng},
                map: _this.map,
                zIndex: (item.type == 'major')?1:0,
                visible: (item.type == 'major'),
                icon: ('/wp-content/themes/kd/images/' + ((item.type == 'major')?'major-marker-icon.png':'minor-marker-icon.png')),
                type: item.type,
                customCenter: {lat: item.centerLat, lng: item.centerLng},
                modalData: {
                    organizationLogotype: item.logo,
                    organizationName: item.name,
                    organizationCity: item.city,
                    organizationDescription: item.description,
                    organizationPayUrl: 'wplac/?id='+item.id,
                    organizationUrl: (item.guid !== undefined)?item.guid.replace('#038;', '&'):'/'
                }
            });


            if (item.type == 'major') {
                marker.addListener('click', function() {
                    _this.map.setZoom(6);
                    if (marker.customCenter.lat == undefined && marker.customCenter.lng == undefined) {
                        _this.map.setCenter(marker.getPosition());
                    } else {
                        _this.map.setCenter(marker.customCenter);
                    }
                });
            } else {
                marker.addListener('click', function(){
                    mapOptions.openModalCallback(marker.modalData)
                });
            }

            _this.markers.push(marker);
        }
    }

    if ($('#map #map-wrapper').length > 0) {
		var edition = $('#map').data('edition');

		if (edition != undefined) {
			mapOptions.ajaxUrl = '/wp-admin/admin-ajax.php?action=getOrganizationsMapMarkers&edition=' + edition;
			mapOptions.initialZoom = 2;
			mapOptions.mapMiddle = {lat: 15.4959192, lng: 86.3830174};
		}
        var map = $('#map #map-wrapper').kdMap(mapOptions);
    }

    if ($('#banner .slider').length > 0) {
        var slider = $('#banner .slider').searchSlider();
    }

    if ($('#formPrice').length > 0) {
        $('#formPrice').val($('#buttons > li.active').data('value'));
    }

    if ($('header nav > ul > li:last-child > ul > li.current_page_item img').length > 0) {
        $('header nav > ul > li:last-child > a > img').attr('src', $('header nav > ul > li:last-child > ul > li.current_page_item img').attr('src'));
    }

    function selectorChangeCallback() {
        var index = ($(this).attr('id')).replace('-selector', '');

        if ($(this).val() == 0) {
            $('#banner .selectors select').removeClass('inactive');
            $('#banner .slider').removeClass('searcher');
            $('#banner .alternate-text').removeClass('hidden');
            slider.searcherMode(false);
            slider.getSlides();
        } else {
            $('#banner .slider').addClass('searcher');
            $('#banner .alternate-text').addClass('hidden');
            $('#banner .selectors select').not(this).addClass('inactive').val(0);
            slider.searcherMode(true);
            slider.getSlides(index, $(this).val());
        }
        slider.reinitSlider();
        $(this).removeClass('inactive');

        if ($('#banner .slider').hasClass('searcher')) {
            $('#banner .search-summary .found').text($('.slick-slide').size());
            $('#banner .search-summary').show();
        } else {
            $('#banner .search-summary').hide();
        }
    }


    function windowScrollCallback() {
        if ($('header').offset().top == 0) {
            $('header #logo').removeClass('horizontal-logo');
        } else {
            $('header #logo').addClass('horizontal-logo');
        }

		if ($('#ranking').length > 0) {
	        if ($('#ranking').offset().top - 110 < $('.social-bar').offset().top) {
	            $('.social-bar').css('visibility', 'visible');
	        } else {
	            $('.social-bar').css('visibility', 'hidden');
	        }
		}
    }



    function bottomScrollCallback()
    {
        var element = $(this).parent().parent();

        $('html, body').animate({
            scrollTop: $(element).offset().top-$('header').height()
        }, 500);
    }

	function filterRanking(){
		$('#ranking .records .row.noresult').hide();
		var records = $('#ranking .records .row').not('.noresult');

		var result = records.filter(function () {
			var reg = new RegExp($('#ranking #search').val(), "ig");
			return reg.test($(this).text())
		});
		records.fadeOut( "slow" );
		result.fadeIn( "slow" );

		if (result.length == 0 && $('#search').val().length > 0) {
			$('#ranking .records .row.noresult').show();
		}
	}

    $('#banner .selectors select').on('change', selectorChangeCallback);
    $(window).scroll(windowScrollCallback);
    $('.bottom a').on('click', bottomScrollCallback);


    $('nav + .toggle').on('click', function(){
        $('header nav').toggleClass('opened');
    });

    $('header nav > ul > li:last-child').on('click', function(){
        $('ul', this).toggleClass('opened');
    });

    $('#map-modal-wrapper .organization-box .close').on('click', function() {
        $(this).parents('#map-modal-wrapper').hide();
    })

    $('#subpage-banner').css('height', 0.85*$(window).height()-$('header').height());

    if ($(window).height() > 655 && $(window).height() < 780) {
        $('#banner').css('height', $(window).height()-$('header').height()+27);
    }else if ($(window).height() >= 780){
        $('#banner').css('height', 750);
    }
    $( window ).resize(function() {
        if (map !== undefined) {
            map.centerMap();
        }
        if ($(window).height() > 655 && $(window).height() < 780) {
            $('#banner').css('height', $(window).height()-$('header').height()+27);
        }else if ($(window).height() >= 780){
            $('#banner').css('height', 750);
        }
        $('#subpage-banner').css('height', 0.85*$(window).height()-$('header').height());
    });

    $('.mainGallery .slick-slide').on('click', function(){
        $('#photo-modal img').attr('src', $(this).data('original-image'));
        $('#photo-modal').fadeIn('slow');
    });

    $('#photo-modal').on('click', function(){
        $(this).fadeOut('slow');
    });
    $('#photo-modal .close').on('click', function(){
        $(this).parents('#photo-modal').fadeOut('slow');
    });

	$('#ranking #search').bind('input propertychange', function() {
	    if ($(this).val().length > 0) {
			$(this).css('font-style', 'normal');
		} else {
			$(this).css('font-style', 'italic');
		}
	});

	$('#ranking .ranking #search').keypress(function(e){
        if(e.which == 13){
            filterRanking();
        }
    });

	$('#ranking .ranking .search i').on('click', filterRanking);

	$('.sort').on('click', function(){
		if ($(this).hasClass('asc')) {
			$('.records .row').sorter('asc', $(this).parent().data('key'), $(this).parent().data('type'));
		} else {
			$('.records .row').sorter('desc', $(this).parent().data('key'), $(this).parent().data('type'));
		}
		$('.sort.active').removeClass('active');
		$(this).addClass('active');
	});

	$('.modal .modal-overlay, .modal .modal-close').on('click', function(){
		$(this).parents().find('.modal').fadeOut('slow');
		event.preventDefault();
	});
	$('.payment-block').on('click', function(event){
		$('.modal.payment-block-modal').fadeIn('slow');
		event.preventDefault();
	});

	$( document ).ajaxStop(function() {
		$('.payment-block').on('click', function(event){
			$('.modal.payment-block-modal').fadeIn('slow');
			event.preventDefault();
		});
	});

	$('#form-wysija-shortcode56cf45a0da54d-1').on('submit', function(event){
		var form = $(this);
		$.ajax({
		  type: 'POST',
		  url: form.attr('action'),
		  data: form.serialize(),
		  success: function( response ) {
			form[0].reset();
			swal(
				getLangByKey('newsletterSuccessHeader'),
				getLangByKey('newsletterSuccessMessage'),
				'success'
			);
		  }
		});
		event.preventDefault();
	});
})
