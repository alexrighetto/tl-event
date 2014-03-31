<?php

//////////////////////////////////////////////////////////////////
//																//
//																//
//							DESIGN								//
//																//
//																//
//////////////////////////////////////////////////////////////////

if ( ! function_exists( 'axl_themesupport' ) ):
function axl_themesupport() {
	

	// Set content width value based on the theme's design
	if ( ! isset( $content_width ) )
		$content_width = 770;
	
	
	
	
		global $wp_version;
	
		// Add theme support for Automatic Feed Links
		if ( version_compare( $wp_version, '3.0', '>=' ) ) :
			add_theme_support( 'automatic-feed-links' );
		else :
			automatic_feed_links();
		endif;
	
		// Add theme support for Featured Images
		add_theme_support( 'post-thumbnails' );	
	
		// Add theme support for Semantic Markup
		$markup = array( 'search-form', 'comment-form', 'comment-list', );
		add_theme_support( 'html5', $markup );	
	
			$domain = 'tl_event';
 
			load_theme_textdomain( $domain, trailingslashit( WP_LANG_DIR ) . $domain );
			load_theme_textdomain( $domain, get_stylesheet_directory() . '/lang' );
			load_theme_textdomain( $domain, get_template_directory() . '/lang' );
			
			
			
	
	
	
}
endif;
add_action( 'after_setup_theme', 'axl_themesupport' );


// Register Sidebar
function contact_sidebar() {

	$args = array(
		'id'            => 'form',
		'name'          => __( 'Form', 'tl_event' ),
	);
	register_sidebar( $args );

}

// Hook into the 'widgets_init' action
add_action( 'widgets_init', 'contact_sidebar' );




function axl_rodeoday_load_js()
{
  
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', '//code.jquery.com/jquery-1.10.2.min.js', array(), null, false );	
	wp_enqueue_script( 'jquery' );	
	wp_register_script( 'bootstrap', '//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js', array('jquery') );
    wp_enqueue_script( 'bootstrap' );
	
	
          
}


add_action( 'wp_enqueue_scripts', 'axl_rodeoday_load_js' );


function axl_rodeoday_load_css()
{
    wp_register_style( 'bootstrap', '//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css', array(), '3.1.0', 'all' );
    wp_register_style( 'bootstrap-theme', '//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css', array('bootstrap'), '3.1.0', 'all' );
	wp_register_style( 'main-style', get_template_directory_uri() .'/style.css', array('bootstrap','bootstrap-theme'));	
	wp_enqueue_style( 'main-style' );

}
add_action( 'wp_enqueue_scripts', 'axl_rodeoday_load_css' );






if ( ! function_exists( 'axl_base_nobarra_setup' ) ):

function axl_base_nobarra_setup() {
	
	add_filter('the_generator', create_function('', 'return "";'));
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action( 'wp_head', 'wp_generator' ); // Display the XHTML generator that is generated on the wp_head hook, WP version
	remove_action( 'wp_head', 'index_rel_link' ); // index link
	remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); // prev link
	remove_action( 'wp_head', 'start_post_rel_link', 10, 0 ); // start link
	remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 ); // Display relational links for the posts adjacent to the current post.
	remove_action('init','wp_admin_bar_init');
	remove_filter('init','wp_admin_bar_init');
	foreach(array('wp_footer','wp_admin_bar_render')as$filter)
		add_action($filter,'wp_admin_bar_render',1000);
	foreach(array('wp_footer','wp_admin_bar_render')as$filter)
		add_action($filter,'wp_admin_bar_render',1000);
	remove_action('wp_head','wp_admin_bar_render',1000);
	remove_filter('wp_head','wp_admin_bar_render',1000);
	remove_action('wp_footer','wp_admin_bar_render',1000);
	remove_filter('wp_footer','wp_admin_bar_render',1000);
	remove_action('admin_head','wp_admin_bar_render',1000);
	remove_filter('admin_head','wp_admin_bar_render',1000);
	remove_action('admin_footer','wp_admin_bar_render',1000);
	remove_filter('admin_footer','wp_admin_bar_render',1000);
	remove_action('wp_before_admin_bar_render','wp_admin_bar_me_separator',10);
	remove_action('wp_before_admin_bar_render','wp_admin_bar_my_account_menu',20);
	remove_action('wp_before_admin_bar_render','wp_admin_bar_my_blogs_menu',30);
	remove_action('wp_before_admin_bar_render','wp_admin_bar_blog_separator',40);
	remove_action('wp_before_admin_bar_render','wp_admin_bar_bloginfo_menu',50);
	remove_action('wp_before_admin_bar_render','wp_admin_bar_edit_menu',100);
	remove_action('wp_head','wp_admin_bar_css');
	remove_action('wp_head','wp_admin_bar_dev_css');
	remove_action('wp_head','wp_admin_bar_rtl_css');
	remove_action('wp_head','wp_admin_bar_rtl_dev_css');
	remove_action('admin_head','wp_admin_bar_css');
	remove_action('admin_head','wp_admin_bar_dev_css');
	remove_action('admin_head','wp_admin_bar_rtl_css');
	remove_action('admin_head','wp_admin_bar_rtl_dev_css');
	remove_action('wp_footer','wp_admin_bar_js');
	remove_action('wp_footer','wp_admin_bar_dev_js');
	remove_action('admin_footer','wp_admin_bar_js');
	remove_action('admin_footer','wp_admin_bar_dev_js');
	remove_action('wp_ajax_adminbar_render','wp_admin_bar_ajax_render');
	remove_action('personal_options',' _admin_bar_preferences');
	remove_filter('personal_options',' _admin_bar_preferences');
	remove_action('personal_options',' _get_admin_bar_preferences');
	remove_filter('personal_options',' _get_admin_bar_preferences');
	remove_filter('locale','wp_admin_bar_lang');
	add_filter('show_admin_bar','__return_false');		 
}

endif;

add_action( 'after_setup_theme', 'axl_base_nobarra_setup', 1 );










// add a favicon to your
function blog_favicon() {
echo '<link rel="Shortcut Icon" type="image/x-icon" href="'. get_template_directory_uri().'/img/favicon.ico" />';
}
add_action('wp_head', 'blog_favicon');

function pagelink (){
global $post;

if ( is_home() ) {
    return get_bloginfo( 'url' );
} else {
    $page_id     = $post->ID;
	return get_permalink( $page_id );
}

}




function languages_list_footer($layout=true){
    $languages = icl_get_languages('skip_missing=0&orderby=code');
    if(!empty($languages)){
       if($layout) echo '<div id="footer_language_list"><ul>';
        foreach($languages as $l){
            echo '<li>';
            if($l['country_flag_url']){
                if(!$l['active']) echo '<a href="'.$l['url'].'">';
                echo '<img src="'.$l['country_flag_url'].'" height="12" alt="'.$l['language_code'].'" width="18" />';
                if(!$l['active']) echo '</a>';
            }
            if(!$l['active']) echo '<a href="'.$l['url'].'">';
            echo icl_disp_language($l['native_name'], $l['translated_name']);
            if(!$l['active']) echo '</a>';
            echo '</li>';
        }
       if($layout)   echo '</ul></div>';
    }
}

