<?php
if (!empty($data['list']) && !empty($data['list_about'])) {
    ?>
<div class="section section-our-mission">
            <div class="container">
                <div class="our-mission-form">
                    <div class="row">
                        <div class="col-sm-5">
                            <?php                           
                              if (!empty($data['image'])) {
                                 ?>                                                
                                    <div class="radius-right-60">
                                    <?= wp_get_attachment_image($data['image'], 'large') ?>
                                     </div>                                                
                                <?php
                                }
                                ?>                      
                        </div>
                        <div class="col-sm-6 offset-sm-1">
                            <div class="our-mission-detail">
                                <div class="mission-list-title">
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
                                <div class="our-mission-content">
                                    <ul class="our-mission-list">
                                    <?php
                                        foreach ($data['list'] as $item) {
                                        ?>
                                        <li class="our-mission-item mt-30">
                                            <?php
                                                if (!empty($item['image'])) {
                                                    ?>
                                                <div class="our-mission-image">
                                                        <?= wp_get_attachment_image($item['image'], 'large') ?>
                                                    </div>
                                                    <?php
                                                }
                                            ?>  
                                            <div class="description">
                                            <?php
                                                if (!empty($item['title'])) {
                                                    ?>                                             
                                                <div class="title-section-20">
                                                     <?= $item['title'] ?>
                                                </div>
                                            <?php
                                            }
                                            if (!empty($item['description'])) {
                                                ?>      
                                                <div class="mt-15">
                                                    <?= $item['description'] ?>                                              
                                                </div>                                      
                                                <?php
                                            }
                                            ?>  
                                            </div>                                       

                                        </li>  
                                        <?php
                                     }
                                    ?>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                                    
                        <div class="our-mission-banner mt-120"
                        style="background-image: url('<?= get_attachment((int)$data['background'])['src'] ?>')">
                            <div class="container">
                                <div class="row">
                                    <?php
                                        foreach ($data['list_about'] as $item) {
                                        ?>
                                    <div class="col-lg-8">
                                        <?php
                                                if (!empty($item['title'])) {
                                                    ?>                                             
                                               <div class="our-mission-banner-heading">
                                                    <div class="title-section-smaller">
                                                        <?= $item['title'] ?>
                                                    </div>
                                                </div>
                                            <?php
                                            }
                                            if (!empty($item['description'])) {
                                              ?>                                            
                                                <div class="mt-10 description">
                                                            <?= $item['description'] ?>                                              
                                                    </div>
                                                <?php
                                             }
                                             if (!empty($item['button'])) {
                                                ?>
                                                <div class="group-btn mt-20">                                                  
                                                    <a href="<?= $item['link_button'] ?>" class="btn w-180"><?= $item['button'] ?></a>                                                   
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