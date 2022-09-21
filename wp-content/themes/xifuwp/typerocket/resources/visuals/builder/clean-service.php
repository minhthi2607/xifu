<?php
if (!empty($data['list_category']) && !empty($data['list_product'])) {
?>
    <div class="section section-service-prices">
        <div class="container">
            <div class="our-affordable-form">
                <div class="our-affordable-title">
                    <?php
                    if (!empty($data['title'])) {
                    ?>
                        <div class="title-section">
                            <?= $data['title'] ?>
                            <?php
                            if (!empty($data['title_color'])) {
                            ?>
                                <span class="light-blue">
                                    <?= $data['title_color'] ?>
                                </span>
                            <?php
                            }
                            ?>
                        </div>
                    <?php
                    }
                    if (!empty($data['description'])) {
                    ?>
                        <div class="mt-10 description">
                            <?= $data['description'] ?>
                        </div>
                    <?php
                    }
                    ?>
                </div>

                <div class="our-affordable-categories mt-60">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="categories-form">
                                <?php
                                if (!empty($data['category_title'])) {
                                ?>
                                    <div class="categories-title">
                                        <div class="title-section-20">
                                            <?= $data['category_title'] ?>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                                <ul class="categories-list mt-25">
                                    <?php
                                    foreach ($data['list_category'] as $item) {
                                    ?>
                                        <li class="categories-item mt-20">
                                            <?php
                                            if (!empty($item['image'])) {
                                            ?>
                                                <?= wp_get_attachment_image($item['image'], 'large') ?>
                                            <?php
                                            }
                                            if (!empty($item['title'])) {
                                            ?>

                                                <a href="<?= $item['link_title'] ?>"><?= $item['title'] ?></a>

                                            <?php
                                            }
                                            ?>
                                        </li>
                                    <?php
                                    }
                                    ?>
                                </ul>

                            </div>
                        </div>

                        <div class="col-sm-9">
                            <div class="row">
                                <?php
                                foreach ($data['list_product'] as $item) {
                                ?>
                                    <div class="col-sm-3 col-6">
                                        <div class="service-info">
                                            <?php

                                            if (!empty($item['image'])) {
                                            ?>
                                                <div class="service-info-image">
                                                    <?= wp_get_attachment_image($item['image'], 'large') ?>
                                                </div>
                                            <?php
                                            }
                                            if (!empty($item['title'])) {
                                            ?>
                                                <div class="fw-bold mt-15">
                                                    <?= $item['title'] ?>
                                                </div>
                                            <?php
                                            }
                                            if (!empty($item['sub_title'])) {
                                            ?>
                                                <?= $item['sub_title'] ?>
                                            <?php
                                            }
                                            if (!empty($item['price'])) {
                                            ?>
                                                <div class="light-blue mt-15 fw-bold">
                                                    <?= $item['price'] ?>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                            <div class="button-add-quantity">
                                                <input name="amount" class="minus" value="-">
                                                <input class="number-qty" value="1" min="1" max="10" type="number">
                                                <input name="amount" class="plus" value="+">
                                            </div>
                                            <?php

                                            if (!empty($item['button'])) {
                                            ?>

                                                <div class="group-btn mt-10 service-info-button">
                                                    <a href="<?= $item['link_button'] ?>" class="btn btn-light-blue w-140 service-btn"><?= $item['button'] ?></a>
                                                </div>

                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>