
        <div class="section-banner"
         style="background-image: url('<?= get_attachment((int)$data['background'])['src'] ?>')">
            <div class="container">
                <div class="section-heading">
                <?php
                        if (!empty($data['title'])) {
                            ?>
                            <div class="title-section-bigger light-blue">
                                <?= $data['title'] ?>
                            </div>
                            <?php
                        }
                ?>
                 
                </div>
            </div>
        </div>