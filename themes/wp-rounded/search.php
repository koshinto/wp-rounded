<?php get_header(); ?>
<main id="main-content search" role="main">
  
<h2>「<?php the_search_query(); ?>」の検索結果</h2>
<?php get_template_part('templates/loop-posts'); ?>

<!-- pagination -->
<?php 
the_posts_pagination(
  array(
    'mid_size' => 2,
    'prev_text' => '戻る',
    'next_text' => '次へ',
  )
);
?>

</main>
<?php get_footer(); ?>