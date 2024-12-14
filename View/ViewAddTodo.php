<?php

require_once "Model/Todolist.php";
require_once "Services/AddTodo.php";
require_once "Helper/Input.php";

function viewAddTodo() {
    $todo = input("ADD TODOLIST");

    if ($todo == "x") {
        return "Cancelled\n";
    }

    addTodo($todo);
}