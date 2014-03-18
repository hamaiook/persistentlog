<?php
class PersisterMongo implements Persister {
  var $di = null;
  function __construct($di){
    $this->di = $di;
  }
  
  function persistLog(ApiLog $apiLog) {
    $document = array( "id" => $apiLog->id, "url" => $apiLog->url , "access_time" => $apiLog->access_time, "ip" => $apiLog->ip );
    return $this->di->mongo->insert($document);
  }
}
