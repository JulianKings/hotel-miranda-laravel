const slideLeft = document.querySelector('.index__rooms__swiper-prev');
const slideRight = document.querySelector('.index__rooms__swiper-next');
const slideBigLeft = document.querySelector('.index__menu__left');
const slideBigRight = document.querySelector('.index__menu__right');

// small buttons
slideLeft.addEventListener('mouseover', () => {
    const element = document.querySelector('#rooms-slide-left');
    element.src = './assets/left_white.png';
});

slideLeft.addEventListener('mouseout', () => {
    const element = document.querySelector('#rooms-slide-left');
    element.src = './assets/left.png';
});

slideRight.addEventListener('mouseover', () => {
    const element = document.querySelector('#rooms-slide-right');
    element.src = './assets/right_white.png';
});

slideRight.addEventListener('mouseout', () => {
    const element = document.querySelector('#rooms-slide-right');
    element.src = './assets/right.png';
});

// big buttons
slideBigLeft.addEventListener('mouseover', () => {
    const element = document.querySelector('#menu-slide-left');
    element.src = './assets/bigleft_white.png';
});

slideBigLeft.addEventListener('mouseout', () => {
    const element = document.querySelector('#menu-slide-left');
    element.src = './assets/bigleft.png';
});

slideBigRight.addEventListener('mouseover', () => {
    const element = document.querySelector('#menu-slide-right');
    element.src = './assets/bigright_white.png';
});

slideBigRight.addEventListener('mouseout', () => {
    const element = document.querySelector('#menu-slide-right');
    element.src = './assets/bigright.png';
});

const swiper = new Swiper('.index__rooms__swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    breakpoints: {
        1000: {
            centeredSlides: true,
            slidesPerView: 2,
            spaceBetween: 50
        }
    },

    // Navigation arrows
    navigation: {
      nextEl: '.index__rooms__swiper-next',
      prevEl: '.index__rooms__swiper-prev'
    },
});

let coreSwiper;
let initCore = false;
let imageSwiper;
let initImage = false;
let menuSwiper;
let initMenu = false;
let menuSwiperBig;
let initMenuBig = false;

function swiperResize() {
    if (window.innerWidth <= 1000) {
		if (!initCore) {
			initCore = true;
			coreSwiper = new Swiper('.facilities__swiper', {
                // Optional parameters
                direction: 'horizontal',
                loop: true,
            
                pagination: {
                    el: '.facilities__pagination',
                    bulletClass: 'facilities__bullet',
                    bulletActiveClass: 'facilities__bullet--active',
                    clickable: true,
                  },
            });
		}

        if (!initMenu) {
			initMenu = true;
			menuSwiper = new Swiper('.index__menu__swiper', {
                // Optional parameters
                direction: 'horizontal',
                loop: true,
                spaceBetween: 30,
            
                navigation: {
                    nextEl: '.index__menu__right',
                    prevEl: '.index__menu__left'
                },
            });
		}

		if (!initImage) {
			initImage = true;
			imageSwiper = new Swiper('.index__images__swiper', {
                // Optional parameters
                direction: 'horizontal',
                loop: true,
                initialSlide: 1,
                spaceBetween: 10,
            
                pagination: {
                    el: '.index__images__pagination',
                    bulletClass: 'index__images__bullet',
                    bulletActiveClass: 'index__images__bullet--active',
                    clickable: true,
                  },
            });
		}

        if (initMenuBig) {
            if(menuSwiperBig)
            {
                menuSwiperBig.destroy();
            }
			initMenuBig = false;
    	}
	} else {
        if (initImage) {
			imageSwiper.destroy();
			initImage = false;
    	}

        if (initMenu) {
            if(menuSwiper)
            {
                menuSwiper.destroy();
            }
			initMenu = false;
    	}

        if (initCore) {
			coreSwiper.destroy();
			initCore = false;
    	}
        
        if (!initMenuBig) {
			initMenuBig = true;
			menuSwiperBig = new Swiper('.index__menu__swiper-big', {
                // Optional parameters
                direction: 'horizontal',
                loop: true,
                spaceBetween: 30,
            
                navigation: {
                    nextEl: '.index__menu__right',
                    prevEl: '.index__menu__left'
                },
            });
		}
    }
}

swiperResize();

window.addEventListener("resize", swiperResize);