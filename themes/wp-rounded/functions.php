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
add_theme_support( 'post-thumbnails' );

// サムネイルのデフォルトサイズ
set_post_thumbnail_size(300, 200);