<?php
/*

Template Name: 特徴
*/

get_header(); ?>
		<section class="fv">
				<h1><span>Feature</span><br>FREEDiVEの特徴</h1>
		</section><!--fv end-->
		
		<div class="breadcrumbs">
			<ul itemscope itemtype="http://schema.org/BreadcrumbList">
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="/"><span itemprop="name">ホーム</span></a><meta itemprop="position" content="1" /></li>
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="#"><span itemprop="name">特徴</span></a><meta itemprop="position" content="2" /></li>
			</ul>
		</div>
		
		
		<div class="conts">
		<?php
		$page_data = get_page_by_path(basename(get_permalink())); $page = get_post($page_data);
		$content = $page->post_content;
		echo $content;
		?>
			
		<section class="service">
			<div class="inner1200">
				<h2 class="ttl_row">SERVICE<br><span>サービス紹介</span></h2>
				<ul class="service-list scroll-fade-row">
					<?php
						$page_ID = get_page_by_path('service'); // ID取得用の固定ページオブジェクトの取得
						$page_list = get_posts(array( 
							'numberposts' => -1, 
							'post_parent' => 161, 
							'order' => 'ASC',
							'post_type' => 'page'
						));
						foreach ( $page_list as $page_item ) : setup_postdata( $post );
					?>
					<li>
						<h3><?php echo get_the_title($page_item->ID); ?></h3>
						<figure class="thumb-img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/<?php echo $page_item->post_name; ?>.svg" alt="<?php echo get_the_title($page_item->ID); ?>">
						</figure>

						<p><?php echo get_the_excerpt($page_item->ID);?></p>
						<a href="<?php echo get_page_link($page_item->ID)?>">詳しく見る<span class="arrow-line"></span></a>
					</li>
					<?php 
						endforeach;
						wp_reset_postdata();
					?>
				</ul>
			</div><!--/.inner1200-->
		</section><!--/.service-->

			
		</div><!--conts end-->
<?php
get_footer();
