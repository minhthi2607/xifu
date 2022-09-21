<?php
if (!empty($data['list'])) {
    ?>
        <div class="section section-workings">
            <div class="container">
                <div class="workings-form">
                    <div class="row text-center">
                        <div class="col-sm-12">
                            <?php                           
                                if (!empty($data['title'])) {
                                    ?>
                                    <div class="workings-title">
                                        <div class="title-section left">
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
                        </div>
                        <?php
                        foreach ($data['list'] as $item) {
                        ?>
                            <div class="col-sm-4">                     
                                <div class="item mt-70">
                                    <?php
                                            if (!empty($item['image'])) {
                                                ?>
                                                <div class="workings-image">
                                                    <?= wp_get_attachment_image($item['image'], 'large') ?>
                                                </div>
                                                <?php
                                            }
                                            if (!empty($item['title'])) {
                                                ?>
                                                <div class="name-item yellow mt-45">
                                                    <?= $item['title'] ?>
                                                </div>
                                                <?php
                                            }
                                            if (!empty($item['description'])) {
                                                ?>    
                                                <div class="description">
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
        <?php
    }
?>