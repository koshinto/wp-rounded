<footer>
<?php 
$args = array(
  'menu' => 'footer-navigation',
  'menu_class' => '',
  'container' => false
);
wp_nav_menu($args);
?>
</footer>
<?php wp_footer(); ?>
</body>
</html>