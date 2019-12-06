<?php

// $arr = ["Moscow", "Munich", "Beijing", "Roma", "Barcelona", "London"];
// for ($i=0; $i<700000; $i++) {
// 	array_push($arr, $i);
// }

// $obj = new ArrayObject( $arr );
// $iter = $obj->getIterator();

// $start2 = microtime(true);
// while( $iter->valid() )
// {
//     $iter->key() . "=" . $iter->current();
//     $iter->next();
// }
// echo microtime(true) - $start2;
// echo "\n\n";

// $start = microtime(true);
// foreach ($arr as $key => $value ) 
// {
// 	$key . '='. $value;
// }
// echo  microtime(true) - $start;

$arr = [];

/*
 * Форич и быстрее, и памяти ест меньше, тестировалось несколько раз и на довольно больших массивах
 */
const ARRAY_LENGTH = 1000000;

// заполнение тестовыми строками
for ($j = 0; $j < ARRAY_LENGTH; $j++) {
    $arr[$j] = "test $j";
}

$start = microtime(true);


foreach ($arr as $key => $item) {
    $temp = $item;
    //echo $key . "=" . $item . "\n";
}

echo 'Время выполнения форича: ' . round(microtime(true) - $start, 4) . ' сек.';
echo memory_get_usage() . ' bytes Использовал форич' . PHP_EOL;


$iter = new ArrayIterator($arr);
$start = microtime(true);
while($iter->valid()) {
    $temp = $iter->current();
    $iter->next();
}

echo 'Время выполнения итератора: ' . round(microtime(true) - $start, 4) . ' сек.';
echo memory_get_usage() . ' bytes Использовал итератор' . PHP_EOL;


