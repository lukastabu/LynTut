<?php
// $Christmas2023 = strtotime('Dec 25, 2023');
// echo date('l, F j, Y', $Christmas2023);

$date1 = new DateTime();
$date2 = new DateTime();

$westCoast = new DateTimeZone('America/Los_Angeles');

$date2->setTimezone($westCoast);

echo $date1->format('g:ia, l, F j, Y');
echo '<br>';
echo $date2->format('g:ia, l, F j, Y');
