<?php

/*===================================
WP更新通知を消す
===================================*/
add_filter('pre_site_transient_update_core', create_function('$a', "return null;"));

// プラグイン更新通知非表示
remove_action('load-update-core.php', 'wp_update_plugins');
add_filter('pre_site_transient_update_plugins', create_function('$a', "return null;"));

// テーマ更新通知非表示
remove_action('load-update-core.php', 'wp_update_themes');
add_filter('pre_site_transient_update_themes', create_function('$a', "return null;"));

// generatorを非表示にする
remove_action('wp_head', 'wp_generator');



/*===================================
アイキャッチ画像
===================================*/
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size(220, 165, true );
//add_image_size( '75-50', 75, 50, true ); // ニュース サムネイル



/*===================================
ページネーション
===================================*/
function pagination($pages = '', $range = 2) {
	$showitems = ($range * 2)+1;

	global $paged;
	if(empty($paged)) $paged = 1;

	if($pages == '')
	{
		global $wp_query;
		$pages = $wp_query->max_num_pages;
		if(!$pages) {
			$pages = 1;
		}
	}

	if(1 != $pages) {
		echo "<div class='pagination'>";
		//echo "<div class='pagination'><span>Page ".$paged." of ".$pages."</span>";
		//if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
		if($paged > 1) echo "<a class='prev' href='".get_pagenum_link($paged - 1)."'>&laquo;</a>";

		for ($i=1; $i <= $pages; $i++) {
			if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
				echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive'>".$i."</a>";
			}
		}
		if ($paged < $pages) echo "<a class='next' href='".get_pagenum_link($paged + 1)."'>&raquo;</a>";
		//if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
		echo "</div>";
	}
}



/*===================================
親ページのスラッグを取得
===================================*/
function is_parent_slug() {
	global $post;
	if ($post->post_parent) {
		$post_data = get_post($post->post_parent);
		return $post_data->post_name;
	}
}



/*===================================
カスタム投稿
===================================*/
/*add_action( 'init', 'create_post_type' );
function create_post_type() {

	// ブログ
	register_post_type( 'blog',
		array(
			'labels' => array(
				'name' => __( 'ブログ' ),
				'singular_name' => __( 'ブログ')
			),
			'public' => true,
			'supports' => array( 'title', 'editor', 'thumbnail' ),
			'menu_position' =>5,
			'has_archive' => true
		)
	);

	// ブログ カテゴリ
	register_taxonomy(
		'blog-category',
		'blog',
		array(
			'hierarchical' => true,
			'update_count_callback' => '_update_post_term_count',
			'label' => 'カテゴリ',
			'singular_label' => 'カテゴリ',
			'public' => true,
			'show_ui' => true
		)
	);


}*/


/*============================================
絶対パスを相対パスに
============================================== */
class relative_URI {
	function relative_URI() {
		add_action('get_header', array(&$this, 'get_header'), 1);
		add_action('wp_footer', array(&$this, 'wp_footer'), 99999);
	}
	function replace_relative_URI($content) {
		$home_url = trailingslashit(get_home_url('/'));
		
		$host = $_SERVER["HTTP_HOST"];
		if($host=="dns1.prontonet.ne.jp") {// dns1の場合
			return str_replace($home_url, '/hp/shimakura/xxx/', $content);

		} else {// その他の環境の場合（本番やバックアップサーバー）
			return str_replace($home_url, '/', $content);
			// ドメインルート以外にWPをインストールした場合は以下のようにする
			// return str_replace($home_url, '/blog/', $content); ←フォルダ名「blog」の場合
		}
	}
	function get_header(){
		ob_start(array(&$this, 'replace_relative_URI'));
	}
	function wp_footer(){
		ob_end_flush();
	}
}
new relative_URI();





/*===================================
管理バー 項目非表示
===================================*/

//全員
//function remove_bar_menus( $wp_admin_bar ) {
	//$wp_admin_bar->remove_menu( 'wp-logo' );      // ロゴ
	//$wp_admin_bar->remove_menu( 'site-name' );    // サイト名
	//$wp_admin_bar->remove_menu( 'view-site' );    // サイト名 -> サイトを表示
	//$wp_admin_bar->remove_menu( 'dashboard' );    // サイト名 -> ダッシュボード (公開側)
	//$wp_admin_bar->remove_menu( 'themes' );       // サイト名 -> テーマ (公開側)
	//$wp_admin_bar->remove_menu( 'customize' );    // サイト名 -> カスタマイズ (公開側)
	//$wp_admin_bar->remove_menu( 'comments' );     // コメント
	//$wp_admin_bar->remove_menu( 'updates' );      // 更新
	//$wp_admin_bar->remove_menu( 'view' );         // 投稿を表示
	//$wp_admin_bar->remove_menu( 'new-content' );  // 新規
	//$wp_admin_bar->remove_menu( 'new-post' );     // 新規 -> 投稿
	//$wp_admin_bar->remove_menu( 'new-media' );    // 新規 -> メディア
	//$wp_admin_bar->remove_menu( 'new-link' );     // 新規 -> リンク
	//$wp_admin_bar->remove_menu( 'new-page' );     // 新規 -> 固定ページ
	//$wp_admin_bar->remove_menu( 'new-user' );     // 新規 -> ユーザー
	//$wp_admin_bar->remove_menu( 'my-account' );   // マイアカウント
	//$wp_admin_bar->remove_menu( 'user-info' );    // マイアカウント -> プロフィール
	//$wp_admin_bar->remove_menu( 'edit-profile' ); // マイアカウント -> プロフィール編集
	//$wp_admin_bar->remove_menu( 'logout' );       // マイアカウント -> ログアウト
	//$wp_admin_bar->remove_menu( 'search' );       // 検索 (公開側)
//}
//add_action('admin_bar_menu', 'remove_bar_menus', 201);

function remove_bar_menus_user( $wp_admin_bar ) {
	$wp_admin_bar->remove_menu( 'comments' );     // コメント
	$wp_admin_bar->remove_menu( 'search' );       // 検索 (公開側)
}

//管理者以外

add_action('after_setup_theme', 'remove_admin_bar');
 
function remove_admin_bar() {
if (!current_user_can('administrator') && !is_admin()) {
  show_admin_bar(false);
}
}

?>