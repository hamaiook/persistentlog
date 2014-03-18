<?php
require_once "PersisterMySQL.php";
require_once "ApiLog.php";
class PersisterMySQLTest extends PHPUnit_Framework_TestCase {
  function testPersisterMySQLShouldReturnTrue() {
    $persisterMySQL = new PersisterMySQL();
    $this->assertTrue($persisterMySQL->persistLog(new ApiLog(uniqid(), "/api/v4/authentication", new date('Y-m-d H:i:s'), "127.0.0.1")));
  }
  function testPersisterMySQLShouldReturn() {
    $persisterMySQL = new PersisterMySQL();
    $this->assertNotNull($persisterMySQL);
  }
  function testConnectMySql(){
   $pdo=$this->getMock('PDOConnect');
   $pdo->expects($this->any())
     ->method('connectMySql')
     ->will($this->returnValue(true));

  }
}
