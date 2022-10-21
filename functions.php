<?php
add_action('init',function(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails'); 
    set_post_thumbnail_size( 590, 370 );
    add_post_type_support( 'page', 'excerpt' );
});

//ブロックエディター適応
//ブロックエディターレスポンシブ
//カラーパレット導入
function cocoro_block_setup(){
    add_theme_support(
        'wp-block-styles'
    );
    add_theme_support(
        'responsive-embeds'
    );
    add_theme_support(
        'editor-color-palette',
        array(
            array(
                'name' => 'メインカラー',
                'slug' => 'main',
                'color' => '#f09f2f',
            ),
            array(
                'name' => '背景カラー',
                'slug' => 'background',
                'color' => '#f1eee7',
            ),
            array(
                'name' => 'フォントカラー',
                'slug' => 'main-font',
                'color' => '#1a1a1a',
            ),
            array(
                'name' => 'フォントカラー(サブ)',
                'slug' => 'sub-font',
                'color' => '#7d7d7d',
            ),
        )
    );
    //フォントスタイルの指定
    add_theme_support(
        'editor-font-sizes',
        array(
            array(
                'name' => '注釈',
                'slug' => 'x-small',
                'size' => 14,
            ),
            array(
                'name' => '通常',
                'slug' => 'normal',
                'size' => 16,
            ),
            array(
                'name' => '大(サブ見出しなど)',
                'slug' => 'large',
                'size' => 24,
            ),
            array(
                'name' => '特大(セクション見出しなど)',
                'slug' => 'x-large',
                'size' => 32,
            ),
        )
    );
    //独自のエディタースタイルをエディター側に反映
    add_theme_support(
        'editor-styles'
    );
    //エディターCSSの場所を記入
    add_editor_style(
        'css/setting/editor-styles.min.css'
    );
    //エディターにnoto-serif-JPを適応
    add_editor_style(
        'https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;700&family=Noto+Serif:wght@400;700&display=swap'
    );
    //ブロックエディタースタイルの追加
    //見出し
    register_block_style(
        'core/heading',
        array(
            'name'  => 'heading_01',
            'label'  => '見出し_ペン',
        )
    );
    register_block_style(
        'core/heading',
        array(
            'name'  => 'heading_02',
            'label'  => '見出し_チェック',
        )
    );
    register_block_style(
        'core/heading',
        array(
            'name'  => 'heading_03',
            'label'  => '見出し_カギ',
        )
    );
    register_block_style(
        'core/heading',
        array(
            'name'  => 'heading_04',
            'label'  => '見出し_クライアント',
        )
    );
    //テーブル
    register_block_style(
        'core/table',
        array(
            'name'  => 'table_01',
            'label'  => 'テーブル_01',
        )
    );

}
add_action('after_setup_theme','cocoro_block_setup');

//jqueryの読み込み・WPのjqueryではなく、CDNでの読み込み
function load_jquery() {
    if ( !is_admin() ) {
        wp_deregister_script('jquery');
        wp_enqueue_script(
            'jquery',
            '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js',
            array(),
            '3.6.0'
        );
    }
}
add_action('init', 'load_jquery');

// CSS・JS一括管理
function common_stylesheet(){
    //共通
    wp_enqueue_style(
        'css',
        get_template_directory_uri() . '/style.css?220924-1',
        "",
        'date("YmdHis")'
    );
    wp_enqueue_style(
        'reset-css',
        get_template_directory_uri() . '/reset.css',
        "",
        'date("YmdHis")'
    );
    wp_enqueue_style(
        'google-fonts-link',
        "//fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@500;700&family=Noto+Serif:wght@400;700&display=swap",
        "",
        'date("YmdHis")',
    );
    wp_enqueue_style(
        'editor-css',
        get_template_directory_uri() . '/css/setting/editor-styles.min.css',
        "",
        'date("YmdHis")'
    );
    wp_enqueue_script(
        'common-js',
        get_template_directory_uri() . '/js/common.js',
        "",
        'date("YmdHis")',
        true
    );
}
add_action( 'wp_enqueue_scripts', 'common_stylesheet' );

function add_stylesheet(){
    //トップページ
	if( is_front_page() && is_home() ){
        wp_enqueue_style(
            'home-css',
            get_template_directory_uri() . '/css/page/home/home.min.css',
            [],
            date("YmdHis"),
        );
        wp_enqueue_style(
            'swiper-css',
            get_template_directory_uri() . '/scss/plugins/swiper-bundle.min.css',
            "",
            'date("YmdHis")',
        );
        wp_enqueue_script(
            'vivus-js',
            get_template_directory_uri() . '/js/vivus.js',
            "",
            'date("YmdHis")',
            true
        );
        wp_enqueue_script(
            'swiper-js',
            get_template_directory_uri() . '/js/swiper-bundle.min.js',
            "",
            'date("YmdHis")',
            true
        );
        wp_enqueue_script(
            'swiperJs-js',
            get_template_directory_uri() . '/js/swiper.js',
            "",
            'date("YmdHis")',
            true
        );
        wp_enqueue_script(
            'sticky-home-js',
            get_template_directory_uri() . '/js/sticky-home.js',
            "",
            'date("YmdHis")',
            true
        );
        wp_enqueue_script(
            'loading-js',
            get_template_directory_uri() . '/js/loading.js',
            "",
            'date("YmdHis")',
            true
        );
        wp_enqueue_script(
            'vivus-min-js',
            "//cdnjs.cloudflare.com/ajax/libs/vivus/0.4.6/vivus.min.js",
            "",
            'date("YmdHis")',
        );
    //プライス
    }elseif( is_page('price')){
        wp_enqueue_style(
            'price-css',
            get_template_directory_uri() . '/css/page/price/price.min.css?',
            "",
            'date("YmdHis")'
        );
        wp_enqueue_script(
            'smoothScroll-js',
            get_template_directory_uri() . '/js/smoothScroll.js',
            "",
            'date("YmdHis")',
            true
        );
        wp_enqueue_script(
            'sticky-page-js',
            get_template_directory_uri() . '/js/sticky-page.js',
            "",
            'date("YmdHis")',
            true
        );
    //よくある質問
    }elseif( is_page('faq')){
        wp_enqueue_style(
            'faq-css',
            get_template_directory_uri() . '/css/page/faq/faq.min.css',
            "",
            'date("YmdHis")'
        );
        wp_enqueue_script(
            'smoothScroll-js',
            get_template_directory_uri() . '/js/smoothScroll.js',
            "",
            'date("YmdHis")',
            true
        );
        wp_enqueue_script(
            'sticky-home-js',
            get_template_directory_uri() . '/js/sticky-page.js',
            "",
            'date("YmdHis")',
            true
        );
        wp_enqueue_script(
            'accordion-js',
            get_template_directory_uri() . '/js/accordion.js',
            "",
            'date("YmdHis")',
            true
        );
    //私について・ご挨拶
    }elseif( is_page('greeting')){
        wp_enqueue_style(
            'greeting-css',
            get_template_directory_uri() . '/css/page/greeting/page-greeting.min.css',
            "",
            'date("YmdHis")'
        );
        wp_enqueue_script(
            'sticky-home-js',
            get_template_directory_uri() . '/js/sticky-page.js',
            "",
            'date("YmdHis")',
            true
        );
    //私について・ご挨拶
    }elseif( is_page('privacy')){
        wp_enqueue_style(
            'privacy-css',
            get_template_directory_uri() . '/css/page/privacy/privacy.min.css',
            "",
            'date("YmdHis")'
        );
        wp_enqueue_script(
            'sticky-home-js',
            get_template_directory_uri() . '/js/sticky-page.js',
            "",
            'date("YmdHis")',
            true
        );
    //お問い合わせ
    }elseif( is_page('contact')){
        wp_enqueue_style(
            'contact-css',
            get_template_directory_uri() . '/css/page/contact/contact.min.css',
            "",
            'date("YmdHis")'
        );
        wp_enqueue_script(
            'sticky-home-js',
            get_template_directory_uri() . '/js/sticky-page.js',
            "",
            'date("YmdHis")',
            true
        );
        wp_enqueue_script(
            'form-tab-js',
            get_template_directory_uri() . '/js/form-tab.js',
            "",
            'date("YmdHis")',
            true
        );
    //お問い合わせ後のページ「ありがとう」
    }elseif( is_page('contactthanks')){
        wp_enqueue_style(
            'contactthanks-css',
            get_template_directory_uri() . '/css/page/contactThanks/contactThanks.min.css',
            "",
            'date("YmdHis")'
        );
        wp_enqueue_script(
            'sticky-home-js',
            get_template_directory_uri() . '/js/sticky-page.js',
            "",
            'date("YmdHis")',
            true
        );
    //アーカイブ(カスタム投稿(お知らせ))※archiveよりも上に記述
    }elseif( is_post_type_archive('news')){
        wp_enqueue_style(
            'news-css',
            get_template_directory_uri() . '/css/page/news/news.min.css',
            "",
            'date("YmdHis")'
        );
        wp_enqueue_script(
            'sticky-home-js',
            get_template_directory_uri() . '/js/sticky-page.js',
            "",
            'date("YmdHis")',
            true
        );
    //アーカイブ(WEBサイト事例)
    }elseif( is_archive('works') ){
        wp_enqueue_style(
            'casestudy-css',
            get_template_directory_uri() . '/css/page/caseStudy/caseStudy.min.css',
            "",
            'date("YmdHis")'
        );
        wp_enqueue_script(
            'sticky-home-js',
            get_template_directory_uri() . '/js/sticky-page.js',
            "",
            'date("YmdHis")',
            true
        );
    //個別投稿ページ(カスタムも含む)
    }elseif( is_single() ){
        wp_enqueue_style(
            'worksDetail-css',
            get_template_directory_uri() . '/css/page/worksDetail/worksDetail.min.css',
            "",
            'date("YmdHis")'
        );
        wp_enqueue_style(
            'prevention-css',
            get_template_directory_uri() . '/css/setting/prevention.min.css',
            "",
            'date("YmdHis")'
        );
        wp_enqueue_script(
            'sticky-home-js',
            get_template_directory_uri() . '/js/sticky-page.js',
            "",
            'date("YmdHis")',
            true
        );
    }elseif( is_single('news') ){
        wp_enqueue_style(
            'newsdetail-css',
            get_template_directory_uri() . '/css/page/newsDetail/newsDetail.min.css',
            "",
            'date("YmdHis")'
        );
        wp_enqueue_style(
            'prevention-css',
            get_template_directory_uri() . '/css/setting/prevention.min.css',
            "",
            'date("YmdHis")'
        );
        wp_enqueue_script(
            'sticky-home-js',
            get_template_directory_uri() . '/js/sticky-page.js',
            "",
            'date("YmdHis")',
            true
        );
    //404ページ
    }elseif( is_404()){
        wp_enqueue_style(
            '404-css',
            get_template_directory_uri() . '/css/page/404/notFound.min.css',
            "",
            'date("YmdHis")'
        );
        wp_enqueue_script(
            'sticky-home-js',
            get_template_directory_uri() . '/js/sticky-page.js',
            "",
            'date("YmdHis")',
            true
        );
    }
}
add_action( 'wp_enqueue_scripts', 'add_stylesheet' );


//MW WPform(プラグイン)でのバリテーションカスタム
function custom_mwform_error_message( $error, $key, $rule ) {
    if ( $key === 'mail' ) {
        if ( $rule === 'noempty' ) {
        return 'メールアドレスが未入力です。';
        } elseif ( $rule === 'mail' ) {
        return 'メールアドレスの形式ではありません。';
        }
    }elseif( $key === 'name' ){
        return 'お名前を入力してください。';
    }elseif( $key === 'form-consultation' ){
        return 'ご相談内容が未選択です。';
    }elseif( $key === 'form-price' ){
        return 'ご予算が未選択です。';
    }elseif( $key === 'form-examination' ){
        return '検討状況が未選択です。';
    }elseif( $key === 'textarea' ){
        return 'お問い合わせ内容が未入力です。';
    }
    return $error;
}
add_filter( 'mwform_error_message_mw-wp-form-40', 'custom_mwform_error_message', 10, 3 );

//wordpress管理画面、デフォルト(ブログ)→WEBサイト事例
function Change_menulabel() {
	global $menu;
	global $submenu;
	$name = 'WEBサイト事例';
	$menu[5][0] = $name;
	$submenu['edit.php'][5][0] = $name.'一覧';
	$submenu['edit.php'][10][0] = '新しい'.$name;
}
function Change_objectlabel() {
	global $wp_post_types;
	$name = 'WEBサイト事例';
	$labels = &$wp_post_types['post']->labels;
	$labels->name = $name;
	$labels->singular_name = $name;
	$labels->add_new = _x('追加', $name);
	$labels->add_new_item = $name.'の新規追加';
	$labels->edit_item = $name.'の編集';
	$labels->new_item = '新規'.$name;
	$labels->view_item = $name.'を表示';
	$labels->search_items = $name.'を検索';
	$labels->not_found = $name.'が見つかりませんでした';
	$labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
}
add_action( 'init', 'Change_objectlabel' );
add_action( 'admin_menu', 'Change_menulabel' );

//メインループ(WEBサイト事例)の作成
// 投稿のアーカイブページを作成する
function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true; // リライトを有効にする
        $args['has_archive'] = 'works'; // 任意のスラッグ名
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);