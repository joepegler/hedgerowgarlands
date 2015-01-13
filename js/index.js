var init = function(){
	console.log('init');
	imageSwiper = $('.image-swiper').swiper({
		autoplay : 		3000,
		noSwiping : 	true,
		onSlideChangeStart : function(swiper){
			$('.thumbnail-swiper .swiper-slide').removeClass("active");
			$('.thumbnail-swiper .swiper-slide:nth-child('+(swiper.activeIndex+1)+')').addClass("active");
			thumbnailSwiper.swipeTo(swiper.activeIndex);
		},
	});
	thumbnailSwiper = $('.thumbnail-swiper').swiper({
		// slidesPerView : 7,
		onSlideTouch : function(swiper){
			imageSwiper.swipeTo(swiper.clickedSlideIndex);
			$('.thumbnail-swiper .swiper-slide').removeClass("active");
			$('.thumbnail-swiper .swiper-slide:nth-child('+(swiper.clickedSlideIndex+1)+')').addClass("active");
			imageSwiper.stopAutoplay()
		},
    	slidesPerView: 'auto'
	});
	pageSwiper = $('.pages').swiper({
		noSwiping : 	true,
		initialSlide :  1,
	});
	$('.arrow-left').on('click', function(e){
		e.preventDefault();
		imageSwiper.swipePrev();
	})
	$('.arrow-right').on('click', function(e){
		e.preventDefault();
		imageSwiper.swipeNext();
	})
	easyzoom = $('.easyzoom').easyZoom();
};