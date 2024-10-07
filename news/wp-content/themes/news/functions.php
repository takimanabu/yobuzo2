<?php

function my_enqueue_scripts()
{
	wp_enqueue_style('reset-style', 'https://'.$_SERVER['SERVER_NAME'].'/css/reset.css?20230308');
	wp_enqueue_style('smartbanner-style', 'https://'.$_SERVER['SERVER_NAME'].'/css/smartbanner.min.css');
	wp_enqueue_style('common-style', 'https://'.$_SERVER['SERVER_NAME'].'/css/common.css?20240816');
	wp_enqueue_style('index-style', 'https://'.$_SERVER['SERVER_NAME'].'/css/index.css?20240816');
	wp_enqueue_style('news-style', 'https://'.$_SERVER['SERVER_NAME'].'/css/news.css?20240704');
	wp_enqueue_style('movie-style', 'https://'.$_SERVER['SERVER_NAME'].'/css/lite-yt-embed.css');
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');


// お知らせ一覧_設定
function post_has_archive( $args, $post_type ) {
	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'news-list'; //スラッグ名
	}
	return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );


// prefix属性をhtmlタグに追加
function add_ogp_prefix_to_language_attributes($output) {
	// lang 属性の後に prefix 属性 を追加
	return $output . ' prefix="og: https://ogp.me/ns#"';
}
add_filter('language_attributes', 'add_ogp_prefix_to_language_attributes');


// metaタグの出力
function add_ogp_metas() {
	// 投稿の個別ページや固定ページ、トップページであれば
	if (is_front_page() || is_home() || is_single() || is_page()) {
		global $post;
		// ページタイプ
		$ogp_type = 'website';
		// ページの URL
		$ogp_url = '';
		// ページのタイトル（トップページでは以下で指定すればその値を）
		$ogp_title = '';
		// ページの説明文（トップページでは以下で指定すればその値を）
		$ogp_description = '';
		// デフォルト画像の URL （アイキャッチ画像がない場合に使用）
		$ogp_image = 'https://yobuzo.jp/images/common/ogp.png';
		// サイト名（以下で指定すればその値を、空の場合は  get_bloginfo('name') の値）
		$ogp_site_name = '';
		// サイトの言語（以下で指定すればその値を、空の場合は get_locale() の値）
		$ogp_locale = 'ja_JP';
		// Twitter カードの種類（summary_large_image または summary を指定）
		$twitter_card_type = 'summary_large_image';
		// Twitter の @ユーザー名（指定すれば twitter:site のタグを出力）
		$twitter_site_username = '';
		// Facebook アプリ ID（指定すれば fb:app_id のタグを出力）
		$fb_app_id = '';
		// 出力する meta タグ
		$ogp = '';

		// 個別ページの場合はページタイプを article に
		if (is_singular()) {
			$ogp_type = 'article';
			$ogp_title = wp_strip_all_tags(stripslashes(single_post_title('', false)), true);
			// 抜粋を取得
			$excerpt = wp_strip_all_tags($post->post_excerpt);
			// 抜粋が設定されていなければコンテンツから抽出
			if (empty($excerpt)) {
				// HTML タグを削除
				$excerpt = wp_strip_all_tags($post->post_content);
				// 改行を半角スペースに変換
				$excerpt = str_replace(array("\r\n", "\n", "\r"), ' ', $excerpt);
			}
			// 80 文字に
			$ogp_description = wp_trim_words($excerpt, 80, '...');

			// アイキャッチ画像があれば
			if (has_post_thumbnail()) {
				$thumbnail_src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
				// $thumbnail_src[0] は画像の URL
				if ($thumbnail_src && $thumbnail_src[0]) {
					$ogp_image = $thumbnail_src[0];
				}
			}
		} elseif (is_front_page() || is_home()) { //トップページ
			if (empty($ogp_title)) {
				$ogp_title = get_bloginfo('name');
			}
			if (empty($ogp_description)) {
				$ogp_description = get_bloginfo('description');
			}
		}

		// ページの URL
		$ogp_url =  (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER["REQUEST_URI"];

		// サイト名（初期値が設定されていなければ get_bloginfo('name') の値を設定）
		if (empty($ogp_site_name)) {
			$ogp_site_name = get_bloginfo('name');
		}

		// サイトの言語（初期値が設定されていなければ get_locale() の値を設定）
		if (empty($ogp_locale)) {
			$ogp_locale = get_locale();
		}

		// 出力する meta タグを生成
		$ogp = "\n";
		$ogp .= '<meta property="og:type" content="'.$ogp_type.'">'."\n";
		$ogp .= '<meta property="og:url" content="'.esc_url($ogp_url).'">'."\n";
		$ogp .= '<meta property="og:title" content="'.esc_attr($ogp_title).'">'."\n";
		$ogp .= '<meta property="og:description" content="'.esc_attr($ogp_description).'">'."\n";
		$ogp .= '<meta property="og:image" content="'.esc_url($ogp_image).'">'."\n";
		$ogp .= '<meta property="og:site_name" content="'.esc_attr($ogp_site_name).'">'."\n";
		$ogp .= '<meta property="og:locale" content="'.esc_attr($ogp_locale).'">'."\n";
		$ogp .= '<meta name="twitter:card" content="'.$twitter_card_type.'">'."\n";
		// $twitter_site_username に値が設定されていれば
		if (!empty($twitter_site_username)) {
			$ogp .= '<meta name="twitter:site" content="'.$twitter_site_username.'">'."\n";
		}
		// $fb_app_id に値が設定されていれば
		if (!empty($fb_app_id)) {
			$ogp .= '<meta property="fb:app_id" content="'.$fb_app_id.'">'."\n";
		}
		// meta タグを出力
		echo $ogp;
	}
}
add_action('wp_head', 'add_ogp_metas');


function editor_styles_setup() {
	// ブロックエディタ用スタイルを使えるようにする
	add_theme_support( 'editor-styles' );

	// ブロックエディタ用CSSの読み込み
	add_editor_style( 'editor-style.css' );
}
//アクションフック登録　
//after_setup_themeはfunctions.php が読み込まれた時に実行されます
add_action( 'after_setup_theme', 'editor_styles_setup' );

?>
