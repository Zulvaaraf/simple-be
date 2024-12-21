<?php

require_once "Configuration/DBconnection.php";
require_once "Entity/Todolist.php";
require_once "Repository/TodoListRepository.php";
require_once "Services/TodolistServices.php";

use Config\Database;
use Entity\TodoList;
use Repository\TodolistRepositoryImpl;
use Service\TodolistServicesImpl;

function testShowTodoList(): void {

    $connection = Database::getConnection();
    $todolistRepository = new TodolistRepositoryImpl($connection);
    $todolistService = new TodolistServicesImpl($todolistRepository);

    $todolistService->showTodoList();
}

testShowTodoList();

// function testAddTodoList(): void {
    
//     $connection = Database::getConnection();
//     $todolistRepository = new TodolistRepositoryImpl($connection);
//     $todolistService = new TodolistServicesImpl($todolistRepository);

//     $todolistService->addTodoList('Coding 12 Hours');
//     $todolistService->addTodoList('Coding 11 Hours');
//     $todolistService->addTodoList('Coding 10 Hours');

//     $todolistService->showTodoList();
// }

// testAddTodoList();

// function testDeleteTodoList(): void {

//     $connection = Database::getConnection();
//     $todolistRepository = new TodolistRepositoryImpl($connection);
//     $todolistService = new TodolistServicesImpl($todolistRepository);

//     $todolistService->deleteTodoList(4) . PHP_EOL;
//     $todolistService->deleteTodoList(3) . PHP_EOL;
//     $todolistService->deleteTodoList(2) . PHP_EOL;
//     $todolistService->deleteTodoList(1) . PHP_EOL;
// }

// testDeleteTodoList();