<?php
$submitted = rand(0, 1 );
$message = 'Nothing submitted';

if($submitted) {
    $message = 'Thank you';
} 

echo $message;