<?php


class DBConnect
{
    protected $dsn;
    protected $username;
    protected $password;

    public function __construct()
    {
        $this->dsn = "mysql:host=127.0.0.1;dbname=myshop";
        $this->username = "root";
        $this->password = "123456@Abc";
    }

    public function connect()
    {
        return new PDO($this->dsn, $this->username, $this->password);
    }
}