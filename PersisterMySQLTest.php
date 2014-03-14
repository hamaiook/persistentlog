<?php
require "PersisterMySQL.php";
class PersisterMySQLTest extends PHPUnit_Framework_TestCase {
  function testPersisterMySQLShouldReturn() {
    $persisterMySQL = new PersisterMySQL();
    $this->assertNotNull($persisterMySQL);
  }
}
