<section class="side-child">
  <h3 class="archive-title">カテゴリー一覧</h3>
  <ul>
    <?php
      $args = array(
        'title_li' => '',
      );
      wp_list_categories($args);
    ?>
  </ul>
</section>