<?php
/*
Template Name: Executiveメッセージ
Template Post Type: post,executive-message
*/

get_header();
setPostViews(get_the_ID());
 ?>

		<section class="fv">
				
			<div>
			<h1><span>Executive Message</span></h1>
			</div>
		</section><!--fv end-->

		<?php if ( have_posts() ) : ?>
		<?php while( have_posts() ) : the_post(); ?>
		<div class="breadcrumbs">
			<ul itemscope itemtype="http://schema.org/BreadcrumbList">
				<li itemprop="itemListElement" itemscope
					itemtype="http://schema.org/ListItem"><a itemprop="item" href="/"><span itemprop="name">ホーム</span></a><meta itemprop="position" content="1" /></li>
				<li itemprop="itemListElement" itemscope
					itemtype="http://schema.org/ListItem"><a itemprop="item" href="/executive-message"><span itemprop="name">Executive Message</span></a><meta itemprop="position" content="2" /></li>
				<li itemprop="itemListElement" itemscope
					itemtype="http://schema.org/ListItem"><a itemprop="item" href="#"><span itemprop="name"><?php the_title(); ?></span></a><meta itemprop="position" content="3" /></li>

			</ul>
		</div>
		
		
		<div class="conts">	
			<section class="article-wrap">
				<article class="inner1000">
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
						<?php echo get_the_post_thumbnail( $post->ID, 'full', array( 'class' => 'prof-thumb' ) ); ?>
					</div>
					<div class="main-txt">

					<?php the_content(); ?>

					</div>
					<!-- text end -->
				</article><!--inner end-->
			</section><!--cont end-->
			
		</div><!--conts end-->
		<?php endwhile;?>
		<?php endif; ?>

<?php
get_footer();
