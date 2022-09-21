<?php
if (!empty($data['list'])) {
    ?>
<div class="section section-contact-us">
            <div class="container">
                <div class="contact-us-form">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-list-title">
                                <?php
                                    if (!empty($data['title'])) {
                                        ?>
                                        <div class="title-section">
                                                <?= $data['title'] ?>
                                        </div>
                                        <?php
                                    }
                                ?>
                              
                            </div>
                            <?php
                            if (!empty($data['shortcode'])) {
                                ?>
                                <div class="col-sm-12">
                                    <div class="contact-us-content mt-50">                                      
                                            <?= do_shortcode($data['shortcode']) ?>                                      
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                        <div class="col-sm-4">
                            <div class="contact-info">
                                <?php
                                    foreach ($data['list'] as $item) {
                                        ?>
                                        <div class="contact-info-content mt-20">
                                            <?php
                                                if (!empty($item['title'])) {
                                                    ?>
                                                    <div class="title-section-25 yellow">
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
                                    <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
?>