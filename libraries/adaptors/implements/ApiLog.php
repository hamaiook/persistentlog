<?php
class ApiLog {
  var $id = NULL;
  var $url = NULL;
  var $access_time = NULL;
  var $ip = NULL;
  public function __construct($id, $url, $access_time, $ip){
    $this->id = $id;
    $this->url = $url;
    $this->access_time = $access_time;
    $this->ip = $ip;
  }
}
