<?php
/*
 *  Author: Todd Motto | @toddmotto
 *  URL: html5blank.com | @html5blank
 *  Custom functions, support, custom post types and more.
 */

/*------------------------------------*\
	External Modules/Files
\*------------------------------------*/

// Load any external files you have here

/*------------------------------------*\
	Theme Support
\*------------------------------------*/

if (!isset($content_width))
{
    $content_width = 900;
}

function themename_custom_logo_setup() {
    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );
 
    add_theme_support( 'custom-logo', $defaults );
}

if (function_exists('add_theme_support'))
{
    // Add Menu Support
    add_theme_support('menus');
    add_theme_support( 'custom-logo' );

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

    // Add Support for Custom Backgrounds - Uncomment below if you're going to use
    /*add_theme_support('custom-background', array(
	'default-color' => 'FFF',
	'default-image' => get_template_directory_uri() . '/img/bg.jpg'
    ));*/

    // Add Support for Custom Header - Uncomment below if you're going to use
    /*add_theme_support('custom-header', array(
	'default-image'			=> get_template_directory_uri() . '/img/headers/default.jpg',
	'header-text'			=> false,
	'default-text-color'		=> '000',
	'width'				=> 1000,
	'height'			=> 198,
	'random-default'		=> false,
	'wp-head-callback'		=> $wphead_cb,
	'admin-head-callback'		=> $adminhead_cb,
	'admin-preview-callback'	=> $adminpreview_cb
    ));*/

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');
    add_theme_support( 'woocommerce' );

    // Localisation Support
    load_theme_textdomain('html5blank', get_template_directory() . '/languages');
}

/*------------------------------------*\
	GLOBALS
\*------------------------------------*/

global $js_slider_background;
global $js_header_background;
global $js_main_background;
global $js_people_background;
global $js_footer_background;

/*------------------------------------*\
	OPTIONS PAGE
\*------------------------------------*/

add_action( 'admin_menu', 'js_options_page' );

function js_options_page() {

	add_options_page(
		'Business Details', // page <title>Title</title>
		'Business Details', // menu link text
		'manage_options', // capability to access the page
		'js-business', // page URL slug
		'js_options_content', // callback function /w content
		0 // priority
	);

}

function js_options_content(){

    echo '<h1>Business Details</h1><br>Please add your business details below.
    <form method="post" action="options.php">';
            
        settings_fields( 'js_settings' ); // settings group name
        echo '<div style="">';
        echo '<div style="display:block;width:48%;margin-right:2%;float:left;">';
        do_settings_sections( 'js-business' ); // just a page slug
        submit_button();
        echo '</div>';
        echo '<div style="display:block;width:48%;margin-right:2%;float:left;">';
        do_settings_sections( 'js-business-social' ); // just a page slug
        echo '</div>';
        echo '</div>';
		

	echo '</form></div>';

}

add_action( 'admin_init',  'js_register_setting' );

function js_register_setting(){

    register_setting('js_settings', 'business_name', 'sanitize_text_field' );
    register_setting('js_settings', 'business_strapline', 'sanitize_text_field' );
    register_setting('js_settings', 'business_tel', 'sanitize_text_field' );
    register_setting('js_settings', 'business_address', 'sanitize_text_field' );
    register_setting('js_settings', 'business_email', 'sanitize_text_field' );
    register_setting('js_settings', 'business_reg', 'sanitize_text_field' );
    register_setting('js_settings', 'business_vat', 'sanitize_text_field' );
    register_setting('js_settings', 'instagram', 'sanitize_text_field' );
    register_setting('js_settings', 'facebook', 'sanitize_text_field' );
    register_setting('js_settings', 'linkedin', 'sanitize_text_field' );
    register_setting('js_settings', 'twitter', 'sanitize_text_field' );


	add_settings_section(
		'business_settings_section_id', // section ID
		'', // title (if needed)
		'', // callback function (if needed)
		'js-business' // page slug
    );
    
    add_settings_section(
		'business_social_settings_section_id', // section ID
		'', // title (if needed)
		'', // callback function (if needed)
		'js-business-social' // page slug
	);

	add_settings_field('business_name','Business Name', 'js_text_field_html', 'js-business', 'business_settings_section_id', // section ID
		array( 'business_name',)
    );

    add_settings_field('business_strapline','Business Strapline', 'js_text_field_html', 'js-business', 'business_settings_section_id', // section ID
		array( 'business_strapline',)
    );
    
    add_settings_field('business_tel', 'Business Telephone', 'js_text_field_html', 'js-business', 'business_settings_section_id', // section ID
		array( 'business_tel',)
    );
    
    add_settings_field('business_address', 'Business address', 'js_text_field_html', 'js-business', 'business_settings_section_id', // section ID
		array( 'business_address',)
    );
    
    add_settings_field('business_email', 'Business email', 'js_text_field_html', 'js-business', 'business_settings_section_id', // section ID
		array( 'business_email',)
    );
    
    add_settings_field('business_reg', 'Business Registration Number', 'js_text_field_html', 'js-business', 'business_settings_section_id', // section ID
		array( 'business_reg',)
    );
    
    add_settings_field('business_vat', 'Business VAT Number', 'js_text_field_html', 'js-business', 'business_settings_section_id', // section ID
		array( 'business_vat',)
    );
    
    add_settings_field('instagram', 'Instagram Link', 'js_text_field_html', 'js-business-social', 'business_social_settings_section_id', // section ID
        array( 'instagram',)
    );

    add_settings_field('facebook', 'Facebook Link', 'js_text_field_html', 'js-business-social', 'business_social_settings_section_id', // section ID
        array( 'facebook',)
    );

    add_settings_field('linkedin', 'linkedIn Link', 'js_text_field_html', 'js-business-social', 'business_social_settings_section_id', // section ID
        array( 'linkedin',)
    );

    add_settings_field('twitter', 'Twitter Link', 'js_text_field_html', 'js-business-social', 'business_social_settings_section_id', // section ID
        array( 'twitter',)
    );
}

function js_text_field_html($args){
    $option = get_option($args[0]);
    echo '<input type="text" id="'. $args[0] .'" name="'. $args[0] .'" value="' . $option . '" />';
}

/*------------------------------------*\
	Functions
\*------------------------------------*/
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
// HTML5 Blank navigation
function html5blank_nav()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'header-menu',
		'menu'            => '',
		'container'       => 'div',
		'container_class' => 'menu-{menu slug}-container',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul>%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}

// Load HTML5 Blank scripts (header.php)
function html5blank_header_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

    	wp_register_script('conditionizr', get_template_directory_uri() . '/js/lib/conditionizr-4.3.0.min.js', array(), '4.3.0'); // Conditionizr
        wp_enqueue_script('conditionizr'); // Enqueue it!

        wp_register_script('modernizr', get_template_directory_uri() . '/js/lib/modernizr-2.7.1.min.js', array(), '2.7.1'); // Modernizr
        wp_enqueue_script('modernizr'); // Enqueue it!

        wp_register_script('html5blankscripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0'); // Custom scripts
        wp_enqueue_script('html5blankscripts'); // Enqueue it!

        wp_register_script('jquery', 'https://code.jquery.com/jquery-3.3.1.js', array('jquery'), '1.0.0'); // Custom scripts
        wp_enqueue_script('jquery'); // Enqueue it!

        wp_register_script('uikit', 'https://cdn.jsdelivr.net/npm/uikit@3.5.9/dist/js/uikit.min.js', array('jquery'), '1.0.0'); // Custom scripts
        wp_enqueue_script('uikit'); // Enqueue it!

        wp_register_script('uikiticons', 'https://cdn.jsdelivr.net/npm/uikit@3.5.9/dist/js/uikit-icons.min.js', array('jquery'), '1.0.0'); // Custom scripts
        wp_enqueue_script('uikiticons'); // Enqueue it!

        // wp_register_script('awsome', 'https://use.fontawesome.com/2f3da6ea7e.js', array('jquery'), '1.0.0'); // Custom scripts
        // wp_enqueue_script('awsome'); // Enqueue it!


    }
}

// Load HTML5 Blank conditional scripts


// Load HTML5 Blank styles
function html5blank_styles()
{
    wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.min.css', array(), '1.0', 'all');
    wp_enqueue_style('normalize'); // Enqueue it!

    wp_register_style('html5blank', get_template_directory_uri() . '/style.css?v='.rand(1,100000), array(), '1.0', 'all');
    wp_enqueue_style('html5blank'); // Enqueue it!

    wp_register_style('uikitcss', 'https://cdn.jsdelivr.net/npm/uikit@3.5.9/dist/css/uikit.min.css', array(), '1.0', 'all');
    wp_enqueue_style('uikitcss'); // Enqueue it!


    wp_register_style('googlefonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;800&display=swap', array(), '1.0', 'all');
    wp_enqueue_style('googlefonts'); // Enqueue it!

    wp_register_style('base', get_template_directory_uri() . '/css/base.css?v='.rand(1,100000), array(), '1.0', 'all');
    wp_enqueue_style('base'); // Enqueue it!
}

// Register HTML5 Blank Navigation
function register_html5_menu()
{
    register_nav_menus(array( // Using array to specify more menus if needed
        'header-menu' => __('Header Menu', 'html5blank'), // Main Navigation
        'sidebar-menu' => __('Sidebar Menu', 'html5blank'), // Sidebar Navigation
        'footer-menu' => __('Footer Menu', 'html5blank'), // Extra Navigation if needed (duplicate as many as you need!)
        'canvas-menu' => __('Canvas Menu', 'html5blank'), // Extra Navigation if needed (duplicate as many as you need!)
        'legal-menu' => __('Legal Menu', 'html5blank') // Extra Navigation if needed (duplicate as many as you need!)
    ));
}



// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '')
{
    $args['container'] = false;
    return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var)
{
    return is_array($var) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist)
{
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes)
{
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}

// If Dynamic Sidebar Exists
if (function_exists('register_sidebar'))
{
    // Define Sidebar Widget Area 1
    register_sidebar(array(
        'name' => __('Widget Area 1', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'widget-area-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // Define Sidebar Widget Area 2
    register_sidebar(array(
        'name' => __('Widget Area 2', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'widget-area-2',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

// Remove wp_head() injected Recent Comment styles
function my_remove_recent_comments_style()
{
    global $wp_widget_factory;
    remove_action('wp_head', array(
        $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
        'recent_comments_style'
    ));
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function html5wp_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}

// Custom Excerpts
function html5wp_index($length) // Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
{
    return 20;
}

// Create 40 Word Callback for Custom Post Excerpts, call using html5wp_excerpt('html5wp_custom_post');
function html5wp_custom_post($length)
{
    return 40;
}

// Create the Custom Excerpts callback
function html5wp_excerpt($length_callback = '', $more_callback = '')
{
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

// Custom View Article link to Post
function html5_blank_view_article($more)
{
    global $post;
    return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('View Article', 'html5blank') . '</a>';
}

// Remove Admin bar
function remove_admin_bar()
{
    return false;
}

// Remove 'text/css' from our enqueued stylesheet
function html5_style_remove($tag)
{
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions( $html )
{
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

// Custom Gravatar in Settings > Discussion
function html5blankgravatar ($avatar_defaults)
{
    $myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
    $avatar_defaults[$myavatar] = "Custom Gravatar";
    return $avatar_defaults;
}

// Threaded Comments
function enable_threaded_comments()
{
    if (!is_admin()) {
        if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
            wp_enqueue_script('comment-reply');
        }
    }
}

// Custom Comments Callback
function html5blankcomments($comment, $args, $depth)
{
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);

	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	} else {
		$tag = 'li';
		$add_below = 'div-comment';
	}
?>
    <!-- heads up: starting < for the html tag (li or div) in the next line: -->
    <<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
	<?php if ( 'div' != $args['style'] ) : ?>
	<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
	<?php endif; ?>
	<div class="comment-author vcard">
	<?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['180'] ); ?>
	<?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
	</div>
<?php if ($comment->comment_approved == '0') : ?>
	<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
	<br />
<?php endif; ?>

	<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
		<?php
			printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','' );
		?>
	</div>

	<?php comment_text() ?>

	<div class="reply">
	<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
	</div>
	<?php if ( 'div' != $args['style'] ) : ?>
	</div>
	<?php endif; ?>
<?php }

/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('init', 'html5blank_header_scripts'); // Add Custom Scripts to wp_head

add_action('get_header', 'enable_threaded_comments'); // Enable Threaded Comments
add_action('wp_enqueue_scripts', 'html5blank_styles'); // Add Theme Stylesheet
add_action('init', 'register_html5_menu'); // Add HTML5 Blank Menu
//add_action('init', 'create_post_type_html5'); // Add our HTML5 Blank Custom Post Type
add_action('widgets_init', 'my_remove_recent_comments_style'); // Remove inline Recent Comment Styles from wp_head()
add_action('init', 'html5wp_pagination'); // Add our HTML5 Pagination

// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
add_filter('avatar_defaults', 'html5blankgravatar'); // Custom Gravatar in Settings > Discussion
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
// add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes (Commented out by default)
// add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID (Commented out by default)
// add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's (Commented out by default)
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('excerpt_more', 'html5_blank_view_article'); // Add 'View Article' button instead of [...] for Excerpts
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('style_loader_tag', 'html5_style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images

// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether

// Shortcodes
add_shortcode('html5_shortcode_demo', 'html5_shortcode_demo'); // You can place [html5_shortcode_demo] in Pages, Posts now.
add_shortcode('html5_shortcode_demo_2', 'html5_shortcode_demo_2'); // Place [html5_shortcode_demo_2] in Pages, Posts now.

// Shortcodes above would be nested like this -
// [html5_shortcode_demo] [html5_shortcode_demo_2] Here's the page title! [/html5_shortcode_demo_2] [/html5_shortcode_demo]

/*------------------------------------*\
	Custom Post Types
\*------------------------------------*/

// Create 1 Custom Post type for a Demo, called HTML5-Blank
function create_post_type_html5()
{
    register_taxonomy_for_object_type('category', 'walkaround'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'walkaround');
    register_post_type('walkaround', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Daily Inspections', 'html5blank'), // Rename these to suit
            'singular_name' => __('Daily Inspection', 'html5blank'),
            'add_new' => __('Add New', 'html5blank'),
            'add_new_item' => __('Add New Daily Inspection', 'html5blank'),
            'edit' => __('Edit', 'html5blank'),
            'edit_item' => __('Edit Daily Inspection', 'html5blank'),
            'new_item' => __('New Daily Inspection', 'html5blank'),
            'view' => __('View Daily Inspection', 'html5blank'),
            'view_item' => __('View Daily Inspection', 'html5blank'),
            'search_items' => __('Search Daily Inspection', 'html5blank'),
            'not_found' => __('No Daily Inspection found', 'html5blank'),
            'not_found_in_trash' => __('No Daily Inspection found in Trash', 'html5blank')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'taxonomies' => array(
            'post_tag',
            'category'
        ) // Add Category and Post Tags support
    ));
}

/*------------------------------------*\
	ShortCode Functions
\*------------------------------------*/

// Shortcode Demo with Nested Capability
function html5_shortcode_demo($atts, $content = null)
{
    return '<div class="shortcode-demo">' . do_shortcode($content) . '</div>'; // do_shortcode allows for nested Shortcodes
}

// Shortcode Demo with simple <h2> tag
function html5_shortcode_demo_2($atts, $content = null) // Demo Heading H2 shortcode, allows for nesting within above element. Fully expandable.
{
    return '<h2>' . $content . '</h2>';
}

/*------------------------------------*\
	UIKIT MENU
\*------------------------------------*/

class Primary_Walker_Nav_Menu extends Walker_Nav_Menu {


    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {

     $classes = empty ( $item->classes ) ? array () : (array) $item->classes;
     $class_names = join(' ',   apply_filters('nav_menu_css_class',   array_filter( $classes ), $item));
     ! empty ( $class_names ) and $class_names = ' class="'. esc_attr( $class_names ) . '"';

        if ( array_search( 'menu-item-has-children', $item->classes ) ) {
            $output .= sprintf( "\n<li class='uk-parent %s'><a href='%s'>%s<span></span></a>\n", ( array_search( 'current-menu-item', $item->classes ) || array_search( 'current-page-parent', $item->classes ) ) ? 'active' : '', $item->url, $item->title );
        } else {
            $output .= sprintf( "\n<li $class_names><a href='%s'>%s</a>\n",  $item->url, $item->title );
        }
    }

    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat( "\t", $depth );
        $output .= "\n$indent<div class='uk-navbar-dropdown'><ul class=\"uk-nav uk-navbar-dropdown-nav\" role=\"menu\">\n";
    }
}

/*------------------------------------*\
	WOOCOMMERCE
\*------------------------------------*/

add_filter('woocommerce_show_page_title', '__return_false');
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
remove_action( 'woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10 );
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );

// RETURN NUMBER OF PRODUCTS PER PAGE

function js_loop_shop_per_page( $cols ) {
    $cols = 40;
    return $cols;
  }
  
  add_filter( 'loop_shop_per_page', 'js_loop_shop_per_page', 20 );

/*------------------------------------*\
	ACF INCLUDE
\*------------------------------------*/


// define( 'MY_ACF_PATH', get_stylesheet_directory() . '/includes/acf/' );
// define( 'MY_ACF_URL', get_stylesheet_directory_uri() . '/includes/acf/' );

// // Include the ACF plugin.
// include_once( MY_ACF_PATH . 'acf.php' );

// // Customize the url setting to fix incorrect asset URLs.
// add_filter('acf/settings/url', 'my_acf_settings_url');
// function my_acf_settings_url( $url ) {
//     return MY_ACF_URL;
// }

// // (Optional) Hide the ACF admin menu item.
// add_filter('acf/settings/show_admin', 'my_acf_settings_show_admin');
// function my_acf_settings_show_admin( $show_admin ) {
//     return false;
// }

/*------------------------------------*\
	INCLUDES
\*------------------------------------*/

// require_once( get_template_directory() . '/functions/wc.php' );
require_once( get_template_directory() . '/functions/walkaroundsave.php' );
require_once( get_template_directory() . '/functions/addvehicle.php' );
// require_once( get_template_directory() . '/functions/acf.php' );

/*------------------------------------*\
	SVG SUPPORT
\*------------------------------------*/

// Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

    global $wp_version;
    if ( $wp_version !== '4.7.1' ) {
       return $data;
    }
  
    $filetype = wp_check_filetype( $filename, $mimes );
  
    return [
        'ext'             => $filetype['ext'],
        'type'            => $filetype['type'],
        'proper_filename' => $data['proper_filename']
    ];
  
  }, 10, 4 );
  
  function cc_mime_types( $mimes ){
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
  add_filter( 'upload_mimes', 'cc_mime_types' );
  
  function fix_svg() {
    echo '<style type="text/css">
          .attachment-266x266, .thumbnail img {
               width: 100% !important;
               height: auto !important;
          }
          </style>';
  }
  add_action( 'admin_head', 'fix_svg' );

function dsh_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(https://davidshaulage.co.uk/wp-content/uploads/2022/06/dsh-icon-320-65.png);
		height:65px;
		width:320px;
		background-size: 320px 65px;
		background-repeat: no-repeat;
        	padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'dsh_login_logo' );

function my_login_logo_url_title() {
    return 'DS Haulage';
}
add_filter( 'login_headertext', 'my_login_logo_url_title' );

function my_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/style-login.css' );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );


add_action( 'pre_get_posts', function ( $q )
{    
    if ( is_user_logged_in() && !current_user_can('administrator') ) { // First check if we have a logged in user before doing anything
        if ( $q->is_main_query() // Only targets the main query
) {
    if(is_page()) {} else {
            // Get the current logged in user
            $current_logged_in_user = wp_get_current_user();

            // Set the logged in user ID as value to the author parameter
            $q->set( 'author', $current_logged_in_user->ID );
    }
        }
    }    
});


add_filter( 'login_redirect', 'themeprefix_login_redirect', 10, 3 );
/**
 * Redirect user after successful login.
 *
 * @param string $redirect_to URL to redirect to.
 * @param string $request URL the user is coming from.
 * @param object $user Logged user's data.
 * @return string
 */
function themeprefix_login_redirect( $redirect_to, $request, $user ) {
    //is there a user to check?
    if ( isset( $user->roles ) && is_array( $user->roles ) ) {
        //check for admins
        if ( in_array( 'administrator', $user->roles ) ) {
            // redirect them to the default place
            return $redirect_to;
        } else {
            return home_url();
        }
    } else {
        return $redirect_to;
    }
}

function wporg_register_taxonomy_course() {
    $labels = array(
        'name'              => _x( 'Vehicles', 'taxonomy general name' ),
        'singular_name'     => _x( 'Vehicle', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Vehicles' ),
        'all_items'         => __( 'All Vehicles' ),
        'parent_item'       => __( 'Parent Vehicle' ),
        'parent_item_colon' => __( 'Parent Vehicle:' ),
        'edit_item'         => __( 'Edit Vehicle' ),
        'update_item'       => __( 'Update Vehicle' ),
        'add_new_item'      => __( 'Add New Vehicle' ),
        'new_item_name'     => __( 'New Vehicle Name' ),
        'menu_name'         => __( 'Vehicles' ),
    );
    $args   = array(
        'hierarchical'      => true, // make it hierarchical (like categories)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => [ 'slug' => 'vehicles' ],
        'show_in_rest'      => true, 
    );
    register_taxonomy( 'vehicles', [ 'post' ], $args );
}
add_action( 'init', 'wporg_register_taxonomy_course' );
    ?>
