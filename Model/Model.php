<?php

include_once ("../Model/Product.php");
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
        $connect = mysqli_connect("localhost", "root", "", "qlbh");
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
                    $product[$i++] = new Product($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7]);
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

}