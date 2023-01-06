<?php
//Ввод данных
$arr = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

//Основная логика
$result = array_map(fn(int $item):string => $item & 1 ? 'Нечетное' : 'Четное', $arr);

//Вывод данных
echo 'Массив чисел:';
print_r($arr);
echo 'Массив результата:';
print_r($result);