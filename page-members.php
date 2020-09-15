<?php
/*

Template Name: メンバー紹介
*/


get_header(); ?>

		<section class="fv">
				<h1><span>Members</span><br>社員紹介</h1>
		</section><!--fv end-->
		
		<div class="breadcrumbs">
			<ul itemscope itemtype="http://schema.org/BreadcrumbList">
				<li itemprop="itemListElement" itemscope
					itemtype="http://schema.org/ListItem"><a itemprop="item" href="/"><span itemprop="name">ホーム</span></a><meta itemprop="position" content="1" /></li>
				<li itemprop="itemListElement" itemscope
					itemtype="http://schema.org/ListItem"><a itemprop="item" href="/career"><span itemprop="name">採用</span></a><meta itemprop="position" content="2" /></li>
				<li itemprop="itemListElement" itemscope
					itemtype="http://schema.org/ListItem"><a itemprop="item" href="#"><span itemprop="name">社員紹介</span></a><meta itemprop="position" content="3" /></li>
			</ul>
		</div>
		
		
		<div class="conts">
			<section class="thumbs executive">
				<div class="inner1200">
					<div class="center-txt"><h2>EXECUTIVE</h2></div>
					<ul class="thumbs-list">
					<?php
						$arg = array(
							'category_name' => 'executive',
							'orderby' => 'date',
							'order' => 'ASC'
							
						);
						$posts = get_posts( $arg );
						if( $posts ):
							foreach ( $posts as $post ) : setup_postdata( $post );
					?>
					<li class="js-btn-modal" data-id="<?php echo $post->ID; ?>" onclick= "ga('send', 'pageview', '/click/<?php echo $post->post_name; ?>">
					<?php echo get_the_post_thumbnail( $post->ID, 'full', array( 'class' => 'prof-thumb' ) ); ?>
					</li>
					<?php 
							endforeach;
						endif;
						wp_reset_postdata();
					?>
					</ul>
				</div>
			</section><!--executive end-->
			
			<section class="thumbs afp">
				<div class="inner1200">
					<div class="center-txt"><h2>AffiliatePro</h2></div>
					<ul class="thumbs-list">
					<?php
						$arg = array(
							'category_name' => 'affiliatepro' ,
							'posts_per_page' => 10,
								'orderby' => 'date',
								'order' => 'ASC'
						);
						$posts = get_posts( $arg );
						if( $posts ):
							foreach ( $posts as $post ) : setup_postdata( $post );
					?>
					<li class="js-btn-modal" data-id="<?php echo $post->ID; ?>" onclick= "ga('send', 'pageview', '/click/<?php echo $post->post_name; ?>">
					<?php echo get_the_post_thumbnail( $post->ID, 'full', array( 'class' => 'prof-thumb' ) ); ?>
					</li>
					<?php 
							endforeach;
						endif;
						wp_reset_postdata();
					?>

					</ul>
				</div>
			</section><!--afp end-->
			
			<section class="thumbs cd">
				<div class="inner1200">
					<div class="center-txt"><h2>CREATIVE and DEVELOPMENTS</h2></div>
					<ul class="thumbs-list">
					<?php
						$arg = array(
							'category_name' => 'creative-and-developments',
							'orderby' => 'date',
							'order' => 'ASC'
						);
						$posts = get_posts( $arg );
						if( $posts ):
							foreach ( $posts as $post ) : setup_postdata( $post );
					?>
					<li class="js-btn-modal" data-id="<?php echo $post->ID; ?>" onclick= "ga('send', 'pageview', '/click/<?php echo $post->post_name; ?>">
					<?php echo get_the_post_thumbnail( $post->ID, 'full', array( 'class' => 'prof-thumb' ) ); ?>
					</li>
					<?php 
							endforeach;
						endif;
						wp_reset_postdata();
					?>
					</ul>
				</div>
			</section><!--cd end-->
			
			<section class="thumbs hr">
				<div class="inner1200">
					<div class="center-txt"><h2>HUMAN RESOURCES</h2></div>
					<ul class="thumbs-list">
						<?php
							$arg = array(
								'category_name' => 'human-resources',
								'orderby' => 'date',
								'order' => 'ASC'
							);
							$posts = get_posts( $arg );
							if( $posts ):
								foreach ( $posts as $post ) : setup_postdata( $post );
						?>
						<li class="js-btn-modal" data-id="<?php echo $post->ID; ?>" onclick= "ga('send', 'pageview', '/click/<?php echo $post->post_name; ?>">
						<?php echo get_the_post_thumbnail( $post->ID, 'full', array( 'class' => 'prof-thumb' ) ); ?>
						</li>
						<?php 
								endforeach;
							endif;
							wp_reset_postdata();
						?>

					</ul>
				</div>
			</section><!--hr end-->
		</div>

<?php  get_footer(); ?>
