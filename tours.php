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
</body>
</html>