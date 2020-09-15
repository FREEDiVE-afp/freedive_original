// JavaScript Document
var windowWidth = parseInt($(window).width());
/*
scroll
*/
$(function () {
	$('a[href^="#"]').click(function () {
		var speed = 400;
		var href = $(this).attr("href");
		var target = $(href == "#" || href == "" ? 'html' : href);
		var headerHeightPc = 80;
		var headerHeightSp = 50;
		if (windowWidth >= 900) {
			var positionPc = target.offset().top - headerHeightPc;
			$('body,html').animate({
				scrollTop: positionPc
			}, speed, 'swing');
			return false;
		} else {
			var positionSp = target.offset().top - headerHeightSp;
			$('body,html').animate({
				scrollTop: positionSp
			}, speed, 'swing');
			return false;
		}
	});
});

/*nav*/
if (windowWidth <= 900) {
	$('#nav_toggle').click(function () {
		if($(this).hasClass('active')){
			$(this).removeClass('active');
			$('#nav_conts').slideUp(500);
		} else {
			$(this).addClass('active');
			$('#nav_conts').slideDown(500);
		}
	});
	$(window).scroll(function () {
		if($('#nav_toggle').hasClass('active')){
			$('#nav_toggle').removeClass('active');
			$('#nav_conts').slideUp(500);
		}
	});
	$('.menu_parent').children('div').click(function() {
		$(this).next('ul').slideToggle();
		$('.menu_parent ul').not($(this)).children('ul').slideUp();
	})
	$('.menu_drawer').children('div').click(function() {
		$(this).parents('.menu_drawer').addClass('active');
		$('#menu').addClass('drawer-is-open');
	});
	$('.menu_drawer-close-btn').click(function(){
		$(this).parents('.menu_drawer').removeClass('active');
		$('#menu').removeClass('drawer-is-open');
	})

} else {
	$('.menu_parent').mouseenter(function() {
		$('li').removeClass('active');
		$(this).addClass('active');
		$('.menu_parent.active > ul').mouseleave(function(){
			$('li').removeClass('active');
			$('.menu_career').click(function() {
				location.href = 'http://freedive.co.jp/career/';
			});
		})
	})
}

/*contact btn*/
var colors = new Array(
	[62,35,255],
	[60,255,60],
	[255,35,98],
	[45,175,230],
	[255,0,255],
	[255,128,0]);

var step = 0;
//color table indices for:
// current color left
// next color left
// current color right
// next color right
var colorIndices = [0,1,2,3];

//transition speed
var gradientSpeed = 0.002;

function updateGradient() {
	if ( $===undefined ) return;

	var c0_0 = colors[colorIndices[0]];
	var c0_1 = colors[colorIndices[1]];
	var c1_0 = colors[colorIndices[2]];
	var c1_1 = colors[colorIndices[3]];

	var istep = 1 - step;
	var r1 = Math.round(istep * c0_0[0] + step * c0_1[0]);
	var g1 = Math.round(istep * c0_0[1] + step * c0_1[1]);
	var b1 = Math.round(istep * c0_0[2] + step * c0_1[2]);
	var color1 = "rgb("+r1+","+g1+","+b1+")";
	var color1pale = "rgba("+r1+","+g1+","+b1+",.5)";

	var r2 = Math.round(istep * c1_0[0] + step * c1_1[0]);
	var g2 = Math.round(istep * c1_0[1] + step * c1_1[1]);
	var b2 = Math.round(istep * c1_0[2] + step * c1_1[2]);
	var color2 = "rgb("+r2+","+g2+","+b2+")";
	var color2pale = "rgba("+r2+","+g2+","+b2+",.5)";

	$('#nav-contact , .fv-btn').css({
		background: "-webkit-gradient(linear, left top, right top, from("+color1+"), to("+color2+"))"}).css({
		background: "-moz-linear-gradient(left, "+color1+" 0%, "+color2+" 100%)"
	});

	$('.cv_whale').css({
		background: "-webkit-gradient(linear, left top, right top, from("+color1pale+"), to("+color2pale+"))"}
	).css({
		background: "-moz-linear-gradient(left, "+color1pale+" 0%, "+color2pale+" 100%)"}
	);

	$('.stop1').css('stop-color',color1);
	$('.stop2').css('stop-color',color2);
	step += gradientSpeed;
	if ( step >= 1 ) {
		step %= 1;
		colorIndices[0] = colorIndices[1];
		colorIndices[2] = colorIndices[3];

		//pick two new target color indices
		//do not pick the same as the current one
		colorIndices[1] = ( colorIndices[1] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
		colorIndices[3] = ( colorIndices[3] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;

	}
}


setInterval(updateGradient,10);

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
	width: 0
});
$('.scroll-fade-col').children().each(function(){
	if (windowWidth <= 900) {
		$(this).css({
			width: 1,
			opacity: 0,
			transition: effect_timeSp + 'ms'
		});
	} else {
		$(this).css({
			width: 1,
			opacity: 0,
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
				width: '100%'
			});
		}
	});

	var scroll_top = $(this).scrollTop();
	var scroll_btm = scroll_top + $(this).height();
	var effect_pos = scroll_btm - effect_btm;

	$('.inview').each( function() {
		var this_pos = $(this).offset().top;
		if ( effect_pos > this_pos ) {
			$(this).addClass("inview-active");
		}
	});

	if($('.manga-page').length !== 0) {
		var page = $('.manga-page').eq(1);
		var page_top = page.offset().top;
		var page_height = page.height();
		var origin = page.width() * 0.425;
		var ando = $('.manga-page-scroll');
		var ando_height = ando.height();

		if (page_top + page_height - ando_height - origin * 6.0 < scroll_top) {
			ando.eq(0).addClass("hidden");
			ando.eq(1).removeClass("hidden");
		} else {
			ando.eq(0).removeClass("hidden");
			ando.eq(1).addClass("hidden");
		}

		if (page_top + page_height - ando_height - origin * 4.6 < scroll_top) {
			ando.each( function() {
				var ando_top = origin + page_height - ando_height - origin * 4.6;
				$(this).css("top", ando_top);
			});
		} else if (page_top < scroll_top) {
			ando.each( function() {
				var ando_top = origin + scroll_top - page_top;
				$(this).css("top", ando_top);
			});
		} else {
			ando.each( function() {
				$(this).css("top", origin);
			});
		}
	}
});
