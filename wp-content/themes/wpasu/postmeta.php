<div class="post_meta clearfix">
	<ul class="postmeta">
		<li><?php the_author(); ?> - </li>
		<li><?php the_time('M d, Y') ?> - </li>
		<li><?php the_category(', '); ?><?php if(function_exists("the_tags")) the_tags(' - Tags: ', ', ', ''); ?> </li>
		<li><?php if ( comments_open() ) : ?><?php comments_popup_link('- No Comment', '- 1 Comment', '- % Comments'); ?><?php endif; ?> </li>
		<li><?php edit_post_link('Edit', ' &#124; ', ''); ?></li>
	</ul>
</div> <!-- end post_meta -->
