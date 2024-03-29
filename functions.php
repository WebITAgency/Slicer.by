<?php
/**
 * slicer functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package slicer
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'slicer_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function slicer_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on slicer, use a find and replace
		 * to change 'slicer' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'slicer', get_template_directory() . '/languages' );

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
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				//'menu-1' => esc_html__( 'Primary', 'slicer' ),
				'header-menu' => esc_html__( 'Хедер', 'slicer' ),
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
				'slicer_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'slicer_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function slicer_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'slicer_content_width', 640 );
}
add_action( 'after_setup_theme', 'slicer_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function slicer_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'slicer' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'slicer' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'slicer_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function slicer_scripts() {
	wp_enqueue_style( 'slicer-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'slicer-style', 'rtl', 'replace' );
	wp_enqueue_script( 'slicer-glide-lib', get_template_directory_uri() . '/node_modules/@glidejs/glide/dist/glide.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'slicer-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'slicer-index', get_template_directory_uri() . '/script/index.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'slicer-menu', get_template_directory_uri() . '/script/menu.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'slicer-popup', get_template_directory_uri() . '/script/popup.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'slicer-glideJsMount', get_template_directory_uri() . '/script/glideJsMount.js', array(), _S_VERSION, true );
	//wp_enqueue_script( 'slicer-ajax-search', get_template_directory_uri() . '/script/ajax-search.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'slicer-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), _S_VERSION, true );




	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'slicer_scripts' );

function additional_custom_styles() {
    wp_enqueue_style( 'uniquestylesheetid', get_template_directory_uri() . '/css/style.css' );
    wp_enqueue_style( 'slicer-glide', get_template_directory_uri() . '/node_modules/@glidejs/glide/dist/css/glide.core.min.css' );
    wp_enqueue_style( 'slicer-glide', get_template_directory_uri() . '/node_modules/@glidejs/glide/dist/css/glide.theme.min.css' );

}
add_action( 'wp_enqueue_scripts', 'additional_custom_styles' );

function slicer_bg_url($path){
	return 'background: url(' . $path . ');' ;
}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function custom_excerpt_length( $length ) {
	return 15;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function my_enqueue() {
	wp_enqueue_script( 'ajax-script', get_template_directory_uri() . '/script/ajax-search.js', array() , true);
	wp_localize_script( 'ajax-script', 'my_ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' )));
	wp_enqueue_script( 'ajax-feedback', get_template_directory_uri() . '/script/ajax-feedback.js', '','',true);
	wp_localize_script( 'ajax-script', 'my_ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' )));
}
add_action( 'wp_enqueue_scripts', 'my_enqueue' );


function ajax_search()
{
    $args = array(
        'post_type'      => 'any', // Тип записи: post, page, кастомный тип записи
        'post_status'    => 'publish',
        'order'          => 'DESC',
        'orderby'        => 'date',
        's'              => $_POST['term'],
        'posts_per_page' => -1
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post(); ?>
            <li class="ajax-search__item search-mark">
                <a class="search-mark" href="<?php the_permalink(); ?>" class="ajax-search__link"><?php the_title(); ?></a>
                <div class="ajax-search__excerpt search-mark"><?php the_excerpt(); ?></div>
            </li>
        <?php }
    } else { ?>
        <li class="ajax-search__item search-mark">
            <div class="ajax-search__not-found search-mark">Ничего не найдено</div>
        </li>
<?php }
    exit;
}
add_action('wp_ajax_nopriv_ajax_search', 'ajax_search');
add_action('wp_ajax_ajax_search', 'ajax_search');

function ajax_search_mobile()
{
    $args = array(
        'post_type'      => 'any', // Тип записи: post, page, кастомный тип записи
        'post_status'    => 'publish',
        'order'          => 'DESC',
        'orderby'        => 'date',
        's'              => $_POST['term'],
        'posts_per_page' => -1
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post(); ?>
            <li class="ajax-search-mobile__item search-mark">
                <a class="ajax-search-mobile__link search-mark-mobile" href="<?php the_permalink(); ?>" class="ajax-search__link"><?php the_title(); ?></a>
                <div class="ajax-search-mobile__excerpt search-mark"><?php the_excerpt(); ?></div>
            </li>
        <?php }
    } else { ?>
        <li class="ajax-search-mobile__item search-mark-mobile">
            <div class="ajax-search-mobile__not-found search-mark-mobile">Ничего не найдено</div>
        </li>
<?php }
    exit;
};
add_action('wp_ajax_nopriv_ajax_search_mobile', 'ajax_search_mobile');
add_action('wp_ajax_ajax_search_mobile', 'ajax_search_mobile');

function ajax_feedback()
{
	$name = $_POST['term']['name'];
	$patronymic = $_POST['term']['patronymic'];
	$phonenumber = $_POST['term']['phonenumber'];
	$email = $_POST['term']['email'];
	$comment = $_POST['term']['comment'];

	$response =
	"Новая заявка на обратную звязь! \n" . 
	$name . " " . $patronymic . " " . $phonenumber . " " . $email . " " . $comment;

	mail('test@test.com', 'me@test.com', $response, 'Новая заявка на обратную звязь!');
	exit;
}
add_action('wp_ajax_nopriv_ajax_feedback', 'ajax_feedback');
add_action('wp_ajax_ajax_feedback', 'ajax_feedback');
