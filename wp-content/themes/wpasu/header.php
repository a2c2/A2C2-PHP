<!DOCTYPE html>
<html lang="en">	
	<head>		
		<meta charset="utf-8">
		<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
		
		<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <meta name="description" content="<?php bloginfo('description') ?>" />
        
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        
        
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.tweet.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/contact-form-process.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/cpu-hours-form-process.js"></script>        
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/menu.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/superfish.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/global.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/slides.min.jquery.js"></script>   
                               
        
        <!--[if IE 6]>
            <script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/themes/wpasu/js/ie6-transparency.js"></script>
            <script>
                DD_belatedPNG.fix('#header img, #header img.description, #headline img, #featured-section-image, .more-details-button, #commentform .submit, #contact-form .submit');
            </script>
            <style>body { behavior: url("<?php bloginfo('url'); ?>/wp-content/themes/wpasu/styles/ie6-hover-fix.htc"); }</style>
            <link rel="stylesheet" type="text/css" href="<?php bloginfo('url'); ?>/wp-content/themes/wpasu/styles/ie6.css" />
        <![endif]--> 
        <!--[if IE 7]>
            <link rel="stylesheet" type="text/css" href="<?php bloginfo('url'); ?>/wp-content/themes/wpasu/styles/ie7.css" />
        <![endif]-->  
        <!--[if IE 8]>
            <link rel="stylesheet" type="text/css" href="<?php bloginfo('url'); ?>/wp-content/themes/wpasu/styles/ie8.css" />
        <![endif]-->
        <?php wp_head(); ?>  
	</head>
	
<body>	
<div id="asu-header">	    
<?php include('acc.php'); ?> 
</div>
    
    
<div id="wrapper">   
   <div id="menu">
		<?php
		if ( function_exists('has_nav_menu') && has_nav_menu('primary-menu') ) {
			wp_nav_menu( array( 'depth' => 4, 'sort_column' => 'menu_order', 'container' => 'ul', 'link_before' => '<span>', 'link_after' => '</span>', 'menu_id' => 'navigation', 'menu_class' => 'nav wrap', 'theme_location' => 'primary-menu' ) );
		} else {
		?>
		<ul id="navigation" class="nav wrap">
				<?php if (is_page()) { $highlight = "page_item"; } else {$highlight = "page_item current_page_item"; } ?>
				<li class="<?php echo $highlight; ?> first"><a href="<?php bloginfo('url'); ?>"><span><?php _e('Home'); ?></span></a></li>
				<?php wp_list_pages('sort_column=menu_order&depth=4&link_before=<span>&link_after=</span>&title_li=&exclude='); ?>
				<?php } ?>
		</ul>
   </div><!--end menu-->     
</div><!--end wrapper-->