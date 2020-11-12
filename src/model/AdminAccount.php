<?php
include_once "DBConnect.php";

class AdminAccount
{
    private $username;
    private $password;

    public function __construct()
    {
        $db = new DBConnect();
        $connect = $db->connect();
        $sql = "SELECT * FROM users";
        $stmt = $connect->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch();
        $this->username = $result['username'];
        $this->password = $result['password'];
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }


}