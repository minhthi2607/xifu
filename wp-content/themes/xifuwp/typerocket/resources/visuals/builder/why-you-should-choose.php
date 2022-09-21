<?php
if (!empty($data['list'])) {
    ?>
<div class="section section-why-choose-wash">
            <div class="container">
                <div class="why-choose-wash">
                    <div class="row">
                        <div class="col-lg-6">
                             <?php                           
                                if (!empty($data['title'])) {
                                    ?>
                                   <div class="why-choose-wash-title">
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
                                    </div>
                                    <?php
                                }
                            ?>    
                        </div>  
                        <?php
                        $i=0;
                        foreach ($data['list'] as $item)                                 
                        {                           
                                if( $i % 2 == 0){                                
                                        ?>                            
                                        <div class="row mt-50 align-items-center">
                                            <div class="col-lg-5 col-sm-6">
                                                <?php
                                                    if (!empty($item['image'])) {
                                                        ?>
                                                    <div class="why-image radius-right-70">
                                                            <?= wp_get_attachment_image($item['image'], 'large') ?>
                                                        </div>
                                                        <?php
                                                    }
                                                    ?>
                                            </div>
                                            <div class="col-sm-6 offset-lg-1">
                                                <div class="why-content">
                                                    <div class="why-title">
                                                        <div class="title-section-smaller">
                                                            <?= $item['title'] ?>
                                                        </div>
                                                    </div>
                                                    <div class="mt-25 description">
                                                        <?= $item['description'] ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>   
                                    <?php
                                }
                                else{                                   
                                    ?>                            
                                    <div class="row mt-50 align-items-center">
                                        <div class="col-sm-6 offset-lg-1">
                                                <div class="why-content">
                                                    <div class="why-title">
                                                        <div class="title-section-smaller">
                                                            <?= $item['title'] ?>
                                                        </div>
                                                    </div>
                                                    <div class="mt-25 description">
                                                        <?= $item['description'] ?>
                                                    </div>
                                                    <div class="group-btn mt-35">                                                      
                                                        <?php
                                                            if (!empty($item['button_schedule'])) {
                                                                ?>   
                                                                    <div class="btn w-180">                                                        
                                                                <a href="<?= $item['link_schedule'] ?>"><?= $item['button_schedule'] ?></a>
                                                                </div>
                                                                <?php
                                                            }
                                                        ?>                                                         
                                                        <?php
                                                            if (!empty($item['button_price'])) {
                                                                ?> 
                                                                    <div class="btn btn-light-blue ml-20 w-180">                                                          
                                                                    <a href="<?= $item['link_price'] ?>"><?= $item['button_price'] ?></a>
                                                                    </div>
                                                                <?php
                                                            }
                                                        ?>                                                                   
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="col-lg-5 col-sm-6">
                                            <?php
                                                if (!empty($item['image'])) {
                                                    ?>
                                                <div class="why-image radius-right-70">
                                                        <?= wp_get_attachment_image($item['image'], 'large') ?>
                                                    </div>
                                                    <?php
                                                }
                                                ?>
                                        </div>
                                       
                                    </div>   
                                 <?php
                                }                           
                                $i++;
                        }
                        ?>        
                    </div>                   
                </div>
            </div>
        </div>
        <?php
    }
?>