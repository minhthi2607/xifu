<?php
if (!empty($data['list']) && !empty($data['list_about']) && !empty($data['list_categories']) && !empty($data['list_service'])) {
    ?>
<div class="section section-blog-detail">
            <div class="container">
                <div class="blog-detail-form">
                    <div class="row">
                        <div class="col-sm-8">
                        <?php
                            if (!empty($data['image'])) {
                                ?>
                                <div class="blog-detail-image">
                                   <?= wp_get_attachment_image($data['image'], 'large') ?>
                                 </div>
                               <?php
                               }
                               if (!empty($data['title'])) {
                                ?>
                                <div class="blog-detail-title mt-40">
                                 <div class="title-section-smaller">
                                    <?= $data['title'] ?>
                                 </div>
                                 </div>
                               <?php
                               }
                             ?>
                            <div class="blog-detail-text mt-30">
                                <?php
                                if (!empty($data['description'])) {
                                    ?>
                                    <div class="description">
                                      <?= $data['description'] ?>
                                    </div>
                                <?php
                                }
                                ?>  

                                <div class="blog-detail-description">
                                    <?php
                                        foreach ($data['list'] as $item) {
                                            ?>
                                    <div class="mt-30 d-flex">
                                        <?php
                                            if (!empty($item['image'])) {
                                                ?>
                                               <div class="blog-detail-icon-action">
                                                <?= wp_get_attachment_image($item['image'], 'large') ?>
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
                                        <?php
                                        }
                                    ?>                                    
                                </div>                                  
                            </div>
                            <?php
                                if (!empty($data['description'])) {
                                    ?>
                                    <div class="description mt-20">
                                      <?= $data['description'] ?>
                                    </div>
                                <?php
                                }
                                ?> 
                        </div>
                        <div class="col-sm-4">
                            <div class="post-form">
                                        <?php
                                        if (!empty($data['sub_title'])) {
                                            ?>
                                                <div class="post-title">
                                                    <div class="title-section-20">
                                                    <?= $data['sub_title'] ?>
                                                    </div>
                                                </div>
                                            <?php
                                            }
                                        ?>                                    
                                        <div class="post-image-text">                                               								
                                            <?php
                                                foreach ($data['list_about'] as $item) {
                                                    ?>
                                                <div class="mt-20 post-image">
                                                <?php
                                                    if (!empty($item['image'])) {
                                                        ?>
                                                    <div class="post-image-item">
                                                            <?= wp_get_attachment_image($item['image'], 'large') ?>
                                                        </div>
                                                        <?php
                                                    }
                                                ?>				
                                                <div class="post-calender-text">
                                                    <?php
                                                    if (!empty($item['title'])) {
                                                        ?>                                                      
                                                            <div class="description">
                                                                <?= $item['title'] ?>
                                                            </div>                                                      
                                                        <?php
                                                        }
                                                    ?> 
                                                
                                                    <div class="d-flex">
                                                        <?php
                                                            if (!empty($item['icon'])) {
                                                                ?>
                                                            <div class="post-icon">
                                                                    <?= wp_get_attachment_image($item['icon'], 'large') ?>
                                                                </div>
                                                                <?php
                                                            }
                                                            if (!empty($item['text'])) {
                                                                ?>                                                      
                                                                <div class="light post-calendar">
                                                                        <?= $item['text'] ?>
                                                                    </div>                                                      
                                                                <?php
                                                                }
                                                            ?>
                                                    </div>
                                                </div>
                                        </div>	
                                            <?php
                                        }
                                        ?>
                                                                            
                             </div>
                            <div class="post-categories mt-25 fw-bold">
                                        <?php
                                        foreach ($data['list_categories'] as $item){
                                            if(!empty($item['list_content'])){
                                                if (!empty($item['title'])) {
                                                    ?>                                                      
                                                    <div class="post-categories-title">
                                                        <div class="title-section-20">
                                                            <?= $item['title'] ?>
                                                        </div> 
                                                    </div>                                                     
                                                    <?php
                                                }
                                                foreach ($item['list_content'] as $child_item){
                                                    
                                                    if (!empty($child_item['sub_title'])) {
                                                        ?>                                                   
                                                        <div class="post-categories-list semi-bold">
                                                            <div class="mt-20">
                                                                <?= $child_item['sub_title'] ?>
                                                            </div>              
                                                        </div>                                                                                       
                                                        <?php
                                                    }                                                
                                                }
                                            }
                                        }
                                    ?>
							    </div>
                            <div class="mt-25 form-try-services"
                                style="background-image: url('<?= get_attachment((int)$data['background'])['src'] ?>')">
                                
                                    <?php
                                        foreach ($data['list_service'] as $item) {
                                            ?>
                                            <?php
                                                if (!empty($item['title'])) {
                                                    ?>                                                      
                                                      <div class="services-title">
                                                        <div class="title-section-20">
                                                                <?= $item['title'] ?>
                                                        </div>
                                                    </div>                                                      
                                                    <?php
                                                    }
                                                    if (!empty($item['description'])) {
                                                        ?>                                                    
                                                        <div class="service-text">
                                                          <div class="mt-15 description">
                                                                <?= $item['description'] ?>
                                                            </div>
                                                        </div>                                                                                                          
                                                        <?php
                                                        }
                                                        if (!empty($item['button'])) {
                                                            ?>                                                           
                                                             <div class="group-btn mt-15">
                                                                    <a href="<?= $item['link_button'] ?>" class="btn w-180"><?= $item['button'] ?></a>
                                                            </div>                                                           
                                                            <?php
                                                        }                                                       
                                                    ?> 
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