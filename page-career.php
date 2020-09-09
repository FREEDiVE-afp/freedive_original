<?php
/*

Template Name:  採用
*/

get_header(); ?>

			
<section class="fv">
				<h1><span>Career</span><br>採用について</h1>
		</section><!--fv end-->
		
		<div class="breadcrumbs">
			<ul>
				<li><a href="/">ホーム</a></li>
				<li><a href="<?php echo get_permalink( 85 );?>">採用情報</a></li>
				<?php if(is_child("career")): ?>
				<li><a href="#"><?php the_title(); ?></a></li>
				<?php endif; ?>
			</ul>
		</div>
		
		<div class="conts">

		<?php if(is_child("career")){ ?>
			<?php while (have_posts()) : the_post(); ?>
			<section class="course-detail <?php echo $post->post_name;?>">
				<h2><?php the_title(); ?></h2>
				<?php if(is_page(140)): ?>
				<div class="team">
					<h3>メンバー</h3>
					<ul>
					<?php
						$dep = translateDepartment($post->post_name);
						$posts = get_posts( array('category_name' => $dep ) );
						if( $posts ): foreach ( $posts as $post ) : setup_postdata( $post );
					?>
						<li>
							<?php echo get_the_post_thumbnail( $post->ID, 'thumbnail', array( 'class' => 'prof-thumb' ) ); ?>
						</li>
						<?php 
							endforeach;	endif;
							wp_reset_postdata();
						?>
						</ul>
				</div><!--team end-->
				<?php endif; ?>
		<?php endwhile; ?>
		<?php } ?>

		<?php
		$page_data = get_page_by_path(basename(get_permalink())); $page = get_post($page_data);
		echo $page->post_content;
		?>
		</section><!--courses end-->

		<?php
		if(is_page("career")){
		?>

			<section class="courses">
			  <div class="inner1200">
				<ul class="courses-list">
				  <li>
					<a href="<?php echo get_permalink( 184 );?>" class="course-inner">
					  <h2>インターン<br class="sp-only">シップ</h2>
					  <div class="course-icon"></div>
					</a>
				  </li>
				  <li>
					<a href="<?php echo get_permalink( 294 );?>" class="course-inner">
					  <h2>新卒採用<br>エンジニア<br class="sp-only">コース</h2>
					  <div class="course-icon"></div>
					</a>
				  </li>
				  <li>
					<a href="<?php echo get_permalink( 297 );?>" class="course-inner">
					  <h2>新卒採用<br>クリエイターコース</h2>
					  <div class="course-icon"></div>
					</a>
				  </li>
				  <li>
					<a href="<?php echo get_permalink( 140 );?>" class="course-inner">
					  <h2>新卒採用<br>ビジネス<br class="sp-only">コース</h2>
					  <div class="course-icon"></div>
					</a>
				  </li>
				  <li>
					<a href="<?php echo get_permalink( 301 );?>" class="course-inner">
					  <h2>キャリア<br class="sp-only">採用</h2>
					  <div class="course-icon"></div>
					</a>
				  </li>
				</ul>
			  </div>
			</section>
			<!--courses end-->
			<aside class="awards">
				<div class="inner1000">
					<h2 class="awards_ttl">第1回 CheerCareerAwardsで<br>Best of CheerCareer（大賞）を<br class="sp-only">受賞しました！</h2>
					<a href="https://cheercareer.jp/lp/ccawards" target="_blank" class="awards_bnr"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/career/bnr_cc.jpg" alt="第1回 CheerCareerAwardsでBest of CheerCareer（大賞）を受賞しました！"></a>
				</div>
			</aside>
			<section class="panels">
			  <div class="panel division">
				<h2>Division</h2>
				<ul>
				  <li><a href="<?php echo get_permalink( 184 );?>">インターンシップ</a></li>
				  <li><a href="<?php echo get_permalink( 294 );?>">新卒採用エンジニアコース</a></li>
				  <li><a href="<?php echo get_permalink( 297 );?>">新卒採用クリエイターコース</a></li>
				  <li><a href="<?php echo get_permalink( 140 );?>">新卒採用ビジネスコース</a></li>
				  <li><a href="<?php echo get_permalink( 301 );?>">キャリア採用</a></li>
				</ul>
			  </div>
			  <!--division end-->
			  <div class="panel work-place">
				<h2>Work Place</h2>
				<ul>
				  <li ><a href="#" class="disabled">オフィス環境</a></li>
				  <li ><a href="#" class="disabled">福利厚生</a></li>
				  <li><a href="<?php echo get_permalink( 89 );?>">社員情報</a></li>
				</ul>
			  </div>
			  <!--Work Place end-->
			  <div class="panel about">
				<h2>About</h2>
				<ul>
				  <li><a href="<?php echo get_permalink( 82 );?>">会社情報</a></li>
				  <li ><a href="<?php echo get_permalink( 385 );?>">EXECUTIVEメッセージ</a></li>
				  <li ><a href="<?php echo get_permalink( 82 );?>#vision">ビジョン</a></li>
				</ul>
			  </div>
			  <!--About end-->
			  <div class="panel study">
				<h2>Study</h2>
				<ul>
				  <li ><a href="#" class="disabled">学習ブログ</a></li>
				  <li ><a href="#" class="disabled">マーケティング用語動画</a></li>
				  <li ><a href="#" class="disabled">社員インタビュー</a></li>
				</ul>
			  </div>
			  <!--Study end-->
			</section>
			
			
			
			
			
			
		<section class="news">
			<div class="inner1000">
				<h2><span>NEWS</span><br>採用ニュース</h2>
				<dl class="news-thumbs">
					<?php	
							$arg = array(
								'post_type' => array('post'),
								'post_status' => array('publish'),
								'category_name' => 'reqruit-news',
								'orderby'          => 'date',
								'order'            => 'DESC',
								'posts_per_page' => 3,
							);
							$query = new WP_Query( $arg );
							if ( $query->have_posts() ) :
								while ( $query->have_posts() ) : $query->the_post(); 
						?>
						<dt><time><?php the_time('Y年m月d日') ?></time></dt>
					<dd><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></dd>
						
					<?php 
								endwhile;
							endif;
					?>
				</dl>
				<!-- <a href="#" class="c-blog_btn">採用ニュース一覧<span class="arrow-double"></span></a> -->
			</div>
		</section>
		<?php
		}		
		?>	
		</div><!--conts end-->

<?php
get_footer();
