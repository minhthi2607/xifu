<div class="post-title">
    <div class="title-section-20">Recent Post</div>
</div>
<?php
$recent_args = array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'orderby'        => 'date',
    'order'          => 'DESC'
);
$recent_posts = new WP_Query($recent_args);

if ($recent_posts->have_posts()) {
    while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>

        <div class="post-image-text">
            <div class="mt-20 post-image">
                <div class="post-image-item">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                </div>
                <div class="post-calender-text">
                    <div class="description">
                        <?php the_title(); ?>
                    </div>
                    <div class="d-flex">
                        <div class="post-icon">
                            <img src="assets/images/our-blog-calender.png" alt="">
                        </div>
                        <div class="light post-calendar">
                            <?php the_date(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php endwhile;
} else {
    echo "There is no posts";
}

wp_reset_postdata();
?>