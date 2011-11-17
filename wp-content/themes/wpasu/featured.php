
<div id="container">
  <div id="example">
    <div id="slides">
      <div class="slides_container">
      <?php query_posts('category_name=featured&orderby=date&order=asc'); ?>

      <?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?>
         <?php the_content(); ?>
      <?php endwhile; ?>
      <?php endif; ?>

      </div>
      <a href="#" class="prev"><img src="<?php bloginfo('template_url'); ?>/images/arrow-prev.png" width="24" height="43" alt="Arrow Prev"></a>
      <a href="#" class="next"><img src="<?php bloginfo('template_url'); ?>/images/arrow-next.png" width="24" height="43" alt="Arrow Next"></a>
    </div>
    <img src="<?php bloginfo('template_url'); ?>/images/example-frame.png" width="739" height="341" alt="Example Frame" id="frame">
  </div>
</div>
