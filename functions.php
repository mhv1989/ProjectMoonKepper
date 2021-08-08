<?php

function theme_styles()
{

	wp_enqueue_style('bootstrap_css', get_template_directory_uri(). '/assets/css/bootstrap.min.css');
	wp_enqueue_style('main_css', get_template_directory_uri(). '/assets/css/main.css');
	wp_enqueue_style('style_css', get_template_directory_uri(). '/style.css');

}
add_action('wp_enqueue_scripts', 'theme_styles');

function theme_script()
{
	// False: header, True: footer
	// wp_enqueue_script('smart_js', get_template_directory_uri(). '/assets/js/smart.js', '', '', false);
	// wp_enqueue_script('jquery', get_template_directory_uri(). '/assets/js/jquery-2.1.0.min.js', '', '', true);
	wp_enqueue_script('popper_js', get_template_directory_uri(). '/assets/js/popper.min.js', array('jquery'), '', true);
	wp_enqueue_script('bootstrap_js', get_template_directory_uri(). '/assets/js/bootstrap.min.js', array('jquery'), '', true);
	wp_enqueue_script('index_js', get_template_directory_uri(). '/assets/scripts/index.js', '', '', true);
	// wp_enqueue_script('message_js', get_template_directory_uri(). '/assets/js/contact.js', array('jquery_js'), '', true);
}
add_action('wp_enqueue_scripts', 'theme_script');

// Remove Emoji
remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); 
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' ); 
remove_action( 'wp_print_styles', 'print_emoji_styles' ); 
remove_action( 'admin_print_styles', 'print_emoji_styles' );

add_theme_support( 'menus' );

function register_theme_menus()
{
	register_nav_menus(
		array(
			'header-menu' => __('Header Menu')
		)
	);
}
add_action('init', 'register_theme_menus');


function create_widget($name, $id, $description)
{
	register_sidebar(array(
		'name' => __( $name ),
		'id'   => $id,
		'description' => __( $description ),
		'before_widget' => '',
		'after_widget' => '',
		'class' => ''
	));
}
create_widget('Page Sidebar', 'page-sidebar', 'Page Sidebar');
create_widget('Blog Sidebar', 'blog', 'Post Sidebar');

create_widget('Footer One', 'footer-one', 'Description Activities');
create_widget('Footer Two', 'footer-two', 'Navigation');
create_widget('Footer Three', 'footer-three', 'Legal');
create_widget('Footer Four', 'footer-four', 'Contact Us');


// function create_sidebar_widget($name, $id, $description)
// {
// 	register_sidebar(array(
// 		'name' => __($name),
// 		'id'   => $id,
// 		'description' => __($description),
// 		'before_widget' => '<div class="sidebar-widget">',
// 		'after_widget' => '</div>'
// 	));
// }
// create_sidebar_widget('Page Sidebar', 'post-widget', '');

function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }	
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}


// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
// 	wp_enqueue_script( 'comment-reply' );
// }

add_theme_support( 'post-thumbnails' );

// wp-includes/widgets/class-wp-widget-text.php 325