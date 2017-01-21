<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="<? echo get_stylesheet_uri();	// style.cssの読み込み ?>">
</head>
<body <?php body_class();	// ページの区別用class ?>>
<main>
	<?php
	if ( have_posts() ):	// 記事が存在する場合
		while ( have_posts() ):	// 記事が存在する間
			the_post();	// 記事を取得
	?>
	<article <?php post_class();	// 記事の区別用class ?>>
		<h1><?php the_title();	// 記事のタイトル ?></h1>
		<div>
			<time datetime="<?php echo get_the_date( 'Y-m-d' );	// 検索エンジン用の日付 ?>">
				<?php echo get_the_date();	// 表示用の日付 ?>
			</time>
			<span><?php the_category(); // カテゴリーをリストで表示 ?></span>
		</div>
		<?php the_content();	// 記事のコンテンツ ?>
		<?php if ( is_single() ):	// 個別ページの場合 ?>
		<div>
			<?php previous_post_link( '%link', '%title' );	// 前の記事へのリンク ?>
			<?php next_post_link( '%link', '%title' );	// 次の記事へのリンク ?>
		</div>
		<?php endif;?>
	</article>
	<?php
		endwhile;
	endif;
	?>

	<?php if ( $wp_query->max_num_pages > 1): ?>
		<div>
			<?php next_posts_link( '古い記事' ); ?>
			<?php previous_posts_link( '新しい記事' ); ?>
		</div>
	<?php endif; ?>
</main>
</body>
</html>