(function($) { 
    //スティッキーヘッダー(固定ページ)
    const
    $wins = $(window),
    $kvs = $('.js-sticky'),
    $headers = $('.home-header_r'),
    kvHeights = $kvs.outerHeight();
    $wins.on('load scroll',function(){
        const values = $(this).scrollTop();
        if( values > kvHeights){
            $headers.addClass('fixed');
            }else{
            $headers.removeClass('fixed');
        }
    });
})(jQuery);