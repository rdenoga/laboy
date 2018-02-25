<!DOCTYPE html>
<?php
include ('config/init.php');
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
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/admin.js"></script>

</head>
<body>

	  <!--navbar-->
      <nav class="navbar navbar-inverse navbar-fixed-top" id="laboy-navbar">
          <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                </button>
                <a href="index.html" class="navbar-brand">Laboy Baboy Tours</a>
                <img alt="brand" src="img/lbtlogo.png">
              </div><!--nav header-->
              <div class="collapse navbar-collapse" id="navbar-collapse">
                  <ul class="nav navbar-nav">
                    <li><a class="link" href="index.html">Home</a>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tours
                      <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#Hiking">Hiking</a></li>
                        <li><a href="#Beach">Beach</a></li>
                        <li><a href="#Heritage">Heritage</a></li>
                      </ul>
                    </li>
                    <li><a class="link" href="index.html#AboutUs">About Us</a>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                  <li><a class="link" href="#"><span class="glyphicon glyphicon-credit-card"></span> Payments</a></li>
                  <li><a class="link" href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                  <li><a href="#booking" data-toggle="modal"><button type="button" class="btn btn-info">Book Now</button></a></li>
                  </ul>

              </div>
          </div><!--e cont-->
      </nav><!--e nav-->


<!--HIKING SAMPLE-->
<div class="container">
        <section>
            <div class="page-header" id="Hiking">
              <h2>Hiking</h2><small>List of places available for Hiking</small>
            </div>
            <div class="row">
              <div class="col-md-3">
                <img class="img-rounded" src="img/hiking.jpg" height="150" width="150" alt="Owner 1">
                  <blockquote>
                    <p>Mt.Ulap</p>
                  </blockquote>
                  <footer>Bryan</footer>
              </div>
              <div class="col-md-3">
                <img class="img-rounded" src="img/beach.jpg" height="150" width="150" alt="Owner 2">
                  <blockquote>
                    <p>Mt.Maculot</p>
                  </blockquote>
                  <footer>Emmanuel</footer>
              </div>
              <div class="col-md-3">
                <img class="img-rounded" src="img/heritage.jpg" height="150" width="150" alt="Owner 3">
                  <blockquote>
                    <p>Mt.Tagapo</p>
                  </blockquote>
                  <footer>Yumi</footer>
              </div>
              <div class="col-md-3">
                <img class="img-rounded" src="img/heritage.jpg" height="150" width="150" alt="Owner 3">
                  <blockquote>
                    <p>Mt.Apo</p>
                  </blockquote>
                  <footer>Yumi</footer>
              </div>
            </div><!--end row-->
</div> 

<!--Beach SAMPLE-->
<div class="container">
        <section>
            <div class="page-header" id="Beach">
              <h2>Beach</h2><small>List of places available for Hiking</small>
            </div>
            <div class="row">
              <div class="col-md-3">
                <img class="img-rounded" src="img/hiking.jpg" height="150" width="150" alt="Owner 1">
                  <blockquote>
                    <p>Mt.Ulap</p>
                  </blockquote>
                  <footer>Bryan</footer>
              </div>
              <div class="col-md-3">
                <img class="img-rounded" src="img/beach.jpg" height="150" width="150" alt="Owner 2">
                  <blockquote>
                    <p>Mt.Maculot</p>
                  </blockquote>
                  <footer>Emmanuel</footer>
              </div>
              <div class="col-md-3">
                <img class="img-rounded" src="img/heritage.jpg" height="150" width="150" alt="Owner 3">
                  <blockquote>
                    <p>Mt.Tagapo</p>
                  </blockquote>
                  <footer>Yumi</footer>
              </div>
              <div class="col-md-3">
                <img class="img-rounded" src="img/heritage.jpg" height="150" width="150" alt="Owner 3">
                  <blockquote>
                    <p>Mt.Apo</p>
                  </blockquote>
                  <footer>Yumi</footer>
              </div>
            </div><!--end row-->
</div>

<!--HERITAGE SAMPLE-->
<div class="container">
        <section>
            <div class="page-header" id="Heritage">
              <h2>Heritage</h2><small>List of places available for Hiking</small>
            </div>
            <div class="row">
              <div class="col-md-3">
                <img class="img-rounded" src="img/hiking.jpg" height="150" width="150" alt="Owner 1">
                  <blockquote>
                    <p>Mt.Ulap</p>
                  </blockquote>
                  <footer>Bryan</footer>
              </div>
              <div class="col-md-3">
                <img class="img-rounded" src="img/beach.jpg" height="150" width="150" alt="Owner 2">
                  <blockquote>
                    <p>Mt.Maculot</p>
                  </blockquote>
                  <footer>Emmanuel</footer>
              </div>
              <div class="col-md-3">
                <img class="img-rounded" src="img/heritage.jpg" height="150" width="150" alt="Owner 3">
                  <blockquote>
                    <p>Mt.Tagapo</p>
                  </blockquote>
                  <footer>Yumi</footer>
              </div>
            </div><!--end row-->
</div>   



    <!-- jQuery  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <script src="js/bootstrap.min.js"></script>

<script type="text/JavaScript">
        $('ul.nav li.dropdown').hover(function() {
          $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(300);
        }, function() {
          $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(300);
        });
</script>



<!--SELECTING DESTINATION-->
<?php
  $query1 = "SELECT cdescription from tbl_tours WHERE itourtypeid='2';";

  $result1 = mysqli_query($con,$query1);

        $opt1 ="<select name='hiking'>";
        while($row=mysqli_fetch_assoc($result1)){
        $opt1 .= "<option value='{$row['cdescription']}'>{$row['cdescription']}</option>";
        }
        $opt1 .="</select>";
?>




    <div class="modal fade" id="booking" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <form class="form-horizontal">
          <div class="modal-header">
              <h3>Booking Form</h3>
              <h3>Contact Details</h3>
              <hr>
            <div class="modal-body">
                <div class="form-group">
                  <label for="book-name" class="col-sm-2 control-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="book-name" placeholder="Full Name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="book-name" class="col-sm-2 control-label">Contact Number</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="book-num1" placeholder="Contact Number">
                  </div>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="book-num2" placeholder="Optional">
                  </div>
                  </div>
                  <hr>
                  <h3>Tour Details</h3>
                  <hr>
                  <div class="form-group dp">
                    <label for="book-dp" class="col-sm-2 control-label">Destination Preference</label>
                    <div class="col-sm-6">
                      <select class="form-control" id="book-dp">
                        <!--query goes here-->
                        <option value=" ">Select Destination</option>
                        <option value="1">Hiking</option>
                        <option value="2">Beach</option>
                        <option value="3">Heritage</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group book-des">
                    <label for="book-des" class="col-sm-2 control-label">Destination</label>
                    <div class="col-sm-6">
                      
                    </div>
                  </div>

            </div>
          </div>
        </form>
        </div>
      </div>
    </div>




<script>
</script>


</body>
</html>