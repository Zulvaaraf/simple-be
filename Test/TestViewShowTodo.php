<?php

require_once "View/ViewShowTodo.php";
require_once "Services/AddTodo.php";

addTodo("coding");
addTodo("documentation");

viewShowTodo();