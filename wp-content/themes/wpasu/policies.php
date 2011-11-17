<?php
/*
Template Name: Policies
*/
?>

<?php get_header(); ?>
<div id="page-wrap">
    <div id="tab-box">
		<div id="tab-nav">
			<ul id="main-tab-nav">
				<li><a href="#tab-1">CPU Time Policy</a></li>
                <li><a href="#tab-3">Account Access Policy</a></li>
			</ul>
		</div><!-- end #tab-nav-->

      <div id="tab-content-full" class="drop-shadow">
	   <div class="tab-content" id="tab-1">
   <?php query_posts('p=788'); ?>
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


	   <div class="tab-content" id="tab-3">
   <?php query_posts('p=794'); ?>
			<?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?>
				<div id="post-<?php the_ID(); ?>" class="clearfix">
					<?php if(has_post_thumbnail()) : ?>
					<div class="thumbnail">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail(array(200,200)); ?>
						</a>
					</div>
					<div class="post-content">
						<?php the_content(); ?>

					<?php else : ?>
						<?php the_content(); ?>
					<?php endif; ?>
                    </div>
				</div> <!-- end div #post -->
			<?php endwhile; ?>
			<?php else : ?>
				<div class="post">
					<h3><?php _e('404 Error&#58; Not Found'); ?></h3>
				</div>
        </div> <!-- end tab-4 -->
			<?php endif; ?>
      	 <?php wp_reset_query();?>


      </div><!-- end cotnent full-->
   </div> <!-- end #tab box -->
</div><!--end page-wrap-->
<?php get_footer(); ?>
