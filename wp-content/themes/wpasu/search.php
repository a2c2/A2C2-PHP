<?php get_header(); ?>
<div id="main">   
    <div id="content">
			<?php if (have_posts()) : ?>
				<h2>Search Results</h2>
				<?php while (have_posts()) : the_post(); ?>
					<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                	<p><?php the_author() ?> / <?php the_time('jS F Y') ?></p>	
                	<?php the_content_rss('<span class="dots">...</span> <span class="read-post">Read Full Post >></span>', FALSE, '', 40); ?>                    	
				<?php endwhile; ?>
                <ul>
                	<li><?php next_post_link('&laquo; Older Entries') ?></li>
                    <li><?php previous_post_link('Newer Entries &raquo;') ?></li>
                </ul>
				<?php else : ?>
					<h2>No posts found. Please try searching again</h2>
					<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
						<label class="hidden" for="s"><?php _e('Search for:'); ?></label>
						<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
						<input type="submit" id="searchsubmit" value="Search" />
					</form>                    
				<?php endif; ?>       
    	</div><!--end content-->
		<?php get_sidebar(); ?>
	</div><!--end main-->
<?php get_footer(); ?>