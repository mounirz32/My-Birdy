<?php 

class config{

   public $servername = "localhost";
   public $username = "root";
   public $dbname = "mybirdy";
   public $password = "";

   public function connection($query) {
      try {
         $dataBase = new PDO("mysql:host=$this->servername; dbname=$this->dbname", $this->username, $this->password);
         return $dataBase->query($query);
         echo 'Connection is passed';
      } catch (PDOException $e) {
         print "Errore :" . $e->getMessage() . "<br>";
         die();
      }
   } 
}