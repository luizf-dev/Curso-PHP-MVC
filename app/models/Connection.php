<?php

namespace app\models;

abstract class Connection {

    private $hostname = "mysql:host=localhost;dbname=cursomvc";
    private $username = "root";
    private $password = "";
    
    protected function connect(){

        try {
            $conn = new \PDO($this->hostname, $this->username, $this->password);
            $conn->exec("set names utf8");
            return $conn;
        } catch (\PDOException $erro) {
            echo $erro->getMessage();
        }
    }
    
}