<?php
/**
 * Build functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Build
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
function build_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Build, use a find and replace
		* to change 'build' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'build', get_template_directory() . '/languages' );

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

	//Crop Images
	add_image_size( 'houses_archive', 350, 260, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-header' => esc_html__( 'Primary', 'build' ),
			'menu-footer' => esc_html__( 'Footer', 'build' ),
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
			'build_custom_background_args',
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
add_action( 'after_setup_theme', 'build_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function build_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'build_content_width', 640 );
}
add_action( 'after_setup_theme', 'build_content_width', 0 );

/**


/**
 * Enqueue scripts and styles.
 */
function build_scripts() {
	wp_enqueue_style( 'build-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style('build-reset', get_template_directory_uri() . '/layouts/css/general.css', array(), '1.0', false );
	wp_enqueue_style('build-reset', get_template_directory_uri() . '/layouts/css/reset.css', array(), '1.0', false );
	wp_enqueue_style('build-font',  'https://fonts.googleapis.com', array(), '1.0', false );
	wp_enqueue_style('build-gstatic',  'https://fonts.gstatic.com', array(), '1.0', false );
	wp_enqueue_style('build-fonts',  'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&family=Oswald:wght@300;700&display=swap', array(), '1.0', false );
	wp_enqueue_style('build-reset', get_template_directory_uri() . '/layouts/css/slick.css', array(), '1.0', false );
	


	wp_enqueue_script( 'build-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.min.js', array('jquery') , _S_VERSION, true );
	if(is_front_page( )) {
	wp_enqueue_script( 'build-home', get_template_directory_uri() . '/js/home.js', array(), _S_VERSION, true );
};
	wp_enqueue_script( 'build-project', get_template_directory_uri() . '/js/project.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'build-main', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'build_scripts' );

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
 * TGM init
 * Required plugins installed
 */
require get_template_directory() . '/inc/tgm-list.php';


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


/**
 *  Metaboxes Options
 */
require get_template_directory() . '/inc/metaboxes.php';

function build_metaboxes() {
	wp_reset_postdata();
	$prefix = "build_";
	$meta_boxes = array();

	// Homepage Metabox
	$meta_boxes[] = array(
			'id'         => 'homepage_metabox',
			'title'      => 'Налаштування домашньої сторінки',
			'pages'      => array( 'page' ),
			'context'    => 'normal',
			'priority'   => 'high',
			'show_names' => true,
			'show_on'    => array( 'key' => 'page-template', 'value' => array('template-home.php'), ), // Specific post templates to display this metabox
			'fields'     => array(
				//About Section
				array(
					'name' => esc_html__('Головний заголовок блоку "Про нас"', 'build'),
					'desc' => esc_html__('Введіть заголовок для блоку "Про нас"', 'build'),
					'id'   => $prefix . 'about_title_main',
					'std'  => '',
					'type' => 'text',
				),
				array(
					'name' => esc_html__('Підзаголовок 1 блоку "Про нас"', 'build'),
					'desc' => esc_html__('Введіть підзаголовок 1 для блоку "Про нас"', 'build'),
					'id'   => $prefix . 'about_subtitle1',
					'std'  => '',
					'type' => 'text',
				),
				array(
					'name' => esc_html__('Текст 1 блоку "Про нас"', 'build'),
					'desc' => esc_html__('Введіть текст 1 для блоку "Про нас" через вкладку "Текст". Кожен новий абзац вставте в всередину тегу <p class="about__content-text">ТУТ ВАШ ТЕКСТ</p>. Скопіюйте і вставте новий тег, щоб додати ще новий абзац', 'build'),
					'id'   => $prefix . 'about_text1',
					'std'  => '',
					'type' => 'wysiwyg',
				),
				array(
					'name' => esc_html__('Підзаголовок 2 блоку "Про нас"', 'build'),
					'desc' => esc_html__('Введіть підзаголовок 2 для блоку "Про нас"', 'build'),
					'id'   => $prefix . 'about_subtitle2',
					'std'  => '',
					'type' => 'text',
				),
				array(
					'name' => esc_html__('Фото 1 блоку "Про нас"', 'build'),
					'desc' => esc_html__('Прикріпіть фото 1 Рекомендований розмір: 600px*299px', 'build'),
					'id'   => $prefix . 'about-photo1',
					'std'  => '',
					'type' => 'file',
				),
				array(
					'name' => esc_html__('Текст 2 блоку "Про нас"', 'build'),
					'desc' => esc_html__('Введіть текст 2 для блоку "Про нас" через вкладку "Текст". Кожен новий абзац вставте в всередину тегу <p class="about__content-text">ТУТ ВАШ ТЕКСТ</p>. Скопіюйте і вставте новий тег, щоб додати ще новий абзац', 'build'),
					'id'   => $prefix . 'about_text2',
					'std'  => '',
					'type' => 'wysiwyg',
				),
				array(
					'name' => esc_html__('Фото 2 блоку "Про нас"', 'build'),
					'desc' => esc_html__('Прикріпіть фото 2 Рекомендований розмір: 600px*299px', 'build'),
					'id'   => $prefix . 'about-photo2',
					'std'  => '',
					'type' => 'file',
				),
				array(
					'name' => esc_html__('Кнопка "Про нас"', 'build'),
					'desc' => esc_html__('Вставте текст кнопки', 'build'),
					'id'   => $prefix . 'about_button',
					'std'  => '',
					'type' => 'text',
				),
				array(
					'name' => esc_html__('Декор блоку "Про нас"', 'build'),
					'desc' => esc_html__('Прикріпіть фото. Рекомендований розмір: 87px*276px', 'build'),
					'id'   => $prefix . 'about_decor',
					'std'  => '',
					'type' => 'file',
				),
				//Projects Section
				array(
					'name' => esc_html__('Заголовок блоку "Проекти"', 'build'),
					'desc' => esc_html__('Введіть заголовок для блоку "Проекти"', 'build'),
					'id'   => $prefix . 'projects_title',
					'std'  => '',
					'type' => 'text',
				),
				//Contact Section
				array(
					'name' => esc_html__('Заголовок блоку "Контакти"', 'build'),
					'desc' => esc_html__('Введіть заголовок для блоку "Контакти"', 'build'),
					'id'   => $prefix . 'contact_title',
					'std'  => '',
					'type' => 'text',
				),
				//form shortcode
				array(
					'name' => esc_html__('Contact Form Shortcode','build'),
					'desc' => esc_html__('You can use any contact form plugin. Generate the form and paste the shortcode here.', 'build'),
					'id'   => $prefix . 'contact_form_shortcode',
					'std'  => '',
					'type' => 'textarea_code',
				),
				//Contact Info
				array(
					'name' => esc_html__('Зображення секції "Контакти"', 'build'),
					'desc' => esc_html__('Прикріпіть фото. Рекомендований розмір: 534px*340px', 'build'),
					'id'   => $prefix . 'contact_img',
					'std'  => '',
					'type' => 'file',
				),
				array(
					'name' => esc_html__('Телефон 1', 'build'),
					'desc' => esc_html__('Введіть номер телефону 1', 'build'),
					'id'   => $prefix . 'contact_phone1',
					'std'  => '',
					'type' => 'text',
				),
				array(
					'name' => esc_html__('Телефон 2', 'build'),
					'desc' => esc_html__('Введіть номер телефону 2', 'build'),
					'id'   => $prefix . 'contact_phone2',
					'std'  => '',
					'type' => 'text',
				),
				array(
					'name' => esc_html__('Email','build'),
					'desc' => esc_html__('Вставте Email', 'build'),
					'id'   => $prefix . 'email',
					'std'  => '',
					'type' => 'text',
				),
			)
	);

	// House Metabox
$meta_boxes[] = array(
	'id'         => 'house_metabox',
	'title'      => 'Деталі будинку',
	'pages'      => array( 'houses' ),
	'context'    => 'normal',
	'priority'   => 'high',
	'show_names' => true,
	'fields'     => array(
		array(
			'name' => esc_html__('Підзаголовок', 'build'),
			'desc' => esc_html__('Опишіть будинок декількома словами, цей текст буде відображатия під заголовком.', 'build'),
			'id'   => $prefix . 'subtitle',
			'std'  => '',
			'type' => 'text',
	),
			array(
					'name' => esc_html__('Площа будинку: ', 'build'),
					'desc' => esc_html__('Вкажіть площу будинку', 'build'),
					'id'   => $prefix . 'space',
					'std'  => '',
					'type' => 'text',
			),
			array(
					'name' => esc_html__('Кількість поверхів', 'build'),
					'desc' => esc_html__('Вкажіть кількість поверхів в будинку', 'build'),
					'id'   => $prefix . 'storey',
					'std'  => '',
					'type' => 'select',
					'options' => array(
						array(
							'value'  => 'одноповерховий',
							'name'  => 'одноповерховий',
						),
						array(
							'value'  => 'двоповерховий',
							'name'  => 'двоповерховий',
						),
					),
			),
			array(
				'name' => esc_html__('Рік введення в експлуатацію: ', 'build'),
				'desc' => esc_html__('Вкажіть Рік введення в експлуатацію', 'build'),
				'id'   => $prefix . 'year',
				'std'  => '2018',
				'type' => 'text_int',
		),
		array(
			'name' => esc_html__('Наявність житлової масандри', 'build'),
			'desc' => esc_html__('Виберіть варіант', 'build'),
			'id'   => $prefix . 'attic',
			'std'  => '',
			'type' => 'select',
			'options' => array(
				array(
					'value'  => 'з житловою масандрою',
					'name'  => 'з житловою масандрою',
				),
				array(
					'value'  => 'без житлової масандри',
					'name'  => 'без житлової масандри',
				),
			),
		),
		array(
			'name' => esc_html__('Текст кнопки проекту', 'build'),
			'desc' => esc_html__('Введіть текст кнопки для переходу до обраного проекту або залиште за змовчуванням', 'build'),
			'id'   => $prefix . 'projects_button',
			'std'  => 'Детальніше',
			'type' => 'text',
		),
	)
);


	return $meta_boxes;
}
/**
 *  Init Redux Theme Options Settings
 */
require get_template_directory() . '/inc/redux-options.php';


//Create custom POST TYPE
function build_create_post_type() {
	register_post_type('houses',
		array(
			'labels'      => array(
				'name'          => esc_html__('Houses', 'build'),
				'singular_name' => esc_html__('House', 'build'),
			),
				'public'      => true,
				'has_archive' => true,
				'menu_icon' => 'dashicons-fullscreen-alt',
				'supports' => array( 'title', 'editor', 'thumbnail'),
		)
	);
	register_post_type('steps',
		array(
			'labels'      => array(
				'name'          => esc_html__('Кроки', 'build'),
				'singular_name' => esc_html__('Крок', 'build'),
			),
				'public'      => true,
				'has_archive' => false,
				'menu_icon' => 'dashicons-fullscreen-alt',
				'supports' => array( 'title', 'editor' ),
		)
	);

}
add_action('init', 'build_create_post_type');


//Taxonomy for house
// function build_tax() {
// 	register_taxonomy(
// 		'house-space',
// 		'houses',
// 		array(
// 			'label' => esc_html__('Площа будинку: ', 'build'),
// 			'rewrite' => array('slug' => 'houses'),
// 		),
// 	);
// 	register_taxonomy(
// 		'house-storey',
// 		'houses',
// 		array(
// 			'label' => esc_html__('Кількість поверхів', 'build'),
// 			'rewrite' => array('slug' => 'houses'),
// 		),
// 	);
// }
// add_action( 'init', 'build_tax' );
