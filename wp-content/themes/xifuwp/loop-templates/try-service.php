<div class="mt-25 form-try-services"style="background-image: url(' <?= wp_get_attachment_image_src(tr_options_field('theme_options.banner'), 'large') ?>')">

    <div class="services-title">
        <div class="title-section-20">
            <?php echo tr_options_field('theme_options.title'); ?>
        </div>
    </div>
    <div class="service-text">
        <div class="mt-15 description">
            <?php echo tr_options_field('theme_options.description'); ?>
        </div>
    </div>
    <div class="group-btn mt-15">
        <div class="btn w-180">
            <a href="<?= tr_options_field('theme_options.link_button'); ?>"><?= tr_options_field('theme_options.button'); ?></a>
        </div>
    </div>
</div>