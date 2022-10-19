<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
    wp_head();
    // bundle.jsを読み込む
    wp_enqueue_script("bundle", get_template_directory_uri().'/dist/bundle.js');
  ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
<?php
  if( has_custom_logo() ):
    the_custom_logo();
?>

<?php else: ?>
<a href="<?php echo home_url('/'); ?>">The Header</a>
<?php endif; ?>

<?php wp_nav_menu(array(
  'theme_location' => 'header',
  'container' => 'nav'
)) ?>

<?php get_search_form(); ?>
</header>
