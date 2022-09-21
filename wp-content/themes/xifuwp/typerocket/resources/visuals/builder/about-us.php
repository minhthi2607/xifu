<?php
if (!empty($data['list']) && !empty($data['list_service'])) {
?>
    <div class="section section-about-us">
        <div class="container">
          
            
            
            
            <div class="about-us-form">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="about-us-content">
                            <div class="col-sm-12">
                                <div class="about-us-title">
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
                                    ?>
                                </div>
                            </div>
                            <?php
                            if (!empty($data['description'])) {
                            ?>
                                <div class="mt-30 description">
                                    <?= $data['description'] ?>
                                </div>
                            <?php
                            }
                            ?>

                            <div class="about-icon-text">
                                <?php
                                foreach ($data['list'] as $item) {
                                ?>
                                    <div class="mt-15 d-flex">
                                        <?php
                                        if (!empty($item['image'])) {
                                        ?>
                                            <div class="about-us-icon-check">
                                                <?= wp_get_attachment_image($item['image'], 'large') ?>
                                            </div>
                                        <?php
                                        }
                                        if (!empty($item['description'])) {
                                        ?>
                                            <div class="description semi-bold">
                                                <?= $item['description'] ?>
                                            </div>
                                        <?php
                                        }
                                        ?>


                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <?php
                        if (!empty($data['image'])) {
                        ?>
                            <div class="wash-laundry-image radius-right-60">
                                <?= wp_get_attachment_image($data['image'], 'large') ?>
                            </div>
                        <?php
                        }
                        ?>
                        <div class="image-after"></div>
                    </div>

                    <div class="service mt-160">
                        <div class="service-list">
                            <div class="row">
                                <?php
                                foreach ($data['list_service'] as $item) {
                                ?>
                                    <div class="col-sm-3 col-6 d-flex align-items-center">
                                        <?php
                                        if (!empty($item['image'])) {
                                        ?>
                                            <div class="about-us-cricle">
                                                <div class="about-us-icon">
                                                    <?= wp_get_attachment_image($item['image'], 'large') ?>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                        <div class="ml-20 description">
                                            <?php
                                            if (!empty($item['title'])) {
                                            ?>
                                                <div class="title-section-smaller">
                                                    <?= $item['title'] ?>
                                                </div>
                                            <?php
                                            }
                                            if (!empty($item['description'])) {
                                            ?>
                                                <div class="mt-10">
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