<?php get_header(); ?>

<!-- main-content -->
<main id="main-content" role="main">

<!-- posts -->
<?php get_template_part('templates/loop-posts'); ?>
<!-- end posts -->

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
<!-- end main-content -->

<?php get_footer(); ?>
