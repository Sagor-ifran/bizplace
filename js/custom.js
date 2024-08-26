(function ($) {

	"use strict";

	// caching selectors
	var mainWindow = $(window),
		mainBody = $('body'),
		mainpreStatus = $('#preloader-status'),
		mainPreloader = $('#preloader'),
		strickymenu = $('#strickymenu'),
		dropdown_menu = $('.dropdown-menu'),
		dropdown_toggle = $('.dropdown-toggle'),
		carousel = $('.carousel'),
		slideCarousel = $('.slide-carousel'),
		owl_testimonial = $('.owl-testimonial'),
		team_carousel = $('.team-carousel'),
		blog_carousel = $('.blog-carousel'),
		brand_carousel = $('.brand-carousel'),
		portfolioNav = $('.portfolio-nav'),
		relative_ptCarousel = $('.relative-pt-carousel'),
		relative_product = $('.relative-product-carousel'),
		select2 = $('.select2'),
		mgVideo = $(".mgVideo"),
		magnific = $('.magnific'),
		open_popup_link = $('.open-popup-link'),
		filtr_container = $('.filtr-container'),
		filtrnav_li = $('#filtrnav li'),
		filtr = $('.filtr'),
		scrollUp = $(".scroll-top"),
		counter = $('.counter');



	mainWindow.on('load', function () {

		// Preloader
		mainPreloader.fadeOut();
		mainpreStatus.delay(250).fadeOut('slow');
		mainBody.delay(250).css({
			'overflow-x': 'hidden'
		});

		// StickyHeader
		function stickyHeader() {
			var strickyScrollPos = strickymenu.next().offset().top;
			if (strickymenu.length) {
				if (mainWindow.scrollTop() > strickyScrollPos) {
					strickymenu.addClass('sticky');
					mainBody.addClass('sticky');
				} else if (mainWindow.scrollTop() <= strickyScrollPos) {
					strickymenu.removeClass('sticky');
					mainBody.removeClass('sticky');
				}
			};
		}
		mainWindow.on('scroll', function () {
			stickyHeader();
		});

		//Search
		dropdown_menu.hide();
		dropdown_toggle.on('click', function () {
			dropdown_menu.fadeToggle();
		});

		//Carousel   
		carousel.carousel();

		// Slider
		slideCarousel.owlCarousel({
			loop: true,
			autoplay: true,
			autoplayHoverPause: true,
			autoplaySpeed: 1500,
			smartSpeed: 1500,
			margin: 0,
			animateIn: 'fadeIn',
			animateOut: 'fadeOut',
			dots: true,
			nav: false,
			navText: ["<i class='fa fa-caret-left'></i>", "<i class='fa fa-caret-right'></i>"],
			responsive: {
				0: {
					items: 1
				},
				576: {
					items: 1
				},
				1000: {
					items: 1
				}
			}
		});

		slideCarousel.on('translate.owl.carousel', function () {
			$('.text-animated h1').removeClass('fadeInDown animated').hide();
			$('.text-animated p').removeClass('fadeInUp animated').hide();
			$('.text-animated li').removeClass('fadeInUp animated').hide();
		});

		slideCarousel.on('translated.owl.carousel', function () {
			$('.text-animated h1').addClass('fadeInDown animated').show();
			$('.text-animated p').addClass('fadeInUp animated').show();
			$('.text-animated li').addClass('fadeInUp animated').show();
		});

		// Testimonial 
		owl_testimonial.owlCarousel({
			loop: true,
			autoplay: true,
			autoplayHoverPause: true,
			margin: 30,
			dots: true,
			nav: false,
			navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
			responsive: {
				0: {
					items: 1
				},
				460: {
					items: 1
				},
				768: {
					items: 1
				},
				992: {
					items: 1
				}
			}
		});


		// Team 
		team_carousel.owlCarousel({
			loop: true,
			autoplay: true,
			autoplayHoverPause: true,
			autoplaySpeed: 1500,
			smartSpeed: 1500,
			margin: 30,
			nav: true,
			navText: ["<i class='fa fa-caret-left'></i>", "<i class='fa fa-caret-right'></i>"],
			responsive: {
				0: {
					items: 1
				},
				450: {
					items: 2
				},
				576: {
					items: 2,
					dots: false
				},
				768: {
					items: 3,
					nav: false
				},
				991: {
					items: 3,
					nav: false
				},
				1200: {
					items: 4,
					nav: false
				}
			}
		});

		// Blog
		blog_carousel.owlCarousel({
			loop: true,
			autoplay: true,
			autoplayHoverPause: true,
			autoplaySpeed: 1500,
			smartSpeed: 1500,
			margin: 30,
			nav: false,
			navText: ["<i class='fa fa-caret-left'></i>", "<i class='fa fa-caret-right'></i>"],
			responsive: {
				0: {
					items: 1
				},
				576: {
					items: 2
				},
				768: {
					items: 1
				},
				991: {
					items: 1
				},
				1200: {
					items: 2
				}
			}
		});



		// Brand
		brand_carousel.owlCarousel({
			loop: true,
			autoplay: true,
			autoplayHoverPause: true,
			autoplaySpeed: 1500,
			smartSpeed: 1500,
			margin: 30,
			nav: false,
			navText: ["<i class='fa fa-caret-left'></i>", "<i class='fa fa-caret-right'></i>"],
			responsive: {
				0: {
					items: 2
				},
				750: {
					items: 3
				},
				991: {
					items: 3
				},
				1200: {
					items: 4
				}
			}
		});

		// Portfolio Nav
		portfolioNav.owlCarousel({
			loop: false,
			autoplay: true,
			autoplayHoverPause: true,
			margin: 15,
			nav: true,
			navText: ["<i class='fa fa-caret-left'></i>", "<i class='fa fa-caret-right'></i>"],
			responsive: {
				0: {
					items: 3
				},
				520: {
					items: 5
				},
				750: {
					items: 6
				},
				1000: {
					items: 7
				}
			}
		});


		// Relative Protfolio 
		relative_ptCarousel.owlCarousel({
			loop: true,
			autoplay: true,
			autoplayHoverPause: true,
			autoplaySpeed: 1500,
			smartSpeed: 1500,
			margin: 30,
			nav: true,
			navText: ["<i class='fa fa-caret-left'></i>", "<i class='fa fa-caret-right'></i>"],
			responsive: {
				0: {
					items: 1
				},
				576: {
					items: 1,
					dots: false
				},
				768: {
					items: 2,
					nav: false
				},
				991: {
					items: 3,
					nav: false
				},
				1200: {
					items: 3,
					nav: false
				}
			}
		});


		// Relative Product 
		relative_product.owlCarousel({
			loop: true,
			autoplay: true,
			autoplayHoverPause: true,
			autoplaySpeed: 1500,
			smartSpeed: 1500,
			margin: 30,
			nav: true,
			navText: ["<i class='fa fa-caret-left'></i>", "<i class='fa fa-caret-right'></i>"],
			responsive: {
				0: {
					items: 1
				},
				576: {
					items: 2,
					dots: false
				},
				768: {
					items: 2,
					nav: false
				},
				991: {
					items: 3,
					nav: false
				},
				1200: {
					items: 4,
					nav: false
				}
			}
		});

		select2.select2();

		// Magnific Popup Video
		mgVideo.magnificPopup({
			type: 'iframe',
			iframe: {
				markup: '<div class="mfp-iframe-scaler">' +
					'<div class="mfp-close"></div>' +
					'<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
					'</div>',
				patterns: {
					youtube: {
						index: 'youtube.com/',
						id: 'v=',
						src: 'https://www.youtube.com/embed/%id%?autoplay=1'
					},
					vimeo: {
						index: 'vimeo.com/',
						id: '/',
						src: 'https://player.vimeo.com/video/%id%?autoplay=1'
					},
					gmaps: {
						index: '//maps.google.',
						src: '%id%&output=embed'
					}
				},
				srcAction: 'iframe_src',
			}
		});

		//Team Swiper
		var swiper = new Swiper('.team-swiper', {
			effect: 'coverflow',
			grabCursor: true,
			centeredSlides: true,
			slidesPerView: 'auto',
			loop: true,
			spaceBetween: 15,
			autoplay: {
				delay: 2500,
				disableOnInteraction: false,
			},
			coverflowEffect: {
				rotate: 50,
				stretch: 0,
				depth: 100,
				modifier: 1,
				slideShadows: true,
			},
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
			},
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
		});

		//Brand Swiper
		var swiper = new Swiper('.brand-swiper', {
			slidesPerView: 4,
			slidesPerColumn: 2,
			spaceBetween: 30,
			autoplay: {
				delay: 2500,
				disableOnInteraction: false,
			},
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
			},
		});

		//Single Product
		var galleryThumbs = new Swiper('.pro-detail-thumbs', {
			spaceBetween: 10,
			slidesPerView: 4,
			loop: true,
			freeMode: true,
			loopedSlides: 5, //looped slides should be the same
			watchSlidesVisibility: true,
			watchSlidesProgress: true,
		});
		var galleryTop = new Swiper('.pro-detail-top', {
			spaceBetween: 10,
			loop: true,
			loopedSlides: 5, //looped slides should be the same
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
			thumbs: {
				swiper: galleryThumbs,
			},
		});



		// filter-price
		$("#range-bar").slider({
			range: true,
			min: 5,
			max: 1500,
			values: [240, 960],
			slide: function (event, ui) {
				$("#range-show").html(ui.values[0] + '$' + '-' + ui.values[1] + '$');
			}
		});
		$("#range-show").html($("#range-bar").slider('values', 0) + '$' + '-' + $("#range-bar").slider('values', 1) + '$');

		// Spinner
		$("#shop_spinner").spinner({
			min: 1
		});

		// $('#example').DataTable();

		// Magnific Popup
		magnific.magnificPopup({
			type: 'image',
			gallery: {
				enabled: true
			}
		});

		open_popup_link.magnificPopup({
			type: 'inline',
			midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
		});

		// Initiate the wowjs
		// new WOW().init();

		// Scroll-Top
		scrollUp.hide();
		mainWindow.on("scroll", function () {
			if ($(this).scrollTop() > 300) {
				scrollUp.fadeIn();
			} else {
				scrollUp.fadeOut();
			}
		});
		scrollUp.on("click", function () {
			$("html, body").animate({
				scrollTop: 0,
			}, 700)
		});

		// Filtr-Gallery
		// filtr_container.filterizr();

		// Filtering section nav
		// filtrnav_li.on('click', function () {
		// 	filtr.removeClass('filtr-active');
		// 	$(this).addClass('filtr-active');
		// 	var filter = $(this).data('fltr');
		// 	filtrnav.filterizr('filter', filter);
		// });


		// Counter
		counter.counterUp({
			delay: 10,
			time: 1000
		});





	});







})(jQuery);



$(function () {

	"use strict";

	//=======MENU FIX======
	if ($(window).scrollTop() > 1) {
		if ($('.main_menu_2').offset() != undefined) {
			$('.main_menu_2').addClass('menu_fix');
		}
	} else {
		if ($('.main_menu_2').offset() != undefined) {
			$('.main_menu_2').removeClass('menu_fix');
		}
	}

	$(window).scroll(function () {
		if ($(this).scrollTop() > 1) {

			if ($('.main_menu_2').offset() != undefined) {
				// check if menu_if class is already added
				if (!$('.main_menu_2').hasClass("menu_fix")) {
					$('.main_menu_2').addClass("menu_fix");
				}
			}
		}
		else {
			if ($('.main_menu_2').offset() != undefined) {
				$('.main_menu_2').removeClass("menu_fix");
			}
		}
	});


	//=======SELECT JS======
	$('.select_js').niceSelect();


	//=====VENOBOX JS======
	$('.venobox').venobox();


	//=======SELECT_2 JS======
	$(document).ready(function () {
		$('.select_2').select2();
	});


	// Marquee animation
	$('.marquee_animi').marquee({
		speed: 50,
		gap: 120,
		delayBeforeStart: 0,
		direction: 'left',
		duplicated: true,
		pauseOnHover: true
	});


	//=======BLOG 2 JS======
	$('.blog_2_slider').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 3000,
		dots: true,
		arrows: false,

		responsive: [

			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 3,
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
				}
			},
			{
				breakpoint: 576,
				settings: {
					slidesToShow: 1,
				}
			}
		]
	});


	//=======TESTIMONIAL 2 JS======
	$('.testimonial_2_slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 3000,
		dots: true,
		arrows: false,
	});



	//=======DEPARTMENTS 3 JS======
	$('.departments_3_slider').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 3000,
		dots: false,
		arrows: true,
		nextArrow: '<i class="far fa-angle-right nextArrow"></i>',
		prevArrow: '<i class="far fa-angle-left prevArrow"></i>',

		responsive: [

			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 3,
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
					arrows: false,
				}
			},
			{
				breakpoint: 576,
				settings: {
					slidesToShow: 1,
					arrows: false,
				}
			}
		]
	});



	//=======BLOG 3 JS======
	$('.blog_3_slider').slick({
		slidesToShow: 2,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 3000,
		dots: false,
		arrows: true,
		nextArrow: '<i class="far fa-angle-right nextArrow"></i>',
		prevArrow: '<i class="far fa-angle-left prevArrow"></i>',

		responsive: [

			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
					arrows: false,
				}
			},
			{
				breakpoint: 576,
				settings: {
					slidesToShow: 1,
					arrows: false,
				}
			}
		]
	});



	//=======TESTIMONIAL 3 JS======
	$('.testimonial_3_slider').slick({
		slidesToShow: 2,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 3000,
		dots: true,
		arrows: false,

		responsive: [

			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
				}
			},
			{
				breakpoint: 576,
				settings: {
					slidesToShow: 1,
				}
			}
		]
	});















});










