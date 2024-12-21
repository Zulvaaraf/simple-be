<?php

namespace Service;

use Entity\TodoList;
use Repository\TodolistRepository;

interface TodolistServices {
    public function showTodoList(): void;

    public function addTodoList(string $todo): void;

    // public function deleteTodoList(int $number): void;
}

class TodolistServicesImpl implements TodolistServices {
    private TodolistRepository $todolistRepository;

    public function __construct(TodolistRepository $todolistRepository)
    {
        $this->todolistRepository = $todolistRepository;
    }

    public function showTodoList(): void
    {
        $todolist = $this->todolistRepository->findAll();
        foreach ($todolist as $number => $value) {
            echo "$number. " . $value->getTodo() . PHP_EOL;
        }
    }  

    public function addTodoList(string $todo): void
    {
        $todolist = new TodoList($todo);
        $this->todolistRepository->add($todolist);
        echo "Success! you're todo have been saved..\n";

    }

    // public function deleteTodoList(int $number): void
    // {
        
    // }
}