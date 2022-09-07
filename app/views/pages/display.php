
<?php 

$name = array_column($data , 'name');
echo "Teacher name: ";
print_r($name[0]);

?>
<?php foreach ($data as $post):?>
    <p>Student name: <?= $post->std_name?></p>
    
    <?php endforeach?>