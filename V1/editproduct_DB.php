<?php
$id = $_POST['edit_id'];
$name = $_POST['edit_name'];
$price = $_POST['edit_price'];
$status = $_POST['edit_status'];



include_once("query.php");
ed_Product($id, $name, $price, $status);

header("location:./admin.php");
