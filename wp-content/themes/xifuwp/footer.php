 </div>
 <footer class="footer footer-section">
     <div class="container">
         <div class="footer-form">
             <div class="row">
                 <div class="col-sm-3 col-6">
                     <ul class="list-group mt-20">
                         <li class="list-group-item name-item-smaller" aria-current="true">QUICK LINK</li>
                         <?php
                            wp_nav_menu(array(
                                'theme_location'  => 'footer-quick-link',
                                'container'       => 'return_false',
                                'fallback_cb'     => 'return_false',
                                'items_wrap'      => '%3$s',
                                'depth'           => 4,
                            ));
                            ?>
                     </ul>
                 </div>
                 <div class="col-sm-3 col-6">
                     <ul class="list-group mt-20">
                         <li class="list-group-item name-item-smaller" aria-current="true">LEGAL STUFF</li>
                         <?php
                            wp_nav_menu(array(
                                'theme_location'  => 'footer-legal-stuff',
                                'container'       => 'return_false',
                                'fallback_cb'     => 'return_false',
                                'items_wrap'      => '%3$s',
                                'depth'           => 4,
                            ));
                            ?>
                     </ul>
                 </div>
                 <div class="col-sm-3 col-6">
                     <ul class="list-group mt-20">
                         <li class="list-group-item name-item-smaller" aria-current="true">OUR LOCATION</li>
                         <?php
                            wp_nav_menu(array(
                                'theme_location'  => 'footer-our-location',
                                'container'       => 'return_false',
                                'fallback_cb'     => 'return_false',
                                'items_wrap'      => '%3$s',
                                'depth'           => 4,
                            ));
                            ?>
                     </ul>
                 </div>
                 <div class="col-sm-3">
                     <ul class="list-group mt-20">
                         <li class="list-group-item name-item-smaller" aria-current="true">SUBSCRIBE</li>
                         <div class="d-flex">
                             <?= do_shortcode(tr_options_field('theme_options.form_subscribe')) ?>
                         </div>
                         <div class="d-flex mt-20">
                             <div class="footer-cricle-icon">
                                 <div class="footer-icon">
                                     <img src="<?= get_template_directory_uri() ?>/assets/images/icon-face.png'" alt="">
                                 </div>
                             </div>
                             <div class="footer-cricle-icon">
                                 <div class="footer-icon">
                                     <img src="<?= get_template_directory_uri() ?>/assets/images/icon-link.png'" alt="">

                                 </div>
                             </div>
                             <div class="footer-cricle-icon">
                                 <div class="footer-icon">
                                     <img src="<?= get_template_directory_uri() ?>/assets/images/icon-twi.png'" alt="">
                                 </div>
                             </div>
                             <div class="footer-cricle-icon">
                                 <div class="footer-icon">
                                     <img src="<?= get_template_directory_uri() ?>/assets/images/icon-ins.png'" alt="">
                                 </div>
                             </div>
                         </div>
                     </ul>
                 </div>
                 <div class="copy-right text-center mt-60"><?= tr_options_field('theme_options.copyright') ?>
                 </div>
             </div>
         </div>
     </div>
 </footer>
 <div class="icon-whatsapp none-tablet-mobile">
     <img src="<?= get_template_directory_uri() ?>/assets/images/ico - 24 - social media & tools - whatsapp@2x.png'" alt="">
 </div>

 <?php wp_footer(); ?>
 <script language="javascript">
     jQuery(document).ready(function($) {
         //var ajax_url = '../wp-admin/admin-ajax.php';
         $('.button_action').click(function() { // Khi click vào button thì sẽ gọi hàm ajax

         var number_1 = $('.number1').val();
         var number_2 = $('.number2').val();
         console.log(number_1, number_2);


             $.ajax({ // Hàm ajax
                 type: "post", //Phương thức truyền post hoặc get
                 dataType: "html", //Dạng dữ liệu trả về xml, json, script, or html
                 url: '<?php echo admin_url('admin-ajax.php');?>', // Nơi xử lý dữ liệu
                 data: {
                     action: "getpost", //Tên action, dữ liệu gởi lên cho server
                    cat_id : cat_id,
                 },
                 beforeSend: function() {
                     // Có thể thực hiện công việc load hình ảnh quay quay trước khi đổ dữ liệu ra
                 },
                 success: function(response) {
                     //Làm gì đó khi dữ liệu đã được xử lý
                     $('.display-post').html(response); // Đổ dữ liệu trả về vào thẻ &lt;div class="display-post"&gt;&lt;/div&gt;
                 },
                 error: function(jqXHR, textStatus, errorThrown) {
                     //Làm gì đó khi có lỗi xảy ra
                     console.log('The following error occured: ' + textStatus, errorThrown);
                 }
             });
         });
     });
 </script>
 </body>

 </html>