<?php
/*

Template Name: サービス紹介｜広告運用
*/


get_header(); ?>

		<!--header end-->
		<section class="fv parallax-window toggle-bg" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/assets/img/bg_sea_pc.jpg">
			<div class="fv-inner">
					<figure class="fv-img">
						<img src="/wp-content/themes/freedive_original/assets/img/service/ad/fv_pc-img.svg" alt="">
						<div id="display">Advertisement</div>
					</figure>

					<div class="fv-text">
						<h1>適材適所で<br><em>費用対効果を<br class="sp-only">最適化する</em><br>広告運用代行</h1>
						<p><?php echo  the_excerpt(); ?></p>
						<a href="https://freedive.co.jp/contact/business-contact.html" class="cv-btn">お問い合わせ<span class="arrow-double"></span></a>
				</div>
			</div><!--inner end-->
		</section><!--fv end-->

		<div class="breadcrumbs">
			<ul itemscope itemtype="http://schema.org/BreadcrumbList">
				<li itemprop="itemListElement" itemscope
					itemtype="http://schema.org/ListItem"><a itemprop="item" href="/"><span itemprop="name">ホーム</span></a><meta itemprop="position" content="1" /></li>
				<li itemprop="itemListElement" itemscope
					itemtype="http://schema.org/ListItem"><a itemprop="item" href="#"><span itemprop="name">サービス紹介</span></a><meta itemprop="position" content="2" /></li>
				<li itemprop="itemListElement" itemscope
					itemtype="http://schema.org/ListItem"><a itemprop="item" href="#"><span itemprop="name"><?php the_title(); ?></span></a><meta itemprop="position" content="3" /></li>
			</ul>
		</div>




		<?php
		$page_data = get_page_by_path(basename(get_permalink())); $page = get_post($page_data);
		$content = $page->post_content;
		echo $content;
		?>

			<!--<section class="client">
				<div class="inner1200">
					<div class="data">
						<h2>定量的なデータテキスト</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
						<figure class="client-logo"></figure>
					</div>--><!--data end-->
					<!--<div class="voice">
						<h2>お客様の声</h2>

						<?php /*
						$page = get_post( get_the_ID() );
						$slug = str_replace("service-", "", $page->post_name);
							$arg = array(
								'category_name' => $slug.'-review' // 表示したいカテゴリーのスラッグを指定
							);
							$posts = get_posts( $arg );
							if( $posts ):
								foreach ( $posts as $post ) : setup_postdata( $post );
								// $text_source = the_content();

						*/ ?>
						<article class="voice-box">
							<div class="voice-box-inner">
								<div class="voice-prof">
								<figure><?php /* echo get_the_post_thumbnail( $post->ID, 'thumbnail', array( 'class' => 'prof-thumb' ) ); */ ?></figure>
								<figcaption>
									<img src="img/__dummy-logo.jpg" alt="" class="voice-logo">
									<p><?php /* echo html_entity_decode(getNameFormArticle(get_the_content()));  */ ?></p>
								</figcaption>
							</div>
							<div class="voice-txt">
								<h3>< ? /* php the_title(); ? */ ></h3>
								<p><?php /* echo deleteNameFormArticle(get_the_content()); */ ?></p>
							</div></div>
						</article>
						<? /*php
								endforeach;
							endif;
							wp_reset_postdata();
						*/ ?>


					</div>
				</div>
			</section>-->

<script type="application/ld+json">
{
  "@context": "http://schema.org/",
  "@type": "Service",
  "serviceType": "マーケティング",
  "provider": {
    "@type": "Organization",
    "name": "株式会社FREEDiVE"
  },
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "サービス一覧",
    "itemListElement": [
      {
        "@type": "OfferCatalog",
        "name": "マーケティング",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "WEBサイト制作"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "広告運用"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "マーケティング設計"
            }
          }
        ]
      }
    ]
  }
}
</script>
	<!-----Swiper----->
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
		  <script>
    var swiper = new Swiper('.swiper-container', {
    direction: 'vertical',
    effect: 'slide',
    slidesPerView: 4,
    loop: true,
	//loopedSlides: null,
	centeredSlides : true,
    autoplay: {
        delay: 2000,
    },
  });
  </script>
	<script>
		$(window).on('scroll load', function(){
        var scroll_top = $(this).scrollTop();
        var scroll_btm = scroll_top + $(this).height();
        var effect_pos = scroll_btm - effect_btm;

			$('.adst-inner h2').each(function() {
				var this_pos = $(this).offset().top;
				if ( effect_pos > this_pos ) {
                $('.adst-line').addClass("inview");
			}
		});
			$('.logic h2 span , .service-ad h1 em').each( function() {
				var this_pos = $(this).offset().top;
				if ( effect_pos > this_pos ) {
                $(this).addClass("inview");
			}
		});
});
	</script>
<?php  get_footer(); ?>
