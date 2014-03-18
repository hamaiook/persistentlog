<?php
class PersisterMySQL implements Persister {
  private $pdo;
  function __construct(PDO $pdo) {
    $this->pdo = $pdo;
  }
  function persistLog(ApiLog $apiLog) {
    // $conn = new PDO("mysql:host=localhost;dbname=olx","root","");
    $sql = "INSERT INTO persistlog(id,url,access_time,ip) VALUES (:id,:url,:access_time,:ip);";
    $q = $this->pdo->prepare($sql);
    $result = $q->execute(array(':id'=>$apiLog->id,':url'=>$apiLog->url,':access_time'=>$apiLog->access_time,':ip'=>$apiLog->ip));
    $this->pdo = null;
    return $result;
  }
}
