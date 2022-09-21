<?php
if (!empty($data['list']) && !empty($data['list_about'])) {
    ?>
<div class="section section-faqs">
            <div class="container">
                <div class="faqs-form">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="faqs-categories">
                            <?php
                                foreach ($data['list'] as $item) {
                                    ?>
                                    <div class="mt-10 faqs-item">
                                         <?= $item['title'] ?>
                                    </div>  
                                <?php
                                 }
                            ?>                                
                            </div>
                        </div>
                        <div class="col-sm-8 offset-lg-1">
                            <div class="faqs-form-pickup">
                                <div class="faqs-title">
                                    <?php
                                        if (!empty($item['title'])) {
                                            ?>
                                             <div class="title-section-20 light-blue">                                   
                                                <?= $data['title'] ?>
                                            </div>
                                            <?php
                                        }
                                    ?>
                                </div>
                                <div class="accordion" id="accordionExample">
                                <?php
                                    $i=0; $j=0;
                                    foreach ($data['list_about'] as $item) {                                                                            
                                        ?>
                                            <div class="accordion-item mt-15">                                              
                                                <h2 class="accordion-header" id= "<?= $i ?>">                                                   
                                                    <button class="accordion-button fw-bold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $j ?>" aria-expanded="false" aria-controls="collapse<?= $j ?>">
                                                    <?= $item['title'] ?>
                                                    </button>
                                                </h2>
                                                <div id="collapse<?= $j ?>" class="accordion-collapse collapse" aria-labelledby="<?= $i ?>" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body description">
                                                    <?= $item['description'] ?>
                                                    </div>
                                                </div>                                                
                                            </div>
                                        <?php
                                        $i++; $j++;                                       
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