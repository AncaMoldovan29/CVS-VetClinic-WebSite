<?php


class DBModel 
{
    protected $conn;

    public function db(){
        $this->conn = new mysqli('localhost', 'myuser', '123', 'webdev');
        if($this->conn->connect_error){
            die('Connection error!');
        }
        return $this->conn;
    }

   
}