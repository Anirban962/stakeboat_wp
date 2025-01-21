<?php
    $themename ="Stakeboat Capital - Private Equity";

    // menu code starts
    // This theme uses wp_nav_menu() in header location.  
        register_nav_menus( array(  
         'primary' => __( 'Header Menu', '$themename' ),
        )); 
       
        // for header menu
        function add_nav_item_class($classes, $item, $args) {
            $classes[] = 'nav-item'; // Add "nav-item" class to each <li>
            return $classes;
        }
        add_filter('nav_menu_css_class', 'add_nav_item_class', 10, 3);

        
        function add_nav_link_class($atts, $item, $args) {
            $atts['class'] = 'nav-link'; // Add "nav-link" class to each <a>
            
            if (in_array('current-menu-item', $item->classes)) {
                $atts['class'] .= ' active'; // Add "active" class if it's the current page
            }
            
            return $atts;
        }
        add_filter('nav_menu_link_attributes', 'add_nav_link_class', 10, 3);
         // for header menu
        
// menu code ends




    //theme support
    add_theme_support('title-tag');
    
    //add thumbnail
    add_theme_support('post-thumbnails');

    add_image_size('breadcumb_image',1920,767,true);
     add_image_size('servicefirst_thumb',370,250,true); 
     add_image_size('service_thumb',980,659,true); 
     add_image_size('blog_thumb',370,260,true); 
     
     // acf code
if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'   => 'theme-general-settings',
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));
    

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme 404 Page Settings',
        'menu_title'    => '404 Pages',
        'parent_slug'   => 'theme-general-settings',
    ));

     acf_add_options_sub_page(array(
        'page_title'    => 'Single Service Page Settings',
        'menu_title'    => 'Portfolio Details',
        'parent_slug'   => 'theme-general-settings',
    ));
}

add_filter( 'wp_enqueue_scripts', 'change_default_jquery', PHP_INT_MAX );




/**
 * Enqueue scripts and styles.
 */
function stakeboat_scripts() {
	wp_enqueue_style( 'stakeboat-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'stakeboat-style', 'rtl', 'replace' );

	wp_enqueue_script( 'stakeboat-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'stakeboat_scripts' );

