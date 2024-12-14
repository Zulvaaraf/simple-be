<?php

function deleteTodo(int $number): bool {
    global $todo;

    if ($number > sizeof($todo)) {
        return false;
    }

    if (isset($todo[$number])) {
        // $todo = array_values($todo);

        for ($i = $number; $i <= sizeof($todo); $i++) {
            $todo[$i] = $todo[$i + 1];
        }
        
        unset($todo[sizeof($todo)]);

        echo "Todo has been deleted\n";
        return true;
    } 
    
    echo "Todo does not exsited\n";
    return false;
}

