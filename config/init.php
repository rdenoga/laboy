<?php

$db["host"] = "localhost";
$db["username"] = "root";
$db["password"] = "";
$db["database"] = "db_laboybaboy";

$con = mysqli_connect($db['host'], $db['username'], $db['password']) OR die(mysqli_connect_error());
$sql = mysqli_select_db($con, $db['database']) OR die(mysqli_connect_error());

if(!$con){
    echo 'Connection Error to Server';
}	

if(!mysqli_select_db($con, 'db_laboybaboy')){
    echo 'Database not selected';
}

date_default_timezone_set('Asia/Manila');
 ?>