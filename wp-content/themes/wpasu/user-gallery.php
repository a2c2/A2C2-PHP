<?php
/*
Template Name: User Gallery
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
						
		<div class="carousel clearfix">

			<div class="panel">
				
				<div class="details_wrapper">
					
					<div class="details">
					
						<div class="detail">
							<h2 class="Lexia-Bold"><a href="#">Turbulent Flow</a></h2> HPC technology is well-adapted to the complexity of computational fluid dynamics. This project involved the modeling of turbulent flow, crucial to the design of such mechanical systems as cars, planes, and pipelines. This image shows turbulent flow around the body of a rotorcraft in flight.
						</div><!-- /detail -->
						
						<div class="detail">
							<h2 class="Lexia-Bold"><a href="#">Golf Ball Design</a></h2> In collaboration with A2C2, ASU's Decision Theater, and industry partners, mechanical and aerospace engineering researchers from the Fulton School applied techniques for modeling aerodynamic flow around objects such as aircraft to the simulation of golf ball performance. Read more under <a href="http://www.asu.edu/news/stories/200605/20060516_golfball.htm">News</a>.
						</div><!-- /detail -->
						
						<div class="detail">
							<h2 class="Lexia-Bold"><a href="#">Environmental Fluid Dynamics</a>. Cum sociis natoque penatibus et magnis dis parturient montes</h2>
						</div><!-- /detail -->
<!--
						<div class="detail">
							<h2 class="Lexia-Bold"><a href="#">Solid State Science</a>. Cum sociis natoque penatibus et magnis dis parturient montes</h2>
						</div><!-- /detail -->
                 <!--       
 						<div class="detail">
							<h2 class="Lexia-Bold"><a href="#">Carbon Sequestration</a>. Cum sociis natoque penatibus et magnis dis parturient montes</h2>
						</div><!-- /detail -->                       						
<!--
						<div class="detail">
							<h2 class="Lexia-Bold"><a href="#">Biophysics, protein mutation</a>. Cum sociis natoque penatibus et magnis dis parturient montes</h2>
						</div><!-- /detail -->


					
					</div><!-- /details -->
					
				</div><!-- /details_wrapper -->
				
				<div class="paging">
					<div id="numbers"></div>
					<a href="javascript:void(0);" class="previous" title="Previous" >Previous</a>
					<a href="javascript:void(0);" class="next" title="Next">Next</a>
				</div><!-- /paging -->
				
				<a href="javascript:void(0);" class="play" title="Turn on autoplay">Play</a>
				<a href="javascript:void(0);" class="pause" title="Turn off autoplay">Pause</a>
				
			</div><!-- /panel -->                     
                        
 	
			<div class="backgrounds">
				
				<div class="item item_1">
  <object height="340" width="604">
<param name="allowfullscreen" value="true" /><param name="allowscriptaccess" value="always" /><param name="movie" value="http://vimeo.com/moogaloop.swf?clip_id=5129994&amp;server=vimeo.com&amp;show_title=0&amp;show_byline=0&amp;show_portrait=0&amp;color=8c0d0d&amp;fullscreen=1"></param><embed src="http://vimeo.com/moogaloop.swf?clip_id=5129994&amp;server=vimeo.com&amp;show_title=0&amp;show_byline=0&amp;show_portrait=0&amp;color=8c0d0d&amp;fullscreen=1" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" height="340" width="604"></embed>
  </object>
				</div><!-- /item -->
				
				<div class="item item_2">
  <object height="340" width="604">
<param name="allowfullscreen" value="true" /><param name="allowscriptaccess" value="always" /><param name="movie" value="http://vimeo.com/moogaloop.swf?clip_id=5175326&amp;server=vimeo.com&amp;show_title=0&amp;show_byline=0&amp;show_portrait=0&amp;color=8c0d0d&amp;fullscreen=1">
    </param>
    <embed src="http://vimeo.com/moogaloop.swf?clip_id=5175326&amp;server=vimeo.com&amp;show_title=0&amp;show_byline=0&amp;show_portrait=0&amp;color=8c0d0d&amp;fullscreen=1" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" height="340" width="604"></embed>
  </object>
				</div><!-- /item -->
				
				<div class="item item_3">
					
				</div><!-- /item -->
				
			</div><!-- /backgrounds -->
			
			
		</div><!-- /carousel -->                        
				</div> <!-- end inner main -->

			<?php endwhile; ?>
			<?php endif; ?>
			      										
		</div> <!-- end div #content-full -->
			
	</div><!--end page-wrap-->
<?php get_footer(); ?>