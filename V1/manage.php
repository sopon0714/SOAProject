<?php
    $UID = $_POST['UID'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['Email'];
    $address = $_POST['address'];
    $tel = $_POST['tel'];
    
    include_once("query.php");
    ed_user($UID,$name,$surname,$address,$tel,$email);

    header("location:./Profile.php");
?>