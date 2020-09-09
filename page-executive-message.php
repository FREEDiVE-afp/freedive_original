<?php
/*

Template Name: エグゼクティブメッセージ
*/

get_header(); ?>
		<section class="fv">
				<div>
					<h1><span>Executive Message</span></h1>
			</div>
		</section><!--fv end-->
		
		<div class="breadcrumbs">
			<ul itemscope itemtype="http://schema.org/BreadcrumbList">
				<li itemprop="itemListElement" itemscope
					itemtype="http://schema.org/ListItem"><a itemprop="item" href="/"><span itemprop="name">ホーム</span></a><meta itemprop="position" content="1" /></li>
				<li itemprop="itemListElement" itemscope
					itemtype="http://schema.org/ListItem"><a itemprop="item" href="#"><span itemprop="name">Executive Message</span></a><meta itemprop="position" content="2" /></li>
			</ul>
		</div>
		
		
		<div class="conts">	
			<?php if(!is_page('ppage')): ?>
			<section class="latest">
				<div class="inner1200">
					<h2><span>メッセージ一覧</span></h2>
					<div class="thumbs scroll-fade-row">
						<?php	
							$arg = array(

								'post_type' => array('post'),
								'post_status' => array('publish'),
								'category_name' => 'executive-message',
								'orderby'          => 'date',
								'order'            => 'DESC',
								'posts_per_page' => 3,
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
				</div><!--inner end-->
			</section><!--latest end-->
			<?php endif; ?>
			
		</div><!--conts end-->
		
		

<?php
get_footer();
