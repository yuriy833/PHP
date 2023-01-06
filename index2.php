<?php
//Ввод данных
$randomArr = [];

while(!$counterUser = (int)readline("Выберите количество чисел массива от 1 до 50? ") ) {
    echo "Введите число!\n";
}

for($i = 0; $i < $counterUser; $i++) {
    $randomArr [] = rand(0,50);
}

//Основная логика
function sumArr ( array $arr):int
{
    $result = 0;
    foreach ($arr as $item) $result += $item;
    return $result;
}

function avg (array $arr):int 
{
    return sumArr($arr) / count($arr);
}

function userFn (array $arr):array
{
    $result = [];
    $result["max"] = max($arr);
    $result["min"] = min($arr);
    $result["avg"] = avg($arr);
    return $result;
}

//Вывод данных
echo "Результат работы:";
print_r(userFn($randomArr));
echo "Массив чисел:";
print_r($randomArr);