<?php
/*
Template Name: 採用ブログ
Template Post Type: post,reqruit-blog
*/

get_header();
setPostViews(get_the_ID());
 ?>

		<section class="fv">
				<div>
					<h1><span>広告運用・マーケティングの</span><br><span>メソッドがわかる</span></h1>
			</div>
		</section><!--fv end-->
		<?php if ( have_posts() ) : ?>
		<?php while( have_posts() ) : the_post(); ?>
		<div class="breadcrumbs">
			<ul>
				<li><a href="../index.html">ホーム</a></li>
				<li><a href="#">採用ブログ</a></li>
				<li><a href="#"><?php the_title(); ?></a></li>
				<li class="searchbox">
					<form class="search-form">
						<input type="text" placeholder="フリーワード検索"><button><i class="fas fa-search"></i></button>
					</form>
				</li>
			</ul>
		</div>
		
		
		<div class="conts">	
			<section class="article-wrap">
				<article class="inner1200">
					<p class="article-info"><time><?php the_time('Y年m月d日') ?></time>
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
						<?php echo get_the_post_thumbnail( $post->ID, 'thumbnail', array( 'class' => 'prof-thumb' ) ); ?>
					</div>
					<ol class="index">
						<li class="index-ttl">目次</li>
						<li><a href="#"><h2>見出しテキスト</h2></a></li>
						<li><a href="#"><h2>見出しテキスト</h2></a></li>
						<li><a href="#"><h2>見出しテキスト</h2></a></li>
					</ol>
					<div class="main-txt">

					<?php the_content(); ?>

					</div>
					<!-- text end -->
					<a href="<?php echo get_permalink( 116 );?>" class="blog-contact">採用ブログ一覧へ戻る<span class="arrow-double"></span></a>
				</article><!--inner end-->
			</section><!--cont end-->
			
		</div><!--conts end-->
		<?php endwhile;?>
		<?php endif; ?>

<?php
get_footer();
