<?php
// メインメニュー
register_nav_menu( 'primary', 'メイン');

// ウィジェット
register_sidebar();

// RSSフィード
add_theme_support( 'automatic-feed-links' );

// アイキャッチ画像
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 400, 300, true );
?>
