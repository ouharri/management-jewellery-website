<?php

class product extends DB
{
    private $table = "product";
    private $conn;

    public function __construct()
    {
        $this->conn = $this->connect();
    }

    /**
     * @throws Exception
     */
    public function getAllProducts()
    {
        return  $this->conn->get($this->table);
    }

}

