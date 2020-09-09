<?php
/*

Template Name: 企業情報
*/

get_header(); ?>

		
		<section class="fv">
				<h1><span>Company</span><br>企業情報</h1>
		</section><!--fv end-->
		
		<div class="breadcrumbs">
			<ul itemscope itemtype="http://schema.org/BreadcrumbList">
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="../index.html"><span itemprop="name">ホーム</span></a><meta itemprop="position" content="1" /></li>
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="#"><span itemprop="name">企業情報</span></a><meta itemprop="position" content="2" /></li>
			</ul>
		</div>
		
		
		<div class="conts">
		<?php
		$page_data = get_page_by_path('company'); $page = get_post($page_data);
		$content = $page->post_content;
		// 本文を表示する
		echo $content;
		?>
		</div><!--conts end-->
		
	<?php
get_footer();
