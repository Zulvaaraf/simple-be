<?php

require_once "Model/Todolist.php";
require_once "Services/ShowTodo.php";
require_once "View/ViewAddTodo.php";
require_once "View/ViewDeleteTodo.php";
require_once "Helper/Input.php";

function viewShowTodo(){
    while(true) {
        showTodo();

        $pilihan = input("CHOSE NUMBER");

        if ($pilihan == "1") {
            viewAddTodo();
        } elseif ($pilihan == "2") {
            ViewDeleteTodo();
        } elseif ($pilihan == "x") {
            echo "DONE...";
            break;
        } else {
            echo "ERROR! INVALID INPUT..\n";
            break;
        }
    }
}