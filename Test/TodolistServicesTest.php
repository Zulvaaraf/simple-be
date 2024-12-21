<?php

require_once "Entity/Todolist.php";
require_once "Repository/TodoListRepository.php";
require_once "Services/TodolistServices.php";

use Entity\TodoList;
use Repository\TodolistRepositoryImpl;
use Service\TodolistServicesImpl;

function testShowTodoList(): void {

    $todolistRepository = new TodolistRepositoryImpl();

    $todolistRepository->todolist[1] = new TodoList("Belajar PHP Dasar");
    $todolistRepository->todolist[2] = new TodoList("Belajar PHP Intermediate");
    $todolistRepository->todolist[3] = new TodoList("Belajar PHP Advanced");

    $todolistService = new TodolistServicesImpl($todolistRepository);

    $todolistService->showTodoList();

}

function testAddTodoList(): void {

    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServicesImpl($todolistRepository);

    $todolistService->addTodoList('Coding 12 Hours');
    $todolistService->addTodoList('Coding 11 Hours');
    $todolistService->addTodoList('Coding 10 Hours');

    $todolistService->showTodoList();
}

testShowTodoList();