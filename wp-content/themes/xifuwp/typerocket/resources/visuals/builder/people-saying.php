<?php
if (!empty($data['list'])) {
    ?>
<div class="section section-people-sayings">
            <div class="container">
                <div class="people-saying">
                    <div class="people-saying-title">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="people-content">
                                    <?php                           
                                    if (!empty($data['title'])) {
                                        ?>
                                        <div class="people-saying-title">
                                            <div class="title-section">
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
                                    if (!empty($data['description'])) {
                                        ?>                                       
                                            <div class="description mt-15">
                                                <?= $data['description'] ?>
                                            </div>                                        
                                        <?php
                                    }
                                    ?>                                                                  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="people-saying-content mt-50">
                        <div class="js-people-saying owl-carousel owl-theme owl-loaded owl-drag">
                        <?php
                        foreach ($data['list'] as $item) {
                            ?>
                        
                                <div class="item">
                                    <div class="item-top">
                                        <?php
                                            if (!empty($item['image'])) {
                                                ?>
                                            <div class="item-top-icon">
                                                <?= wp_get_attachment_image($item['image'], 'large') ?>
                                                </div>
                                                <?php
                                            }
                                            
                                            if (!empty($item['title'])) {
                                                ?>
                                                <div class="item-top-name name-item-smallest ml-20">
                                                        <?= $item['title'] ?>
                                                </div>
                                                <?php
                                            }                                            
                                        ?>  
                                    </div>
                                    <?php
                                            if (!empty($item['description'])) {
                                                ?>
                                            <div class="item-description mt-25 left">
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
            </div>
        </div>
        <?php
    }
?>