<?php
//Отсортировать массив по 'price'
echo 'Сортировка по убыванию:';
$arr = [
    '1'=> [
        'price' => 10,
        'count' => 2
    ],
    '2'=> [
        'price' => 5,
        'count' => 5
    ],
    '3'=> [
        'price' => 8,
        'count' => 5
    ],
    '4'=> [
        'price' => 12,
        'count' => 4
    ],
    '5'=> [
        'price' => 8,
        'count' => 4
    ],
];

$price  = array_column($arr, 'price');
array_multisort($price, SORT_DESC, $arr);
var_dump($arr);
?>