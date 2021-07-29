<?php
require __DIR__."/../config.php";

class UserModel {

   public function create($user_name, $email, $pass) 
   {
      $sql = "INSERT INTO `users` (`user_name`, `email`, `password`, `role`) VALUES ('$user_name', '$email', '$pass',1)";
      $obj = new config();
      $obj->connection($sql);
   }

   public function login($user_name,$pass) {
      $sql ="select * from `users` where user_name='$user_name' and password='$pass'";
      $objet = new config();
      $result=$objet->connection($sql);
      return $result->fetchAll(PDO::FETCH_ASSOC);
   }

   public function logout()
   {
      session_start();
      session_destroy();
   }
   public function edite() 
   {

   }

   public function update()
   {

   }

   public function delete()
   {

   }
}
