<h1>Our Blog Detail</h1>
<?php

echo  $form->text('Title');
echo  $form->text('Sub Title');
echo   $form->image('Image');
echo  $form->editor('Description');


echo $form->repeater('List')->setFields([
    $form->image('Image'), 
    $form->editor('Description') 
]);
echo $form->repeater('List About')->setFields([
    $form->image('Image'),    
    $form->text('Title'),
    $form->image('Icon'),
    $form->text('Text'),
   
]);
echo $form->repeater('List Categories')->setFields([     
    $form->text('Title'),
    $form->repeater('List Content')->setFields([ 
    $form->text('Sub Title'),
    ])
]);
echo $form->image('Background');
echo $form->repeater('List Service')->setFields([
    $form->text('Title'),   
    $form->text('Description'),
    $form->text('Button'),
    $form->text('Link Button')   
]);