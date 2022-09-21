<?php
get_header();
if (tr_posts_field("use_builder") == '1') {
    tr_components_field('builder');
} else {
    get_template_part('template-parts/standard-page');
}
get_footer();