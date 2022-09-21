<?php
if (!empty($data['list']) && !empty($data['list_about']) && !empty($data['list_categories']) && !empty($data['list_service'])) {
    ?>
<div class="section section-our-blogs">
				<div class="container">
					<div class="blog-form">
						<div class="row">
							<div class="col-sm-8">
								<div class="row">
                                <?php 
                                    $args = array(
                                        'posts_per_page' => 6,
                                        'post_type'      => 'post'
                                        

                                    );
                                    $the_query = new WP_Query( $args );
                                    ?>
                                    <?php if( $the_query->have_posts() ): ?>
                                    <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                         <?= the_title(); ?>
                                    <?php endwhile; ?>
                                    <?php endif; ?>
                                <?php wp_reset_query(); ?>


									
								</div>
								<div class="pagination-form mt-65">
									<nav aria-label="Page navigation example">
										<div class="d-flex justify-content-center">
											<ul class="pagination">
												<li class="page-item">
													<a class="page-link page-link-arrow" href="#">
														<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
													<path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
														 </svg>
													</a>
												</li>
												<li class="page-item"><a class="page-link page-bg" href="#">1</a></li>
												<li class="page-item"><a class="page-link page-bg" href="#">2</a></li>
												<li class="page-item"><a class="page-link page-bg" href="#">3</a></li>
												<li class="page-item"><a class="page-link page-bg" href="#">4</a></li>
												<li class="page-item">
													<a class="page-link page-link-arrow" href="#">
														<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
													<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
												  </svg></a>
												</li>
											</ul>
										</div>
									</nav>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="post-form">
                                    <?php
                                       if (!empty($data['title'])) {
                                         ?>
                                        	<div class="post-title">
                                                <div class="title-section-20">
                                                 <?= $data['title'] ?>
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