<?php
if (!function_exists('add_action')) {
    echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
    exit;
}
 
$form = tr_form()->useJson()->setGroup($this->getName());
echo $form->open();
?>

<h1>Theme Options</h1>
<div class="typerocket-container">
    <?php
    echo $form->open();

    // Header
    $header = function () use ($form) {
        echo $form->text('Site Header'); 
        echo $form->image('Logo Header'); 
        
         
    };

    //Footer
    $footer = function () use ($form) {
                 
        echo $form->text('Copyright');
    };





    
    // //shop
    // $shop = function () use ($form) {
    //     echo $form->image('Banner  Shop');
    //     echo $form->image('Image 1');
    //     echo $form->image('Image 2');
    //     echo $form->text('Title Banner'),
    //         $form->text('Title Shop'),
    //         $form->editor('Description Shop');

           
    // };

    

    

    // Save
    $save = $form->submit('Save');

    // Layout
    tr_tabs()->setSidebar($save)
        ->addTab('Header', $header)
        ->addTab('Footer', $footer)
        ->render('box');
    echo $form->close();
    ?>

</div>