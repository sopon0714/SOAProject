<?php

$id = $_POST['delete_id'];




include_once("query.php");
de_Product($id);

header("location:./admin.php");
