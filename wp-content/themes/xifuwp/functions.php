<?php

require('typerocket/init.php');
require('inc/init.php');
require('inc/woocommerce.php');

function tudor_menus()
{

    $locations = array(
        'main-menu' => 'Main Menu',

        'footer-social' => 'Footer Social',
        'privacy' => 'Privacy',
        'footer-quick-link' => 'Footer Quick Link',
        'footer-legal-stuff' => 'Footer Legal Stuff',
        'footer-our-location' => 'Footer Our Location',

    );

    register_nav_menus($locations);
}

add_action('init', 'tudor_menus');

add_action('wp_enqueue_scripts', 'our_enqueue_styles', 99999);


function our_enqueue_styles()
{
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), 'all');
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), 'all');
    wp_enqueue_style('owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), 'all');

    wp_enqueue_style('core-style', get_template_directory_uri() . '/assets/css/core-web-html-0.0.0.css', array(), rand(), 'all');
}

add_action('wp_enqueue_scripts', 'our_enqueue_scripts', 99999);

function our_enqueue_scripts()
{
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.js', array(), true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), true);
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), true);

    wp_enqueue_script('custom-scripts', get_template_directory_uri() . '/assets/js/custom.js', array(), rand(), true);
}




/**
 * Get Menu By Location
 * @param string $theme_location Theme location
 * @return  mixed                        Menu Object or false if not found
 */
if (!function_exists('get_menu_by_location')) :
    function get_menu_by_location($theme_location)
    {
        $theme_locations = get_nav_menu_locations();
        if (isset($theme_locations[$theme_location])) {
            $menu_obj = get_term($theme_locations[$theme_location], 'nav_menu');
            if ($menu_obj)
                return wp_get_nav_menu_items($menu_obj->term_id);
            else
                return $menu_obj;
        }
    }
endif;

if (!function_exists('recursive_mitems_to_array')) {
    /**
     * @param $items
     * @param int $parent
     *
     * @return array
     */
    function recursive_mitems_to_array($items, $parent = 0)
    {
        $bundle = [];
        if (!empty($items)) {
            foreach ($items as $item) {
                if ($item->menu_item_parent == $parent) {
                    $child = recursive_mitems_to_array($items, $item->ID);
                    $bundle[$item->ID] = [
                        'item' => $item,
                        'children' => $child
                    ];
                }
            }
        }

        return $bundle;
    }
}

// Update cart content count
add_filter('woocommerce_add_to_cart_fragments', 'cart_count_fragments', 10, 1);

function cart_count_fragments($fragments)
{
    $fragments['div.count-product'] = '<div class="count-product">' . WC()->cart->get_cart_contents_count() . '</div>'; // get_cart_contents_count nhận số lượng hàng trong giỏ hàng
    return $fragments;
}


add_action('wp_ajax_getpost', 'getpost_function');
add_action('wp_ajax_nopriv_getpost', 'getpost_function');
function getpost_function()
{
    $cat_id = isset($_POST['cat_id']) ? $_POST['cat_id'] : 0;
    $args = array(
        'post_type' => 'post',
        'order' => 'asc',
        'post_status' => 'publish',
        'cat' => $cat_id,

    );
    $get_posts = new WP_query($args);

    echo '<ul>';


    global $wp_query;
    $wp_query->in_the_loop = true;
    while ($get_posts->have_posts()) : $get_posts->the_post();
        echo '<li>';
        echo '<a href="' . get_the_permalink() . '">' . get_the_title() . '</a>';
        echo '</li>';
    endwhile;
    wp_reset_postdata();
    echo '</ul>';
    die();
}


$music = tr_post_type('Music', 'Music');
$music->setId('tr_music');
$music->setArgument('supports', ['title', 'editor', 'thumbnail']);
tr_meta_box('Music Url')
    ->setCallback(function () {
        $form = tr_form();
        echo $form->text('Music Url');
    })->apply($music);
$music_taxonomy = tr_taxonomy('Music Category')->setHierarchical();
$music->apply($music_taxonomy);
tr_taxonomy('music_category')->setMainForm(function () {
    $form = tr_form();
    echo $form->image('Banner Music');
});
