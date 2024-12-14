<?php

function addTodo(string $value) {
    global $todo;

    $index = sizeof($todo) + 1;

    $todo[$index] = $value;
}