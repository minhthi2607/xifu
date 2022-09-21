<h1>About Our Product</h1>
<?php


echo $form->text('Title');
echo $form->text('Title Color');
echo $form->repeater('List')->setFields([
    $form->image('Image'),
    $form->text('Title'),
    $form->editor('Description'),
     $form->text('Button'),
     $form->text('Link Button')
]);

