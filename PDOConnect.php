<?php
  class PDOConnect{
    function connect(){
      return true;
    }
    function insert(){
      $pdoConn = new PDO('mysql:host=localhost;dbname=test','user','password');
      return true;
    }
  }
?>
