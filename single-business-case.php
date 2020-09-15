<?php
/*
Template Name: 事例記事
Template Post Type: post,case-study
*/

get_header();
setPostViews(get_the_ID());
 ?>
		<div id="fb-root"></div>
    	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v3.2"></script>

		<section class="fv">
				<div>
					<p><span>FREEDiVEの</span><br><span>マーケティング支援事例</span></p>
			</div>
		</section><!--fv end-->
		<?php if ( have_posts() ) : ?>
		<?php while( have_posts() ) : the_post(); ?>
		<div class="breadcrumbs">
			<ul itemscope itemtype="http://schema.org/BreadcrumbList">
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="/"><span itemprop="name">ホーム</span></a><meta itemprop="position" content="1" /></li>
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="/blog"><span itemprop="name">事例紹介</span></a><meta itemprop="position" content="2" /></li>
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="#"><span itemprop="name"><?php the_title(); ?></span></a><meta itemprop="position" content="3" /></li>
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="searchbox">
					<form itemprop="item" class="search-form" method="get" action="<?php bloginfo( 'url' );?>">
						<input itemprop="name" type="text" name="s" placeholder="フリーワード検索">
						<input type="hidden" name="cat" value="3">
						<button type="submit" class="searchsubmit"><i class="fas fa-search"></i></button>
						<meta itemprop="position" content="4" />
					</form>
				</li>
			</ul>
		</div>
		
		
		<div class="conts">	
			<section class="article-wrap">
				<article class="inner1000">
					<p class="article-info"><time></time>
					<?php
					$tags = get_the_tags();
					if ( !empty( $tags ) ) {
						foreach ( $tags as $tag ) {
							echo '<span>' . $tag->name . '</span>';
						};
					}
					?></p>
                    
					<h1><?php the_title(); ?></h1>
					<div class="kv">
						<?php echo get_the_post_thumbnail( $post->ID, 'full', array( 'class' => 'prof-thumb' ) ); ?>
					</div>
					<div class="main-txt">
					<?php the_content(); ?>
						
<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "BlogPosting",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "<?php echo get_the_permalink(); ?>"
    },
    "headline": "<?php the_title(); ?>",
    "description": "マーケティングという言葉は現代社会で複雑化しています。現代ではデジタルマーケティングが中心かと思えば、展示会やカンファレンスといったイベントマーケティング（フィールドマーケティング）があったり、ダイレクトマーケテイングがあったりと様々な使われ方をします。このブログではマーケティングに関することをわかりやすく解説します。",
    "datePublished": "<?php the_date('Y-m-d'); ?>",
    "dateModified": "<?php the_modified_date('Y-m-d') ?>",
    "author": {
        "@type": "Person",
        "name": "安藤 弘樹（Koki Ando）"
    },
    "publisher": {
        "@type": "Organization",
       "name": "株式会社FREEDiVE",
        "url": "https://freedive.co.jp/",
        "logo": {
            "@type": "ImageObject",
            "url": "https://freedive.co.jp/wp-content/uploads/2020/02/FREEDIVE.png",
            "width": "308",
            "height": "285"
        },
        "address": {
            "@type": "PostalAddress",
            "postalCode": "1500001",
            "addressRegion": "東京都",
            "addressLocality": "渋谷区",
            "streetAddress": "神宮前3-42-2 VORT外苑前Ⅲ 5F"
        }
    },
    "image": {
        "@type": "ImageObject",
        "url": "<?php echo get_the_post_thumbnail_url( get_the_ID(), 'medium' ); ?>",
        "width": "300",
        "height":" 214"
    }
}
</script>
					</div>
					<!-- text end -->
					<ul class="share-btns">
						<?php echo  hatenaButton(get_the_permalink(),get_the_title()); ?>
						<?php echo  facebook(get_the_permalink(),get_the_title()); ?>
						<?php echo  twitter('@KOK1ANDO',get_the_permalink(),get_the_title()); ?>
					</ul>
					<a href="https://freedive.co.jp/contact/business-contact.html" class="cv_whale"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/whale_line.svg" alt="">
							<span>ご相談はこちら<span class="arrow-double"></span></span></a>
				</article><!--inner end-->
			</section><!--cont end-->
			
		</div><!--conts end-->
		<?php endwhile;?>
		<?php endif; ?>
<?php
get_footer();
