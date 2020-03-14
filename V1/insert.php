<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $telnum = $_POST['telnum'];
    require_once('query.php');
    Adduser($username,$password,$name,$surname,$address,$telnum,$email);
    header("location:./index.php");
?>