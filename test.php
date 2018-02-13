<?php
include "config/init.php";

$result = mysqli_query($con, "select cusername from tbl_user where iuserid ='2'");

echo mysqli_fetch_object($result)->cusername;


?>