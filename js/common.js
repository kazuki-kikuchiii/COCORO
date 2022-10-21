(function($) {  

    //ハンバーガーメニュー
    $('.burger-btn').on('click',function(){
        $(this).toggleClass('open');
        $('.home-header__right').toggleClass('js-block');
        $('body').toggleClass('no-scroll');
    });

    $('.home-header__item a').on('click', function () {
        const $win = $(window).width();
        if($win < 768){
            $('.burger-btn').removeClass('open');
            $('.home-header__right').removeClass('js-block');
            $('body').removeClass('no-scroll');
        }
    });
    
})(jQuery);