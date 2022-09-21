<h1>Why You Should Choose</h1>
<?php

echo $form->text('Title');
echo $form->text('Title Color');
echo $form->repeater('List')->setFields([
     $form->text('Title'),   
    $form->image('Image'),  
    $form->editor('Description'),
    $form->text('Button Schedule'),
    $form->text('Link Schedule'),
    $form->text('Button Price'),
    $form->text('Link Price'),
]);
