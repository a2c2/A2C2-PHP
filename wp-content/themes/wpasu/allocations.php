<?php
/*
Template Name: Allocations
*/
?>

<?php get_header(); ?>
<div id="page-wrap">
    <div id="tab-box">
		<div id="tab-nav">
			<ul id="main-tab-nav">
				<li><a href="#tab-1">Allocations</a></li>
				<li><a href="#tab-2">CPU Time Policy</a></li>
				<li><a href="#tab-3">Storage Policy</a></li>
                <li><a href="#tab-4">Account Access Policy</a></li>
			</ul>
		</div><!-- end #tab-nav-->
        
      <div id="tab-content-full" class="drop-shadow">
	   <div class="tab-content" id="tab-1">	
	   <?php query_posts('p=245'); ?>
<?php while (have_posts()) : the_post(); ?>
	    <h3 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>							
		<?php the_content(); ?> 	
		</div> <!-- end tab-1 -->
			<?php endwhile; ?>	      										
	  
       	
	   <div class="tab-content" id="tab-2">	
	   <?php query_posts('p=247'); ?>
<?php while (have_posts()) : the_post(); ?>
	    <h3 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>							
		<?php the_content(); ?> 	
		</div> <!-- end tab-1 -->
			<?php endwhile; ?>	      										
	   
       
	   <div class="tab-content" id="tab-3">	
	   <?php query_posts('p=250'); ?>
<?php while (have_posts()) : the_post(); ?>
	    <h3 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>							
		<?php the_content(); ?> 	
		</div> <!-- end tab-1 -->
			<?php endwhile; ?>	      										
	 
       
	   <div class="tab-content" id="tab-4">	
	   <?php query_posts('p=252'); ?>
<?php while (have_posts()) : the_post(); ?>
	    <h3 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>							
		<?php the_content(); ?> 	
		</div> <!-- end tab-1 -->
			<?php endwhile; ?>	
      </div><!-- end cotnent full-->         										
   </div> <!-- end #tab box -->	       	
</div><!--end page-wrap-->
<?php get_footer(); ?>