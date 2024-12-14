<?php

function showTodo() {
    global $todo;

    foreach($todo as $number => $value) {
        echo "$number. $value\n";
    }
}