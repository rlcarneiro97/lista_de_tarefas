<?php

class Conexao{

    // singleton
    private static $instance;

    public static function getInstance()
    {
        if(!isset(self::$instance))
        {
            self::$instance = new PDO('mysql:dbname=tasks_todo_db;host=localhost', 'root', '');
        }

        return self::$instance;
    }
    
}

?>