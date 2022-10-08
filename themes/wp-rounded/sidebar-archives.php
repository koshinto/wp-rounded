<section class="side-child">
  <h3 class="archive-title">アーカイブ</h3>
  <ul>
    <?php
      $args = array(
        'title_li' => '',
        'type' => 'monthly',
      );
      wp_get_archives($args)
    ?>
  </ul>
</section>