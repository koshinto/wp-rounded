<?php if( have_posts() ): ?>

<section id="posts">
<?php while( have_posts() ): the_post(); ?>

  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <section class="post-image">
      <a href="<?php the_permalink(); ?>">
        <?php if( has_post_thumbnail() ): ?>
          <?php the_post_thumbnail('large'); ?>
        <?php else: ?>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/no_image_large.jpg" alt="no image">
        <?php endif; ?>
      </a>
    </section>
    <section class="post-meta">
      <time class="post-date" datetime="<?php the_time('Y-m-d'); ?>">
        <?php the_time('Y年m月d日'); ?>
      </time>
      <?php the_category(); ?>
    </section>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_excerpt(); ?>
  </article>

<?php endwhile; ?>
</section>
<?php else: ?>
<section id="non_post">
  <h2>該当する投稿は見つかりません。</h2>
</section>

<?php endif; ?>