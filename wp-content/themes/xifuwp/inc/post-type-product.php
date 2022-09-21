<?php
$argsSupport = array( 'title');
$product = tr_post_type('Product');
$product->setSupports($argsSupport);
$product->addColumn('Price');
$product->setTitlePlaceholder('Enter product name here');
$product->setRest();
$product->setArchivePostsPerPage(-1);
$product->setTitleForm(function () {
    $form = tr_form();
    echo $form->image('Main Image');
    echo $form->gallery('Gallery');
    echo $form->text('Price');
    echo $form->editor('Product Description');
});
tr_taxonomy('Category')->apply($product);

tr_meta_box('TECHNICAL DETAILS')->apply($product)->setCallback(function () {
    $form = tr_form();
    echo $form->image('Technical Image');
    echo $form->repeater('Technical Detail')->setFields([
        $form->text('Technical Title'),
        $form->text('Technical Description')
    ]);
});

tr_meta_box('Articles')->apply($product)->setCallback(function () {
    $form = tr_form();
    echo $form->repeater('Articles')->setFields([
        $form->text('Video'),
        $form->image('Image'),
        $form->text('Description')
    ]);
});

tr_meta_box('Suggestion')->apply($product)->setCallback(function () {
    $form = tr_form();
    echo $form->repeater('Suggestion Product')->setFields([
       $form->search('Product')
    ]);
});

