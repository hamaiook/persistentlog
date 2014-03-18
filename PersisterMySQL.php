<?php
require "Persister.php";
class PersisterMySQL implements Persister {
  function persistLog(ApiLog $apiLog) {
    //$pdo = new pdo();
   // $isConnect = $pdo->connect();
   /// if($isConeect){
    //  $queryString = "insert into xxxx";
    //  $pdo->insert($queryString);
      return true;
  }

}
