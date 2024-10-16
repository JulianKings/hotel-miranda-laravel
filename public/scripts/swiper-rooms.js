const roomSwiper = new Swiper('.rooms__swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    initialSlide: 1,
    spaceBetween: 30,

    pagination: {
        el: '.rooms__pagination',
        clickable: true,
        type: 'custom',
        renderCustom: function(swiper, current, total) {
            return `<div class="rooms__pagination__item" onclick='roomSwiper.slidePrev();'>
                <img src='./assets/prev_page.png' alt="Previous Page" />
            </div>

            <div class="rooms__pagination__item" onclick='${(current-2 >= 0) ? 'roomSwiper.slidePrev();' : ''}'>
                ${(((current-1) > 0) ? (current-1) : '')}
            </div>

            <div class="rooms__pagination__item rooms__pagination__item--selected">
                ${current}
            </div>

            <div class="rooms__pagination__item" onclick='${(current+1 < total) ? 'roomSwiper.slideNext();' : ''}'>
                 ${(((current+1) < total) ? (current+1) : '')}
            </div>

            <div class="rooms__pagination__item" onclick='goToSlide();'>
                ${(current !== total) ? '...' : ''}
            </div>

            <div class="rooms__pagination__item" onclick=' ${(current !== total) ? 'roomSwiper.slideTo(' + total + ');' : ''}'>
                ${(current !== total) ? total : ''}
            </div>

            <div class="rooms__pagination__item pagination-next" onclick='roomSwiper.slideNext();'>
                <img src='./assets/next_page.png' alt="Next Page" />
            </div>`;
        }
    },
});


function goToSlide() {
    let jump = prompt('Select a page: ');
    
    if(jump)
    {
        roomSwiper.slideTo((jump - 1));
    }
}