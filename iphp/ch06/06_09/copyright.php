<?php

function copyright()
{
    $firstYear = new dateTime('2022-03-07');
    $currentYear = new dateTime();
    $text = '';
    if ($firstYear->format('Y') === $currentYear->format('Y')) {
        $text ='©' . $firstYear->format('Y');
    } else {
        $text = '©' . $firstYear->format('Y') . '-' . $currentYear->format('y');
    }
    return $text;
}


echo copyright();