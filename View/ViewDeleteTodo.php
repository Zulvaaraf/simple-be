<?php

require_once "Helper/Input.php";
require_once "Services/DeleteTodo.php";

function ViewDeleteTodo() {
    $pilihan = input("Number");

    if ($pilihan == "x") {
        echo "Cancel delete todo\n";
    } else {
        $success = deleteTodo($pilihan);
    
        if ($success) {
            echo "Deleted success\n";
        } else {
            echo "Failed!\n";
        }
    }
}