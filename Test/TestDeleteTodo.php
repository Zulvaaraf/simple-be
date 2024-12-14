<?php

require_once "Model/Todolist.php";
require_once "Services/DeleteTodo.php";
require_once "Services/AddTodo.php";
require_once "Services/ShowTodo.php";

addTodo("Coding");
addTodo("Reading Documentation");
addTodo("Rest");

showTodo();

deleteTodo(1);

showTodo();

var_dump(deleteTodo(1));

showTodo();
