<?php

require_once 'DB.php';

class Product
{
    private $connection;
    function __construct()
    {
        $db = DB::getInstance();
        $this->connection = $db->getConnection();
    }
    public function create($_product, $user_id)
    {
        $query = "INSERT INTO products SET id=:id, name=:name, name_trans=:name_trans, price=:price, small_text=:small_text, big_text=:big_text, user_id=:user_id";
        $stmt = $this->connection->prepare($query);
        if ($stmt->execute([':id' => $_product['id'], ':name' => $_product['name'], ':name_trans' => $_product['name_trans'], ':price' => $_product['price'], ':small_text' => $_product['small_text'], ':big_text' => $_product['big_text'], ':user_id' => $user_id])) {
            return true;
        } else {
            return false;
        }
    }
    public function update($_product)
    {
        $query = "UPDATE products SET name=:name, name_trans=:name_trans, price=:price, small_text=:small_text, big_text=:big_text WHERE id = :id";
        $stmt = $this->connection->prepare($query);
        if ($stmt->execute([':id' => $_product['id'], ':name' => $_product['name'], ':name_trans' => $_product['name_trans'], ':price' => $_product['price'], ':small_text' => $_product['small_text'], ':big_text' => $_product['big_text']])) {
            return true;
        } else {
            return false;
        }
    }
    public function is_exist($id)
    {
        $query = "SELECT * FROM products WHERE id=:id";
        $stmt = $this->connection->prepare($query);
        if(!$stmt->execute([':id' => $id]))
        {
            return false;
        }
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if(count($rows) > 0) return true;
        return false;
    }
    public function is_own($id, $user_id)
    {
        $query = "SELECT * FROM products WHERE id=:id AND user_id=:user_id";
        $stmt = $this->connection->prepare($query);
        if(!$stmt->execute([':id' => $id, ':user_id' => $user_id]))
        {
            return false;
        }
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if(count($rows) > 0) return true;
        return false;
    }
}