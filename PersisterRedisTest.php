<?php
require_once 'PersisterRedis.php';
require_once 'ApiLog.php';
require_once 'Redis.php';
class PersisterRedisTest extends PHPUnit_Framework_TestCase {
  function testRedisConnected() {
    $apiLog = new ApiLog(uniqid(), "/api/v4/authentication", new date('Y-m-d H:i:s'), "127.0.0.1");
    $redis = $this->getMockBuilder('Redis')->getMock();
    $redis->expects($this->once())
          ->method('insert')
          ->with($this->equalTo($apiLog))
          ->will($this->returnValue(true));
    $persisterRedis = new PersisterRedis($redis);
    $this->assertTrue($persisterRedis->persistLog($apiLog));
  }
}
