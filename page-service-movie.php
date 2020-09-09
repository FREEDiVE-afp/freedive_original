<?php
/*

Template Name: サービス紹介｜動画マーケティング
*/


get_header(); ?>

		<!--header end-->
		<section class="fv parallax-window toggle-bg" data-parallax="scroll" data-image-src="https://freedive.co.jp/wp-content/themes/freedive_original/assets/img/bg_sea_pc.jpg">
			<div class="fv-inner inner1000">
				<figure class="fv-img">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/service/icon_video.svg" alt="動画マーケティング">
				</figure>
				<div class="fv-text">
					<h1><?php echo  the_title(); ?></h1>
					<p><?php echo  the_excerpt(); ?></p>
					<a href="https://freedive.co.jp/contact/business-contact.html" class="cv-btn">
						お問い合わせ<span class="arrow-double"></span>
					</a>
				</div>
			</div>
		</section>
		<!--fv end-->

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
          },
          {
            "@type": "Offer",
            "itemOffered": {
            "@type": "Service",
            "name": "採用コンサルティング"
          }
        }
      ]
    }
   ]
  }
}
</script>

<?php  get_footer(); ?>
