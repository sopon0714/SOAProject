<?php
    $dsn = "mysql:dbname=mit;host=localhost";
    try {
        $con = new PDO($dsn,"root","");
       
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
        die();
    }
return $con;
?>