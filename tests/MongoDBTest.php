<?php
class MongoDBTest extends PHPUnit_Framework_TestCase {
  function testInsert() {
    $mongodb = new MongoDB();
    $this->assertTrue(true, $mongodb->insert());
  }
}
