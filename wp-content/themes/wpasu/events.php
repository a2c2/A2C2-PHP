<?php
/*
Template Name: Special Events
*/
?>

<?php get_header(); ?>
	<div id="page-wrap">
		<div id="content-full" class="drop-shadow">
			<?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?>
				<div id="inner_main_column_full" class="drop-shadow"<?php the_ID(); ?>>	
                <h3 class="title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>						
				 <h3>Intro to High Performance Computing (HPC) Workshop</h3>
                  <p><em>What IS "high performance computing" or HPC? What is Saguaro2?  </em></p>
                  <p>Please join the ASU Advanced Computing Center (A2C2) for a brief introduction to high performance computing and an overview of A2C2's supercomputer facilities. This is a free monthly event that is open to all members of the ASU community and takes place every third Friday of the month at 11:00 AM in Goldwater Center, 5<sup>th</sup> Floor, Room 546. If you would like to attend, please RSVP to <a href="mailto:hpc@asu.edu">hpc@asu.edu</a>.</p>		
                  <br />	
                  <div class="seperator"></div>
                  <br />
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