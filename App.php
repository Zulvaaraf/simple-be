<?php

require_once "Entity/Todolist.php";
require_once "Helper/InputHelper.php";
require_once "Repository/TodoListRepository.php";
require_once "Services/TodolistServices.php";
require_once "View/TodolistView.php";

use Repository\TodolistRepositoryImpl;
use Service\TodolistServicesImpl;
use View\TodolistView;

echo "Todolist App\n";

$todoRepository =  new TodolistRepositoryImpl();
$todoServices = new TodolistServicesImpl($todoRepository);
$todoView = new TodolistView($todoServices);

$todoView->showTodoList();