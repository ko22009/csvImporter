<?php

class DB
{
    private static $instance = null;
    private $connection;
    private $options = [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"];
    private function __construct()
    {
        $this->connection = new PDO("mysql:host={$_SERVER["HTTP_DB_HOST"]};dbname={$_SERVER["HTTP_DB_NAME"]}", $_SERVER["HTTP_DB_USER"], $_SERVER["HTTP_DB_PASS"], $this->options);
    }
    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new DB();
        }
        return self::$instance;
    }
    public function getConnection()
    {
        return $this->connection;
    }
}