<?php
/**
 * Embrace Nature - Custom functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Embrace Nature Custom
 * @since Embrace Nature Custom 1.0
 */
 

/**
 * Constants
 * Defining default asset paths
 */
define('AIRDESIGNS_DIR_CSS', get_template_directory_uri().'/assets/css');
define('AIRDESIGNS_DIR_JS', get_template_directory_uri().'/assets/js');
define('AIRDESIGNS_DIR_IMG', get_template_directory_uri().'/assets/img');

require_once('wp_bootstrap_navwalker.php');

function airdesigns_theme_support() {
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'responsive-embeds' );

	//add_image_size( 'thumb-custom', 350, 180, false );

	load_theme_textdomain('airdesigns', get_template_directory() . '/languages');

	register_nav_menus( array(
	  'primary' => esc_html__( 'Primary Header', 'airdesigns' ),
	  'footer-1' => esc_html__( 'Footer One', 'airdesigns' ),
	  'footer-2' => esc_html__( 'Footer Two', 'airdesigns' ),
	  'footer-3' => esc_html__( 'Footer Three', 'airdesigns' ),
	  'footer-4' => esc_html__( 'Footer Four', 'airdesigns' )
	) );
}
add_action( 'after_setup_theme', 'airdesigns_theme_support' );



function airdesigns_register_styles_and_scripts() {
	
	wp_enqueue_script( 'jquary-min-js', AIRDESIGNS_DIR_JS.'/jquary.min.js', array('jquery'), time(), true ); 
	wp_enqueue_script( 'slick-js', AIRDESIGNS_DIR_JS.'/slick.js', array('jquery'), time(), true ); 
	wp_enqueue_script('bootstrap-js', AIRDESIGNS_DIR_JS.'/bootstrap.min.js', array(), time(), true);
	
    wp_enqueue_script( 'luckybansko-js', AIRDESIGNS_DIR_JS.'/custom.js', array('jquery'), filemtime( get_template_directory().'/assets/js/custom.js' ), true );


	wp_enqueue_style( 'slick-css',  AIRDESIGNS_DIR_CSS.'/slick.css' );
	wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), false, 'all');
	wp_enqueue_style('slick.theme', 'http://kenwheeler.github.io/slick/slick/slick-theme.css"
	', array(), false, 'all');
    wp_enqueue_style( 'main_style',  AIRDESIGNS_DIR_CSS . '/style.css', array(), time() );

}
add_action( 'wp_enqueue_scripts', 'airdesigns_register_styles_and_scripts' );




function airdesigns_skip_link() {
	echo '<a class="skip-link screen-reader-text" href="#site-content">' . __( 'Skip to the content', 'airdesigns' ) . '</a>';
}
add_action( 'wp_body_open', 'airdesigns_skip_link', 5 );



function airdesigns_sidebar_registration() {

	// Arguments used in all register_sidebar() calls.
	$shared_args = array(
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
		'before_widget' => '<div class="widget %2$s"><div class="single-footer-wid">',
		'after_widget'  => '</div></div>',
	);

	// Footer #1.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer #1', 'airdesigns' ),
				'id'          => 'footer-1',
				'description' => __( 'Widgets in this area will be displayed in the first column in the footer.', 'airdesigns' ),
			)
		)
	);

	// Footer #2.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer #2', 'airdesigns' ),
				'id'          => 'footer-2',
				'description' => __( 'Widgets in this area will be displayed in the second column in the footer.', 'airdesigns' ),
			)
		)
	);

	// Footer #3.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer #3', 'airdesigns' ),
				'id'          => 'footer-3',
				'description' => __( 'Widgets in this area will be displayed in the three column in the footer.', 'airdesigns' ),
			)
		)
	);

	// Footer #4.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer #4', 'airdesigns' ),
				'id'          => 'footer-4',
				'description' => __( 'Widgets in this area will be displayed in the four column in the footer.', 'airdesigns' ),
			)
		)
	);

}
add_action( 'widgets_init', 'airdesigns_sidebar_registration' );


function add_upload_mimes($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
    $mimes['doc'] = 'application/msword';
    $mimes['csv'] = 'text/csv';
    unset( $mimes['exe'] );
    return $mimes;
}
add_filter('upload_mimes', 'add_upload_mimes');


/*** ACF OPTIONS PAGE */
if(function_exists('acf_add_options_page')) {
	acf_add_options_page();
}

/*** Get all page id */ 
function getPageID() {
	global $post;

	if(is_home() && get_option('page_for_posts')) 
	{
		return get_option('page_for_posts');
	} 

	if(get_post_type() == 'page' && $post->post_parent ) {
		$ancestors = get_post_ancestors($post->ID);
		$root = count($ancestors)-1;
		return $ancestors[$root];
	}

	return $post->ID;
}

