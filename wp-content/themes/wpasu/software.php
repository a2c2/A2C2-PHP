<?php
/*
Template Name: Software
*/
?>

<?php get_header(); ?>
<div id="page-wrap">
    <div id="tab-box">
		<div id="tab-nav">
			<ul id="main-tab-nav">
				<li><a href="#tab-1">Software & Library Packages</a></li>
				<li><a href="#tab-2">Modules Utility</a></li>
			</ul>
		</div><!-- end #tab-nav-->
        
      <div id="tab-content-full" class="drop-shadow">
	   <div class="tab-content" id="tab-1">	
   <?php query_posts('p=922'); ?>
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
         							
      
	   <div class="tab-content" id="tab-2">	
   <?php query_posts('p=897'); ?>
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
   </div> <!-- end #tab box -->	       	
</div><!--end page-wrap-->
<?php get_footer(); ?>