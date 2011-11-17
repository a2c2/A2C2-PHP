<div id="sidebar">	
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) : ?>		
			<div class="box clearfloat drop-shadow">
				<div class="boxinside clearfloat">
                   <h3>Tutorials</h3>
                	  <ul>
                     <?php query_posts('category_name=screencast' . '&orderby=title&order=asc'); ?>
                     <?php while (have_posts()) : the_post(); ?>
                     <li><a href="<?php the_permalink(); ?>">
                     <?php the_title(); ?> </a></li>
                     <?php endwhile; ?>
                     </ul>
				</div>
			</div>
			<div class="box clearfloat drop-shadow">
				<div class="boxinside clearfloat">
<h3>Announcements</h3>
 <div class="tweet">
<script type='text/javascript'>
$(document).ready(function(){
$(".tweet").tweet({
username: "asuhpc",
join_text: "auto",
avatar_size: 32,
count: 4,
auto_join_text_default: "we said,",
auto_join_text_ed: "we",
auto_join_text_ing: "we were",
auto_join_text_reply: "we replied to",
auto_join_text_url: "we were checking out",
loading_text: "loading tweets...",
template: "{text}"
});
});
</script>          
</div>
</div><!-- end twitter-->
				</div>
			</div>            
		<?php endif; ?>	
</div><!-- end div #sidebar -->