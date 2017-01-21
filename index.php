<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title><?php wp_title( ' | ', true, 'right' ); bloginfo( 'neme' ); ?></title>
	<link rel="stylesheet" href="<? echo get_stylesheet_uri();	// style.cssの読み込み ?>">
	<?php wp_head();	// wpのシステムタグ ?>
</head>
<body <?php body_class();	// ページの区別用class ?>>
<header>
	<h1>
		<a href="<?php echo home_url();	// サイトホームへのリンク ?>">
			<?php bloginfo( 'name' );	// サイトのタイトル ?>
		</a>
	</h1>
	<p><?php bloginfo( 'description' );	// サイト説明 ?></p>
</header>
<main>
	<?php if ( is_category() ):	// カテゴリーページの場合 ?>
		<h1><?php single_cat_title();	// カテゴリー名を表示 ?>に関する記事</h1>
	<?php endif;	// カテゴリーページの場合 ?>
	<?php if ( is_month() ):	// 月別ページの場合 ?>
		<h1><?php get_the_date( 'Y年n月' );	// 月を表示 ?>に投稿した記事</h1>
	<?php endif;	// 月別ページの場合 ?>
	<?php
	if ( have_posts() ):	// 記事が存在する場合
		while ( have_posts() ):	// 記事が存在する間
			the_post();	// 記事を取得
	?>
	<article <?php post_class();	// 記事の区別用class ?>>
		<h1>
			<a href="<?php the_permalink(); // 記事へのリンク?>">
				<?php the_title();	// 記事のタイトル ?>
			</a>
		</h1>
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
		<?php endif;	// 個別ページの場合 ?>
	</article>
	<?php
		endwhile;	// 記事が存在する間
	endif;	// 記事が存在する場合
	?>

	<?php if ( $wp_query->max_num_pages > 1):	// 記事一覧が複数ページに渡る場合 ?>
		<div>
			<?php next_posts_link( '古い記事' );	// 次の記事一覧 ?>
			<?php previous_posts_link( '新しい記事' );	// 前の記事一覧 ?>
		</div>
	<?php endif;	// 記事一覧が複数ページに渡る場合 ?>
</main>
<nav>
	<ul>
		<?php dynamic_sidebar();?>
	</ul>
</nav>
<footer>
	<small>Copyright &copy; <?php bloginfo( 'name' ); ?></small>
</footer>
<?php wp_footer();	// wpのシステムタグ ?>
</body>
</html>