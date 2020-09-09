<?php
/*

Template Name:  動画
*/

get_header(); ?>
		<section class="fv">
				<div>
					<h1><span>広告運用・マーケティングの</span><br><span>メソッドがわかる</span></h1>
			</div>
		</section><!--fv end-->

		<div class="breadcrumbs">
			<ul itemscope itemtype="http://schema.org/BreadcrumbList">
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="/"><span itemprop="name">ホーム</span></a><meta itemprop="position" content="1" /></li>
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="#"><span itemprop="name">ビジネス動画</span></a><meta itemprop="position" content="2" /></li>
			</ul>
		</div>


		<div class="conts">
			<?php if(!is_page('ppage')): ?>
			<section class="latest">
				<div class="inner1200">
					<h2><span>最新動画</span></h2>
					<div class="thumbs scroll-fade-row">
						<?php
							$paged = get_query_var('paged') ? get_query_var('paged') : 1;
							$arg = array(

								'post_type' => array('post'),
								'post_status' => array('publish'),
								'category_name' => 'business-movie',
								'orderby'          => 'date',
								'order'            => 'DESC',
								'paged' => $paged ,
								'posts_per_page' => 4,
							);
							$query = new WP_Query( $arg );
							if ( $query->have_posts() ) :
								while ( $query->have_posts() ) : $query->the_post();
						?>
						<article>
							<figure class="thumb-img"><?php the_post_thumbnail( $size, $attr ); ?></figure>
							<div class="thumb-txt">
								<h3><?php the_title(); ?></h3><time><?php the_time('Y年m月d日') ?></time>
								<p><?php echo the_excerpt();?></p>
								<a href="<?php echo get_permalink(); ?>">詳しく見る<span class="arrow-line"></span></a>
							</div>
						</article>

						<?php
								endwhile;
							endif;
						?>

					</div><!--thumbs end-->
					<!-- <ul class="pagenation"> -->
						<?php
						$big = 999999999;
						$outputs =  paginate_links(array(
							'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
							'show_all' => true,
							'type' => 'list',
							'format' => 'paged=%#%',
							'current' => max(1, get_query_var('paged')),
							'total' => $query->max_num_pages,
							'prev_text' => '<',
							'next_text' => '>',
						  ));
						echo str_replace("<ul class='page-numbers'>", "<ul class='pagenation'>", $outputs);
						wp_reset_postdata();
						?>

					<a href="https://www.youtube.com/channel/UCXb4b0gBH90FAQ8cPIAPojA" target="_blank" class="blog-contact">チャンネル登録はこちら<span class="arrow-double"></span></a>
				</div><!--inner end-->
			</section><!--latest end-->
			<?php endif; ?>
			<?php echo get_query_var('paged');
			if(is_page('movie')): ?>
			<section class="popular">
				<div class="inner1200">
					<h2><span>人気動画</span></h2>
					<div class="thumbs scroll-fade-row">
						<?php

							$paged = get_query_var('page') ? get_query_var('page') : 1;

							$args = array(
								'paged' => $paged,
								'category_name' => 'business-movie',
								'post_status' => 'publish',
								'post_type' => 'post',
								'meta_key' => 'post_views_count',
								'orderby' => 'meta_value_num',
								'order'=>'DESC',
								'posts_per_page' => 4,

							);
							$p_query = new WP_Query( $args );

							if($p_query->have_posts()):
      							while($p_query->have_posts()): $p_query->the_post();

						?>
						<article>
							<figure class="thumb-img"><?php the_post_thumbnail( $size, $attr ); ?></figure>
							<div class="thumb-txt">
								<h3><?php the_title(); ?></h3><time><?php the_time('Y年m月d日') ?></time>
								<p><?php echo the_excerpt();?></p>
								<a href="<?php echo get_permalink(); ?>">詳しく見る<span class="arrow-line"></span></a>
							</div>
						</article>

						<?php
								endwhile;
							endif;
						?>


					</div>
					<?php
						//echo str_replace( '/p', '' ,get_pagenum_link(1)).'%__%';
						$outputs =  paginate_links(array(
// 							'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
							'show_all' => true,
							'type' => 'list',
							'base' => str_replace( '/p', '' ,get_pagenum_link(1)).'%_%',
							//'base' => get_pagenum_link(1) . '%_%',
							'format' => 'ppage/%#%/',
							'current' => max(1, get_query_var('page')),
							'total' => $p_query->max_num_pages,
							'prev_text' => '<',
							'next_text' => '>',
						));
						echo str_replace("<ul class='page-numbers'>", "<ul class='pagenation'>", $outputs);
						wp_reset_postdata();
					?>
				</div><!--inner end-->
			</section><!--latest end-->
			<?php endif; ?>

		</div><!--conts end-->



<?php
get_footer();
