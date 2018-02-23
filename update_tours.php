<!DOCTYPE html>
<?php
include ('config/init.php');

if(isset($_GET['edit'])){

	$id = $edit_id;
	$rec = mysqli_query($con, "SELECT * from tbl_tours WHERE itourid = $id");
	$rec_data = mysqli_fetch_array($rec);
	$itinerary = $rec_data['cdescription']; //tourname - wala pang itinerary
	$amount = $rec_data['famount'];
}

?>

<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>LaboyBaboyTours</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

</body>
</html>