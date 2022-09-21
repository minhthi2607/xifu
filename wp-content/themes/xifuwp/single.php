<?php

/**
 * The template for displaying all single posts
 *
 * @package microtube
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$container = get_theme_mod('microtube_container_type');
?>
<div class="section-banner">
    <div class="container">
        <div class="section-heading">
            <div class="title-section-bigger light-blue">Our Blogs</div>
        </div>
    </div>
</div>
<div class="section section-blog-detail">
    <div class="container">
        <div class="blog-detail-form">
            <div class="row">
                <?php while (have_posts()) : ?>
                    <?php the_post(); ?>
                    <?php get_template_part('loop-templates/single', get_post_format()); ?>
                    <?php get_template_part('loop-templates/post', get_post_format()); ?>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>
<?php
get_footer(); ?>
