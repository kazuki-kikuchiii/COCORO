(function($) { 
    //swiper
    var mySwiper = new Swiper('.swiper-container', {

        watchSlidesVisibility: true, 
        //スライドの間隔指定(単位:px)
        spaceBetween: 20,
        //前・次ボタンをつける
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        },
        //一度に複数のスライドを表示する
        slidesPerView: 3,
        breakpoints: {
            301: {
                slidesPerView: 1,
                },
            599: {
                slidesPerView: 2,
                },
            769: {
            slidesPerView: 3,
            },
            
        }
    });
})(jQuery);