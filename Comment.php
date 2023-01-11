<?php

class Comment
{
    private User $author;
    private Task $task;
    private string $text;

    public function __construct(User $author, Task $task, $text)
    {
        $this->author = $author;
        $this->task = $task;
        $this->text = $text;
    }

    public function getAuthor(): User
    {
        return $this->author;
    }

    public function getTask(): Task
    {
        return $this->task;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function setAuthor(User $author): void
    {
        $this->author = $author;
    }

    public function setTask(Task $task): void
    {
        $this->task = $task;
    }

    public function setText(string $text): void
    {
        $this->text = $text;
    }


}