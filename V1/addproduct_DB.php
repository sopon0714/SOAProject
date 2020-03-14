<?php

$name = $_POST['name'];
$price = $_POST['price'];
$status = $_POST['status'];



include_once("query.php");
AddProduct($name, $price, $status);

header("location:./admin.php");
