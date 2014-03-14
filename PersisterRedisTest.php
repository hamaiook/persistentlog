<?php
require_once 'PersisterRedis.php';
class PersisterRedisTest extends PHPUnit_Framework_TestCase {
  function testRedisConnected() {
    $apiLog = $this->getMock('ApiLog');
    $persisterRedis = new PersisterRedis();
    $this->assertTrue($persisterRedis->persistLog($apiLog));
  }
}
