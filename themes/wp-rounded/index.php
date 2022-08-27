<?php get_header(); ?>

<!-- 投稿 -->
<?php if( have_posts() ): while( have_posts() ): the_post(); ?>
  <ul class="title">
    <li>
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </li>
  </ul>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
