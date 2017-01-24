<?php get_header(); // header.phpを読み込み?>
<main>
  <?php
  if ( have_posts() ):     // 記事が存在する場合
    while ( have_posts() ): // 記事が存在する間
      the_post(); // 記事を取得
  ?>
  <article <?php post_class(); // 記事の区別用class ?>>
    <h1><?php the_title(); // 記事のタイトル ?></h1>
    <?php the_content(); // 記事のコンテンツ ?>
  </article>
  <?php
    endwhile; // 記事が存在する間
  endif; // 記事が存在する場合
  ?>
</main>
<?php get_footer(); // footer.phpを読み込み ?>