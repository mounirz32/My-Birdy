<?php
session_start();

require __DIR__."/../Model/UserModel.php";


class UserController {
   public function index(){
      require __DIR__."/../view/singin.php";
   }
   public function register() {
      $username = $_POST["user_name"];
      $email = $_POST["email"];
      $pass = md5($_POST["pass"]);

      $obj = new UserModel();
      $obj->create($username, $email, $pass);

      header("location: http://localhost/mybirdybackend/LoginController");
   }

   
   
}