<?php

$wish = ["счастья", "здоровья", "удачи", "благосостояния", "совершенства"];
$epithet = ["бесконечного", "крепкого", "дивного", "желанного"];
$result = [];
$end = "";

//Ввод данных
$name = readline("Как вас зовут? ");

//Основная логика
for ($i = 0; $i < 3; $i++) {
    if($i < 2) {
    $result[] = $epithet[array_rand($epithet, 1)] . " " . $wish[array_rand($wish, 1)];
    } else {
        $end .= $epithet[array_rand($epithet, 1)] . " " . $wish[array_rand($wish, 1)];
    }
}
$str = implode(", ", $result);

//Вывод данных
echo "Дорогой {$name}, от всего сердца поздравляю тебя с днем рождения, желаю {$str} и {$end}!";