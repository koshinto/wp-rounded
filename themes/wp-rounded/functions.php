<?php
function register_script() {
  wp_register_script(
    'common-js',
    get_template_directory_uri().'/dist/bundle.js',
    array(),
    '',
    false
  );
}

function add_script() {
  register_script();
  wp_enqueue_script('common-js');
}

add_action('wp_enqueue_scripts', 'add_script');

// サムネイルの有効化
add_theme_support('post-thumbnails');

// サムネイルのデフォルトサイズ
set_post_thumbnail_size(300, 200);

// <title>タグを出力する
add_theme_support('title-tag');

// タイトルの区切り文字を変更する
add_filter('document_title_separator', 'my_document_title_separator');
function my_document_title_separator($separator){
    $separator = '|';
    return $separator;
}

// カスタムメニューの有効化
add_theme_support('menus');
