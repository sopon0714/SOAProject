<?php
include_once("query.php");
session_start();
$total = $_SESSION['total'];
$all = $_SESSION['all'];
$total_VAT = $_SESSION['tpay'];


// เอาไว้รับวันที่จะให้ส่ง
$myDate = $_POST['myDate'];


$due_date = date("Y-m-d", strtotime("$myDate"));

$d_year = date("Y", strtotime("$myDate"));

$d_month = date("m", strtotime("$myDate"));

$d_day = date("d", strtotime("$myDate"));

// เอาไว้รับว่าให้จัดส่งหรือมาเอา
$status = $_POST['send'];


$timestamp = time();

$order_date=date("Y-m-d",$timestamp);


// วัน  ที่ทำการรายการ
$o_day = date("d", $timestamp);

// เดือน  ที่ทำการรายการ
$o_year = date("Y", $timestamp);

// ปี  ที่ทำการรายการ
$o_month = date("m", $timestamp);

// UID ของคนชื้อ
$UID = $_SESSION['login']['UID'];

$stml = getDIM_user($UID);
while ($DIM_user = $stml->fetch(PDO::FETCH_OBJ)){
    $dim_ID = $DIM_user->dim_ID;
}

if($status == "Delivery"){
    $total_VAT = $total_VAT+40;
}

Add_LOG_order($order_date,$dim_ID,$total_VAT,$o_year,$o_month,$o_day,$status,$due_date,$d_year,$d_month,$d_day,$total,$all);

header("location:./cart.php");
