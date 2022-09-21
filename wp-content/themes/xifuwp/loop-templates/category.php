<div class="post-categories mt-25 fw-bold">
    <div class="post-categories-title">
        <div class="title-section-20">Categories</div>
    </div>
    <div class="post-categories-list semi-bold">
        <?php
        $args = array(
            'type'      => 'post',
            'number'    => 10,
            'parent'    => 0
        );
        $categories = get_categories($args);
        foreach ($categories as $category) : ?>
            <div class="mt-20">
                <a href="<?php echo get_term_link($category->slug, 'category'); ?>">
                    <?php echo $category->name; ?>
                </a>
            </div>

        <?php endforeach; ?>
    </div>
</div>