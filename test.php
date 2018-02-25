<!DOCTYPE html>
<?php
include ('config/init.php');
error_reporting(0);
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
    <link href="css/sidebar.css" rel="stylesheet">
</head>
<body>
	<div id="wrapper" class="toggled">
		<div class="toggle-btn">
			<a href="#menu-toggle" class="btn btn-green" id="menu-toggle"><span class="glyphicon glyphicon-menu-hamburger"></span></a>
		</div>
		<!--sidebar-->
		<div id="side-wrapper">
			<ul class="sidebar-nav">
				<li class="sidebar-brand">
					<a href="#">
						LBT
					</a></li>
					<li class="active"><a href="test.php?page=">Bookings <span class="sr-only">(current)</span></a></li>
		            <li><a href="test.php?page=lookupcatdb">Lookup Category</a></li>
		            <li><a href="test.php?page=lookupitemdb">Lookup Item</a></li>
		            <li><a href="test.php?page=export">Guests</a></li>
		            <li><a href="test.php?page=toursdb">Tours</a></li>
		            <li><a href="">Coordinators</a></li>
		            <li><a href="">Van Contacts</a></li>
		            <li><a href="">Reports</a></li>
		            <li><a href="">Audit Trail</a></li>
			</ul>
		</div>
		<!--end sw-->
		<!--page content-->
		<div id="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
					<?php

		                $p = $_GET['page'];

		                $page = $p . ".php";

		                $edit_id = $_GET['edit'];


		                if(file_exists($page))
		                    include_once($page);
		                elseif($p=="")
		                    header('admin.php');
		                else
		                    header('admin.php');
            		?>
					</div>
				</div>
			</div>
		</div> 
		<!--end pw-->
	</div>
	<!--end wrapper-->

    <!-- jQuery  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
<script>
	$('#menu-toggle').click(function(e) {
		e.preventDefault();
		$("#wrapper").toggleClass('toggled');
	});

</script>
</body>
</html>