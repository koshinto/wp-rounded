<?php get_header(); ?>

<?php get_template_part('templates/breadcrumb'); ?>

<main id="main-content single" role="main">  <!-- main-content -->

<?php if( have_posts() ): while( have_posts() ): the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header>
    <?php the_title('<h2 id="post-title">', '</h2>'); ?>
    <section class="post-meta">
      <?php the_category(); ?>
      <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日');?></time>
    </section>
  </header>
  <section class="post-body">
    <?php the_content(); ?>
  </section>
  <section class="post-links">
    <div class="post-link post-link-previous"><?php previous_post_link(); ?></div>
    <div class="post-link post-link-next"><?php next_post_link(); ?></div>
  </section>
  <section class="comments">
    <?php comments_template(); ?>
  </section>
</article>

<?php get_sidebar(); ?>

<?php endwhile; endif; ?>

</main>                               <!-- main-content -->

<?php get_footer(); ?>
