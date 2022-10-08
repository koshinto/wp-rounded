<?php get_header(); ?>

<!-- ページタイトル -->
<?php if( is_month() ): ?>
<h2 class="page-title"><?php the_time('Y年m月'); ?></h2> 
<?php else: ?>
<h2 class="page-title"><?php wp_title(''); ?></h2>
<?php endif; ?>

<main id="main-content archive" role="main">
<?php get_template_part('templates/loop-posts'); ?>
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>