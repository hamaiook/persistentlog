<?php
Class PersisterRedis implements Persister{
  function __construct(Redis $redis){
    $this->redis = $redis;
  }

  function persistLog(ApiLog $apiLog) {
    return $this->redis->insert($apiLog);
  }
}
?>
