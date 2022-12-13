<?php


class users extends DB
{
    private $table = "users";
    private $conn;

    public function __construct()
    {
        $this->conn = $this->connect();
    }

    /**
     * @throws Exception
     */
    public function getAlladmin($user, $password)
    {
        $admin = $this->conn->where('login', $user);
        $admin = $this->conn->where('password', $password);
        return $admin->get($this->table);
    }
}