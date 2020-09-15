<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

get_header();
?>
			<section class="first-view parallax-window toggle-bg" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/assets/img/bg_sea_pc.jpg">
			<div class="waving">
				<div class="main-logo">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/main-logo.svg" alt="FREEDiVE Inc.">
				</div>
				<div class="wave-bg"></div>
				<div class="wave wave-one"></div>
				<div class="wave wave-two"></div>
				<div class="wave wave-three"></div>
			</div><!-- /.waving -->
					<p class="mask-txt">
					<svg width="500" height="40">
						<defs><lineargradient id="b"><stop offset="0" stop-color="#f9c2eb"/><stop offset="1" stop-color="#a8c2ee"/></lineargradient>
						<mask id="mask2"><rect width="100%" height="100%" fill="#fff" /><text x="50%" y="40">FEATURE</text></mask></defs>
						<rect class="cls-2" width="100%" height="40" mask="url(#mask2)"/></svg>
				</p>
				<div class="fv-txt"><h1>FREEDiVEの特徴</h1>
				<p>弊社は、クライアントファーストを至上命題とするマーケティング企業です。<br>徹底した仕組み化を実践している運用戦略設計と、それを実践する「人」の育成に重きをおいて<br class="pc-only">広告主様ひいては社会に対しての課題解決を目指します。</p></div>
				
					<p class="mask-txt">
					<svg width="500" height="40">
						<defs><lineargradient id="a"><stop offset="0" stop-color="#eceda2"/><stop offset="1" stop-color="#baecca"/></lineargradient>
						<mask id="mask1"><rect width="100%" height="100%" fill="#fff" /><text x="50%" y="40">PHILOSOPHY</text></mask></defs>
						<rect class="cls-1" width="100%" height="40" mask="url(#mask1)"/></svg>
				</p>
				<div class="fv-txt"><h2>出会った全ての人がなりたい自分になれる社会を作る</h2>
					<p>メンバーもクライアントもユーザーも関わる全ての人が「なりたい自分」になれるような事業を増やし、<br class="pc-only">社会課題に価値を提供し続けていきます。</p></div>
				
				<a href="<?php echo get_permalink( 80 );?>" class="ft-btn">特徴をもっと見る<span class="arrow-double"></span></a>
				
			</section><!--/.first-view-->
		<div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-logo.svg">
		<section class="service">
			<div class="inner1200">
				<h2 class="ttl_row">SERVICE<br><span>サービス紹介</span></h2>
				<ul class="service-list scroll-fade-row">
					<?php
						$page_ID = get_page_by_path('service'); // ID取得用の固定ページオブジェクトの取得
						// $page_list = get_posts( 'numberposts=-1&order=ASC&post_type=page' )
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

		
		<!--<section class="case-study"></section>-->
		
		<section class="b-blog">
			<div class="inner1200">
				<div class="ttl_col scroll-fade-row">
					<h2>BUSINESS BLOG<br><span>ビジネスブログ</span></h2>
					<p>マーケティングという言葉は現代社会で複雑化しています。<br>
デジタルが発達してきて、デジタルマーケティングが中心かと思えば、展示会やカンファレンスといったイベントマーケティング（フィールドマーケティング）があったり、また直接クライアントに訴求するダイレクトマーケテイングがあったりと様々な使われ方をします。<br>
マーケティングに関することをわかりやすく解説しています。</p>
					
				</div><!--/.ttl_col-->

				<div class="scroll-fade-row">
				<?php
					  $arg = array(
								'posts_per_page' => 3,
								'category_name' => 'business-blog' // 表示したいカテゴリーのスラッグを指定
						  
							);
					$posts = get_posts( $arg );
					if( $posts ):
					// var_dump($posts);
					foreach ( $posts as $post ) : setup_postdata( $post );
					?>
					
					<a href="<?php echo get_permalink(); ?>"><article class="b-article">
					<figure><?php the_post_thumbnail( 'medium' ); ?></figure>
					<div class="b-txt">
						<time><?php the_time('Y年m月d日') ?></time><!--<span class="b-cat">カテゴリ</span>-->
							<h3><?php the_title(); ?></h3>
							<p><?php echo the_excerpt();?></p>
						</div>
					</article></a>
					
					<?php 
					endforeach;
					endif;
					wp_reset_postdata();
					?>

				<a href="<?php echo get_permalink( 53 );?>" class="b-blog_btn">ビジネスブログをもっと見る<span class="arrow-double"></span></a>
				
			</div><!--/.inner1200-->
		</div>
		</section><!--/.b-blog-->
		</div>
		<section class="members">
			<div class="inner1200">
				<h2>Members</h2>
				<div class="mem-wrap">
					<figure class="mem-img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/members.svg" alt="img">
						<figcaption class="team_ex">EXECUTIVE</figcaption>
						<figcaption class="team_afp">AffiliatePro事業部</figcaption>
						<figcaption class="team_cd">Creative & <br>Developments事業部</figcaption>
						<figcaption class="team_hr">Human Resources事業部</figcaption>
					</figure>
						<div class="mem-tabs_wrap">
							<div class="mem-tabs">
								<input id="tab_ex" type="radio" name="tab_item" checked><label class="tab_item" for="tab_ex"><span>EX</span></label><input id="tab_afp" type="radio" name="tab_item"><label class="tab_item" for="tab_afp"><span>AFP</span></label><input id="tab_cd" type="radio" name="tab_item"><label class="tab_item" for="tab_cd"><span>CD</span></label><input id="tab_hr" type="radio" name="tab_item"><label class="tab_item" for="tab_hr"><span>HR</span></label>
								<div class="tab_content" id="ex_content">
									<div class="tab_content_description">
										<h3 class="dept-name">EXECUTIVE</h3>
										<p class="dept-catch">取締役一覧</p>
									  <!--<p class="dept-desc"></p>-->
										<div class="clearfix">
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
												<figure class="prof-items">
													<?php echo get_the_post_thumbnail( $post->ID, 'thumbnail', array( 'class' => 'prof-thumb' ) ); ?>
													<figcaption class="prof-name"><?php the_title(); ?></figcaption>
												</figure>
												<?php 
												endforeach;
												endif;
												wp_reset_postdata();
											?>
										</div>
									</div>
								</div>
								<div class="tab_content" id="afp_content">
									<div class="tab_content_description">
										<h3 class="dept-name">AffiliatePro</h3>
										<p class="dept-catch">総合提案を扱うマーケティング事業部</p>
									  <p class="dept-desc">クライアント様のコンサルティングから広告の運用までを行います。<br>徹底したPDCA管理とツールを用いたリソース削減で、担当に依存しないwebマーケティングを目指します。</p>
										<div class="clearfix">
											<?php
												$arg = array(
															'category_name' => 'affiliatepro',
															'posts_per_page' => 10,
															'orderby' => 'date',
															'order' => 'ASC'
														);
												$posts = get_posts( $arg );
												if( $posts ):
												foreach ( $posts as $post ) : setup_postdata( $post );
												?>
												<figure class="prof-items">
													<?php echo get_the_post_thumbnail( $post->ID, 'thumbnail', array( 'class' => 'prof-thumb' ) ); ?>
													<figcaption class="prof-name"><?php the_title(); ?></figcaption>
												</figure>
												<?php 
												endforeach;
												endif;
												wp_reset_postdata();
											?>
									
										</div>
									</div>
								</div>
								<div class="tab_content" id="cd_content">
									<div class="tab_content_description">
										<h3 class="dept-name">CREATIVE and DEVELOPMENTS事業部</h3>
										<p class="dept-catch">FREEDiVE専属の制作・開発部署</p>
									  <p class="dept-desc">デザイン・コーディング・記事制作・システム開発を担う部署。<br>FREEDiVEの公式サイトもC&amp;D部がデザイン・コーディングしています。</p>
										<div class="clearfix">
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
												<figure class="prof-items">
													<?php echo get_the_post_thumbnail( $post->ID, 'thumbnail', array( 'class' => 'prof-thumb' ) ); ?>
													<figcaption class="prof-name"><?php the_title(); ?></figcaption>
												</figure>
												<?php 
												endforeach;
												endif;
												wp_reset_postdata();
											?>
											
											
										</div>
									</div>
								</div>
								<div class="tab_content" id="hr_content">
									<div class="tab_content_description">
										<h3 class="dept-name">HUMAN RESOURCES事業部</h3>
										<p class="dept-catch">人事・経理・総務の総合管理部署</p>
									  <p class="dept-desc">会社と社員のサポート全般を行うチーム。<br>健全な経営と働きやすい社内体制の両方を支えます。</p>
										<div class="clearfix">
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
												<figure class="prof-items">
													<?php echo get_the_post_thumbnail( $post->ID, 'thumbnail', array( 'class' => 'prof-thumb' ) ); ?>
													<figcaption class="prof-name"><?php the_title(); ?></figcaption>
												</figure>
												<?php 
												endforeach;
												endif;
												wp_reset_postdata();
											?>
											
										</div>
									</div>
								</div>
								
							</div><!--/.mem_tab-->
						</div><!--/.mem_tab_wrap-->
				</div>
			</div><!--/.inner1200-->
		</section><!--/.members-->
		<!--
		<section class="c-blog">
			<div class="inner1200">
				<div class="ttl_col scroll-fade-row">
					<h2>CAREER BLOG<br><span>採用ブログ</span></h2>
					<p>株式会社FREEDiVEの採用に関してのブログです。<br>FREEDIVEの日常や、業務内容、社員へのインタビューなど、入社/転職を考えている皆様に向けてFREEDiVEの文化を知ってもらうためのブログ記事です。</p>
				</div>
				<div class="c-blog-wrap scroll-fade-row">
				<?php
					  $arg = array(
								'category_name' => 'reqruit-blog' // 表示したいカテゴリーのスラッグを指定
							);
					$posts = get_posts( $arg );
					if( $posts ):
					// var_dump($posts);
					foreach ( $posts as $post ) : setup_postdata( $post );
					?>
					
					<a href="<?php echo get_permalink(); ?>"><article>
					<figure></figure>
					<div class="c-txt">
						<time><?php the_time('Y年m月d日') ?></time><span class="c-cat">カテゴリ</span>
							<h3><?php the_title(); ?></h3>
							<p><?php echo the_excerpt();?></p>
						</div>
					</article></a>
					
					<?php 
					endforeach;
					endif;
					wp_reset_postdata();
					?>

			
				</div>
				<a href="" class="c-blog_btn">採用ブログをもっと見る<span class="arrow-double"></span></a>
				
			</div>
		</section>
	-->
		<!--<section class="e-book"><div class="inner1200"></div></section>-->

<?php get_footer(); ?>