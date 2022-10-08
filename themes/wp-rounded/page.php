<?php get_header(); ?>

<main id="main-content post" role="main">  <!-- main-content -->

<?php if( have_posts() ): while( have_posts() ): the_post(); ?>

<article>
  <?php
  the_title( '<h2 id="page-title">', '</h2>'); 
  the_content();
  ?>
</article>

<?php get_sidebar(); ?>

<?php endwhile; endif; ?>

</main>                                   <!-- main-content -->

<?php get_footer(); ?>
