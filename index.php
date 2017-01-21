<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="<? echo get_stylesheet_uri();	// style.cssの読み込み ?>">
</head>
<body <?php body_class();	// ページの区別用class ?>>
<?php
if ( have_posts() ):	// 記事が存在するか
	while ( have_posts() ):	// 記事が存在する間ループ
		the_post();	// 記事を取得
?>
<article <?php post_class();	// 記事の区別用class ?>>
	<div class="postinfo">
		<time datetime="<?php echo get_the_date( 'Y-m-d' );	// 検索エンジン用の日付 ?>">
			<?php echo get_the_date();	// 表示用の日付 ?>
		</time>
	</div>
	<h1><?php the_title();	// 記事のタイトル ?></h1>
	<?php the_content();	// 記事のコンテンツ ?>
</article>
<?php
	endwhile;
endif;
?>
</body>
</html>