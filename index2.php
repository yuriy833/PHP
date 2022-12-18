<?php
//Ввод данных
$name = readline("Как Вас зовут: ");

$count = 1;
$sumTime = 0;

do {
    $amount = (int)readline("Сколько задач заланировано на сегодня? ");
} while ($amount <= 0);

//Основная логика
$result = "{$name}, сегодня у вас запланировано {$amount} приоритетных задачи на день: \n";

for($i = 0; $i < $amount; $i++) {
    $task = "task{$count}";
    $time = "time{$count}";

    $$task = readline("Какая задача стоит перед вами сегодня? ");
    $$time = (int)readline("Сколько примерно времени эта задача займет? ");

    $sumTime += $$time;

    $result .= "- {$$task} ({$$time}ч)\n";

    $count++;
}

$result .= "Примерное время выполнения плана = {$sumTime}ч";

//Вывод данных
echo $result;