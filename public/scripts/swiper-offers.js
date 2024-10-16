const slideLeft = document.querySelector('.offers__popular__swiper-prev');
const slideRight = document.querySelector('.offers__popular__swiper-next');

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

let swiper;
let init = false;

function swiperResize() {
    if (window.innerWidth <= 1000) {
      if (!init) {
        init = true;
        swiper = new Swiper('.offers__popular__swiper', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,
            spaceBetween: 30,
        
            // Navigation arrows
            navigation: {
              nextEl: '.offers__popular__swiper-next',
              prevEl: '.offers__popular__swiper-prev'
            },
        });
      }
    } else if (init) {
      swiper.destroy();
      init = false;
    }
  }

  swiperResize();
  
  window.addEventListener("resize", swiperResize);
