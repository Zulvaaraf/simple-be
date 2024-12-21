<?php

namespace View;

require_once "Helper/InputHelper.php";

use Helper\InputHelper;
use Service\TodolistServices;

class TodolistView {
    private TodolistServices $todolistService;

    public function __construct(TodolistServices $todolistService)
    {
        $this->todolistService = $todolistService;
    }

    public function showTodoList(): void {
        while (true) {
            $this->todolistService->showTodoList();

            $option = InputHelper::input("Option");
        
            if ($option == "1") {
                $this->addTodoList();
            } else if ($option == "2") {
                $this->deleteTodoList();
            } else if ($option == "x") {
                break;
            } else {
                echo "Input not understood! \n";
            }
        }
    }

    public function addTodoList(): void {
        $todo = InputHelper::input("TODO A");

        if ($todo == "x") {
            echo "Cancel add todo\n";
        } else {
            $this->todolistService->addTodoList($todo);
        }
    }

    public function deleteTodoList(): void {
        $option = InputHelper::input("TODO D");

        if ($option == "x") {
            echo "Cancel Delete...\n";
        } else {
            $this->todolistService->deleteTodoList($option);
        }
    }
}