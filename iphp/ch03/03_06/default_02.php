<?php
$unit_cost = 20;

if (isset($unit_cost) && $unit_cost > 0) {
    $wholesale_price = $unit_cost;
} else {
    $wholesale_price = 25;
}

echo $wholesale_price;
