<?php
// Поиск элемента массива с известным индексом
    $arr = [1, 2, 5, 8, 3];
    if (isset($arr[2])) // Одно действие => сложность O(1)
        echo $arr[2];

// Дублирование одномерного массива через foreach
    $new_arr = [];
    foreach ($arr as $item) { // n действий (n - длинна массива)
        $new_arr[] = $item; //1 действие => Сложность  О(n)
    }

// Рекурсивная функция нахождения факториала числа
function Factorial($number){
    if($number <= 1){
        return 1;
    }
    else{
        return $number * Factorial($number - 1);
        //$number * Factorial() выполнится 1 раз
        // Factorial($number - 1) выполнится n раз => Сложность  О(n)
    }
}

//2.1
$n = 100;
$array[]= [];
for ($i = 0; $i < $n; $i++) {//цикл повторится n раз
    for ($j = 1; $j < $n; $j *= 2) { //цикл повторится logn раз => Сложность O(nlogn)
        $array[$i][$j]= true;
    }
}


//2.2
$n = 100;
$array[] = [];
for ($i = 0; $i < $n; $i += 2) {//цикл повторится n/2 раз
    for ($j = $i; $j < $n; $j++) {//цикл повторится n раз => Сложность O(n^2)
        $array[$i][$j]= true;
    }
}
