// JavaScript Document
		$(function(){

    var effect_btm = 100; // 画面下からどの位置でフェードさせるか(px)
    var effect_move = 20; // どのぐらい要素を動かすか(px)
    var effect_timePc = 600; // エフェクトの時間(ms) 1秒なら1000
    var effect_timeSp = 300; // エフェクトの時間(ms) 1秒なら1000

    //親要素と子要素のcssを定義
			
    $('.scroll-fade-row').css({
        opacity: 0
    });
    $('.scroll-fade-row').children().each(function(){
		if (windowWidth <= 900) {
			$(this).css({
				opacity: 0,
				transform: 'translateY('+ effect_move +'px)',
				transition: effect_timeSp + 'ms'
			});
		} else {
			$(this).css({
				opacity: 0,
				transform: 'translateY('+ effect_move +'px)',
				transition: effect_timePc + 'ms'
						
			})
		}
	});
    $('.scroll-fade-col').css({
        opacity: 0
    });
    $('.scroll-fade-col').children().each(function(){
		if (windowWidth <= 900) {
			$(this).css({
				opacity: 0,
				transform: 'translateX('+ effect_move +'px)',
				transition: effect_timeSp + 'ms'
			});
		} else {
			$(this).css({
				opacity: 0,
				transform: 'translateX('+ effect_move +'px)',
				transition: effect_timePc + 'ms'
						
			})
		}
    });
			
			

    // スクロールまたはロードするたびに実行
    $(window).on('scroll load', function(){
        var scroll_top = $(this).scrollTop();
        var scroll_btm = scroll_top + $(this).height();
        var effect_pos = scroll_btm - effect_btm;

        //エフェクトが発動したとき、子要素をずらしてフェードさせる
        $('.scroll-fade-row').each( function() {
            var this_pos = $(this).offset().top;
            if ( effect_pos > this_pos ) {
                $(this).css({
                    opacity: 1,
                    transform: 'translateY(0)'
                });
                $(this).children().each(function(i){
                    $(this).delay(100 + i*200).queue(function(){
                        $(this).css({
                            opacity: 1,
                            transform: 'translateY(0)'
                        }).dequeue();
                    });
                });
            }
        });
		
		$('.scroll-fade-col').each( function() {
            var this_pos = $(this).offset().top;
            if ( effect_pos > this_pos ) {
                $(this).css({
                    opacity: 1,
                    transform: 'translateX(0)'
                });
                $(this).children().each(function(i){
                    $(this).delay(100 + i*200).queue(function(){
                        $(this).css({
                            opacity: 1,
                            transform: 'translateX(0)'
                        }).dequeue();
                    });
                });
            }
        });
		
    });
});
