<?php
require_once "Redis.php";
require_once "ApiLog.php";
class RedisTest extends PHPUnit_Framework_TestCase {
  function testCreateRedis() {
    $redis = new Redis();
    $this->assertNotNull($redis);
  }
  function testInsertRedis(){
    $redis = new Redis();
    $this->assertTrue($redis->insert(new ApiLog()));
  }
}
