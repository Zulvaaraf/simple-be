<?php

require_once "Helper/Input.php";
require_once "Model/Todolist.php";
require_once "Services/AddTodo.php";

function viewAddTodo() {
    $todo = input("Todo");

    if ($todo == "x") {
        echo "Cancelled\n";
    }
    
    addTodo($todo);
}