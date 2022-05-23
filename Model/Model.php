<?php

include_once ("../Model/Product.php");
include_once ("../Model/User.php");
class Model
{
    private static $instance;
    public function __construct(){}
    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new Model();
        }
        return self::$instance;
    }

    public function excuteData($query)
    {
        $connect = mysqli_connect("localhost", "root", "2001", "qlbh1");
        if ($connect) {
            return mysqli_query($connect, $query);
        }
    }
    public function getAllProducts()
    {
        try {
            $query = "select * from product";
            $result =  $this->excuteData($query);
            $i = 0;
            if ($result) {
                while ($row = mysqli_fetch_array($result)) {
                    $product[$i++] = new Product($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6]);
                }
                return $product;
            }
        }catch (Exception $exception){
            echo 'Caught exception: ',  $exception->getMessage(), "\n";
        }
    }

    public function getProductById($id){
        try {
            $query = "select * from product where ProductId = '".$id."'";
            $result =  $this->excuteData($query);
            if ($result) {
                if ($row = mysqli_fetch_array($result)) {
                    return new Product($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7]);
                }
            }
        }catch (Exception $exception){
            echo 'Caught exception: ',  $exception->getMessage(), "\n";
        }
    }

    public function getUserById($id){
        try {
            $query = "select * from users where UserId = '".$id."'";
            $result =  $this->excuteData($query);
            if ($result) {
                if ($row = mysqli_fetch_array($result)) {
                    return new User($row[0], $row[1], $row[2], $row[3], $row[4], $row[5]);
                }
            }
        }catch (Exception $exception){
            echo 'Caught exception: ',  $exception->getMessage(), "\n";
        }
    }
    public function getAllUser(){
        try {
            $query = "select * from users";
            $result =  $this->excuteData($query);
            $i = 0;
            $user = [];
            if ($result) {
                while ($row = mysqli_fetch_array($result)) {
                    $user[$i++] = new User($row[0], $row[1], $row[2], $row[3], $row[4], $row[5]);
                }
                return $user;
            }
        }catch (Exception $exception){
            echo 'Caught exception: ',  $exception->getMessage(), "\n";
        }
    }
}