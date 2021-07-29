<?php
session_start();

require __DIR__."/../Model/UserModel.php";

class LoginController
{
    public function index()
    {
        require __DIR__."/../view/login.php";
    }

    public function login()
    {
        if (isset($_POST['submit'])) {
            $sign=new UserModel();
            $log=$sign->login($_POST['user_name'], md5($_POST['password']));

            if (empty($log)) {
                header("location:http://localhost/mybirdybackend/view/index.php");
            } else {
                session_start();
                $_SESSION['user_name']=$log[1]['user_name'];
                header("location: http://localhost/mybirdybackend/view/contact.php");
            }
        }
    }

    public function Logout()
    {
        if (isset($_POST['logout'])) {
            $sign=new UserModel();
            $sign->logout();
            header("location:http://localhost/mybirdybackend/logout");
        }
    }
}