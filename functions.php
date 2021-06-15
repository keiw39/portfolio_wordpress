<?php
//テーマのセットアップ

// HTML5でマークアップさせる
add_theme_support('html5', [
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
]);


// タイトルタグの出力設定
function insert_title(){
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'insert_title');


// タイトルタグの表示設定
function correct_title($title){
    if(is_search()){
        $title['title'] = '検索結果：'.get_search_query();
    }elseif(is_404()){
        $title['title'] = 'お探しのページは見つかりません';
    }
    return $title;
}
add_filter('document_title_parts', 'correct_title');


// タイトルタグの区切り文字の設定
function change_title_separator($sep){
    $sep = '|';
    return $sep;
}
add_filter('document_title_separator', 'change_title_separator');


// 固定ページに抜粋欄追加(ディスクリプションタグ出力のため)
add_post_type_support( 'page', 'excerpt' );


// Feedのリンクを自動で生成する
add_theme_support('automatic-feed-links');


//アイキャッチ画像を使用する設定
add_theme_support('post-thumbnails');


// WordPressのナビゲーションメニューを非表示
add_filter('show_admin_bar', '__return_false');


// OGP設定
function my_meta_ogp()
{
    if (is_front_page() || is_home() || is_singular()) {
        /*初期設定*/

        // 画像 （アイキャッチ画像が無い時に使用する代替画像URL）
        $ogp_image = '../img/ogp_thumb@2x.jpg';
        // Twitterのアカウント名 (@xxx)
        $twitter_site = '@Twitterアカウント名';
        // Twitterカードの種類（summary_large_image または summary を指定）
        $twitter_card = 'summary_large_image';
        // Facebook APP ID
        $facebook_app_id = '';

        /*初期設定 ここまで*/

        global $post;
        $ogp_title = '';
        $ogp_description = '';
        $ogp_url = '';
        $html = '';
        if (is_singular()) {
            // 記事＆固定ページ
            setup_postdata($post);
            $ogp_title = $post->post_title;
            $ogp_description = mb_substr(get_the_excerpt(), 0, 100);
            $ogp_url = get_permalink();
            wp_reset_postdata();
        } elseif (is_front_page() || is_home()) {
            // トップページ
            $ogp_title = get_bloginfo('name');
            $ogp_description = get_bloginfo('description');
            $ogp_url = home_url();
        }

        // og:type
        $ogp_type = is_front_page() || is_home() ? 'website' : 'article';

        // og:image
        if (is_singular() && has_post_thumbnail()) {
            $ps_thumb = wp_get_attachment_image_src(
                get_post_thumbnail_id(),
                'full'
            );
            $ogp_image = $ps_thumb[0];
        }

        // 出力するOGPタグをまとめる
        $html = "\n";
        $html .=
            '<meta property="og:title" content="' .
            esc_attr($ogp_title) .
            '">' .
            "\n";
        $html .=
            '<meta property="og:description" content="' .
            esc_attr($ogp_description) .
            '">' .
            "\n";
        $html .= '<meta property="og:type" content="' . $ogp_type . '">' . "\n";
        $html .=
            '<meta property="og:url" content="' .
            esc_url($ogp_url) .
            '">' .
            "\n";
        $html .=
            '<meta property="og:image" content="' .
            esc_url($ogp_image) .
            '">' .
            "\n";
        $html .=
            '<meta property="og:site_name" content="' .
            esc_attr(get_bloginfo('name')) .
            '">' .
            "\n";
        $html .=
            '<meta name="twitter:card" content="' . $twitter_card . '">' . "\n";
        $html .=
            '<meta name="twitter:site" content="' . $twitter_site . '">' . "\n";
        $html .= '<meta property="og:locale" content="ja_JP">' . "\n";

        if ($facebook_app_id != '') {
            $html .=
                '<meta property="fb:app_id" content="' .
                $facebook_app_id .
                '">' .
                "\n";
        }

        echo $html;
    }
}

// headタグ内にOGPを出力する
add_action('wp_head', 'my_meta_ogp');


// JS・CSSファイルを読み込む
function add_files()
{
    // WordPress提供のjquery.jsを読み込まない
    wp_deregister_script('jquery');

    // jQueryの読み込み
    wp_enqueue_script(
        'jquery',
        '//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js',
        '',
        '',
        false
    );

    // サイト共通のJSの読み込み
    wp_enqueue_script(
        'main',
        get_template_directory_uri() . '/js/script.js',
        ['jquery'],
        '20210517',
        true
    );

    // Tweenmax.min.js(Gsap)
    wp_enqueue_script(
        'TweenMax',
        '//cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js',
        ['jquery'],
        '',
        false
    );

    // polyfill-detailsタグ(アコーディオン)のIE対応
    wp_enqueue_script(
        'polyfill-details',
        '//cdn.jsdelivr.net/npm/details-polyfill@1.2.0/index.min.js',
        ['jquery'],
        '',
        true
    );

    // polyfill-pictureタグのIE対応
    wp_enqueue_script(
        'polyfill-picture',
        'https://polyfill.io/v3/polyfill.min.js?features=HTMLPictureElement',
        ['jquery'],
        '',
        true
    );

    // slick.min.js
    wp_enqueue_script(
        'Slick',
        get_template_directory_uri() . '/js/slick.min.js',
        ['jquery'],
        '',
        false
    );

    // luxy.js
    wp_enqueue_script(
        'luxy',
        get_template_directory_uri() . '/js/luxy.js',
        ['jquery'],
        '',
        false
    );

    // simpleParallax.js
    wp_enqueue_script(
        'simpleParallax.js',
        '//cdn.jsdelivr.net/npm/simple-parallax-js@5.6.2/dist/simpleParallax.min.js',
        ['jquery'],
        '',
        false
    );

    // modernizr-custom.js
    wp_enqueue_script(
        'modernizr-custom.js',
        get_template_directory_uri() . '/js/modernizr-custom.js',
        ['jquery'],
        '',
        false
    );

    // ソート機能用のスクリプト(mixitup.min.js)
    wp_enqueue_script(
        'mixitup.min.js',
        'http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js',
        ['jquery'],
        '',
        false
    );

    // サイト共通のCSSの読み込み
    wp_enqueue_style(
        'main',
        get_template_directory_uri() . '/css/style.css',
        '20210517',
        ''
    );

    // slick.css
    wp_enqueue_style(
        'Slick',
        get_template_directory_uri() . '/css/slick.css',
        '',
        ''
    );

    // slick-theme.css
    wp_enqueue_style(
        'Slick-theme',
        get_template_directory_uri() . '/css/slick-theme.css',
        '',
        ''
    );
}
add_action('wp_enqueue_scripts', 'add_files');


// 固定ページの画像パスを短くするコード
function imagepassshort($arg)
{
    $content = str_replace(
        '"img/',
        '"' . get_bloginfo('template_directory') . '/img/',
        $arg
    );
    return $content;
}
add_action('the_content', 'imagepassshort');


// WP-PageNaviデザイン変更
// 「前へ戻る」クラス変更 previouspostslink → l-pagination__link -prev
function custom_wp_pagenavi_class_previouspostslink( $class_name ) {
  return 'l-pagination__link -prev';
}
add_filter( 'wp_pagenavi_class_previouspostslink', 'custom_wp_pagenavi_class_previouspostslink' );

// 「次へ進む」クラス変更 nextpostslink → l-pagination__link -next
function custom_wp_pagenavi_class_nextpostslink( $class_name ) {
  return 'l-pagination__link -next';
}
add_filter( 'wp_pagenavi_class_nextpostslink', 'custom_wp_pagenavi_class_nextpostslink' );

// HTMLタグの置換
function custom_wp_pagenavi( $html ) {
  $out = '';
  $out = str_replace( "<div", "", $html );
  $out = str_replace( "</div>", "", $out );

  return '<div class="l-pagination"><div class="l-pagination__inner"' . $out . '</div></div>';
}
add_filter( 'wp_pagenavi', 'custom_wp_pagenavi' );



// カスタム投稿タイプ作成
add_action('init', 'create_works');
function create_works() {
  register_post_type('works', array(
    'labels' => array(
    'name' => 'WORKS', // 投稿タイプの一般名
    'singular_name' => 'WORKS', // この投稿タイプのオブジェクト1個の名前
  ),
  'public' => true, // パブリックにするかどうか。初期値: false
  'publicly_queryable' => true, // post_typeクエリが実行可能かどうか。初期値: public引数の値
  'show_ui' => true, // 管理するデフォルトUIを生成するかどうか。初期値: public引数の値
  'query_var' => true, // query_varキーの名前。初期値: true - $post_typeの名前
  'rewrite' => true, // 投稿タイプのパーマリンクのリライト方法を変更。初期値: true
  'capability_type' => 'post', // 権限の指定。初期値: 'post'
  'has_archive' => true, // アーカイブページを有効にするかどうか。初期値: false
  'hierarchical' => false, // 階層構造を持つかどうか。初期値: false
  'menu_position' => 5, // メニューの表示位置。初期値: null - コメントの下
  'supports' => array('title', 'editor', 'thumbnail') // 投稿できる項目。初期値: titleとeditor
  ));
}


// 記事のナンバリング取得
function get_post_number( $post_type = 'post', $op = '<=' ) {
    global $wpdb, $post;
    $post_type = is_array($post_type) ? implode("','", $post_type) : $post_type;
    $number = $wpdb->get_var("
        SELECT COUNT( * )
        FROM $wpdb->posts
        WHERE post_date {$op} '{$post->post_date}'
        AND post_status = 'publish'
        AND post_type = ('{$post_type}')
    ");
    return $number;
}