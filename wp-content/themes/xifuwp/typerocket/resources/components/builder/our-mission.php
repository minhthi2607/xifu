<h1>Our Mission</h1>
<?php

echo  $form->image('Image');
echo $form->text('Title');
echo $form->repeater('List')->setFields([
    $form->image('Image'),
    $form->text('Title'),
    $form->editor('Description') 
]);
echo $form->image('Background');
echo $form->repeater('List About')->setFields([  
    $form->text('Title'),
    $form->editor('Description'),
    $form->text('Button'),
    $form->text('Link Button')
]);