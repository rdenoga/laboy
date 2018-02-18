<!DOCTYPE html>
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
<<<<<<< HEAD
          <a class="navbar-brand" href="#">Laboy Baboy</a> 
=======
          <a class="navbar-brand" href="#">Laboy Baboy Tours</a> 
>>>>>>> 5e00fd5c18d5f6de7ce2e8f081d228d0f6b2e676
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
<<<<<<< HEAD
            <li class="active"><a href="#">Bookings <span class="sr-only">(current)</span></a></li>
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
=======
            <li class="active"><a href="admin.php?page=">Overview <span class="sr-only">(current)</span></a></li>
            <li><a href="admin.php?page=reports">Reports</a></li>
            <li><span></span></li>
            <li><a href="admin.php?page=analytics">Analytics</a></li>
            <li><a href="admin.php?page=export">Export</a></li>

          </ul>
          <!--<ul class="nav nav-sidebar">
            <li><a href="">Nav item</a></li>
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
            <li><a href="">More navigation</a></li>
>>>>>>> 5fc22d60511ee734d54e8efb217826ce2a402ba9
          </ul>
          <!-- <ul class="nav nav-sidebar">
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
<<<<<<< HEAD
          </ul> -->
=======
          </ul>-->
>>>>>>> 5fc22d60511ee734d54e8efb217826ce2a402ba9
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