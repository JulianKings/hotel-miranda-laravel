let coreSwiper;
let initCore = false;
let imageSwiper;
let initImage = false;

function swiperResize() {
    if (window.innerWidth <= 1000) {
		if (!initCore) {
			initCore = true;
			coreSwiper = new Swiper('.facilities__swiper', {
				// Optional parameters
				direction: 'horizontal',
				loop: true,
				spaceBetween: 30,
			
				pagination: {
					el: '.facilities__pagination',
					bulletClass: 'facilities__darkbullet',
					bulletActiveClass: 'facilities__bullet--active',
					clickable: true,
				},
			});
		}

		if (!initImage) {
			initImage = true;
			imageSwiper = new Swiper('.about__images__swiper', {
				// Optional parameters
				direction: 'horizontal',
				loop: true,
				spaceBetween: 30,
			  
				pagination: {
					el: '.about__images__pagination',
					bulletClass: 'about__images__bullet',
					bulletActiveClass: 'about__images__bullet--active',
					clickable: true,
				},
			});
		}
	} else {
		if (initCore) {
			coreSwiper.destroy();
			initCore = false;
    	}

		if (initImage) {
			imageSwiper.destroy();
			initImage = false;
    	}
	}
}

swiperResize();

window.addEventListener("resize", swiperResize);
