<?php

$arr1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$arr2 = [10, 9, 8, 7, 6, 5, 4, 3, 2, 1];
$result = [];

//Основная логика
for($i = 0; $i < count($arr1); $i++) {
    $result[] = $arr1[$i] * $arr2[$i];
}

//Вывод данных
print_r($result);
