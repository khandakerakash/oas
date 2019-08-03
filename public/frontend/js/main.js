! function() {
    "use strict";

    // Scroll Header Fixed
	$(window).bind('scroll', function() {
		var navHeight = $(".top_bar").height();
		($(window).scrollTop() > navHeight) ? $('.header').addClass('goToTop') : $('.header').removeClass('goToTop');
	});

    // Init Brands owl carousel
	var owl = $('.owl-carousel');
	owl.owlCarousel({
		margin:42,
		loop: true,
		nav: true,
		navText: ["<i class=\"fa fa-angle-left\"></i>","<i class=\"fa fa-angle-right\"></i>"],
		responsive: {
			0: {
				items: 3
			},
			600: {
				items: 3
			},
			1000: {
				items: 4
			},
			1200: {
				items: 5
			},
			1366: {
				items: 6
			}
		}
	});


	//WOW.js Initialize
    new WOW().init();

	//Xzoom Initialize
	$(".xzoom, .xzoom-gallery").xzoom({tint: '#ededed', Xoffset: 15});


	//Menu Arrow Icon Toggle
	$('.cat-menu-other-page').on('click', function(e) {
		e.preventDefault();
		(!($(this).hasClass('active')) ? $(this).addClass('active') : $(this).removeClass('active'));
	});

	//Site preloader
	$(window).on('load', function(){
		setTimeout(function(){
			$('#cover').fadeOut(400);
		},400)
	});

	// scrollup back to top
	$(window).scroll(function() {
		if ($(this).scrollTop() > 100) {
			$('.scrollup').fadeIn("slow");
		} else {
			$('.scrollup').fadeOut("slow");
		}
	});

	$('.scrollup').click(function() {
		$("html, body").animate({
			scrollTop: 0
		}, 600);
		return false;
	});


}();

//Scroll bottom to top
// var basicScrollTop = function () {
//   // The button
//   var btnTop = document.querySelector('.scrollToTop');
//   // Reveal the button
//   var btnReveal = function () {
//     var position = document.querySelector('#position');
//         position.innerHTML = window.scrollY + 'px';
//     if (window.scrollY >= 300) {
//       btnTop.classList.add('is-visible');
//     } else {
//       btnTop.classList.remove('is-visible');
//     }
//   }
//   // Smooth scroll top
//   // Thanks to => http://stackoverflow.com/a/22610562
//   var TopscrollTo = function () {
//     if(window.scrollY!=0) {
//       setTimeout(function() {
//         window.scrollTo(0,window.scrollY-30);
//         TopscrollTo();
//       }, 5);
//     }
//   }
//   // Listeners
//   window.addEventListener('scroll', btnReveal);
//   btnTop.addEventListener('click', TopscrollTo);
//
// };
// basicScrollTop();