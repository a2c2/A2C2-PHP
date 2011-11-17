<?php
  $post = $wp_query->post;

  if (in_category('4')) {
      include(TEMPLATEPATH.'/single-screencasts.php');
  } else {
      include(TEMPLATEPATH.'/single-default.php');
  }
?>
