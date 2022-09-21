<div class="col-sm-8">
    <div class="blog-detail-image">
        <?php the_post_thumbnail(); ?>
    </div>
    <div class="blog-detail-title mt-40">
        <div class="title-section-smaller"><?php the_title(); ?></div>
    </div>
    <div class="blog-detail-text mt-30">
        <?php the_content(); ?>
    </div>
</div>