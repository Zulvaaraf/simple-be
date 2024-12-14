<?php

require_once "Model/Todolist.php";
require_once "View/ViewDeleteTodo.php";
require_once "Services/AddTodo.php";
require_once "Services/DeleteTodo.php";
require_once "Services/ShowTodo.php";

addTodo("Udemy");
addTodo("BWA");
addTodo("PZN");

showTodo();

ViewDeleteTodo();

showTodo();

var_dump($todo);