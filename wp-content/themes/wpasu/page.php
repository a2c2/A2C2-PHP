<?php
/*
Template Name: Default Page
*/
?>

<?php get_header(); ?>	
	<!-- BEGIN PAGE -->
	<div id="page">
    <div id="page-inner" class="clearfix">
		<div id="content">	
			<?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?>
				<div id="post-<?php the_ID(); ?>" class="post clearfix drop-shadow">
                <h3 class="title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>						
					<?php if(has_post_thumbnail()) : ?>
					<div class="thumbnail">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail(array(200,200)); ?>
						</a>
					</div>
					<div class="post-content">
						<div class="entry"><?php the_content(); ?></div>
					</div>

					<?php else : ?>			
						<div class="entry"><?php the_content(); ?></div>

					<?php endif; ?>

				</div> <!-- end div #post -->
			<?php endwhile; ?>
			<?php else : ?>
				<div class="post">
					<h3><?php _e('404 Error&#58; Not Found'); ?></h3>
				</div>
			<?php endif; ?>
			
		</div> <!-- end div #content -->
   
      <?php get_sidebar(); ?>
    </div><!-- end div #page inner -->
</div><!-- end div #page -->  
<?php get_footer(); ?>