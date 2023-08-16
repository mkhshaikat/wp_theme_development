<?php
/**
 * neuron functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package neuron
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function neuron_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on neuron, use a find and replace
		* to change 'neuron' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'neuron', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails', );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'neuron' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'neuron_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'neuron_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function neuron_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'neuron_content_width', 640 );
}
add_action( 'after_setup_theme', 'neuron_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function neuron_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer-1', 'neuron' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add widgets here.', 'neuron' ),
			'before_widget' => ' <div class="single-footer">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);

  register_sidebar(
		array(
			'name'          => esc_html__( 'Footer-2', 'neuron' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'Add widgets here.', 'neuron' ),
			'before_widget' => ' <div class="single-footer">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>',
		)
	);

  register_sidebar(
		array(
			'name'          => esc_html__( 'Footer-3', 'neuron' ),
			'id'            => 'footer-3',
			'description'   => esc_html__( 'Add widgets here.', 'neuron' ),
			'before_widget' => ' <div class="single-footer">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>'
		)
	);
  
    register_sidebar(
		array(
			'name'          => esc_html__( 'comments-sidebar-4', 'neuron' ),
			'id'            => 'sidebar-4',
			'description'   => esc_html__( 'Add widgets here.', 'neuron' ),
			'before_widget' => '  <div class="comments">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>'
		)
	);

    register_sidebar(
		array(
			'name'          => esc_html__( 'latest-post-sidebar-5', 'neuron' ),
			'id'            => 'sidebar-5',
			'description'   => esc_html__( 'Add widgets here.', 'neuron' ),
			'before_widget' => ' <div class="sidebar-post">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>'
		)
	);

    register_sidebar(
		array(
			'name'          => esc_html__( 'catagory-sidebar-6', 'neuron' ),
			'id'            => 'sidebar-6',
			'description'   => esc_html__( 'Add widgets here.', 'neuron' ),
			'before_widget' => ' <div class="sidebar">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>'
		)
	);

   register_sidebar(
		array(
			'name'          => esc_html__( 'Google-Map', 'neuron' ),
			'id'            => 'sidebar-7',
			'description'   => esc_html__( 'Add Google-Map here.', 'neuron' ),
			'before_widget' => ' <div class="contact-map">',
			'after_widget'  => '</div>',
			'before_title'  => '<iframe>',
			'after_title'   => '</iframe>'
		)
	);



}
add_action( 'widgets_init', 'neuron_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function neuron_scripts() {
	wp_enqueue_style( 'neuron-style', get_stylesheet_uri(), array(), _S_VERSION );
	
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all' );
     wp_enqueue_style('font-awesome-css', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '1.0.0', 'all' );
      wp_enqueue_style('magnific-popup-css', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.0.0', 'all' );
      wp_enqueue_style('owl.carousel-css', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1.0.0', 'all' );
       wp_enqueue_style('owl.theme.default-css', get_template_directory_uri() . '/assets/css/owl.theme.default.css', array(), '1.0.0', 'all' );
        wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all' );
         wp_enqueue_style('responsive-css', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0.0', 'all' );



 wp_enqueue_script('jquery');

 wp_enqueue_script('popper.min-js', get_template_directory_uri() . '/assets/js/popper.min.js', array(), '1.0.0', 'true' );
 wp_enqueue_script('bootstrap.min-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0.0', 'true' );
 wp_enqueue_script('owl.carousel.min.-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '1.0.0', 'true' );
 wp_enqueue_script('waypoint.min-js', get_template_directory_uri() . '/assets/js/waypoint.min.js', array(), '1.0.0', 'true' );
  wp_enqueue_script('isotope.min-js', get_template_directory_uri() . '/assets/js/isotope.min.js', array(), '1.0.0', 'true' );
  wp_enqueue_script('magnific-popup.min-js', get_template_directory_uri() . '/assets/js/magnific-popup.min.js', array(), '1.0.0', 'true' );
 wp_enqueue_script('counterup.min-js', get_template_directory_uri() . '/assets/js/counterup.min.js', array(), '1.0.0', 'true' );
 wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', 'true' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'neuron_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/inc/bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

/**
 *ACF color 
 */

function acf_color() {
 ?>
	<style>
  .top-area{
    background-color: <?php the_field('header_color', 'option'); ?>
  }
  </style>
  <?php
}
add_action( 'wp_head', 'acf_color' );



/**
 * Our custom post type function
 */
function neuron_create_posttype() {
  //hero slider
    register_post_type( 'sliders',
   
        array(
            'labels' => array(
                'name' => __( 'sliders' ),
                'singular_name' => __( 'slider' )
            ),
            'public' => true,
             'show_ui' => true, 
            'has_archive' => true,
            'rewrite' => array('slug' => 'sliders'),
            'show_in_rest' => true,
            'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
  
        )
    );
//single-about post
      register_post_type( 'single-abouts',
        array(
            'labels' => array(
                'name' => __( 'single-abouts' ),
                'singular_name' => __( 'single-about' )
            ),
            'public' => true,
             'show_ui' => true, 
            'has_archive' => true,
            'rewrite' => array('slug' => 'single-abouts'),
            'show_in_rest' => true,
            'supports' => array( 'title', 'editor', 'custom-fields' ),
  
        )
    );
  
  //Services
    register_post_type( 'services',
        array(
            'labels' => array(
                'name' => __( 'services' ),
                'singular_name' => __( 'service' )
            ),
            'public' => true,
             'show_ui' => true, 
            'has_archive' => true,
            'rewrite' => array('slug' => 'services'),
            'show_in_rest' => true,
            'supports' => array( 'title', 'editor', 'custom-fields' ),
  
        )
    );


   //counters'
    register_post_type( 'counters',
        array(
            'labels' => array(
                'name' => __( 'counters' ),
                'singular_name' => __( 'counter' )
            ),
            'public' => true,
             'show_ui' => true, 
            'has_archive' => true,
            'rewrite' => array('slug' => 'counters'),
            'show_in_rest' => true,
            'supports' => array( 'title', 'editor', 'custom-fields' ),
  
        )
    );

    
   //Team
    register_post_type( 'teams',
        array(
            'labels' => array(
                'name' => __( 'teams' ),
                'singular_name' => __( 'team' )
            ),
            'public' => true,
             'show_ui' => true, 
            'has_archive' => true,
            'rewrite' => array('slug' => 'teams'),
            'show_in_rest' => true,
            'supports' => array( 'title', 'editor','thumbnail', 'page-attributes','custom-fields' ),
  
        )
    );

     //Testimonial
    register_post_type( 'testimonials',
        array(
            'labels' => array(
                'name' => __( 'testimonials' ),
                'singular_name' => __( 'testimonial' )
            ),
            'public' => true,
             'show_ui' => true, 
            'has_archive' => true,
            'rewrite' => array('slug' => 'testimonials'),
            'show_in_rest' => true,
            'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
  
        )
    );

   //Portfolios
      register_post_type( 'Portfolio',
        array(
            'labels' => array(
                'name' => __( 'Portfolios' ),
                'singular_name' => __( 'Portfolio' )
            ),
            'public' => true,
             'show_ui' => true, 
            'has_archive' => true,
           
            'show_in_rest' => true,
            'taxonomies'          => array( 'category', 'post_tag' ), 
            'hierarchical'        => true, 
            'public'              => true, 
           'show_ui'             => true,  
            'supports' => array( 'title', 'editor','thumbnail', 'custom-fields' ),
        ) 
    );


      //Gallary
      register_post_type( 'Gallery',
        array(
            'labels' => array(
                'name' => __( 'Gallerys' ),
                'singular_name' => __( 'Gallery' )
            ),
            'public' => true,
             'show_ui' => true, 
            'has_archive' => true,
           
            'show_in_rest' => true,
           
            'supports' => array( 'title', 'thumbnail', 'custom-fields' ),
  
        )
        
    );

 
}
add_action( 'init', 'neuron_create_posttype' );

// ACF Options

if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Neuron Theme Options','neuron',
        'menu_title'    => 'Neuron Theme Settings','neuron',
        'menu_slug'     => 'neuron-theme-general-settings','neuron',
        'capability'    => 'edit_posts','neuron',
        'redirect'      => false
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Neuron Theme Header Settings','neuron',
        'menu_title'    => 'Header','neuron',
        'parent_slug'   => 'neuron-theme-general-settings'
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Neuron Theme Footer Settings','neuron',
        'menu_title'    => 'Footer','neuron',
        'parent_slug'   => 'neuron-theme-general-settings'
    ));
      //about
    acf_add_options_sub_page(array(
        'page_title'    => 'Neuron Theme About Settings','neuron',
        'menu_title'    => 'About','neuron',
        'parent_slug'   => 'neuron-theme-general-settings'
    ));
    //FAQ And Skills
    acf_add_options_sub_page(array(
        'page_title'    => 'Neuron Theme FAQ-and-Skills Settings','neuron',
        'menu_title'    => 'FAQ-and-Skills','neuron',
        'parent_slug'   => 'neuron-theme-general-settings'
    ));
    //Our Services
    acf_add_options_sub_page(array(
        'page_title'    => 'Neuron Theme Our Services Settings','neuron',
        'menu_title'    => 'Our Services','neuron',
        'parent_slug'   => 'neuron-theme-general-settings'
    ));
    //Creative Team 
    acf_add_options_sub_page(array(
        'page_title'    => 'Neuron Theme Creative Team Settings','neuron',
        'menu_title'    => 'Creative Team','neuron',
        'parent_slug'   => 'neuron-theme-general-settings'
    ));
    //Client
    acf_add_options_sub_page(array(
        'page_title'    => 'Neuron Theme Client Settings','neuron',
        'menu_title'    => 'Client','neuron',
        'parent_slug'   => 'neuron-theme-general-settings'
    ));
     //Blog
    acf_add_options_sub_page(array(
        'page_title'    => 'Neuron Theme Blog Settings','neuron',
        'menu_title'    => 'Blog','neuron',
        'parent_slug'   => 'neuron-theme-general-settings'
    ));
      //CTA
    acf_add_options_sub_page(array(
        'page_title'    => 'Neuron Theme CTA Settings','neuron',
        'menu_title'    => 'CTA','neuron',
        'parent_slug'   => 'neuron-theme-general-settings'
    ));
        //Footer Contact
    acf_add_options_sub_page(array(
        'page_title'    => 'Neuron Theme Footer Contact Settings','neuron',
        'menu_title'    => 'Footer Contact','neuron',
        'parent_slug'   => 'neuron-theme-general-settings'
    ));
        //Copy Right
    acf_add_options_sub_page(array(
        'page_title'    => 'Neuron Theme Copy Right Settings','neuron',
        'menu_title'    => 'Copy Right','neuron',
        'parent_slug'   => 'neuron-theme-general-settings'
    ));

       //Contact
    acf_add_options_sub_page(array(
        'page_title'    => 'Neuron Theme Contact & map Settings','neuron',
        'menu_title'    => 'Contact & map','neuron',
        'parent_slug'   => 'neuron-theme-general-settings'
    ));

     
    
}
//google API
function ava_googlemaps_apikey() {
	$prefix  = is_ssl() ? "https" : "http";
    wp_deregister_script('avia-google-maps-api');
	wp_register_script( 'avia-google-maps-api', $prefix.'://maps.google.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg', array('jquery'), '3', true);
	wp_enqueue_script('avia-google-maps-api');
}
add_action('init', 'ava_googlemaps_apikey');


// comments text area bottom 


// This code block will add Placeholder text to WordPress comment's Author, Email, URL fields.
add_filter( 'comment_form_default_fields', 'crunchify_comment_placeholders' );
function crunchify_comment_placeholders( $crunchify_textfield ) {
    $crunchify_textfield['author'] = str_replace(
        '<input',
        '<input placeholder="Your Real Name"',
        $crunchify_textfield['author']
    );
    $crunchify_textfield['email'] = str_replace(
        '<input',
        '<input placeholder="Email Address"',
        $crunchify_textfield['email']
    );
    $crunchify_textfield['url'] = str_replace(
        '<input',
        '<input placeholder="Website"',
        $crunchify_textfield['url']
    );
    return $crunchify_textfield;
}

// This code block will add Placeholder text to Comment TextArea field.
add_filter( 'comment_form_defaults', 'crunchify_textarea_placeholder' );  
function crunchify_textarea_placeholder( $crunchify_textarea ) {
    $crunchify_textarea['comment_field'] = str_replace(
        '<textarea',
        '<textarea placeholder="Comment"',
        $crunchify_textarea['comment_field']
    );
    return $crunchify_textarea;
}



function qodef_custom_pagination() {
global $wp_query;
if ( get_query_var( 'paged' ) ) {
$paged = get_query_var( 'paged' );
} elseif ( get_query_var( 'page' ) ) {
$paged = get_query_var( 'page' );
} else {
$paged = 1;
}
if ( is_front_page() || is_home() || is_archive() || is_search() ) { ?>
<div class="qodef-custom-pagination">
<?php echo paginate_links( array(
'base' => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
'total' => $wp_query->max_num_pages,
'current' => $paged,
'prev_text' => '<span aria-label="' . esc_attr__( 'Previous page', 'textdomain' ) . '">' . esc_html__( '&laquo;', 'textdomain' ) . '</span>',
'next_text' => '<span aria-label="' . esc_attr__( 'Next page', 'textdomain' ) . '">' . esc_html__( '&raquo;', 'textdomain' ) . '</span>'
) ); ?>
</div>
<?php }
}
add_action( 'lekker_action_after_page_content_holder', 'qodef_custom_pagination' );