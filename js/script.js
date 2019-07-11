WebFont.load({
	google: {
		families: ['Libre+Franklin:300,400,500,700']
	}
});
document.addEventListener(
        "DOMContentLoaded", () => {
            new Mmenu( "#my-menu", {
                extensions: [
				"pagedim-black",
				"fx-menu-slide",
              	"fx-listitems-slide",
				"theme-black"							
							]
            });
        }
    );

document.addEventListener(
        "DOMContentLoaded", () => {
            new Mhead( "#my-header", {
                scroll: {
                    hide: 200
                }
            });
        }
    );


jQuery(document).ready(function ($) {
	$('.col-right-news').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplay: !0,
		dot: !1,
		vertical: !0,
		autoplaySpeed: 1000,
		infinite: !0,
		prevArrow: null,
		nextArrow: null,
		speed: 1000,
		adaptiveHeight: !0,
		responsive: [{
			breakpoint: 640,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				infinite: !0,
				vertical: !1,
				dots: !1,
				arrows: !1
			}
		}]
	})
});
jQuery(document).ready(function ($) {
	$('.related-post').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		autoplay: !0,
		dot: !1,
		autoplaySpeed: 1000,
		infinite: !0,
		prevArrow: null,
		nextArrow: null,
		speed: 300,
		responsive: [{
			breakpoint: 1024,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1,
				infinite: !0,
				dots: !1,
				arrows: !1
			}
		}, {
			breakpoint: 768,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2
			}
		}, {
			breakpoint: 480,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}]
	})
});



/*
jQuery(document).ready(function ($) {
	var $menu = $("#mobile-nav").mmenu({
		extensions: ["border-offset", "fx-menu-fade", "fx-listitems-slide", "pagedim-black"],
		"iconbar": {
			"add": true,
			"top": [
				"<a class='icon-home' href='#/'></a>",
				"<a class='icon-facebook' href='#/'></a>",
				"<a class='icon-twitter' href='#/'></a>",
				"<a class='icon-gplus' href='#/'></a>"
			],
			"bottom": []
		},
		navbar: {
			title: ""
		},
		"navbars": [{
			"position": "top",
			"content": ["<a href='index.php' style='display:flex'><span class='logo'></span></a>"],
			height: 2

		}],
		"iconPanels": true,
		"counters": true,
		"iconPanels": true
	});

	var $icon = $("#my-icon");
	var API = $menu.data("mmenu");
	$icon.on("click", function () {
		API.open();
	});

	API.bind("open:finish", function () {
		setTimeout(function () {
			$icon.addClass("is-active");
		}, 100);
	});
	API.bind("close:finish", function () {
		setTimeout(function () {
			$icon.removeClass("is-active");
		}, 100);
	});

});

jQuery(document).ready(function ($) {
	$(window).scroll(function () {
		if ($(this).scrollTop() > 5) {
			$('body').addClass("sticky-header")
		} else {
			$('body').removeClass("sticky-header")
		}
	})
});
jQuery(window).scroll(function () {
	if (jQuery(this).scrollTop() > 100) {
		jQuery('#back-to-top').addClass('scrolled')
	} else if (jQuery(this).scrollTop() < 100) {
		jQuery('#back-to-top').removeClass('scrolled')
	}
});
jQuery('#back-to-top').click(function () {
	jQuery('html, body').animate({
		scrollTop: 0
	}, 800);
	return !1
})

jQuery(document).ready(function ($) {
$('.menu-trigger').click(function(){
  $(this).toggleClass('open');
})
	$('.mp-pusher.mp-pushed').click(function(){
  $('.menu-trigger').removeClass('open');
})
});

var myLazyLoad = new LazyLoad({
    elements_selector: "img.lazy"		
});*/

/*
jQuery(document).ready(function ($) {

});
*/
(function() {
    new Headroom(document.querySelector("#header"), {
        tolerance: 5,
        offset : 205,
/*        classes: {
          initial: "slide",
          pinned: "slide--reset",
          unpinned: "slide--up"
        }*/
    }).init();

}());
