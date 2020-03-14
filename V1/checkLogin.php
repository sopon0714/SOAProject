<?php
require_once('helper_func.inc.php');
session_start();
//$username = $_POST['username']??"";
$password = $_POST['password']??"";

if($username==""||$password=="")
{
    header("Location: index.php?error=กรอกข้อมูลไม่ถูกต้อง!");
}
else{
    checkLogin($username,$password);
}

?>