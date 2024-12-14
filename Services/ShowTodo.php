<?php

function showTodo() {
    global $todo;

    echo "TODOLIST\n";

    foreach($todo as $number => $value) {
        echo "$number. $value\n";
    }
}