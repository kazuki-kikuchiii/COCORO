(function($) { 
    //スムーススクロール
    $('a[href^="#"]').click(function() {
        const speed = 600;
        const href= $(this).attr("href");
        const target = $(href == "#" || href == "" ? 'html' : href);
        const position = target.offset().top - 100;
        $('body,html').animate({scrollTop:position}, speed, 'swing');
        return false;
        });

})(jQuery);