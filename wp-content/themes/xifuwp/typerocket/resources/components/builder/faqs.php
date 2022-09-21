<h1>FAQs</h1>
<?php


echo $form->text('Title');
echo $form->repeater('List')->setFields([   
    $form->text('Title'),      
]);

echo $form->repeater('List About')->setFields([   
    $form->text('Title'),
    $form->editor('Description'),    
]);