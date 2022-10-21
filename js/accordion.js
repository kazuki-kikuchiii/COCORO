(function($) { 
    //アコーディオンをクリックした時の動作
    $('.accordion__question').on('click', function() {
        $('.accordion__box').slideUp(500);
        const findBox = $(this).next(".accordion__box");
        if($(this).hasClass('close')){
            $('.accordion__question').removeClass("close");
            $(this).removeClass('close');   
        }else{
            $('.close').removeClass('close');
            $(this).addClass('close');
            $(findBox).slideDown(500);
        }
    });

    //ページが読み込まれた際にopenクラスをつけ、openがついていたら開く
    $('.accordion__item:first-of-type').addClass("open");
    $(window).on('load', function(){
    $(".open").each(function(index, element){
        const Title =$(element).children('.accordion__question');
        $(Title).addClass('close');
        const Box =$(element).children('.accordion__box');
        $(Box).slideDown(500);
    });
    });

})(jQuery);