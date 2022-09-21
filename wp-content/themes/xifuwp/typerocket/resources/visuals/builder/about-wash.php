<?php
if (!empty($data['list'])) {
?>
    <div class="section section-about-wash">
        <div class="container">
            <div class="about-wash-service">
                <div class="row text-center">
                    <?php
                    if (!empty($data['title'])) {
                    ?>
                        <div class="about-title left">
                            <div class="title-section col-sm-12">
                                <?= $data['title'] ?>
                                <?php
                                if (!empty($data['title_color'])) {
                                ?>
                                    <span class="yellow">
                                        <?= $data['title_color'] ?>
                                    </span>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                    <?php
                    foreach ($data['list'] as $item) {
                    ?>
                        <div class="col-sm-4 mt-40">
                            <div class="about-item">
                                <?php
                                if (!empty($item['image'])) {
                                ?>
                                    <div class="about-wash-border-radius about-wash-image-size">
                                        <?= wp_get_attachment_image($item['image'], 'large') ?>
                                    </div>
                                <?php
                                }
                                if (!empty($item['title'])) {
                                ?>
                                    <div class="name-item yellow mt-20">
                                        <?= $item['title'] ?>
                                    </div>
                                <?php
                                }
                                if (!empty($item['description'])) {
                                ?>
                                    <div class="description mt-10">
                                        <?= $item['description'] ?>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                    <?php
                    if (!empty($data['button'])) {
                    ?>
                        <div class="group-btn col-sm-12">
                            <a href="<?= $data['link_button'] ?>" class="btn w-180 mt-60"><?= $data['button'] ?></a>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>