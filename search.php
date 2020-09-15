<?php
/*

Template Name:  検索結果
*/

get_header(); ?>
		<section class="fv">
				<div>
					<h1><span>広告運用・マーケティングの</span><br><span>メソッドがわかる</span></h1>
			</div>
		</section><!--fv end-->
		
		<div class="breadcrumbs">
			<ul>
				<li><a href="/">ホーム</a></li>
				<li><a href="#">ビジネスブログ</a></li>
				<li class="searchbox">
					<form class="search-form" method="get" action="<?php bloginfo( 'url' );?>">
						<input type="text" name="s" placeholder="フリーワード検索">
						<?php
							$category = get_the_category();
							$cat_id   = $category[0]->cat_ID;
						?>
						<input type="hidden" name="cat" value="<?php echo $cat_id;?>">
						<button  type="submit" class="searchsubmit"><i class="fas fa-search"></i></button>
					</form>
				</li>
			</ul>
		</div>
		
		
		<div class="conts">	
			<?php if(is_search()): ?>
			<section class="search">
				<div class="inner1200">
					<h2><span>検索結果</span></h2>
					<div class="thumbs scroll-fade-row">
						
						<?php if (have_posts()): ?>
						<?php
						//if (isset($_GET['s']) && empty($_GET['s'])) {
						//echo '検索キーワード未入力'; // 検索キーワードが未入力の場合のテキストを指定
						//} else {
						//echo '“'.$_GET['s'] .'”の検索結果：'.$wp_query->found_posts .'件'; // 検索キーワードと該当件数を表示
						//}
						?>
						<?php while(have_posts()): the_post(); ?>
						<article>
								<figure class="thumb-img"><?php echo get_the_post_thumbnail( $id, 'thumbnail', array( 'class' => 'prof-thumb' ) ); ?></figure>
								<div class="thumb-txt">
									<h3><?php echo get_the_title(); ?></h3><time><?php the_time('Y年m月d日') ?></time>
									<p><?php echo the_excerpt();?></p>
									<a href="<?php echo get_permalink(); ?>">詳しく見る<span class="arrow-line"></span></a>
								</div>
						</article>
						<?php endwhile; ?>
					<?php else: ?>
					検索されたキーワードにマッチする記事はありませんでした
					<?php endif; ?>	
			
					</div><!--thumbs end-->
					<!-- <ul class="pagenation"> -->

					<a href="" class="blog-contact">詳しく聞きたい方はお問い合わせください<span class="arrow-double"></span></a>
				</div><!--inner end-->
			</section><!--latest end-->
			<?php endif; ?>
		</div><!--conts end-->
		
		

<?php
get_footer();
