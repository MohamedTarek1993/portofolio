<?php

/**
 * protfolio functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package protfolio
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function protfolio_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on protfolio, use a find and replace
		* to change 'protfolio' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('protfolio', get_template_directory() . '/languages');

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'main-menu' => 'Main Menu',
		)
	);

	function get_menu($location, $class)
	{
		wp_nav_menu(array(
			'theme_location'  => $location,
			'menu_class'   =>  $class,

		));
	}
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
			'protfolio_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

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

	add_image_size('blog-img', 800, 460, true);
}
add_action('after_setup_theme', 'protfolio_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function protfolio_content_width()
{
	$GLOBALS['content_width'] = apply_filters('protfolio_content_width', 640);
}
add_action('after_setup_theme', 'protfolio_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

/**
 * Enqueue scripts and styles.
 */

$base = get_template_directory_uri() . '/';

function protfolio_scripts()
{
	wp_enqueue_style('protfolio-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('protfolio-style', 'rtl', 'replace');

	global $base;
	wp_enqueue_style('bootstrap', $base . 'assets/css/bootstrap.css', [], null);
	wp_enqueue_style('glide-core', $base . 'assets/css/glide.core.min.css', [], null);
	wp_enqueue_style('all', $base . 'assets/css/all.min.css', [], null);
	wp_enqueue_style('box-light', $base . 'assets/css/lightbox.css', [], null);
	wp_enqueue_style('template-style', $base . 'assets/css/main.css', [], null);
	wp_enqueue_style('resonsive', $base . 'assets/css/resonsive.css', [], null);
	wp_enqueue_style('theme-style', $base . 'style.css', [], rand(1, 100000));





	wp_enqueue_script('glide-script', $base . 'assets/js/glide.min.js', [], null, true);
	wp_enqueue_script('bootstrap-script', $base . 'assets/js/bootstrab.js', [], null, true);
	wp_enqueue_script('jquery-script', $base . 'assets/js/jquery-3.5.1.min.js', [], null, true);
	wp_enqueue_script('masonery-script', $base . 'assets/js/masonry.js', [], null, true);
	wp_enqueue_script('lightbox-script', $base . 'assets/js/lightbox-plus-jquery.js', [], null, true);
	wp_enqueue_script('custom-script', $base . 'assets/js/custom.js', [], null, true);
	if (is_single()) {
		wp_enqueue_script('comment-reply');
	}



	wp_enqueue_script('protfolio-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'protfolio_scripts');

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
 * widget footer.
 */
require get_template_directory() . '/inc/widget-footer.php';
/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * callback function comment.
 */
if (!function_exists('wpc_comment_callback')) {
    function wpc_comment_callback($comment, $args, $depth)
    {
        $tag = $args['style'] == 'div' ? 'div' : 'li';
        ?>
        <<?php echo $tag; ?> <?php comment_class('media'); ?> id="comment-<?php echo $comment->comment_ID; ?>">
            <?php if (get_option('show_avatars') == '1') { ?>
            <a class="media-left" href="#">
                <?php echo get_avatar($comment, $args['avatar_size'], false, false, ['class' => 'rounded-circle']) ?>
            </a>
            <?php } ?>
            <div class="media-body" id="comment-body-<?php echo $comment->comment_ID; ?>">
                <h4 class="media-heading user_name">
                <?php echo get_comment_author_link($comment); ?> 
                <small><?php printf(
                    /* translators: %s is a time difference */
                    __('%s ago', 'wpc'),
                    human_time_diff(get_comment_time('U'), current_time('U'))
                ); ?></small></h4>
                <p><?php comment_text(); ?></p>
                <?php 
                comment_reply_link([
                    'depth' => $depth,
                    'max_depth' => $args['max_depth'],
                    'reply_text' => __('Reply', 'wpc'),
                    'add_below' => 'comment-body',
                ]);
                ?>
            </div>
        <?php
    }
}


add_filter('comment_reply_link', function ($link) {
	return str_replace("class='", "class='btn btn-primary btn-sm ", $link);
});
if (!function_exists('wpc_comments_pagination_attributes')) {
    add_filter('next_comments_link_attributes', 'wpc_comments_pagination_attributes');
    add_filter('previous_comments_link_attributes', 'wpc_comments_pagination_attributes');
    function wpc_comments_pagination_attributes()
    {
        return 'class="btn btn-primary"';
    }
}
