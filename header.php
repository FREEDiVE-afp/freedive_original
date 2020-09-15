<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>
			<title>マーケティング総合支援会社｜株式会社FREEDiVE</title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1" />

		<!--■■■CSS■■■-->
		<link href="https://fonts.googleapis.com/css?family=Abel|Homemade+Apple|Nothing+You+Could+Do" rel="stylesheet">
		<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon-180x180.png">　

		<!--■■■JS■■■-->
		<!--  kit's code here -->
		<script src="https://kit.fontawesome.com/33dce3806e.js" crossorigin="anonymous"></script>

		<?php wp_deregister_script('jquery');?>
		<?php wp_head(); ?>
<?php
if ( is_front_page() ) { ?>
    <link rel="preload" href="<?php echo get_template_directory_uri() ?>/assets/img/main-logo.svg" as="image">
<?php } ?>
	</head>
<script>jQuery('.toggle-bg').each(function(){jQuery(this).attr('data-image-src', jQuery(this).attr('data-image-src').replace('_pc','_sp'));})</script>
	<body>

		<?php
		//wp_body_open();
		?>
	<div <?php body_class(); ?>>

	<header>
			<nav>
				<a href="/" id="nav-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/nav-logo.svg" alt="FREEDiVE Inc."></a>
				<div id="nav_conts">
					<ul class="nav_info" id="nav_info">
					<li><a href="#" class="doc" class="disabled"><i class="fas fa-book-open"></i>資料ダウンロード</a></li>
					<li><a href="tel:0344054238" class="tel"><i class="fas fa-phone-alt"></i>03-4405-4238<br class="sp-only"><span>（平日10:00〜19:00）</span></a></li>
					</ul>



			<ul class="menu-wrapper" id="menu">
				<li><a href="<?php echo get_permalink( 80 );?>">特徴</a></li>
				<li class="menu_parent menu_service">
					<div>サービス</div>
					<ul>
						<li><a href="<?php echo get_permalink( 116 );?>">WEBサイト制作</a></li>
						<li><a href="<?php echo get_permalink( 48 );?>">広告運用</a></li>
						<li><a href="<?php echo get_permalink( 128 );?>" class="disabled">マーケ設計</a></li>
						<li><a href="<?php echo get_permalink( 649 );?>" class="disabled">採用コンサル</a></li>
						<li><a href="<?php echo get_permalink( 983 );?>" class="disabled">動画マーケ</a></li>
					</ul>
				</li>
				<li><a href="<?php echo get_permalink( 835 );?>">事例紹介</a></li>


				<li><a href="<?php echo get_permalink( 82 );?>">企業情報</a></li>
				<li><a href="<?php echo get_permalink( 53 );?>">ビジネスブログ</a></li>
				<li><a href="<?php echo get_permalink( 865 );?>">動画</a></li>
				<li class="menu_parent menu_career">
					<div>採用情報</div>
					<ul>
						<li><a href="<?php echo get_permalink( 85 );?>">採用情報トップ</a></li>
						<li class="menu_drawer">
							<div>Division</div>
							<ul>
								<li class="menu_drawer-close-btn">戻る</li>
								<li><a href="<?php echo get_permalink( 184 );?>">インターンシップ</a></li>
								<li><a href="<?php echo get_permalink( 294 );?>">新卒採用エンジニアコース</a></li>
								<li><a href="<?php echo get_permalink( 297 );?>">新卒採用クリエイターコース</a></li>
								<li><a href="<?php echo get_permalink( 140 );?>">新卒採用ビジネスコース</a></li>
								<li><a href="<?php echo get_permalink( 301 );?>">キャリア採用</a></li>
							</ul>
						</li>
						<li class="menu_drawer">
							<div>Work Place</div>
							<ul>
								<li class="menu_drawer-close-btn">戻る</li>
								<li ><a href="#" class="disabled">オフィス環境</a></li>
								<li ><a href="#" class="disabled">福利厚生</a></li>
								<li><a href="<?php echo get_permalink( 89 );?>">社員情報</a></li>
							</ul>
						</li>
						<li class="menu_drawer">
							<div>About</div>
							<ul>
								<li class="menu_drawer-close-btn">戻る</li>
								<li><a href="<?php echo get_permalink( 82 );?>">企業情報</a></li>
								<li class="pc-only"><a href="<?php echo get_permalink( 385 );?>">EXECUTIVEメッセージ</a></li>
								<li ><a href="<?php echo get_permalink( 82 );?>#vision">ビジョン</a></li>
							</ul>
						</li>
						<li class="menu_drawer">
							<div>Study</div>
							<ul>
								<li class="menu_drawer-close-btn">戻る</li>
								<li ><a href="#" class="disabled">学習ブログ</a></li>
								<li ><a href="#" class="disabled">マーケティング用語動画</a></li>
								<li ><a href="#" class="disabled">社員インタビュー</a></li>
							</ul>
						</li>
						<li class="sp-only"><a href="#">EXECUTIVEメッセージ</a></li>
					</ul>
				</li>
				<li id="nav-contact"><a href="https://freedive.co.jp/contact/business-contact.html">お問い合わせ</a></li>
			</ul>





				</div>
			<svg class="toggle" viewBox="0 0 100 100" id="nav_toggle">
				<path
						class="line top"
						d="m 30,33 h 40 c 13.100415,0 14.380204,31.80258 6.899646,33.421777 -24.612039,5.327373 9.016154,-52.337577 -12.75751,-30.563913 l -28.284272,28.284272" />
				<path
						class="line middle"
						d="m 70,50 c 0,0 -32.213436,0 -40,0 -7.786564,0 -6.428571,-4.640244 -6.428571,-8.571429 0,-5.895471 6.073743,-11.783399 12.286435,-5.570707 6.212692,6.212692 28.284272,28.284272 28.284272,28.284272" />
				<path
						class="line bottom"
						d="m 69.575405,67.073826 h -40 c -13.100415,0 -14.380204,-31.80258 -6.899646,-33.421777 24.612039,-5.327373 -9.016154,52.337577 12.75751,30.563913 l 28.284272,-28.284272" />
				</svg>
			</nav>
	</header>
<main>
		<?php
