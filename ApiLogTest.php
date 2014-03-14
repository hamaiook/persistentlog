<?php
require "ApiLog.php";
class ApiLogTest extends PHPUnit_Framework_TestCase {
  function testCreateApiLog() {
    $apiLog = new ApiLog(uniqid(), "/api/v4/authentication", new date('Y-m-d H:i:s'), "127.0.0.1");
    $this->assertNotNull($apiLog);
  }
}
