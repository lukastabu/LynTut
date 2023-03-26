<?php
$descriptions = [
    'earth' => 'safe',
    'mars' => 'not safe (maybe in future)'
];

$descriptions['moon'] = 'visited, nothing interesting'; // upening associative array with new value

echo $descriptions['mars'];
echo '<br><br>';

print_r($descriptions);
echo '<br><br>';

echo "One interesting plannet that we might need to look into is Mars, because {$descriptions['mars']}";
echo '<br><br>';
