<?php

include_once ("../Model/Product.php");
class Model
{
    private static Model $instance;
    public function __construct(){}
    public static function getInstance(): Model
    {
        if (self::$instance == null) {
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
}