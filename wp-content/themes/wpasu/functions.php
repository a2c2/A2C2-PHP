<?php
/* Excerpt ********************************************/

	/* Make the "read more" link to the post */
	function new_excerpt_more($more) {
	       global $post;
		return '<br /><br /><span class="read_more"><a href="'. get_permalink($post->ID) . '">' . 'Read more' . '</a></span>';
	}
	add_filter('excerpt_more', 'new_excerpt_more');

	/* Set the excerpt length */
	function new_excerpt_length($length) {
		return 40;
	}
	add_filter('excerpt_length', 'new_excerpt_length');


/* Widgets ********************************************/

	if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'Sidebar',
	    'before_widget' => '<div class="box clearfloat"><div class="boxinside clearfloat">',
	    'after_widget' => '</div></div>',
	    'before_title' => '<h4 class="widgettitle">',
	    'after_title' => '</h4>',
	));

	if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'Bottom Menu Left',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
	    'after_widget' => '</div>',
	    'before_title' => '<h4>',
	    'after_title' => '</h4>',
	));

	if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'Bottom Menu Center',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
	    'after_widget' => '</div>',
	    'before_title' => '<h4>',
	    'after_title' => '</h4>',
	));	

	if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'Bottom Menu Right',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
	    'after_widget' => '</div>',
	    'before_title' => '<h4>',
	    'after_title' => '</h4>',
	));	
	
// Register Post Thumbnail
add_theme_support( 'post-thumbnails' ); 

// Register Custom Menus
add_action('init', 'register_custom_menu');
function register_custom_menu() {
register_nav_menu('custom_menu', __('Custom Menu'));
}

// Set Theme Prefix
define("THEME_PREFIX", "wpasu_");

/* -- Theme Options Page -- */
function theme_options_admin() {
	$option_fields = array();
	if ( $_GET['updated'] ) echo '<div id="message" class="updated fade"><p>wpasu Options Saved.</p></div>';
	echo '<link rel="stylesheet" href="'.get_bloginfo('template_url').'/styles/functions.css" />';
?>

<div class="wrap">

    <h2>wpasu Options</h2>
    
    <div id="message"></div>

    <div class="metabox-holder">
    	
    	<form method="post" action="options.php">
			<?php wp_nonce_field('update-options'); ?>
	    
	        <div id="theme-options">
		        
		        <div id="left-column">
		            <?php 	            	            		            	
		            	include("options/frontpage-headline.php");
		            	include("options/featured.php");	           		            	
		            ?>
		        </div><!--end left-column-->	        
		       	<div id="right-column">
		        	<?php
		        		include("options/contact-details.php");	
		        		include("options/footer-text.php");		        	
		        	?>
		        </div><!--end right-column-->
		        	        
	        </div><!--theme-options-->
	        
	        <input type="hidden" name="action" value="update" />
	        <input type="hidden" name="page_options" value="<?php echo implode(",", $option_fields); ?>" />
        
        </form>
    </div><!--end metabox-holder-->
</div><!--end wrap-->
<?php
}
add_action('admin_menu', "theme_options_admin_init");
function theme_options_admin_init()
{
	add_theme_page( "wpasu Theme Options", "Theme Options", 8, __FILE__, 'theme_options_admin');
}
?>

<?php

if ( function_exists('wp_nav_menu') ) {
	add_theme_support( 'nav-menus' );
	register_nav_menus( array( 'primary-menu' => __( 'Primary Menu' ), 'secondary-menu' => __( 'Secondary Menu' ) ) );
}    

   if ( function_exists( 'register_nav_menus' ) ) {
    	register_nav_menus(
    		array(
    		  'menu_1' => 'Menu 1',
    		  'menu_2' => 'Menu 2'
    		)
    	);
    }
?>