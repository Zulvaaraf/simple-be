<?php

namespace Repository;

use Entity\TodoList;

interface TodolistRepository {
    public function add(TodoList $todolist): void;

    public function findAll(): array;

    // public function remove(int $number): bool;
}

class TodolistRepositoryImpl implements TodolistRepository {
    public array $todolist = [];

    public function add(TodoList $todolist): void
    {
        $number = sizeof($this->todolist) + 1;
        $this->todolist[$number] = $todolist;
    }

    
    public function findAll(): array
    {
        return $this->todolist;
    }
    
    // public function remove(int $number): bool
    // {
        
    // }
}