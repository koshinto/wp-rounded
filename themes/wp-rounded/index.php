<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="<?php echo get_template_directory_uri(); ?>/dist/bundle.js"></script>
</head>
<body>

<header>
header
</header>
<!-- 
  投稿
 -->
<?php if( have_posts() ): while( have_posts() ): the_post(); ?>
  <ul class="title">
    <li>
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </li>
  </ul>
<?php endwhile; endif; ?>
</body>
</html>