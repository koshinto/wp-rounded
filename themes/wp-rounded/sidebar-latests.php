<?php
$newposts = get_posts( array(
  'post_type' => 'post',
  'posts_per_page' => '5'
));
if( $newposts ): ?>
<h2>最近の記事</h2>
<ul>
  <?php foreach( $newposts as $post ):
  setup_postdata( $post ); ?>
  <li>
    <a href="<?php the_permalink(); ?>">
    <?php the_title(); ?>
    </a>
  </li>
  <?php endforeach; ?>
</ul>
<?php
  wp_reset_postdata();
  endif;
?>
