<?php

namespace Repository;

use Entity\TodoList;

interface TodolistRepository {
    public function add(TodoList $todolist): void;

    public function findAll(): array;

    public function delete(int $number): bool;
}

class TodolistRepositoryImpl implements TodolistRepository {

    public array $todolist = [];
    private \PDO $connection;
 
    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;      
    }

    public function add(TodoList $todolist): void
    {

        $sql = <<<SQL
            INSERT INTO todolist(todo)
            VALUES(?);
        SQL;

        $statement = $this->connection->prepare($sql);
        $statement->execute([$todolist->getTodo()]);

    }

    
    public function findAll(): array
    {

        $sql = <<<SQL
            SELECT id, todo FROM todolist;
        SQL;

        $statement = $this->connection->prepare($sql);
        $statement->execute();

        $result = [];

        foreach ($statement as $row) {
            $todolist = new TodoList($row['todo'], $row['id']);
            $result[] = $todolist;
        }

        return $result;
        
    }
    
    public function delete(int $number): bool
    {

        $sql = <<<SQL
                SELECT * FROM todolist WHERE id = ?;
        SQL;

        $statement = $this->connection->prepare($sql);
        $statement->execute([$number]);

        if ($statement->fetch()) {
            $sql = <<<SQL
                    DELETE FROM todolist WHERE id = ?;
            SQL;

            $statement = $this->connection->prepare($sql);
            $statement->execute([$number]);
            return true;
        } else {
            return false;
        }

    }
}