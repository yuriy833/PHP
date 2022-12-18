<?php

echo "В каком году произошло крещение Руси? Варианты: 810, 990 или 740 год.";
$result = "";

//Ввод данных
$answer = (int)readline("");

//Основная логика
while ($answer != 990 && $answer != 810 && $answer != 740 ) {
    $answer = (int)readline("Вы выбрали вариант, отсутствующий в вопросе, повторите ввод: ");
}

switch ($answer) {
    case 990:
        $result = "Поздравляю, это правильный ответ!";
        break;
    case 810:
    case 740:
        $result = "Ответ неверный!";
        break;
}

//Вывод данных
echo $result;