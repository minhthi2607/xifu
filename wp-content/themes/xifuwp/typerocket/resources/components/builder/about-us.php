<h1>About Us</h1>
<?php

echo $form->text('Title');
echo $form->text('Title Color');
echo $form->editor('Description');
echo $form->image('Image');
echo $form->repeater('List')->setFields([
    $form->image('Image'),   
    $form->editor('Description'),    
]);
echo $form->repeater('List Service')->setFields([
    $form->image('Image'),  
    $form->text('Title'), 
    $form->editor('Description'),    
]);