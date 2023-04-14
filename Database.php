<?php

class Database{

    public $connection;
    public function __construct($config)
    {
        

        $dsn ='mysql:' . http_build_query($config,'',';');

        //$dsn= "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}";

        $this ->connection = new PDO($dsn ,'root','super-secret-password',[PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    }
    public function query($query){
        

        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement;

        

        
    }
}