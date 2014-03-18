<?php
class PersisterMongoTest extends PHPUnit_Framework_TestCase{
  public function testPersistentLogMongoInsert(){
    $di = new Stdclass;
    $mockMongo = $this->getMockBuilder('MongoDB')
                      ->disableOriginalConstructor()
                      ->getMock();
    $mockMongo->expects($this->any())
              ->method('insert')
              ->will($this->returnValue(true));
    $di->mongo = $mockMongo;
    $persisterMongo = new PersisterMongo($di);
    $this->assertTrue($persisterMongo->persistLog(new ApiLog(uniqid(), "/api/posting/", date('Y-m-d H:i:s'), "127.0.0.1")));	}
}
