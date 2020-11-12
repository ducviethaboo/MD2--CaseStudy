<?php
include_once "../model/AdminAccount.php";

class AccountController
{
    protected $admin;

    public function __construct()
    {
        $this->admin = new AdminAccount();
    }

    public function checkLogin()
    {
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $correct = $username === $this->admin->getUsername() && $password === $this->admin->getPassword();
            if ($correct) {
                header("location:../view/admin-page.php");
            } else {
                header("location:../view/login-error.php");
            }
        }
    }
}