// JavaScript Document

$(window).load(function(){
	"use strict";
$("#loader").fadeOut("slow");
	var speedOpacity = 2000;
	$('body').animate({
		opacity: 1
	}, speedOpacity, function() {});
	
});

	$(document).ready(function(){
		"use strict";
	
		(function($) {
	
	
			$.fn.visible = function(partial) {
	
				var $t            = $(this),
					$w            = $(window),
					viewTop       = $w.scrollTop(),
					viewBottom    = viewTop + $w.height(),
					_top          = $t.offset().top,
					_bottom       = _top + $t.height(),
					compareTop    = partial === true ? _bottom : _top,
					compareBottom = partial === true ? _top : _bottom;
	
				return ((compareBottom <= viewBottom) && (compareTop >= viewTop));
	
			};
	
		})(jQuery);
		
		var win = $(window);
	
		var setVisibleBlock = function() {
			var allMods = $("#welcome, #link2, #link3, #link4, #link5, #link6, #link7, #link8, .whyBgImage, .bg-lightGray");
			allMods.each(function(i, el) {
				var $el = $(el);
				if ($el.visible(true)) {
					$el.addClass("fade-in");
				}
			});
		};
	
		setVisibleBlock();
		
	
		/* --------- Options Rate-paralax ------------ */
	
		var opacityRate = 1.2;
		var speedRate = 4;
		var backgroundSpeedRate = 1;
	
	
		var header = $('.header');
		var promoEffect = $('.container.promo-effect');
		var promo = $('.promo');
	
		var lastScrollTop = 0;
	
		win.scroll(function() {
			if (header.length) {
			   promoEffect.css('opacity', (1 - $(document).scrollTop() * opacityRate / header.offset().top));
			}
			promoEffect.css('top', (-1) * $(document).scrollTop() / speedRate);
			promo.css('background-position', "0px " + $(document).scrollTop() * backgroundSpeedRate + "px");
	
			var scrollTop = $(this).scrollTop();
	
			if (scrollTop > lastScrollTop) {
				setVisibleBlock();
			}
	
			lastScrollTop = scrollTop;
	
		});
		
	
	});

  var topoffset = 90;

  var isTouch = 'ontouchstart' in document.documentElement;

  //window height
  var wheight = $(window).height(); //get height of the window

  $('.fullheight').css('height', wheight);

  $(window).resize(function() {
    var wheight = $(window).height(); //get height of the window
    $('.fullheight').css('height', wheight);
  }) //on resize

  
// Animated Scrolling
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top-topoffset
        }, 1000);
        return false;
      } // target.length
    } //location hostname
  }); //on click

  //highlight navigation
  $(window).scroll(function() {
    var windowpos = $(window).scrollTop() + topoffset;
    $('nav li a').removeClass('active');

    if (windowpos > $('#link2').offset().top) {
      $('nav li a').removeClass('active');
      $('a[href$="#link2"]').addClass('active');
    } //windowpos

    if (windowpos > $('#link3').offset().top) {
      $('nav li a').removeClass('active');
      $('a[href$="#link3"]').addClass('active');
    } //windowpos

    if (windowpos > $('#link4').offset().top) {
      $('nav li a').removeClass('active');
      $('a[href$="#link4"]').addClass('active');
    } //windowpos
	
    if (windowpos > $('#link6').offset().top) {
      $('nav li a').removeClass('active');
      $('a[href$="#link6"]').addClass('active');
    } //windowpos
    if (windowpos > $('#link7').offset().top) {
      $('nav li a').removeClass('active');
      $('a[href$="#link7"]').addClass('active');
    } //windowpos


  }); //window scroll


  //set up ScrollMagic
  var controller = new ScrollMagic({
    globalSceneOptions: {
      triggerHook: "onLeave"
    }
  });

  //pin the navigation
  var pin = new ScrollScene({
    triggerElement: '#nav',
  }).setPin('#nav').addTo(controller);
 

 $('.carousel').carousel()

var wheight = $(window).height();

$ ('.fullheight, .fullheightEvent ').css('height', wheight);

// replace img inside carousel with a bg image

$ ('#carousel-example-generic .item img').each(function() {
	var imgSrc = $(this).attr('src');
	$(this).parent().css({'background-image': 'url('+imgSrc+')'});
	$(this).remove();
});
