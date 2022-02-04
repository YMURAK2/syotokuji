<?php

function add_files()
{
    //swiper(css)
    wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/js/swiper/swiper-bundle.min.css');
    //style sheet
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/style.css');
    //gogole font - Zen Antique Soft
    wp_enqueue_style('google_fonts', 'https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&display=swap');
    //fontawesome
    wp_enqueue_script('font_awesome', 'https://kit.fontawesome.com/12e7f54fbf.js');
    //swiper(js)
    wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/swiper/swiper-bundle.min.js', array(), false, true);
    //main js
    wp_enqueue_script('main_js', get_template_directory_uri() . '/assets/js/script.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'add_files');

//タイトルタグを出力する
add_theme_support('title-tag');

//カスタムメニュー機能を使用可能にする
add_theme_support('menus');

//アイキャッチ画像を使用可能にする
add_theme_support('post-thumbnails');

//投稿アーカイブページの作成
function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'category';
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);
