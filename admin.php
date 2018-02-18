<!DOCTYPE html>
<?php
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
</head>
<body>

	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a class="navbar-brand" href="#">Laboy Baboy Tours</a> 

        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            
            <li><a href="#"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
            <li><a href="login.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid laboy-side">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="admin.php?page=">Bookings <span class="sr-only">(current)</span></a></li>
            <li><a href="admin.php?page=reports">Lookup Category</a></li>
            <li><a href="admin.php?page=analytics">Lookup Item</a></li>
            <li><a href="admin.php?page=export">Guests</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Tours</a></li>
            <li><a href="">Coordinators</a></li>
            <li><a href="">Van Contacts</a></li>
            <li><a href="">Reports</a></li>
            <li><a href="">Audit Trail</a></li>
          </ul>

        </div>

        <div class="container-fluid laboy-content">
          <div class="content">
            <?php

                $p = $_GET['page'];

                $page = $p . ".php";

                if(file_exists($page))
                    include($page);
                elseif($p=="")
                    header('admin.php');
                else
                    header('admin.php');
            ?>
          </div>
            </div>
          </div>
 
</body>
</html>