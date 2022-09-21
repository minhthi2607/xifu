<h1>About Wash Service</h1>
<?php

echo $form->text('Title');  
echo $form->text('Title Color');  
echo $form->repeater('List')->setFields([
     $form->text('Title'),   
    $form->image('Image'),  
    $form->editor('Description')   
]);
echo  $form->text('Button');
echo  $form->text('Link Button');
