<section class="comments">
  <?php
  comment_form(
    array(
      'title_reply' => 'コメントする'
    )
  );
  if( have_comments() ):
  ?>
  <p><?php comments_number(); ?></p>
  <ol class="comment-list">
    <?php wp_list_comments(
      array(
        'avatar_size' => '50',
      )
    ); ?>
  </ol>
  <?php
  paginate_comments_links();
  endif;
  ?>
</section>