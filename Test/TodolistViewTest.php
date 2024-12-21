<?php

require_once "Entity/Todolist.php";
require_once "Repository/TodoListRepository.php";
require_once "Services/TodolistServices.php";
require_once "View/TodolistView.php";

use Entity\TodoList;
use Repository\TodolistRepositoryImpl;
use Service\TodolistServicesImpl;
use View\TodolistView;

function testViewShowTodoList(): void {
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServicesImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodoList("Coding 1 Hours");
    $todolistService->addTodoList("Coding 2 Hours");
    $todolistService->addTodoList("Coding 3 Hours");

    $todolistView->showTodoList();
}

function testViewAddTodoList(): void {
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServicesImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodoList("Coding 1 Hours");
    $todolistService->addTodoList("Coding 2 Hours");

    $todolistView->addTodoList();

    $todolistView->showTodoList();
}

function testDeleteTodoLIst(): void {
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServicesImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodoList("Coding 1 Hours");
    $todolistService->addTodoList("Coding 2 Hours");

    $todolistView->deleteTodoList();

    $todolistView->showTodoList();
}

testDeleteTodoLIst();