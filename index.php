<?php

include 'Comment.php';
include 'User.php';
include 'Task.php';
include 'TaskService.php';

$user = new User('Юзер1', 'user@user.ru');
$task = new Task($user, 'Задача номер 1', 6);

TaskService::addComment($user, $task, 'Сделать поскорее');
TaskService::addComment($user, $task, 'Второй коммент');

echo 'Комментарии ' . PHP_EOL;

foreach ($task->getComments() as $comments) {
    echo $comments->getText() . ', ';
    echo 'имя задачи ' . $comments->getTask()->getDescription() . PHP_EOL;
}