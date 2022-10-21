(function($) { 
    //スティッキーヘッダー
    const
    $win = $(window),
    $kv = $('.home-kv'),
    $header = $('.home-header_r'),
    kvHeight = $kv.outerHeight();
    $win.on('load scroll',function(){
        const value = $(this).scrollTop();
        if( value > kvHeight){
            $header.addClass('fixed');
            }else{
            $header.removeClass('fixed');
        }
    });
})(jQuery);