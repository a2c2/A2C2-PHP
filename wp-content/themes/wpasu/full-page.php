<?php
/*
Template Name: Full Page
*/
?>

<?php get_header(); ?>
	<div id="page-wrap">
		<div id="content-full" class="drop-shadow">
			<?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?>
				<div id="inner_main_column_full" class="drop-shadow"<?php the_ID(); ?>>	
                <h3 class="title"><?php the_title(); ?></h3>								
						<?php the_content(); ?> 
						<?php edit_post_link('Edit', ' &raquo; ', ''); ?>
						<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
						<!-- <?php trackback_rdf(); ?> -->
					

					<?php wp_reset_query(); ?>
						
				</div> <!-- end inner main -->

			<?php endwhile; ?>
			<?php endif; ?>
			      										
		</div> <!-- end div #content-full -->
			
	</div><!--end page-wrap-->
<?php get_footer(); ?>