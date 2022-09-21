<div class="section section-banner-home">
            <div class="container">
            
                <div class="banner-home">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-sm-6">
                            <div class="banner-home-content">
                                <div class="banner-home-title description">
                                    <?php                           
                                        if (!empty($data['sub_title'])) {
                                            ?>                                      
                                                <div class="name-item sub-title black">
                                                    <?= $data['sub_title'] ?>
                                                </div>                                        
                                            <?php
                                        }
                                        if (!empty($data['title'])) {
                                            ?>                                      
                                                <div class="title-section-bigger mt-10 light-blue">
                                                    <?= $data['title'] ?>
                                                </div>                                       
                                            <?php
                                        }
                                    ?>      
                                </div>
                                <?php                           
                                        if (!empty($data['description'])) {
                                            ?>                                      
                                                <div class="mt-20 description light">
                                                    <?= $data['description'] ?>
                                                </div>                                        
                                            <?php
                                        }
                                        if (!empty($data['button'])) {
                                            ?>
                                           <div class="group-btn mt-25">
                                                <a href="<?= $data['link_button'] ?>" class="btn w-180"><?= $data['button'] ?></a>
                                            </div>
                                            <?php
                                        }
                                ?>     
                            </div>
                        </div>
                        <div class="offset-lg-1 col-sm-6">
                            <div class="banner-home-image">
                                <?php                           
                                        if (!empty($data['image'])) {
                                            ?>                                      
                                                <div class="radius-right-60 mt-10">
                                                <?= wp_get_attachment_image($data['image'], 'large') ?>
                                                </div>                                        
                                            <?php
                                        }                                       
                                ?>
                                <div class="image-after"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>