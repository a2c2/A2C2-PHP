<?php get_header(); ?>
	<div id="page-wrap">    
    	<div id="content">
        	<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<div class="post" id="post-<?php the_ID(); ?>">
						<h3 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                        <h3 class="post-meta">Posted By <?php the_author(); ?> ~ <?php the_time('jS F Y') ?></h3>
                        <?php the_content('Read Full Post &raquo;'); ?>
					</div><!--end post-->
				<?php endwhile; ?>
				<ul class="post-navigation">
					<li><?php next_posts_link('&laquo; Older Entries') ?></li>
					<li><?php previous_posts_link('Newer Entries &raquo;') ?></li>
				</ul>
			<?php endif; ?>
		</div><!--end content-->
		
	</div><!--end main-->
<?php get_footer(); ?>