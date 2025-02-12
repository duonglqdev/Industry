<?php
/**
 * gnws functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package gnws
 */
$random_ver = rand(1, 1000000000);
if (!defined('GNWS_VERSION')) {
	/*
	 * Set the theme’s version number.
	 *
	 * This is used primarily for cache busting. If you use `npm run bundle`
	 * to create your production build, the value below will be replaced in the
	 * generated zip file with a timestamp, converted to base 36.
	 */
	define('GNWS_VERSION', $random_ver);
}

if (!defined('GNWS_TYPOGRAPHY_CLASSES')) {
	/*
	 * Set Tailwind Typography classes for the front end, block editor and
	 * classic editor using the constant below.
	 *
	 * For the front end, these classes are added by the `gnws_content_class`
	 * function. You will see that function used everywhere an `entry-content`
	 * or `page-content` class has been added to a wrapper element.
	 *
	 * For the block editor, these classes are converted to a JavaScript array
	 * and then used by the `./javascript/block-editor.js` file, which adds
	 * them to the appropriate elements in the block editor (and adds them
	 * again when they’re removed.)
	 *
	 * For the classic editor (and anything using TinyMCE, like Advanced Custom
	 * Fields), these classes are added to TinyMCE’s body class when it
	 * initializes.
	 */
	define(
		'GNWS_TYPOGRAPHY_CLASSES',
		'prose prose-neutral max-w-none prose-a:text-primary'
	);
}

if (!function_exists('gnws_setup')):
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function gnws_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on gnws, use a find and replace
		 * to change 'gnws' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('gnws', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => __('Menu Chính', 'gnws'),
				'menu-2' => __('Footer Menu', 'gnws'),
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

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		// Add support for editor styles.
		add_theme_support('editor-styles');

		// Enqueue editor styles.
		add_editor_style('style-editor.css');
		add_editor_style('style-editor-extra.css');

		// Add support for responsive embedded content.
		add_theme_support('responsive-embeds');
		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height' => 250,
				'width' => 250,
				'flex-width' => true,
				'flex-height' => true,
			)
		);

		// Remove support for block templates.
		remove_theme_support('block-templates');
	}
endif;
add_action('after_setup_theme', 'gnws_setup');

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gnws_widgets_init()
{
	register_sidebar(
		array(
			'name' => __('Footer', 'gnws'),
			'id' => 'sidebar-1',
			'description' => __('Add widgets here to appear in your footer.', 'gnws'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>',
		)
	);
}
add_action('widgets_init', 'gnws_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function gnws_scripts()
{

	if (is_404()) {
		wp_enqueue_style('gnws-404', get_template_directory_uri() . '/css/404.min.css', array(), GNWS_VERSION);
	}
	if (class_exists('WooCommerce')) {
		wp_enqueue_style('gnws-woo', get_template_directory_uri() . '/css/woocommerce.min.css', array(), GNWS_VERSION);
	}
	if (class_exists('WPCF7')) {
		wp_enqueue_script('gnws-jquery_alert', get_template_directory_uri() . '/assets/alert/js/cf7simplepopup-core.js', array(), GNWS_VERSION, true);
		wp_enqueue_script('gnws-jquery_alert_main', get_template_directory_uri() . '/assets/alert/js/sweetalert2.all.min.js', array(), GNWS_VERSION, true);
	}
	wp_enqueue_style('gnws-fancybox', get_template_directory_uri() . '/assets/lib/jquery.fancybox.css');
	wp_enqueue_style('gnws-swiper', get_template_directory_uri() . '/assets/lib/swiper-bundle.min.css');
	wp_enqueue_style('gnws-all', get_template_directory_uri() . '/assets/lib/all.min.css');
	wp_enqueue_style('gnws-flaticon', get_template_directory_uri() . '/assets/lib/flaticon.css');
	wp_enqueue_style('gnws-flaticon1', get_template_directory_uri() . '/assets/lib/flaticon_1.css');
	wp_enqueue_style('gnws-lineAwesome', get_template_directory_uri() . '/assets/lib/line-awesome.min.css');
	wp_enqueue_style('gnws-magnificPopup', get_template_directory_uri() . '/assets/lib/magnific-popup.css');
	wp_enqueue_style('gnws-owlCarousel', get_template_directory_uri() . '/assets/lib/owl.carousel.css');
	wp_enqueue_style('gnws-rangeslider', get_template_directory_uri() . '/assets/lib/rangeslider.css');
	wp_enqueue_style('gnws-scrollbar', get_template_directory_uri() . '/assets/lib/scrollbar.css');
	wp_enqueue_style('gnws-style1', get_template_directory_uri() . '/assets/lib/style_1.css');
	wp_enqueue_style('gnws-themifyIcons', get_template_directory_uri() . '/assets/lib/themify-icons.css');
	wp_enqueue_style('gnws-css-font', get_template_directory_uri() . '/assets/fonts/font.css');

	wp_enqueue_style('gnws-style', get_stylesheet_uri(), array(), GNWS_VERSION);

	//JS
	wp_enqueue_script('gnws-js-jquery', get_template_directory_uri() . '/assets/lib/jquery.js', array(), GNWS_VERSION, true);
	wp_enqueue_script('gnws-js-fancybox', get_template_directory_uri() . '/assets/lib/jquery.fancybox.js', array(), GNWS_VERSION, true);
	wp_enqueue_script('gnws-js-counterup', get_template_directory_uri() . '/assets/lib/counterup.min.js', array(), GNWS_VERSION, true);
	wp_enqueue_script('gnws-js-custom', get_template_directory_uri() . '/assets/lib/custom.js', array(), GNWS_VERSION, true);
	wp_enqueue_script('gnws-js-dz', get_template_directory_uri() . '/assets/lib/dz.ajax.js', array(), GNWS_VERSION, true);
	wp_enqueue_script('gnws-js-carousel', get_template_directory_uri() . '/assets/lib/dz.carousel.js', array(), GNWS_VERSION, true);
	wp_enqueue_script('gnws-js-imagesloaded', get_template_directory_uri() . '/assets/lib/imagesloaded.js', array(), GNWS_VERSION, true);
	wp_enqueue_script('gnws-js-countdown', get_template_directory_uri() . '/assets/lib/jquery.countdown.js', array(), GNWS_VERSION, true);
	wp_enqueue_script('gnws-js-magnific', get_template_directory_uri() . '/assets/lib/magnific-popup.js', array(), GNWS_VERSION, true);
	wp_enqueue_script('gnws-js-masonryfilter', get_template_directory_uri() . '/assets/lib/masonry.filter.js', array(), GNWS_VERSION, true);
	wp_enqueue_script('gnws-js-masonry', get_template_directory_uri() . '/assets/lib/masonry-3.1.4.js', array(), GNWS_VERSION, true);
	wp_enqueue_script('gnws-js-owlCarousel', get_template_directory_uri() . '/assets/lib/owl.carousel.js', array(), GNWS_VERSION, true);
	wp_enqueue_script('gnws-js-rangeslider', get_template_directory_uri() . '/assets/lib/rangeslider.js', array(), GNWS_VERSION, true);
	wp_enqueue_script('gnws-js-scrollbar', get_template_directory_uri() . '/assets/lib/scrollbar.js', array(), GNWS_VERSION, true);
	wp_enqueue_script('gnws-js-switcher', get_template_directory_uri() . '/assets/lib/switcher.js', array(), GNWS_VERSION, true);
	wp_enqueue_script('gnws-js-waypoints', get_template_directory_uri() . '/assets/lib/waypoints-min.js', array(), GNWS_VERSION, true);
	wp_enqueue_script('gnws-js-wow', get_template_directory_uri() . '/assets/lib/wow.js', array(), GNWS_VERSION, true);

	wp_enqueue_script('gnws-js-swiper', get_template_directory_uri() . '/assets/lib/swiper-bundle.js', array(), GNWS_VERSION, true);
	wp_enqueue_script('gnws-script', get_template_directory_uri() . '/js/script.min.js', array(), GNWS_VERSION, true);

	wp_localize_script('gnws-script', 'ajaxurl', array('ajaxurl' => admin_url('admin-ajax.php')));

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'gnws_scripts');

/**
 * Enqueue the block editor script.
 */
function gnws_enqueue_block_editor_script()
{
	wp_enqueue_script(
		'gnws-editor',
		get_template_directory_uri() . '/js/block-editor.min.js',
		array(
			'wp-blocks',
			'wp-edit-post',
		),
		GNWS_VERSION,
		true
	);
}
add_action('enqueue_block_editor_assets', 'gnws_enqueue_block_editor_script');

/**
 * Enqueue the script necessary to support Tailwind Typography in the block
 * editor, using an inline script to create a JavaScript array containing the
 * Tailwind Typography classes from GNWS_TYPOGRAPHY_CLASSES.
 */
function gnws_enqueue_typography_script()
{
	if (is_admin()) {
		wp_enqueue_script(
			'gnws-typography',
			get_template_directory_uri() . '/js/tailwind-typography-classes.min.js',
			array(
				'wp-blocks',
				'wp-edit-post',
			),
			GNWS_VERSION,
			true
		);
		wp_add_inline_script('gnws-typography', "tailwindTypographyClasses = '" . esc_attr(GNWS_TYPOGRAPHY_CLASSES) . "'.split(' ');", 'before');
	}
}
add_action('enqueue_block_assets', 'gnws_enqueue_typography_script');

/**
 * Add the Tailwind Typography classes to TinyMCE.
 *
 * @param array $settings TinyMCE settings.
 * @return array
 */
function gnws_tinymce_add_class($settings)
{
	$settings['body_class'] = GNWS_TYPOGRAPHY_CLASSES;
	return $settings;
}
add_filter('tiny_mce_before_init', 'gnws_tinymce_add_class');

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
 * Customizer Wordpress.
 */
require get_template_directory() . '/inc/customizer-wp.php';

/**
 * Customizer Widget.
 */
require get_template_directory() . '/inc/customizer-widget.php';


if (class_exists('WooCommerce')) {
	/**
	 * Customizer Woocommerce.
	 */
	require get_template_directory() . '/inc/customizer-woo.php';
}
