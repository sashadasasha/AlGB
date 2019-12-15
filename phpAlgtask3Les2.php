<?php

function maxDivider($number) {
    $divider = 2;
    $dividerToReturn = null; 
    $maxValueOfDivider = $number;
    while ($divider <= ceil(pow($number, 0.5)) && $maxValueOfDivider !== 1)
    {
        if ($maxValueOfDivider % $divider === 0) {
            $maxValueOfDivider = $maxValueOfDivider / $divider;
            $dividerToReturn = $divider;
        } else {
            $divider ++;
        }
    }
    if (!is_null($dividerToReturn)) {
        return $dividerToReturn;
    } else {
        return "$number" . " - простое число"; 
    }

}

$start = microtime(true);
echo maxDivider(600851475143).PHP_EOL; //6857
echo maxDivider(97).PHP_EOL;
echo microtime(true) - $start;