<?php

function deleteTodo(int $number) {
    global $todo;

    if (isset($todo[$number - 1])) {
        unset($todo[$number - 1]);
        echo "Todo has been deleted\n";
        return true;
    } 
    
    echo "Todo does not exsited\n";
    return false;
}

