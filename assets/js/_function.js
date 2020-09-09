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
		});
		$(".toggle-bg").each(function(){
			$(this).attr("data-image-src", $(this).attr("data-image-src").replace("_pc","_sp"));
		})
									
	} else {
	$('.menu_parent').mouseenter(function() {
		$('li').removeClass('active');
		$(this).addClass('active');
		$('.menu_parent.active > ul').mouseleave(function(){
			$('li').removeClass('active');
		$('.menu_career').click(function() {
			location.href = 'http://test.freedive.co.jp/career/';
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

function updateGradient()
{
  
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

var r2 = Math.round(istep * c1_0[0] + step * c1_1[0]);
var g2 = Math.round(istep * c1_0[1] + step * c1_1[1]);
var b2 = Math.round(istep * c1_0[2] + step * c1_1[2]);
var color2 = "rgb("+r2+","+g2+","+b2+")";

 $('#nav-contact , .fv-btn').css({
   background: "-webkit-gradient(linear, left top, right top, from("+color1+"), to("+color2+"))"}).css({
    background: "-moz-linear-gradient(left, "+color1+" 0%, "+color2+" 100%)"});
  
  step += gradientSpeed;
  if ( step >= 1 )
  {
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