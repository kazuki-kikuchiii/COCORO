(function($) {

	//ローディング文字列[COCORO]
	function VivusInit0(){ 
		loadingVivus= new Vivus('loading-svg',
			{
			type: 'scenario-sync',// アニメーションのタイプを設定
			duration: 60,//アニメーションの時間。数字が小さくなれば速くなり、大きくなれば遅くなる
			forceRender: false ,//パスが更新された場合に再レンダリングさせない
			animTimingFunction:Vivus.EASE_OUT,//動きの加速減速設定
			forceRender: /^((?!chrome|android).)*(msie|edge|trident|safari)/i.test(window.navigator.userAgent)
			});
		}
	//SVGの一瞬のチラつきを防ぐ為
	window.addEventListener('load', function(){
		$('.loading-svg').fadeIn(0);
		VivusInit0();
	});
	// 画面が読み込まれたらすぐに動かす
	$(window).on('load', function () {
		$(".loading-logo").delay(1200).fadeOut('slow');//ロゴを1.2秒でフェードアウトする記述
		$(".loading").delay(1500).fadeOut('slow',function(){//ローディングエリア（splashエリア）を1.5秒でフェードアウトする記述
			$('body').addClass('appear');//フェードアウト後bodyにappearクラス付与
		});
	});

})(jQuery);