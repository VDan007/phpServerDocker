<?php

class Database{

    public $connection;
    public function __construct()
    {
        
        $dsn= "mysql:host=172.27.0.2;port=3306;dbname=myapp;charset=utf8";
        $this ->connection = new PDO($dsn ,'root','super-secret-password');
    }
    public function query($query){
        

        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement;

        

        
    }
}