<?php

// สินค้าทั้งหมดในระบบ
function DB_ProductAll (){
    require('connect.php');
    $stmt = $con->query("SELECT * FROM `db_product`");
    return $stmt;
}

// สินค้าที่เปิดขาย
function DB_ProductStatusON(){
    require('connect.php');
    $stmt = $con->query("SELECT * FROM `db_product` WHERE `product_status` = 1");
    return $stmt;
}

// ข้อมูลผู่้ใช้
function DB_user(){
    require('connect.php');
    session_start();
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
    $stmt = $con->query("SELECT * FROM `db_user` WHERE `username` = '$username' AND `password`= '$password'");
    return $stmt;
}

function getDIM_user($dim_uid){
    require('connect.php');
    $stmt = $con->query("SELECT * FROM `dim_user` WHERE `dim_uid` = '$dim_uid'");
    return $stmt;
}

function ed_user($UID,$name,$surname,$address,$tel,$email){
    // UPDATE `db_user` SET `username` = 'admin1s', `name` = 'Nipapornv', `surname` = 'Sornphommasd', `address` = '145\r\nSongphinong\r\n72110\r\nThailandsdv', `tel` = '0871145312sdv', `email` = 'nipa@gmail.comasd' WHERE `db_user`.`UID` = 2
    require('connect.php');
    $con->query("UPDATE `db_user` SET `name` = '$name', `surname` = '$surname', `address` = '$address', `tel` = '$tel', `email` = '$email' WHERE `db_user`.`UID` = '$UID'");
    ed_DIMuser($UID,$name,$surname,$address,$tel);
}
function ed_DIMuser($dim_uid,$dim_name,$dim_surname,$dim_address,$dim_tel){
    // UPDATE `db_user` SET `username` = 'admin1s', `name` = 'Nipapornv', `surname` = 'Sornphommasd', `address` = '145\r\nSongphinong\r\n72110\r\nThailandsdv', `tel` = '0871145312sdv', `email` = 'nipa@gmail.comasd' WHERE `db_user`.`UID` = 2
    require('connect.php');
    $con->query("UPDATE `dim_user` SET  `dim_name` = '$dim_name', `dim_surname` = '$dim_surname', `dim_address` = '$dim_address', `dim_tel` = '$dim_tel' WHERE `dim_user`.`dim_uid` = '$dim_uid'");
}

function Adduser($username,$password,$name,$surname,$address,$tel,$email){
    require('connect.php');
  
    $con->query("INSERT INTO `db_user` (`UID`, `username`, `password`, `name`, `surname`, `address`, `tel`, `email`, `is_admin`) VALUES (NULL, '$username', '$password', '$name', '$surname', '$address', '$tel', '$email', '0')");
    $stml = $con->query("select max(UID)AS UID from `db_user`");
    while ($DB_user = $stml->fetch(PDO::FETCH_OBJ)){
            $UID = $DB_user->UID;
            AddDIMuser($UID,$name,$surname,$address,$tel);
    }
    
}

function AddDIMuser($dim_uid,$dim_name,$dim_surname,$dim_address,$dim_tel){
    require('connect.php');
    $con->query("INSERT INTO `dim_user` (`dim_ID`, `dim_uid`, `dim_name`, `dim_surname`, `dim_address`, `dim_tel`) 
    VALUES (NULL, '$dim_uid', '$dim_name', '$dim_surname', '$dim_address', '$dim_tel')");
}


function AddProduct($product_name,$price,$product_status){
    require('connect.php');
    $con->query("INSERT INTO `db_product` (`PID`, `product_name`, `product_status`, `price`) VALUES (NULL, '$product_name', '$product_status', '$price')");
    $stml = $con->query("select max(PID)AS PID from `db_product`");
    while ($DB_product = $stml->fetch(PDO::FETCH_OBJ)){
            $PID = $DB_product->PID;
            AddDIMProduct($PID,$product_name,$price);
    }

}

function AddDIMProduct($dim_PID,$dim_productname,$dim_price){
    require('connect.php');
    $con->query("INSERT INTO `dim_product` (`dim_ID`, `dim_PID`, `dim_productname`, `dim_price`) VALUES (NULL,'$dim_PID','$dim_productname','$dim_price')");
}

function getDIM_Product($dim_productname){
    require('connect.php');
    $stmt = $con->query("SELECT * FROM `dim_product` WHERE `dim_productname` = '$dim_productname'");
    return $stmt;
}


function ed_Product($PID,$product_name,$price,$product_status){
    require('connect.php');
    $con->query("UPDATE `db_product` SET `product_name` = '$product_name', `product_status` = '$product_status', `price` = '$price' WHERE `db_product`.`PID` = '$PID'");
    ed_DIMProduct($PID,$product_name,$price);
}

function ed_DIMProduct($dim_PID,$dim_productname,$dim_price){
    require('connect.php');
    $con->query("UPDATE `dim_product` SET `dim_productname` = '$dim_productname', `dim_price` = '$dim_price' WHERE `dim_product`.`dim_ID` = '$dim_PID'");
}

function de_Product($PID){
    require('connect.php');
    $con->query("DELETE FROM `db_product` WHERE `db_product`.`PID` = '$PID'");
}
// ตารางใบสั้งชื้อ เพิ่ม
function Add_LOG_order($order_date,$dim_ID,$total_VAT,$o_year,$o_month,$o_day,$status,$due_date,$d_year,$d_month,$d_day,$total,$all){
    require('connect.php');
    $con->query("INSERT INTO `log_order` (`OID`, `order_date`, `dim_ID`, `total_VAT`, `o_year`, `o_month`, `o_day`, `status`, `due_date`, `d_year`, `d_month`, `d_day`, `end_time`, `status_product`) 
    VALUES (NULL, '$order_date', '$dim_ID', '$total_VAT', '$o_year', '$o_month', '$o_day', '$status','$due_date','$d_year', '$d_month', '$d_day', NULL, NULL)");
     $stml = $con->query("select max(OID)AS OID from `log_order`");
     while ($LOG_order = $stml->fetch(PDO::FETCH_OBJ)){
             $OID = $LOG_order->OID;
     }
     foreach ($total as $k => $v){
        $stmt = getDIM_Product($k);
        while ($DIM_Product = $stmt->fetch(PDO::FETCH_OBJ)){
            $dim_ID = $DIM_Product->dim_ID;
        }
        Add_details_order($OID,$dim_ID,$v,$all['money'][$k]);
     }

     
}
// ตารางรายละเอียด เพื่ม
function Add_details_order($OID,$dim_ID,$amount_product,$price_noVAT){
    require('connect.php');
    $con->query("INSERT INTO `details_order` (`DID`, `OID`, `dim_ID`, `amount_product`, `price_noVAT`) 
    VALUES (NULL, '$OID', '$dim_ID', '$amount_product', '$price_noVAT')");
}


?>