<?php
/**
* FREEDiVE functions and definitions
*
* @link https://developer.wordpress.org/themes/basics/theme-functions/
*
* @package WordPress
* @subpackage REEDiVE functions
* @since 1.0.0
*/

/**
* Table of Contents:
* Theme Support
* Required Files
* Register Styles
* Register Scripts
* Register Menus
* Custom Logo
* WP Body Open
* Register Sidebars
* Enqueue Block Editor Assets
* Enqueue Classic Editor Styles
* Block Editor Settings
*/

/**
* Sets up theme defaults and registers support for various WordPress features.
*
* Note that this function is hooked into the after_setup_theme hook, which
* runs before the init hook. The init hook is too late for some features, such
* as indicating support for post thumbnails.
*/

function my_freedive_style() {
  wp_enqueue_style( 'css-reset', get_template_directory_uri() . '/assets/css/reset.css');
  wp_enqueue_style( 'css-common', get_template_directory_uri() . '/assets/css/common.css');
  wp_enqueue_style( 'css-parts', get_template_directory_uri() . '/assets/css/parts.css');

  if (is_home() ) {
    wp_enqueue_style( 'css-style', get_template_directory_uri() . '/assets/css/style.css');
    //wp_enqueue_style( 'preload', get_template_directory_uri() . '/assets/css/style.min.css');
  }
  // 		wp_enqueue_script('pagetop', get_template_directory_uri().'/js/pagetop.js');
  if (is_page( 'service-ad' )|| is_page( 'service-website' )|| is_page( 'service-marketing' )|| is_page( 'service-recruiting' )|| is_page( 'service-movie' )|| is_page( 'service-marketing-manga' ) ) {
    wp_enqueue_style( 'css-style', get_template_directory_uri() . '/assets/css/service/style.css');
  }
  if (is_page( 'service-ad' ) ) {
    wp_enqueue_style( 'css-swiper', get_template_directory_uri() . '/assets/css/swiper.min.css');
  }
  if (is_page( 'service-recruiting' ) ) {
    wp_enqueue_style( 'css-recruiting', get_template_directory_uri() . '/assets/css/service/recruiting.css');
  }
  if (is_page( 'service-movie' ) ) {
    wp_enqueue_style( 'css-movie', get_template_directory_uri() . '/assets/css/service/movie.css');
  }
  if (is_page( 'service-marketing-manga' ) ) {
    wp_enqueue_style( 'css-manga', get_template_directory_uri() . '/assets/css/service/manga.css');
  }
  if ((is_page( 'blog' )||is_page('movie')||in_category('business-blog')||in_category('business-movie')||is_page( 'case' )||in_category('business-case')||is_page('ppage')|| is_search()|| in_category('executive-message')||is_page( 'executive-message')) && !is_front_page() ) {
    wp_enqueue_style( 'css-style', get_template_directory_uri() . '/assets/css/blog/style.css');
    wp_enqueue_style( 'css-screen', get_template_directory_uri() . '/assets/css/blog/screen.min.css');
  }
  if (in_category('business-blog')) {
    wp_enqueue_style( 'css-illust', get_template_directory_uri() . '/assets/css/blog/illust.css');
  }
  if (is_page( 'case-study' )||in_category('case-study')) {
    wp_enqueue_style( 'css-style', get_template_directory_uri() . '/assets/css/case-study/style.css');
		wp_enqueue_style( 'css-screen', get_template_directory_uri() . '/assets/css/blog/screen.min.css');
  }
  if (!is_page( 'case-study' ) && in_category('case-study')) {
	 wp_enqueue_style( 'css-illust', get_template_directory_uri() . '/assets/css/case-study/illust.css');
  }
  if (is_page( 'feature' )) {
    wp_enqueue_style( 'css-style', get_template_directory_uri() . '/assets/css/feature/style.css');
  }
  if (is_page( 'company' )) {
    wp_enqueue_style( 'css-style', get_template_directory_uri() . '/assets/css/company/style.css');
  }
  if (is_page( 'e-book' )) {
    wp_enqueue_style( 'css-style', get_template_directory_uri() . '/assets/css/e-book.css');
  }
  if (is_page( 'company-document' )) {
    wp_enqueue_style( 'css-style', get_template_directory_uri() . '/assets/css/company/document.css');
  }
  if(is_page( 'career' )|| is_child("career")){
    wp_enqueue_style( 'css-style', get_template_directory_uri() . '/assets/css/career/style.css');
  }
  if (is_page( 'members' )) {
    wp_enqueue_style( 'css-style', get_template_directory_uri() . '/assets/css/members/style.css');
  }
  if ( is_404() ) {
    wp_enqueue_style( 'css-style', get_template_directory_uri() . '/assets/css/404/style.css');
  }

  // 	//js/main.jsをfooter直下で読み込み
  // 		wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array( 'jquery' ), '', true);
  // 	}
  // jQueryの読み込み
  wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', "", false, false );
  wp_enqueue_script( 'script-function', get_template_directory_uri() . '/assets/js/function.js',array( 'jquery'), false, true);
  wp_enqueue_script( 'script-index', get_template_directory_uri() . '/assets/js/index.js',array( 'jquery'), false, true);
  wp_enqueue_script( 'script-parallax', get_template_directory_uri() . '/assets/js/parallax.min.js',array( 'jquery'), false, true);
  wp_enqueue_script( 'script-table', get_template_directory_uri() . '/assets/js/table.min.js',array( 'jquery'), false, true);

}

add_action( 'wp_enqueue_scripts', 'my_freedive_style' );



add_theme_support('post-thumbnails');

function my_class_names($classes) {
  //$classes = '';
  if ( is_home() || is_front_page() ){
    $classes[] = 'wrap';
  }
  elseif(is_page( 'blog' )|| is_page( 'case' )|| is_page('ppage')|| is_search()||is_page( 'business-blog' )||is_page( 'business-movie' )||is_page( 'business-case' )){
    $classes[] = 'wrap b-blog blog';
  }
	elseif( is_page( 'case-study' )||in_category('case-study')){
    	$classes[] = 'wrap c-study';
    }
  elseif(is_page( 'movie' )) {
    $classes[] = 'wrap b-movie blog';
  }
  elseif ( in_category('business-blog')||in_category('business-case')){
    $classes[] = 'wrap b-blog articles';
  }
  elseif ( in_category('business-movie')){
    $classes[] = 'wrap b-movie articles';
  }
  elseif ( in_category('executive-message')|| is_search()||is_page( 'executive-message' )){
    $classes[] = 'wrap executive-message blog';
  }
  elseif (is_page( 'service-ad' )|| is_page( 'service-website' )|| is_page( 'service-marketing' ) ) {
    $classes[] = 'wrap service';
    if(is_page( 'service-ad' )){
      $classes[] = 'service-ad';
    }
    if(is_page( 'service-website' )){
      $classes[] = 'service-website website';
    }
    if(is_page( 'service-marketing' )){
      $classes[] = 'service-marketing';
    }
  }
  if ( is_home() || is_front_page() ){
    $classes[] = 'wrap';
  }
  elseif (is_page( 'service-ad' )|| is_page( 'service-website' )|| is_page( 'service-marketing' ) ) {
    $classes[] = 'wrap service';
    if(is_page( 'service-ad' )){
      $classes[] = 'service-ad';
    }
    if(is_page( 'service-website' )){
      $classes[] = 'service-website website';
    }
    if(is_page( 'service-marketing' )){
      $classes[] = 'service-marketing';
    }
  }

  elseif(is_page( 'feature' )){
    $classes[] = 'wrap feature';
  }
  elseif(is_page( 'compnay' )){
    $classes[] = 'wrap compnay';
  }
  elseif(is_page( 'career' )|| is_child("career")){
    $classes[] = 'wrap career';
  }
  elseif(is_page( 'members' )){
    $classes[] = 'wrap members';
  }
  return $classes;
}
add_filter('body_class','my_class_names');

//サムネイル画像サイズ指定リセット
add_filter( 'post_thumbnail_html', 'custom_attribute' );
function custom_attribute( $html ){
  // width height を削除する
  $html = preg_replace('/(width|height)="\d*"\s/', '', $html);
  return $html;
}
//抜粋を固定ページに追加
add_post_type_support( 'page', 'excerpt' );

//svg
function custom_mime_types( $mimes ) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'custom_mime_types' );


// function.phpに追記する //
function getPostViews($postID){
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if($count==''){
    delete_post_meta($postID, $count_key);
    add_post_meta($postID, $count_key, '0');
    return "0 View";
  }
  return $count.' Views';
}
function setPostViews($postID) {
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if($count==''){
    $count = 0;
    delete_post_meta($postID, $count_key);
    add_post_meta($postID, $count_key, '0');
  }else{
    $count++;
    update_post_meta($postID, $count_key, $count);
  }
}
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);


//本文名前抜粋
function getNameFormArticle($text){
  //区切り文字（開始）
  $delimiter_start = "[[name]]";
  //区切り文字（終了）
  $delimiter_end = "[[/name]]";
  //開始位置
  $start_position = strpos($text, $delimiter_start) + strlen($delimiter_start);
  //切り出す部分の長さ
  $length = strpos($text, $delimiter_end) - $start_position;
  //切り出し
  return substr($text, $start_position, $length );

}
function deleteNameFormArticle($text){
  //区切り文字（開始）
  $delimiter_start = "[[name]]";
  //区切り文字（終了）
  $delimiter_end = "[[/name]]";
  //開始位置
  $start_position = strpos($text, $delimiter_start) ;
  //切り出す部分の長さ+
  $length = (strpos($text, $delimiter_end)+strlen($delimiter_end)) -  $start_position;
  //切り出し
  return substr_replace($text,'', $start_position, $length );

}

//親ページ判定
function is_child( $slug = "" ) {
  if(is_singular())://投稿ページのとき（固定ページ含）
    global $post;
    if ( $post->post_parent ) {//現在のページに親がいる場合
      $post_data = get_post($post->post_parent);//親ページの取得
      if($slug != "") {//$slugが空じゃないとき
        if(is_array($slug)) {//$slugが配列のとき
          for($i = 0 ; $i <= count($slug); $i++) {
            if($slug[$i] == $post_data->post_name || $slug[$i] == $post_data->ID || $slug[$i] == $post_data->post_title) {//$slugの中のどれかが親ページのスラッグ、ID、投稿タイトルと同じのとき
              return true;
            }
          }
        } elseif($slug == $post_data->post_name || $slug == $post_data->ID || $slug == $post_data->post_title) {//$slugが配列ではなく、$slugが親ページのスラッグ、ID、投稿タイトルと同じのとき
          return true;
        } else {
          return false;
        }
      } else {//親ページは存在するけど$slugが空のとき
        return true;
      }
    }else {//親ページがいない
      return false;
    }
  endif;
}

//採用コースから部署を抽出
function translateDepartment($course){
  if($course == "business-course"){
    $departmemt = "affiliatepro";
  }elseif($course == "engineer-course"){
    $departmemt = "affiliatepro";
  }elseif($course == "creator-course"){
    $departmemt = "affiliatepro";
  }
  return $departmemt;
}

add_filter('template_include','custom_search_template');
function custom_search_template($template){
  // 検索結果の時
  if ( is_search() ) {
    // 表示する投稿タイプを取得
    $post_types = get_query_var('post_type');
    // search-{$post_type}.php の読み込みルールを追加
    foreach ( (array) $post_types as $post_type )
    $templates[] = "search-{$post_type}.php";
    $templates[] = 'search.php';
    $template = get_query_template('search',$templates);
  }
  return $template;
}
//サムネイル読み込み時のsecretを表示しない設定
add_filter('wp_calculate_image_srcset_meta', '__return_null');

// function my_pre_get_posts($query) {
//   if ( !is_admin() && $query->is_main_query() && $query->is_search() ) {
//     $query->set( 'post_type', array('post') );
//   }
// }
// add_action( 'pre_get_posts','my_pre_get_posts' );

// function my_posts_search($search) {
//   if(is_search()) {
//     $search .= " AND (post_type = 'past' OR post_type='page' OR post_type='blog' OR post_type='case')";
//   }
//   return $search;
// }
// add_filter('posts_search', 'my_posts_search');
//
function delete_domain_from_url( $url ) {
  if ( preg_match( '/^http(s)?:\/\/[^\/\s]+(.*)$/', $url, $match ) ) {
    $url = $match[2];
  }
  return $url;
}

/**
* Undocumented function
*
* @param string $url
* @param string $alt
* @param string $inline
* @param string $outline
* @param string $class
* @param string $script
* @param string $option
* @param boolean $blank
* @return void
*/
function share_sns($url, $inline, $class, $option ='', $blank = true )
{

  $blank = $blank ? "target=_blank" : "";
  $link .= "<li><a href='{$url}' class='{$class}' rel=nofollow $blank $option>";
  $link .= $inline ? $inline : "";
  $link .= "</a></li>";
  return $link;
}
/**
* Facebook
*
* @return string
*/
function facebook($encode_url,$encode_title)
{

  $url = "http://www.facebook.com/share.php?u={$encode_url}&t={$encode_title}";
  $inline = '<i class="fab fa-facebook-square"></i><span class="pc-only-inline">Facebook</span>';//Text::locale("Share on Facebook");
  $class= 'fb-share-btn';

  return share_sns($url, $inline ,$class);
}

/**
* Hatena bookmark button
*
* @return string
*/
function hatenaButton($encode_url,$encode_title){

  $url = "https://b.hatena.ne.jp/entry/{$encode_url}";
  $inline =' B!<span class="pc-only-inline">はてブ</span>';//Text::locale("Share on Facebook");
  $class= 'hatena-share-btn';

  return share_sns($url , $inline , $class);
}
/**
* Twitter button
*
* @return string
*/
function twitter($account,$encode_url,$encode_title){

  $url = "https://twitter.com/intent/tweet?text={$encode_title} {$encode_url}";
  $inline = '<i class="fab fa-twitter"></i><span class="pc-only-inline">Twitter</span>';//Text::locale("Share on Facebook");
  $class= 'twitter-share-btn';
  $option = " data-via='{$account}' data-lang='ja' data-show-count='false' ";

  return share_sns($url , $inline , $class,$option);
}

/**
* 目次出力　関数
*
* @param [type] $content
* @return void
*/
function add_index($content){
  if (is_single()) {
    $pattern = '/<h[1-4]>(.+?)<\/h[1-4]>/s';
    preg_match_all($pattern, $content, $elements, PREG_SET_ORDER);

    if (count($elements) >= 1) {
      $toc = '';
      $i = 0;
      $currentlevel = 0;
      $id = 'chapter-';

      foreach ($elements as $element) {
        //各h2~h4のタグ2アンカーを設置する
        $id .= $i + 1;
        $replace_title = preg_replace('/<(h[1-4])>(.+?)<\/(h[1-4])>/s', '<$1 id="' . $id . '">$2</$3>', $element[0]);
        $content = str_replace($element[0], $replace_title, $content);

        //階層の深さを決める
        if (strpos($element[0], '<h2') !== false) {
          $level = 1;
        } elseif (strpos($element[0], '<h3') !== false) {
          $level = 2;
        } elseif (strpos($element[0], '<h4') !== false) {
          $level = 3;
        }
        //
        while ($currentlevel < $level) {
          //一番最初のul
          if ($currentlevel === 0) {
            $toc .= '<ul class="ez-toc-list">';
          } else {
            $toc .= '<ul >';
          }
          $currentlevel++;
        }
        //とじタグ
        while ($currentlevel > $level) {
          $toc .= '</li></ul>';
          $currentlevel--;
        }

        // 目次の項目で使用する要素を指定
        $toc .= '<li class="index__item"><a href="#' . $id . '" class="index__link">' .strip_tags($element[1]) . '</a>';
        $i++;
        //id 再定義
        $id = 'chapter-';
      } // foreach

      // 目次の最後の項目をどの要素から作成したかによりタグの閉じ方を変更
      while ($currentlevel > 0) {
        $toc .= '</li></ul>';
        $currentlevel--;
      }

      $index = '<div class="counter-hierarchy counter-decimal ez-toc-grey" id="ez-toc-container">'
      .'<div class="class="ez-toc-title-container"><p class="ez-toc-title">目次</p>'
      .'<span class="ez-toc-title-toggle"><a class="ez-toc-pull-right ez-toc-btn ez-toc-btn-xs ez-toc-btn-default ez-toc-toggle"><i class="fas fa-bars"></i></a></span></div >'
      .'<nav>'. $toc . '</nav>'
      . '</div>';
      $h2 = '/<h2.*?>/i';

      if (preg_match($h2, $content, $h2s)) {
        $content = preg_replace($h2, $index. $h2s[0], $content, 1);
      }
    }
  }
  return $content;
}
add_filter('the_content', 'add_index');

/* 絵文字スクリプトの削除 */
function disable_emoji() {
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
}
add_action( 'init', 'disable_emoji' );

//バージョン表示
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');

// var_dump($results);
function initializeAnalytics()
{
  require_once __DIR__ . '/vendor/autoload.php';

  // Creates and returns the Analytics Reporting service object.

  // Use the developers console and download your service account
  // credentials in JSON format. Place them in this directory or
  // change the key file location if necessary.
  $KEY_FILE_LOCATION = __DIR__ . '/service-account-credentials.json';

  // Create and configure a new client object.
  $client = new Google_Client();
  $client->setApplicationName("Hello Analytics Reporting");
  // echo $KEY_FILE_LOCATION;

  $client->setAuthConfigFile($KEY_FILE_LOCATION);
  $client->setScopes(['https://www.googleapis.com/auth/analytics.readonly']);
  $analytics = new Google_Service_Analytics($client);

  return $analytics;
}

function getFirstProfileId($analytics) {
  // Get the user's first view (profile) ID.

  // Get the list of accounts for the authorized user.
  $accounts = $analytics->management_accounts->listManagementAccounts();

  if (count($accounts->getItems()) > 0) {
    $items = $accounts->getItems();
    $firstAccountId = $items[0]->getId();

    // Get the list of properties for the authorized user.
    $properties = $analytics->management_webproperties
    ->listManagementWebproperties($firstAccountId);

    if (count($properties->getItems()) > 0) {
      $items = $properties->getItems();
      $firstPropertyId = $items[0]->getId();

      // Get the list of views (profiles) for the authorized user.
      $profiles = $analytics->management_profiles
      ->listManagementProfiles($firstAccountId, $firstPropertyId);

      if (count($profiles->getItems()) > 0) {
        $items = $profiles->getItems();

        // Return the first view (profile) ID.
        return $items[0]->getId();

      } else {
        throw new Exception('No views (profiles) found for this user.');
      }
    } else {
      throw new Exception('No properties found for this user.');
    }
  } else {
    throw new Exception('No accounts found for this user.');
  }
}

function getResults($analytics, $profileId) {
  // Calls the Core Reporting API and queries for the number of sessions
  // for the last seven days.
  //  return $analytics->data_ga->get(
  //      'ga:' . $profileId,
  //      '7daysAgo',
  //      'today',
  //      'ga:sessions');
  $optParams = array(
    'dimensions'=> 'ga:pagePath',
    'sort' => '-ga:pageviews',
    //     'max-results' => 10,
  );
  $ga_data = $analytics->data_ga->get(
    'ga:' . $profileId,
    '30daysAgo',
    'yesterday',
    'ga:pageviews',
    $optParams
  );

  // GAのデータを整形
  if (count($ga_data->getRows()) == 0) {
    return false;
  }

  $results = [];
  foreach ($ga_data->getRows() as $row) {
    if(strpos($row[0],'/business-blog') === 0){
      if(substr($row[0], -1)== '/' && url_to_postid($row[0]) !== 0){
        $results[] = $row;
      }

    }
  }
  return $results;
}

function getResults_executive($analytics, $profileId) {
  $optParams = array(
    'dimensions'=> 'ga:pagePath',
    'sort' => '-ga:pageviews',
  );
  $ga_data = $analytics->data_ga->get(
    'ga:' . $profileId,
    '30daysAgo',
    'yesterday',
    'ga:pageviews',
    $optParams
  );

  // GAのデータを整形
  if (count($ga_data->getRows()) == 0) {
    return false;
  }

  $results = [];
  foreach ($ga_data->getRows() as $row) {
    if(strpos($row[0],'/executive-message/executive') !== false){
      $results[] = $row;
    }
  }
  return $results;
}
/**
* パラメータチェック
* */
function param_check($url){
  // 	parse_str($url ,$str);
  parse_str(parse_url($url, PHP_URL_QUERY), $query);

  if (isset($query)) {
    // 		$category = $query['type']; //例:test1

    $param_url = (array_key_exists ('type',$query))? $url : $url."?type=popular" ;
  }
  return  $param_url;
}
/*
* ページネーション
* */
function pagination($pages, $range = 2, $show_only = false) {
  global $paged;
  $paged;
  $pages = (int)$pages;
  //表示テキスト
  $text_first   = "<<";
  $text_before  = "<";
  $text_next    = ">";
  $text_last    = ">>";

  if ( $show_only && $pages === 1 ) {
    // １ページのみで表示設定が true の時
    echo '<ul class="pagenation"><li><span aria-current="page" class="page-numbers current">1</span></li></ul>';
    return;
  }

  if ( $pages === 1 ) return;
  if ( 1 !== $pages ) {
    //２ページ以上の時
    echo '<ul class="pagenation">';
    if ( $paged > $range + 1 ) {
      // 「最初へ」 の表示
      echo '<li><a href="', param_check(get_pagenum_link(1) ),'" class="first">', $text_first ,'</a></li>';
    }
    if ( $paged > 1 ) {
      // 「前へ」 の表示
      echo '<li><a href="', param_check(get_pagenum_link( $paged - 1 )) ,'" class="prev">', $text_before ,'</a></li>';
    }
    for ( $i = 1; $i <= $pages; $i++ ) {

      if ( $i <= $paged + $range && $i >= $paged - $range ) {
        // $paged +- $range 以内であればページ番号を出力
        if ( $paged === $i ) {
          echo '<li><span aria-current="page" class="page-numbers current">', $i ,'</span></li>';
        } else {


          echo '<li><a href="'. param_check(get_pagenum_link($i )).'" class="page-numbers">', $i ,'</a></li>';
        }
      }

    }
    if ( $paged < $pages ) {
      // 「次へ」 の表示
      echo '<li><a href="', param_check(get_pagenum_link( $paged + 1 )) ,'" class="next">', $text_next ,'</a></li>';
    }
    if ( $paged + $range < $pages ) {
      // 「最後へ」 の表示
      echo '<li><a href="', param_check(get_pagenum_link( $pages )) ,'" class="last">', $text_last ,'</a></li>';
    }
    echo '</ul>';
  }
}
