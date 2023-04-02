<?php

echo convert_to_minutes(-547);

function convert_to_minutes($seconds) {
    $minutes = intdiv($seconds, 60);
    $remainingSeconds = $seconds % 60;
    $remainingSeconds = abs($remainingSeconds);
    $remainingSeconds = ($remainingSeconds < 10) ? '0' . $remainingSeconds : $remainingSeconds;
    return "$minutes:$remainingSeconds";
}