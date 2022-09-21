<?php
if (!empty($data['list'])) {
    ?>
    <div class="section section-about-us-product">
        <div class="container">
            <div class="about-us-product">
                <div class="row">
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
                    foreach ($data['list'] as $item) {
                        ?>
                        <div class="col-sm-6">
                            <div class="about-us-item">
                                    <?php
                                    if (!empty($item['image'])) {
                                        ?>
                                        <div class="product-radius mt-20">                                     
                                                <?= wp_get_attachment_image($item['image'], 'large') ?>                                         
                                        </div>
                                        <?php
                                    }
                                    if (!empty($item['title'])) {
                                        ?>
                                        <div class="about-us-title-info">
                                            <div class="title-section-smaller mt-35">
                                                <?= $item['title'] ?>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    if (!empty($item['description'])) {
                                        ?>
                                       
                                            <div class="description mt-15">
                                                <?= $item['description'] ?>
                                            </div>
                                       
                                        <?php
                                    }
                                    if (!empty($item['button'])) {
                                        ?>
                                        <div class="group-btn mt-20">
                                            <a href="<?= $item['link_button'] ?>" class="btn w-245"><?= $item['button'] ?></a>
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
    <?php
}
?>