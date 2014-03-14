<?php
require "PersisterMySQL.php";
require "ApiLog.php";
class PersisterMySQLTest extends PHPUnit_Framework_TestCase {
  function testPersisterMySQLShouldReturnTrue() {
    $persisterMySQL = new PersisterMySQL();
    $this->assertTrue($persisterMySQL->persistLog(new ApiLog(uniqid(), "/api/v4/authentication", new date('Y-m-d H:i:s'), "127.0.0.1")));
  }
  function testPersisterMySQLShouldReturn() {
    $persisterMySQL = new PersisterMySQL();
    $this->assertNotNull($persisterMySQL);
  }
}
