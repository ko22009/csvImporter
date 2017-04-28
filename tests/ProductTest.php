<?php

namespace csvImporter\Tests;

use PDO;
use PHPUnit\DbUnit\Database\DefaultConnection;
use PHPUnit\Framework\TestCase;
//use csvImporter\App\Product;
//todo: mockery DB
//todo: create Product class from upload
class ProductTest extends TestCase
{
    protected $db;
    protected function setUp()
    {
        $this->db = new PDO('sqlite::memory:');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->db->exec('CREATE TABLE test (field1 VARCHAR(100))');
    }
    public function testRowCountForEmptyTableReturnsZero()
    {
        $conn = new DefaultConnection($this->db);
        $this->assertEquals(0, $conn->getRowCount('test'));
    }
    public function testRowCountForTableWithTwoRowsReturnsTwo()
    {
        $this->db->exec('INSERT INTO test (field1) VALUES (\'foobar\')');
        $this->db->exec('INSERT INTO test (field1) VALUES (\'foobarbaz\')');
        $conn = new DefaultConnection($this->db);
        $this->assertEquals(2, $conn->getRowCount('test'));
    }
    /*
    protected function setUp()
    {
        $this->products = [
            ['id' => 1, 'name' => 'Keyboard', 'name_trans' => 'Клавиатура', 'price' => '500', 'small_text' => 'Краказябра', 'big_text' => 'Краказябра', 'user_id' => 2],
            ['id' => 2, 'name' => 'Mouse', 'name_trans' => 'Мышь', 'price' => '200', 'small_text' => 'Краказябра', 'big_text' => 'Краказябра', 'user_id' => 1],
            ['id' => 3, 'name' => 'Display', 'name_trans' => 'Монитор', 'price' => '2000', 'small_text' => 'Краказябра', 'big_text' => 'Краказябра', 'user_id' => 2],
        ];
    }*/
}