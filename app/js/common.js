$(function() {

	// sliders

	$('.main__slider-wrap').slick({
		prevArrow: $('.main__slder-arrow-left'),
		nextArrow: $('.main__slder-arrow-right')
	});

/*
	$('.catalog__block-item').each(function() {
		var thisBig = $(this).find('.cb__slider-big');
		var thisSmall = $(this).find('.cb__slider-small');

		$(this).find('.cb__slider-big').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			asNavFor: thisSmall,
		});

		$(this).find('.cb__slider-small').slick({
			slidesToShow: 3,
			slidesToScroll: 1,
			vertical: true,
			arrows: false,
			asNavFor: thisBig
		});
	});
*/

	$('.cb__slider-small-item').hover(function(e) {
		$(this).parent().find('.cb__slider-small-item').removeClass('active');
		$(this).addClass('active')
		var bigImage = $(this).find('img').attr('data-bigsrc');
		$(this).parents('.catalog__block-item').find('.cb__slider-big-item img').attr('src', bigImage);
	});

	$(document).click(function(event) {
	    if ($(".search-opened").is(':visible') && $(".search__block").is(':visible') && ($('.search__block').hasClass('test22'))) { 
	      if (($(event.target).closest(".main__menu-search").length) ||
	      	($(event.target).closest(".search__block").length) || ($(event.target).closest(".main__menu-search-fixed").length)) return;
	     $(".main__menu-search").show();
	     $(".search-opened").hide();
	     $(".search__block").hide().removeClass('test22');
	      event.stopPropagation(); 
	    } 
	});

	$('.main__menu-search > a').click(function (e) {
		e.preventDefault();
	});


	$('.main__menu-search').click(function (e) {
		// e.preventDefault();
		$(this).hide();
		$('.search-opened').show();
		$('.search__block').show().addClass('test22');
	});

	$('#btn__mob-menu, #btn__mob-menu-close').click(function(e) {
		$('.main__menu').toggleClass('active');
	})




	 $(".advantages").on("click","a.scroll-bottom", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 500);
    });

	 function stickyBlock(widthmax, widthmin, el) {
	 	if (($(window).width() > widthmax) && ($(window).width() < widthmin)) {
			window.onscroll = function() {stickyFunc()};

			var navbar = document.getElementById(el);
			var sticky = navbar.offsetTop;

			function stickyFunc() {
				console.log(sticky)
				console.log(window.pageYOffset)
			  if (window.pageYOffset > sticky) {
			    navbar.classList.add("main__menu-sticky")
			  } else {
			    navbar.classList.remove("main__menu-sticky");
			  }
			}
		}
	}
	stickyBlock(992, 3000, "sticky-menu");
	stickyBlock(300, 991, "header-sticky");



	$('.b-sidebar-path-head').on('click', function(e) {
		$(this)
			.toggleClass('b-sidebar-path-head--active')
			.next('.b-sidebar-path-body').slideToggle('fast');
	});



	// range price
	$('.b-rangeSlider').each( function() {
		console.log( $(this)[0] );
		var that = $(this),
			priceSlider = that[0],
			priceSliderFrom = that.find('.b-rangeSlider-input:nth-child(1)'),
			priceSliderTo = that.find('.b-rangeSlider-input:nth-child(2)'),
			priceInputs = [priceSliderFrom, priceSliderTo];

	  noUiSlider.create(priceSlider, {
	    step: +that.attr('data-step'),
	    start: [+that.attr('data-start1'), +that.attr('data-start2')],
	    range: {
	      'min': +that.attr('data-from'),
	      'max': +that.attr('data-to')
	    }
	  });

	  priceSlider.noUiSlider.on('update', function( values, handle ) {
			priceInputs[handle].val(Math.round(+values[handle])+' '+that.attr('data-postfix'));
		});

		function setSliderHandle(i, value) {
			var r = [null,null];
			r[i] = value;
			priceSlider.noUiSlider.set(r);
		}

		priceInputs.forEach(function(input, handle) {
			input.on('change', function(){
				setSliderHandle(handle, this.value);
			});
		})
	});


	$('.b-sidebar-btn').on("click", function() {
		$('.b-sidebar').slideToggle();
	});
	
	

});
