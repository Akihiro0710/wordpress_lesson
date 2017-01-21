<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<?php
if ( have_posts() ):	// 記事が存在するか
	while ( have_posts() ):	// 記事が存在する間ループ
		the_post();	// 記事を取得
?>
<?php the_title(); // 記事のタイトル?>
<?php the_content(); // 記事のコンテンツ?>
<?php
	endwhile;
endif;
?>
</body>
</html>