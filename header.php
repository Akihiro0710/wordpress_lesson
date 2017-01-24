<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title><?php
    wp_title( ' | ', true, 'right' ); // ページのタイトルとその右に|
    bloginfo( 'neme' ); // サイトのタイトル
  ?></title>
  <link rel="stylesheet" href="<? echo get_stylesheet_uri(); // style.cssの読み込み ?>">
  <?php wp_head(); // wpのシステムタグ ?>
</head>
<body <?php body_class(); // ページの区別用class ?>>
<header>
  <h1>
    <a href="<?php echo home_url(); // サイトホームへのリンク ?>">
      <?php bloginfo( 'name' ); // サイトのタイトル ?>
    </a>
  </h1>
  <p><?php bloginfo( 'description' ); // サイト説明 ?></p>
  <nav>
    <?php wp_nav_menu( array(
      'theme_location' => 'primary'
      ) ); ?>
  </nav>
</header>