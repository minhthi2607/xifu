<h1>Contact Us</h1>
<?php

echo $form->text('Title');  

echo $form->repeater('List')->setFields([
     $form->text('Title'),   
    $form->editor('Description')   
]);
echo $form->text('Shortcode');