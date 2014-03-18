<?php
class PersisterMySQLTest extends PHPUnit_Framework_TestCase {
  function testPersisterMySQLShouldReturnTrue() {
    $mockPDOStatement = $this->getMock('PDOStatement');
    $mockPDOStatement->expects($this->once())->method('execute')->will($this->returnValue(true));
    $mockPDO = $this->getMock('MockPDO');
    $mockPDO->expects($this->once())->method('prepare')->will($this->returnValue($mockPDOStatement));
    $persisterMySQL = new PersisterMySQL($mockPDO);
    $this->assertTrue($persisterMySQL->persistLog(new ApiLog(uniqid(), "/api/v4/authentication",date('Y-m-d H:i:s'), "127.0.0.1")));
  }
  function testPersisterMySQLShouldReturn() {
    $persisterMySQL = new PersisterMySQL(new PDO("mysql:host=localhost;dbname=olx","root",""));
    $this->assertNotNull($persisterMySQL);
  }
}
