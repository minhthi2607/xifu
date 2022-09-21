<h1>Clean Service</h1>
<?php

echo $form->text('Title');  
echo $form->text('Category Title');  
echo $form->text('Title Color');  
echo $form->editor('Description');  

echo $form->repeater('List Category')->setFields([
    $form->image('Image'),  
    $form->text('Title'),     
    $form->text('Link Title')      
]);
echo $form->repeater('List Product')->setFields([
    $form->image('Image'), 
    $form->text('Title'),
    $form->text('Sub Title'),
    $form->text('Price'),
    $form->text('Button'),
    $form->text('Link Button')
 
]);
