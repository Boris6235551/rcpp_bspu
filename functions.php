<?php
/**
 * rcpp functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package rcpp
 */

if ( ! function_exists( 'rcpp_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function rcpp_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on rcpp, use a find and replace
		 * to change 'rcpp' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'rcpp', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'rcpp' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'rcpp_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'rcpp_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function rcpp_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'rcpp_content_width', 640 );
}
add_action( 'after_setup_theme', 'rcpp_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function rcpp_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'rcpp' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'rcpp' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'rcpp_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function rcpp_scripts() {
	wp_enqueue_style( 'rcpp-style', get_stylesheet_uri() );

	wp_enqueue_script( 'rcpp-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'rcpp-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'rcpp_scripts' );

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
// подключение стилей

add_action( 'wp_enqueue_scripts' , 'csot_scripts' );
function csot_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
}

// подключение скриптов

add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
function my_scripts_method(){
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), ' ' );
	wp_enqueue_script( 'jquery-latest', get_template_directory_uri() . '/js/jquery-latest.min.js', ' ' );
	wp_enqueue_script( 'jquery.maskedinput.min', get_template_directory_uri() . '/js/jquery.maskedinput.min.js', ' ' );
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', ' ' );

}

// фильтр, добовляет к элементам li a главного меню стили bootstrap
add_filter( 'nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 4 );
function filter_nav_menu_link_attributes( $atts, $item, $args, $depth ) { 
	if ($item->ID == 44 || $item->ID == 45 || $item->ID == 46 || $item->ID == 457 || $item->ID == 48 || $item->ID == 470) {
		$atts['class'] .= 'flex-sm-fill text-sm-center nav-link active';
	}
	if ($item->ID == 470) {
		$atts['href'] = 'http://learning.rcpp.by';
		$atts['target'] = '_blank';
	}
	return $atts;
}

// удаление меню записей из админки
add_action( 'admin_menu', 'remove_menus' );
function remove_menus(){
	remove_menu_page( 'edit.php' );
	remove_menu_page( 'edit-comments.php' );   
	remove_menu_page( 'index.php' );              
}

// создание типа записей новости

add_action('init', 'my_custom_init');
function my_custom_init(){
	register_post_type('news', array(
		'labels'             => array(
			'name'               => 'Новости', // Основное название типа записи
			'singular_name'      => 'Новости', // отдельное название записи типа Book
			'add_new'            => 'Добавить новость',
			'add_new_item'       => 'Добавить новую новость',
			'edit_item'          => 'Редактировать новость',
			'new_item'           => 'Новая новость',
			'view_item'          => 'Посмотреть новую новость',
			'search_items'       => 'Найти новость',
			'not_found'          => 'Новость не найдена',
			'not_found_in_trash' => '',
			'parent_item_colon'  => '',
			'menu_name'          => 'Новости'

		  ),
		'menu_icon'           => 'dashicons-testimonial',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 4,
		'supports'           => array('title','thumbnail','editor'),
		'taxonomies'         => array(''),
	) );

// создание типа записей статьи

	register_post_type('article', array(
		'labels'             => array(
			'name'               => 'Статьи', // Основное название типа записи
			'singular_name'      => 'Статья', // отдельное название записи типа Book
			'add_new'            => 'Добавить статью',
			'add_new_item'       => 'Добавить новую статью',
			'edit_item'          => 'Редактировать статью',
			'new_item'           => 'Новая статья',
			'view_item'          => 'Посмотреть статью',
			'search_items'       => 'Найти статью',
			'not_found'          => 'Статья не найдена',
			'not_found_in_trash' => '',
			'parent_item_colon'  => '',
			'menu_name'          => 'Статьи'

		  ),
		'menu_icon'           => 'dashicons-text-page',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 4,
		'supports'           => array('title','thumbnail','editor'),
		'taxonomies'         => array(),
	) );
	}

	// добавление таксономий
// хук для регистрации
add_action( 'init', 'create_taxonomy_article' );
function create_taxonomy_article(){
	// список параметров: http://wp-kama.ru/function/get_taxonomy_labels
	register_taxonomy('taxonomy_article', array('article'), array(
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => array(
			'name'              => 'Категории статей',
			'singular_name'     => 'Категории статей',
			'search_items'      => 'Найти категорию статьи',
			'all_items'         => 'Все категории статей',
			'view_item '        => 'Смотреть категорию статей',
			'parent_item'       => 'Родительская категория статей',
			'parent_item_colon' => 'Родительская категория статей:',
			'edit_item'         => 'Изменить категорию статей',
			'update_item'       => 'Обновить категорию статей',
			'add_new_item'      => 'Добавить категорию новой статьи',
			'new_item_name'     => 'Новое название для категории статей',
			'menu_name'         => 'Категории статей',
		),
		'description'           => 'Категории статей', // описание таксономии
		'public'                => true,
		'publicly_queryable'    => null, // равен аргументу public
		'show_in_nav_menus'     => true, // равен аргументу public
		'show_ui'               => true, // равен аргументу public
		'show_in_menu'          => true, // равен аргументу show_ui
		'show_tagcloud'         => true, // равен аргументу show_ui
		'hierarchical'          => true,
		//'update_count_callback' => '_update_post_term_count',
		'rewrite'               => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'          => array(),
		'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
		'show_admin_column'     => false, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
		'_builtin'              => false,
		'show_in_quick_edit'    => null, // по умолчанию значение show_ui
	) );
}

// обрезка статьи

add_filter( 'excerpt_more', 'new_excerpt_more' );
function new_excerpt_more( $more ){
	global $post;
	return '&nbsp;<a href="'. get_permalink($post) . '">(читать дальше)</a>';
}

add_filter( 'excerpt_length', function(){
	return 20;
} );