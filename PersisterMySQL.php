<?php
require "Persister.php";
class PersisterMySQL implements Persister {
  function persistLog(ApiLog $apiLog) {
    return true;
  }
}
