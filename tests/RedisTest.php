<?php
class RedisTest extends PHPUnit_Framework_TestCase {
  function testCreateRedis() {
    $redis = new Redis();
    $this->assertNotNull($redis);
  }
  function testInsertRedis(){
    $redis = new Redis();
    $this->assertTrue($redis->insert(new ApiLog(uniqid(), "/api/v4/authentication",date('Y-m-d H:i:s'), "127.0.0.1")));
  }
}
