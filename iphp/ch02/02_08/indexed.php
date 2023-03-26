<?php
//$characters = array('Arthur Dent', 'Ford Prefect', 'Zaphod Beeblebrox');
$characters = ['Arthur Dent', 'Ford Prefect', 'Zaphod Beeblebrox'];
print_r($characters);
echo '<br>';
echo '<br>';

$characters[] = 'Marvin';
$characters[] = 'Slartibartfast';


print_r($characters);
echo '<br>';
echo '<br>';

echo $characters[1];

echo '<br>';
echo '<br>';

print_r($characters[0]);
echo '<br>';
echo '<br>';

print($characters[1]);