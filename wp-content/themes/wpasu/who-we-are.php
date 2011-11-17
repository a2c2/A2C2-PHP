<?php
/*
Template Name: Who We Are
 */
?>

<?php get_header(); ?>
<div id="page-wrap">
  <div id="tab-box">
  <div id="tab-nav">
  <ul id="main-tab-nav">
  <li><a href="#tab-1">Staff Profiles</a></li>
  <li><a href="#tab-2">Advisory Boards</a></li>
  </ul>
  </div><!-- end #tab-nav-->

  <div id="tab-content-full" class="drop-shadow">
  <div class="tab-content" id="tab-1">
  <?php query_posts('category_name=staff&showposts=20&orderby=title&order=asc'); ?>
<?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?>
<div id="post" class="profile clearfix">
  <?php if(has_post_thumbnail()) : ?>
  <div class="thumbnail">
   <?php the_post_thumbnail(array(200,200)); ?>
  </div>
<?php endif; ?>
<div class="profile-content">
<div class="profile-text"><?php the_content(); ?></div>

</div>
<div class="seperator"></div>
</div> <!-- end div #post -->
<?php endwhile; ?>
<?php include (TEMPLATEPATH . '/pagenav.php'); ?>
</div> <!-- end tab-1 -->
  <?php endif; ?>
<?php wp_reset_query();?>

<div class="tab-content" id="tab-2">
  <?php query_posts('p=595'); ?>
<?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?>
<div id="post-<?php the_ID(); ?>" class="clearfix">
  <div class="post-content">
  <?php the_content(); ?>
</div>
  </div> <!-- end div #post -->
  <?php endwhile; ?>
</div> <!-- end tab-2 -->
  <?php endif; ?>
<?php wp_reset_query();?>

</div><!-- end cotnent full-->
  </div> <!-- end #tab-box -->
  </div><!--end page-wrap-->
  <?php get_footer(); ?>
