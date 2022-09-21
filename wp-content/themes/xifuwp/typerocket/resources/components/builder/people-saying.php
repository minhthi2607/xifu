<h1>People Saying</h1>
<?php

echo $form->text('Title');  
echo $form->text('Title Color');  
echo  $form->editor('Description');

echo $form->repeater('List')->setFields([
     $form->text('Title'),   
    $form->image('Image'),  
    $form->editor('Description')   
]);
