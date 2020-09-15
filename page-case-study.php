<?php
/*

Template Name:  事例
*/



get_header(); ?>
		<section class="fv">
				<div>
					<h1><span>FREEDiVEの</span><br><span>マーケティング支援事例</span></h1>
			</div>
		</section><!--fv end-->
		
		<div class="breadcrumbs">
			<ul itemscope itemtype="http://schema.org/BreadcrumbList">
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="/"><span itemprop="name">ホーム</span></a><meta itemprop="position" content="1" /></li>
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="#"><span itemprop="name">事例紹介</span></a><meta itemprop="position" content="2" /></li>
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="searchbox">
					<form itemprop="item" class="search-form" method="get" action="<?php bloginfo( 'url' );?>">
						<input itemprop="name" type="text" name="s" placeholder="フリーワード検索">
						<input type="hidden" name="cat" value="3">
						<button type="submit" class="searchsubmit"><i class="fas fa-search"></i></button>
						<meta itemprop="position" content="3" />
					</form>
				</li>
			</ul>
		</div>
		
		<div class="conts">	
			<section class="latest">
				<div class="inner1200">
					<h2 class="ttl_row">CASE STUDY<br><span>事例紹介</span></h2>
					<div class="thumbs scroll-fade-row">
						<?php	
							$paged = get_query_var('paged') ? get_query_var('paged') : 1;
							$arg = array(

								'post_type' => array('post'),
								'post_status' => array('publish'),
								'category_name' => 'case-study',
								'orderby'          => 'date',
								'order'            => 'DESC',
								'paged' => $paged ,
								'posts_per_page' => 8,
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

					
				</div><!--inner end-->
			</section><!--latest end-->
			
			
		</div><!--conts end-->
		
		

<?php
get_footer();
