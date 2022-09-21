<div class="blog-form-list mt-25">
    <div class="form-list-image radius-right-40 ">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
    </div>
    <div class="form-list-desc">
        <div class="desc-title name-item-smaller light-blue">
            <?php the_title(); ?>
        </div>
        <!-- <div class="d-flex mt-15">
                <div class="post-icon">
                    <img src="assets/images/our-blog-calender.png" alt="">
                </div>
                <div class="light post-calendar">April 29, 2021</div>
            </div> -->
        <div class="desc-text description mt-10">
            <?php the_excerpt(); ?>
        </div>
    </div>
</div>