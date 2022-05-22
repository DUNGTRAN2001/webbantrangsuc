<?php
include_once ("../Model/Model.php");

$listProducts = Model::getInstance()->getAllProducts();

session_start();
if(isset($_POST['signin'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($username == '' || $password == ''){
        echo "<script type='text/javascript'>alert('Please enter a valid username or password');</script>";
        include_once ("../View/login.php");
    }else{
        $sql = "select * from users where UserName = '".$username."' and Password = '".$password."'";
        $result = Model::getInstance()->excuteData($sql);
        $user = mysqli_fetch_array($result);
        if($user){
            if(isset($_POST['remember'])){
                setcookie('username',$username,time()+60*60*24*365);
                setcookie('password',$password,time()+60*60*24*365);
                setcookie('id',$user[0],time()+60*60*24*365);
            }else{
                unset($_COOKIE['username']);
                unset($_COOKIE['password']);
                unset($_COOKIE['id']);
            }
            $_SESSION['IS_LOGIN']='yes';
            header('location:../index.php');
            die();
        }else {
            echo "<script type='text/javascript'>alert('Wrong username or password');</script>";
            include_once ("../View/login.php");
        }
        mysqli_free_result($result);
    }
}


$username_cookie='';
$password_cookie='';
$set_remember="";


if(isset($_POST['signup'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $re_pass = $_POST['re_pass'];
    $email = $_POST['email'];
    $phone= $_POST['phone'];
    $address = $_POST['address'];

    if(isset($_POST['agree-term'])){
        if($username == '' and $password == '' and $re_pass == '' and $email == '' and $phone == '' and $address == ''){
            echo "<script type='text/javascript'>alert('Please enter valid information');</script>";
        }else{
            if($re_pass != $password){
                echo "<script type='text/javascript'>alert('Password incorrect');</script>";
                include_once ("../View/login.php");
            }
            else{
                $sql = "insert into users (	UserName, Password, Email, Phone, Address) values ('$username', '$password', '$email', '$phone', '$address')";
                $result = Model::getInstance()->excuteData($sql);
                $user = mysqli_fetch_array($result);
                echo "<script type='text/javascript'>alert('Successful registration');</script>";
                setcookie('username',$username,time()+60*60*24*365);
                setcookie('password',$password,time()+60*60*24*365);
                setcookie('id',$user[0],time()+60*60*24*365);
                header('location:../View/login.php');
                die();
            }
        }
    }else {
        echo "<script type='text/javascript'>alert('Please agree to our terms');</script>";
        include_once ("../View/login.php");
    }
}

function getProductById($id){
    return Model::getInstance()->getProductById($id);
}