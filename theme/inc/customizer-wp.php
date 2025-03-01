<?php

/**
 * Functions which customizer into WordPress
 *
 * @package gnws
 */

/**
 * Function help upload SVG
 */
function add_file_types_to_uploads($file_types)
{
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes);
    return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');

/**
 * Remove Crop Image Wordpress Size: Large + Medium_large + Medium
 */
add_filter('intermediate_image_sizes', function ($sizes) {
    return array_diff($sizes, ['medium_large']);  // Medium Large (768 x 0)
});
//
add_action('init', 'remove_extra_image_sizes');
function remove_extra_image_sizes()
{
    $sizes = array();
    foreach (get_intermediate_image_sizes() as $size) {
        if (!in_array($size, $sizes)) {
            remove_image_size($size);
        }
    }
}

/**
 * Remove Editor Gutenberg, make Edior Classic
 */
// Post
add_filter('use_block_editor_for_post', '__return_false', 10);
// Post type
add_filter('use_block_editor_for_post_type', '__return_false', 10);

/**
 * Setup Plugin ACF
 */
// 1. customize ACF path
add_filter('acf/settings/path', 'willgroup_acf_settings_path');
function willgroup_acf_settings_path($path)
{
    $path = get_stylesheet_directory() . '/inc/acf/';
    return $path;
}

// 2. customize ACF dir
add_filter('acf/settings/dir', 'willgroup_acf_settings_dir');
function willgroup_acf_settings_dir($dir)
{
    $dir = get_stylesheet_directory_uri() . '/inc/acf/';
    return $dir;
}

// 3. Include ACF
include_once(get_stylesheet_directory() . '/inc/acf/acf.php');


// Add save and load points for ACF JSON
add_filter( 'acf/settings/save_json', 'cysp_acf_json_save_point' );
function cysp_acf_json_save_point( $path ) {
    $path = get_stylesheet_directory() . '/acf-json';
    return $path;
}

add_filter( 'acf/settings/load_json', 'cysp_acf_json_load_point' );
function cysp_acf_json_load_point( $paths ) {
    $paths[] = get_stylesheet_directory() . '/acf-json';
    return $paths;
}

/**
 * Style Dashboard
 */
//Css Admin
if (!function_exists('gnws_css_admin')) :
    add_action('admin_head', 'gnws_css_admin');
    add_action('admin_enqueue_scripts', 'gnws_css_admin');
    function gnws_css_admin()
    {
        wp_enqueue_style('admin_css', get_template_directory_uri() . '/admin/admin.css');
    }
endif;
//CSS Login
if (!function_exists('gnws_css_admin_login')) :
    add_action('login_enqueue_scripts', 'gnws_css_admin_login');
    function gnws_css_admin_login()
    {
        wp_enqueue_style('admin_login_css', get_template_directory_uri() . '/admin/login.css');
    }
endif;

/**
 * Create Option Page from ACF
 */
add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init()
{
    acf_add_options_sub_page(array(
        'page_title'  => 'Header',
        'menu_title'  => 'Header',
        'parent_slug' => 'themes.php',
    ));
    acf_add_options_sub_page(array(
        'page_title'  => 'Footer',
        'menu_title'  => 'Footer',
        'parent_slug' => 'themes.php',
    ));
    acf_add_options_sub_page(array(
        'page_title'  => 'Cài đặt chung',
        'menu_title'  => 'Cài đặt chung',
        'parent_slug' => 'themes.php',
    ));
}
/**
 * Get home url Author
 */
add_filter('login_headerurl', 'my_custom_login_url');
function my_custom_login_url($url)
{
    $theme_data = wp_get_theme();
    $theme_uri = $theme_data->get('ThemeURI');
    return $theme_uri;
}

/**
 * Automatically set the image Title, Alt-Text, Caption & Description upload (image tab)
 */
add_action('add_attachment', 'hazo_set_image_meta_image_upload');
function hazo_set_image_meta_image_upload($post_ID)
{
    if (wp_attachment_is_image($post_ID)) {
        $hazo_image_title = get_post($post_ID)->post_title;
        $hazo_image_title = preg_replace(
            '%\s*[-_\s]+\s*%',
            ' ',
            $hazo_image_title
        );
        $hazo_image_title = ucwords(strtolower($hazo_image_title));
        $hazo_my_image_meta = array(
            'ID' => $post_ID,
            'post_title' => $hazo_image_title,
            'post_excerpt' => '',
            'post_content' => '',
        );
        update_post_meta($post_ID, '_wp_attachment_image_alt',    $hazo_image_title);
        wp_update_post($hazo_my_image_meta);
    }
}


/**
 * Disable XMLRPC
 */
add_filter('xmlrpc_enabled', '__return_false');

/**
 * Remove Logo / Version / Help
 */
function gnws_remove_version()
{
    return '';
}
add_filter('the_generator', 'gnws_remove_version');
function change_footer_admin()
{
    return ' ';
}
add_filter('admin_footer_text', 'change_footer_admin', 9999);
function change_footer_version()
{
    return ' ';
}
add_filter('update_footer', 'change_footer_version', 9999);
remove_action('wp_head', 'wp_generator');
// Remove version from rss
add_filter('the_generator', '__return_empty_string');

add_filter('contextual_help', 'gnws_remove_help_tabs', 999, 3);
function gnws_remove_help_tabs($gnws_old_help, $screen_id, $screen)
{
    $screen->remove_help_tabs();
    return $gnws_old_help;
}
add_action('admin_bar_menu', 'remove_wp_logo', 999);
function remove_wp_logo($wp_admin_bar)
{
    $wp_admin_bar->remove_node('wp-logo');
}

/**
 * Disabled Template
 */
function my_remove_page_template()
{
    if (!class_exists('WooCommerce')) {
        global $pagenow;
        if (in_array($pagenow, array('post-new.php', 'post.php')) && get_post_type() == 'page') { ?>
            <script>
                (function($) {
                    $(document).ready(function() {
                        $('#page_template option[value="template-page/content-woocommerce.php"]').remove();
                    })
                })(jQuery)
            </script>
<?php
        }
    }
}
add_action('admin_footer', 'my_remove_page_template', 10);


/**
 * Remove Tag, Category from archive title
 */
add_filter('get_the_archive_title', 'my_theme_archive_title');
function my_theme_archive_title($title)
{
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_author()) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif (is_post_type_archive()) {
        $title = post_type_archive_title('', false);
    } elseif (is_tax()) {
        $title = single_term_title('', false);
    }

    return $title;
}

/**
 * Classic Widget
 */
function example_theme_support()
{
    remove_theme_support('widgets-block-editor');
}
add_action('after_setup_theme', 'example_theme_support');


/*
* Fix check child-parent taxonomy in admin
*/
add_filter('wp_terms_checklist_args', function ($args, $idPost) {
    $args['checked_ontop'] = false;

    return $args;
}, 10, 2);


/**
 * Disable Remove HTML ACF 6.2.5
 */
add_filter( 'acf/admin/prevent_escaped_html_notice', '__return_true' );
add_filter( 'wp_kses_allowed_html', 'acf_add_allowed_iframe_tag', 10, 2 );
function acf_add_allowed_iframe_tag( $tags, $context ) {
	if ( $context === 'acf' )
	{
		$tags['iframe'] = array(
			'src' => true,
			'height' => true,
			'width' => true,
			'frameborder' => true,
			'allowfullscreen' => true,
		);
	}

	return $tags;
}
class Custom_Menu_Walker extends Walker_Nav_Menu {
    private $menu_images = []; // Mảng lưu ảnh của từng menu item

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $menu_style = get_field('menu_style', $item);
        $menu_banner_img = get_field('menu_banner_img', $item); // Lấy ID ảnh

        // Lấy danh sách class của menu item
        $classes = empty($item->classes) ? array() : (array) $item->classes;

        // Chỉ thêm class menu_style vào LI của menu cấp 0
        if ($depth == 0) {
            if ($menu_style == 'banner') {
                $classes[] = 'menu_banner';
            } elseif ($menu_style == 'grid') {
                $classes[] = 'menu_grid';
            } elseif ($menu_style == 'normal') {
                $classes[] = 'menu_normal';
            }
        }

        // Tạo danh sách class
        $class_names = join(' ', array_filter($classes));
        $class_attribute = !empty($class_names) ? ' class="' . esc_attr($class_names) . '"' : '';

        // Tạo thẻ <li>
        $output .= '<li' . $class_attribute . '>';

        // Bắt đầu thẻ <a>
        $output .= '<a href="' . esc_url($item->url) . '">';

        // Nếu có ảnh, thêm vào bên trong thẻ <a> trước tiêu đề
        if (!empty($menu_banner_img)) {
            $image = wp_get_attachment_image($menu_banner_img, 'full', false, [
                'class' => 'max-lg:hidden',
            ]);
            $output .= $image;
        }

        // Tiêu đề menu
        $output .= esc_html($item->title);

        // Kết thúc thẻ <a>
        $output .= '</a>';
    }

    function end_el(&$output, $item, $depth = 0, $args = null) {
        $output .= '</li>';
    }
}

add_filter('wpcf7_autop_or_not', '__return_false');



/*
 * 1. Xoá slug trong URL cho post type "project" và "service"
 */
function remove_project_service_slug( $post_link, $post ) {
    if ( ! in_array( get_post_type( $post ), array( 'project', 'service' ) ) || 'publish' != $post->post_status ) {
        return $post_link;
    }
    // Xoá slug của post type khỏi URL
    $post_link = str_replace( '/' . get_post_type( $post ) . '/', '/', $post_link );
    return $post_link;
}
add_filter( 'post_type_link', 'remove_project_service_slug', 10, 2 );

/*
 * 2. Thêm rewrite rules cho post type "project" và "service"
 */
function remove_slug_rewrite_rules( $flash = false ) {
    global $wp_post_types, $wpdb;
    $siteLink = esc_url( home_url( '/' ) );
    $post_types = array( 'project', 'service' );
    
    foreach ( $wp_post_types as $type => $custom_post ) {
        if ( in_array( $type, $post_types ) ) {
            if ( $custom_post->_builtin == false ) {
                $querystr = "SELECT {$wpdb->posts}.post_name, {$wpdb->posts}.ID
                             FROM {$wpdb->posts} 
                             WHERE {$wpdb->posts}.post_status = 'publish' 
                             AND {$wpdb->posts}.post_type = '{$type}'";
                $posts = $wpdb->get_results( $querystr, OBJECT );
                if ( $posts ) {
                    foreach ( $posts as $post ) {
                        $current_slug = get_permalink( $post->ID );
                        $base = str_replace( $siteLink, '', $current_slug );
                        add_rewrite_rule( $base . '?$', "index.php?{$custom_post->query_var}={$post->post_name}", 'top' );
                    }
                }
            }
        }
    }
    if ( $flash === true ) {
        flush_rewrite_rules( false );
    }
}
add_action( 'init', 'remove_slug_rewrite_rules' );

/*
 * 3. Cập nhật lại rewrite rules khi tạo/sửa bài viết mới cho post type "project" và "service"
 */
function new_project_service_post_save( $post_id ) {
    global $wp_post_types;
    $post_type = get_post_type( $post_id );
    $allowed = array( 'project', 'service' );
    foreach ( $wp_post_types as $type => $custom_post ) {
        if ( $custom_post->_builtin == false && in_array( $post_type, $allowed ) ) {
            remove_slug_rewrite_rules( true );
        }
    }
}
add_action( 'wp_insert_post', 'new_project_service_post_save' );

/*
 * 4. Xoá slug trong URL cho taxonomy "project_cat" và "service_cat"
 */
add_filter( 'term_link', 'remove_taxonomy_slug_permalink', 10, 3 );
function remove_taxonomy_slug_permalink( $url, $term, $taxonomy ) {
    $taxonomies = array( 'project_cat', 'service_cat' );
    if ( in_array( $taxonomy, $taxonomies ) ) {
        // Xoá slug taxonomy khỏi URL
        $url = str_replace( '/' . $taxonomy, '', $url );
    }
    return $url;
}

/*
 * 5. Thêm rewrite rules cho từng term của taxonomy "project_cat" và "service_cat"
 */
function remove_taxonomy_rewrite_rules( $flash = false ) {
    $taxonomies = array( 'project_cat', 'service_cat' );
    foreach ( $taxonomies as $taxonomy ) {
        $terms = get_terms( array(
            'taxonomy'   => $taxonomy,
            'hide_empty' => false,
        ) );
        if ( $terms && ! is_wp_error( $terms ) ) {
            $siteurl = esc_url( home_url( '/' ) );
            foreach ( $terms as $term ) {
                $term_slug = $term->slug;
                $base_term = str_replace( $siteurl, '', get_term_link( $term->term_id, $taxonomy ) );
                add_rewrite_rule( $base_term . '?$', "index.php?{$taxonomy}={$term_slug}", 'top' );
                add_rewrite_rule( $base_term . 'page/([0-9]{1,})/?$', "index.php?{$taxonomy}={$term_slug}&paged=\$matches[1]", 'top' );
                add_rewrite_rule( $base_term . '(?:feed/)?(feed|rdf|rss|rss2|atom)/?$', "index.php?{$taxonomy}={$term_slug}&feed=\$matches[1]", 'top' );
            }
        }
    }
    if ( $flash === true ) {
        flush_rewrite_rules( false );
    }
}
add_action( 'init', 'remove_taxonomy_rewrite_rules' );

/*
 * 6. Cập nhật lại rewrite rules khi tạo/sửa taxonomy (project_cat hoặc service_cat)
 */
function new_taxonomy_term_flush_rewrite_rules( $term_id, $taxonomy ) {
    if ( in_array( $taxonomy, array( 'project_cat', 'service_cat' ) ) ) {
        remove_taxonomy_rewrite_rules( true );
    }
}
add_action( 'create_term', 'new_taxonomy_term_flush_rewrite_rules', 10, 2 );
add_action( 'edited_term', 'new_taxonomy_term_flush_rewrite_rules', 10, 2 );
?>
