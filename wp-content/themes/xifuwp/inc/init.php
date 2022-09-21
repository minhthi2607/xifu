<?php
//require 'post-type-product.php';

add_filter('tr_theme_options_name', function () {
    return 'theme_options';
});
add_filter('tr_theme_options_page', function () {
    return get_template_directory() . '/inc/theme-options.php';
});

// get image
if (!function_exists('get_attachment')) {
    function get_attachment($attachment_id)
    {
        if ($attachment_id) {
            $attachment = get_post($attachment_id);
            return array(
                'alt' => (get_post_meta($attachment->ID, '_wp_attachment_image_alt', true)) ? get_post_meta($attachment->ID, '_wp_attachment_image_alt', true) : '',
                'caption' => ($attachment->post_excerpt != '') ? $attachment->post_excerpt : '',
                'description' => ($attachment->post_content != '') ? $attachment->post_content : '',
                'href' => (get_permalink($attachment->ID) != '') ? get_permalink($attachment->ID) : '',
                'src' => ($attachment->guid) ? $attachment->guid : '',
                'srcset' => (wp_get_attachment_image_srcset($attachment_id, 'post-thumbnail')) ? wp_get_attachment_image_srcset($attachment_id, 'post-thumbnail') : '',
                'title' => ($attachment->post_title != '') ? $attachment->post_title : ''
            );
        } else {
            return array(
                'alt' => '',
                'caption' => '',
                'description' => '',
                'href' => '',
                'src' => '',
                'srcset' => '',
                'title' => ''
            );
        }
    }
}