<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */
?>
		<section class="footer-contact">
			<div class="inner1200 f-c-inner">
				<div class="b-contact">
					<h2>CONTACT</h2>
					<p><span>集客やマーケティングでお困りの際は</span><br><span>お気軽にご相談ください</span></p>
					<a href="https://freedive.co.jp/contact/business-contact.html" class="f-c-btn">お問い合わせをする</a>
				</div>
				<div class="c-contact">
					<h2>CAREER</h2>
					<p><span>挑戦できる環境に飛び込みたい方は</span><br><span>まず一度ご来社ください</span></p>
					<a href="https://freedive.co.jp/contact/career-contact.html" class="f-c-btn">お問い合わせをする</a>
				</div>
			</div>
		</section>
</main>
		<footer class="parallax-window toggle-bg" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/assets/img/bg_sea_pc.jpg">
				<div class="footer-inner">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/map.svg" alt="" class="map-img">
					<dl class="adress-table" itemscope itemtype="http://schema.org/Corporation">
						<dt>会社名</dt>
						<dd itemprop="name">株式会社FREEDiVE</dd>
						<dt>代表取締役</dt>
						<dd itemprop="founder">今井渉平</dd>
						<dt>所在地</dt>
						<dd itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">東京都渋谷区神宮前3-42-2 VORT外苑前Ⅲ 5F<br><a href="https://goo.gl/maps/PBgH3fna3Wv" target="_blank">Google Maps＞</a></dd>
						<dt>電話番号</dt>
						<dd itemprop="telephone">03-4405-4238</dd>
						<dt>FAX</dt>
						<dd itemprop="faxNumber">03-6748-8258</dd>
						<dt>設立日</dt>
						<dd itemprop="foundingDate">2016年6月3日</dd>
						<dt>従業員数</dt>
						<dd itemprop="numberOfEmployees">25名（アルバイト含）</dd>
					</dl>
				</div>
			<div class="footer-nav">
					<ul class="footer-nav_cont" itemprop="hasPart" itemscope itemtype="https://schema.org/SiteNavigationElement">
						<li class="footer-nav_menu" itemprop="hasPart" itemscope itemtype="http://schema.org/WebPage">
							<div><span itemprop="name"><a href="<?php echo get_permalink( 80 );?>" itemprop="url">特徴</a></span>
								<span itemprop="name"><a href="<?php echo get_permalink( 835 );?>" itemprop="url">事例紹介</a></span>
							<span itemprop="name"><a href="<?php echo get_permalink( 82 );?>" itemprop="url">企業情報</a></span>
							<span itemprop="name"><a href="<?php echo get_permalink( 53 );?>" itemprop="url">ビジネスブログ</a></span></div>
							<dl>
								<dt itemprop="hasPart" itemscope itemtype="http://schema.org/WebPage">サービス</dt>
								<dd itemprop="name"><a href="<?php echo get_permalink( 116 );?>" itemprop="url">WEBサイト制作</a></dd>
								<dd itemprop="name"><a href="<?php echo get_permalink( 48 );?>" itemprop="url">広告運用</a></dd>
								<dd itemprop="name"><a href="<?php echo get_permalink( 128 );?>" itemprop="url" class="disabled">マーケティング設計</a></dd>
								<dd itemprop="name"><a href="<?php echo get_permalink( 649 );?>" itemprop="url" class="disabled">採用コンサルティング</a></dd>
								<dd itemprop="name"><a href="<?php echo get_permalink( 983 );?>" itemprop="url" class="disabled">動画マーケティング</a></dd>
							</dl>
						</li>
						<li class="footer-nav_career" itemprop="hasPart" itemscope itemtype="http://schema.org/WebPage">
							<span itemprop="name"><a href="<?php echo get_permalink( 85 );?>" itemprop="url">採用情報</a></span>
							<dl>
								<dt>
									Division
								</dt>
								<dd itemprop="name"><a href="<?php echo get_permalink( 184 );?>" itemprop="url">インターンシップ</a></dd>
								<dd itemprop="name"><a href="<?php echo get_permalink( 294 );?>" itemprop="url">新卒採用エンジニアコース</a></dd>
								<dd itemprop="name"><a href="<?php echo get_permalink( 297 );?>" itemprop="url">新卒採用クリエイターコース</a></dd>
								<dd itemprop="name"><a href="<?php echo get_permalink( 140 );?>" itemprop="url">新卒採用ビジネスコース</a></dd>
								<dd itemprop="name"><a href="<?php echo get_permalink( 301 );?>" itemprop="url">キャリア採用</a></dd>
							</dl>
							<dl>
								<dt>
									Work Place
								</dt>
								<dd itemprop="name"><a href="#" class="disabled" itemprop="url">オフィス環境</a></dd>
								<dd itemprop="name"><a href="#" class="disabled" itemprop="url">福利厚生</a></dd>
								<dd itemprop="name"><a href="<?php echo get_permalink( 89 );?>" itemprop="url">社員情報</a></dd>
							</dl>
							<dl>
								<dt>
									About
								</dt>
								<dd itemprop="name"><a href="<?php echo get_permalink( 82 );?>" itemprop="url">企業情報</a></dd>
								<dd itemprop="name"><a href="<?php echo get_permalink( 385 );?>" itemprop="url">EXECUTIVEメッセージ</a></dd>
								<dd itemprop="name"><a href="<?php echo get_permalink( 82 );?>#vision" itemprop="url">ビジョン</a></dd>
							</dl>
							<dl>
								<dt>
									Study
								</dt>
								<dd itemprop="name"><a href="#" class="disabled" itemprop="url">学習ブログ</a></dd>
								<dd itemprop="name"><a href="#" class="disabled" itemprop="url">マーケティング用語動画</a></dd>
								<dd itemprop="name"><a href="#" class="disabled" itemprop="url">社員インタビュー</a></dd>
							</dl>
						</li>
					</ul>
			</div>
			<p class="copyright" itemscope itemtype="https://schema.org/copyrightHolder" itemprop="copyrightHolder">Copyright ©2020  FREEDiVE Inc. All Right Reserved</p>
		</footer>
	</div><!--■■■wrap end■■■-->
	
	
	<!--■■■JS■■■-->
	<script	src="https://cloudeyes.net/heatmap_log.js"></script>
<script>
$(window).on('load', function () {
	var style = '<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animation.css">';
	$('head link:last').after(style);
	});
	</script>
	<?php wp_footer(); ?>
	

	<?php if ( is_404() ): ?>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/particles.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/404.js"></script>
	
<?php endif; ?>
	<?php if(is_page("members")): ?>
	<div class="overlay" id="overlay"></div>
						<?php
							$arg = array(
								'category_name' => 'members', // 表示したいカテゴリーのスラッグを指定
								'posts_per_page' => '20'
							);
							$posts = get_posts( $arg );
							if( $posts ):
								foreach ( $posts as $post ) : setup_postdata( $post );
								
						?>
						<div class="modal js-modal" data-id="modal<?php echo $post->ID; ?>" id="<?php echo $post->post_name; ?>">
							<span class="modal-close-btn js-close-btn">&#x2715;</span>
							<div class="modal_img"></div>
							<div class="modal_txt">
							<?php the_content(); ?>
							</div>
						</div>
						<?php 
								endforeach;
							endif;
							wp_reset_postdata();
						?>
						
	
		
		<script>
				var $blur = $('.wrap');

		$('.js-btn-modal').on('click', function(){
		$('#overlay').fadeIn();
			
		var id = $(this).data('id');
		$('.js-modal[data-id="modal' + id + '"]').fadeIn();
		$blur.addClass('is-menu-open');
		});

		$('.js-close-btn').on('click', function(){
		$('#overlay').fadeOut();
		$('.js-modal').fadeOut();
		$blur.removeClass('is-menu-open');});
		$('#overlay').on('click', function(){
		$('#overlay').fadeOut();
		$('.js-modal').fadeOut();
		$blur.removeClass('is-menu-open');
		});
	</script>
	<?php endif; ?>
	<?php if(is_page("service-website")): ?>
	<script src="https://cdn.jsdelivr.net/npm/vivus@latest/dist/vivus.min.js"></script>
<script>
new Vivus('move', {
        type: 'oneByOne',duration: 50,forceRender: false,start: 'inViewport', animTimingFunction:Vivus.EASE_OUT})
	
		$(window).on('scroll load', function(){
        var scroll_top = $(this).scrollTop();
        var scroll_btm = scroll_top + $(this).height();
        var effect_pos = scroll_btm - effect_btm;

			$('.pm h2 em , .seo h2 em , .strength h2 em').each( function() {
				var this_pos = $(this).offset().top;
				if ( effect_pos > this_pos ) {
                $(this).addClass("inview");
			}
		});
});
	</script>
	<?php endif; ?>
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "WebSite",
  "name": "マーケティング総合支援会社｜株式会社FREEDiVE",
  "url": "https://freedive.co.jp/",
    "author": {
"@context": "http://schema.org",
"@type": "Person",
"name": "Koki Ando",
"sameAs": ["https://twitter.com/KOK1ANDO", "https://www.facebook.com/koki0627","https://www.youtube.com/channel/UCXb4b0gBH90FAQ8cPIAPojA"],
"image": "https://freedive.co.jp/wp-content/uploads/2020/01/k-ando.jpg",
"alternateName": ["安藤 弘樹"],
"worksFor": {
	"@type": "Corporation",
	"name": ["FREEDiVE Inc.", "株式会社FREEDiVE"],
	"url": "https://freedive.co.jp/"}
	}
}
</script>
<script type="application/ld+json">
{
    "@context" : "https://schema.org",
    "@type" : "Organization",
    "name" : "株式会社FREEDiVE",
    "founder":"今井渉平",
    "foundingDate":"2016-06-03", //設立日
    "description" : "株式会社FREEDiVE（フリーダイブ）は、クライアントファーストを至上命題とするマーケティング企業です。徹底した仕組み化を実践している運用戦略設計と、それを実践する「人」の育成に重きをおいて広告主様ひいては社会に対しての課題解決を目指します。",
    "url" : "https://freedive.co.jp/",
    "logo": "https://freedive.co.jp/wp-content/themes/freedive_original/assets/img/nav-logo.svg",
    "telephone" : "+81-03-4405-4238", //電話番号
    "faxNumber": "+81-03-6748-8258", //FAX番号
    "address": {
        "@type": "PostalAddress",
        "addressLocality": "渋谷区神宮前",
        "addressRegion": "東京都",
        "postalCode": "143-0023",
        "streetAddress": "3-42-2",
        "addressCountry": "JP"
    },
    "contactPoint" :[
        { "@type" : "ContactPoint",
        "telephone" : "+81-03-4405-4238",
        "contactType" : "customer service"
        }
        ],
"sameAs":[ //関連サイトやSNS
"https://twitter.com/KOK1ANDO",
"https://www.facebook.com/koki0627",
"https://www.youtube.com/channel/UCXb4b0gBH90FAQ8cPIAPojA"
]
}
</script>
<!-- Load `web-vitals` using a classic script that sets the global `webVitals` object. -->
<script defer src="https://unpkg.com/web-vitals@0.2.2/dist/web-vitals.es5.umd.min.js"></script>
<script>
addEventListener('DOMContentLoaded', function() {
  webVitals.getCLS(console.log);
  webVitals.getFID(console.log);
  webVitals.getLCP(console.log);
});
</script>
	</body>
</html>
