<?php
require_once "PersisterMySQL.php";
require_once "ApiLog.php";
require_once "PDOConnect.php";
class PersisterMySQLTest extends PHPUnit_Framework_TestCase {
  function testPersisterMySQLShouldReturnTrue() {
    $persisterMySQL = new PersisterMySQL();
    $this->assertTrue($persisterMySQL->persistLog(new ApiLog(uniqid(), "/api/v4/authentication", new date('Y-m-d H:i:s'), "127.0.0.1")));
  }
  function testPersisterMySQLShouldReturn() {
    $persisterMySQL = new PersisterMySQL();
    $this->assertNotNull($persisterMySQL);
  }
  function testInsertPdo(){
    $pdo=new PDOConnect();
    $result= $pdo->insert();
  // $this->mockPdoWrite=$this->GetMockBuilder('PDO')->disableOriginalConstructor()->getMock();
//   $this->mockPdoWrite->expects($this->once())->method('extcute');//->will($this->returnValue(true)));
   $this->assertEquals(true,$result);
  }
}
