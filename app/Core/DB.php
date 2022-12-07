<?php

class DB
{
    protected $db;
    public function connect()
    {
        $db = new MysqliDb ('host', 'username', 'password', 'databaseName');
    }
}


?>