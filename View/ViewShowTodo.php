<?php

require_once "Model/Todolist.php";
require_once "Services/ShowTodo.php";
require_once "View/ViewAddTodo.php";
require_once "View/ViewDeleteTodo.php";
require_once "Helper/Input.php";

function viewShowTodo(){
    while(true) {
        showTodo();

        $pilihan = input("Pilih");

        if ($pilihan == "1") {
            viewShowTodo();
        } elseif ($pilihan == "2") {
            ViewDeleteTodo();
        } elseif ($pilihan == "x") {
            break;
        } else {
            echo "Pilihan tidak dimengerti\n";
        }
    }

    echo "Goodbye!";
}