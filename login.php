<!DOCTYPE html>
<?php
      	include 'config/init.php';
		session_start();
		$error=''; //Variable to Store error message;

			if(isset($_POST['submit'])){
 				if(empty($_POST['uname']) || empty($_POST['upass'])){
 				$error = "Fill out both fields";
 				}
 				else{
 				//Define $user and $pass
				$user = $_POST['uname'];
 				$pass = $_POST['upass'];
 				
 				$user = stripslashes($user);
 				$pass = stripslashes($pass);
 				$user = mysql_real_escape_string($user);
 				$pass = mysql_real_escape_string($pass);
 				$m5pass = md5($pass);

			$conn = mysqli_connect("localhost", "root", "");

 			$db = mysqli_select_db($conn, "db_laboybaboy");

 			$query = mysqli_query($con, "SELECT * FROM tbl_user WHERE cpassword='$m5pass' AND cusername='$user'");

 			$rows = mysqli_num_rows($query);
			if($rows == 1){
 				$_SESSION['uname'] = $user;
 				header("Location: admin.php"); // Redirecting to other page
 			}
 			
 			else{
 				$error = "Username or Password is Invalid";
 			}

 			mysqli_close($conn); // Closing connection
 				}
 			}
?>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>Laboy Baboy Tours</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
		body{
			background: #ff99cc;
		}

		.login-container {
		  width: 100%;
		  height: 100%;
		  position: relative;
		}

		.login {
		  width: 400px;
		  position: fixed;
		  color: #fff;
		}

		.login.center {
		  transform: translateX(-50%) translateY(-50%);
		  left: 50%;
		  top: 50%;
		}

		.login-container .background {
		  width: 100%;
		  height: 100%;
		  position: fixed;
		  background-color: #fff;
		}

		#laboy-logo{
			display:block;
			vertical-align: middle;
			text-align: center;
		}

		.btn-primary, .btn-primary:hover, .btn-primary:active, .btn-primary:visited {
    	background-color: #ff99cc !important;
		}

    </style>
</head>
<body>
<center><img src="img/biglogo.png" id="laboy-logo"></center>
<div class="login-container">
<!--   <div class="background"></div> -->
  <div class="login center">
    <h3 class="title">
    </h3>
    <form action="" method="POST">
      <div class="from-group">
        <label for="username" class="sr-only"></label>
        <input id="uname" name="uname" type="text" class="form-control">
      </div>
      <p></p>
      <div class="from-group">
        <label for="password" class="sr-only"></label>
        <input id="upass" name="upass" type="password" class="form-control">
      </div>    
      <p></p>

      <input type="submit" value="login" class="btn btn-primary btn-block"></button>
      <a href="index.html" button type="button" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-log-out"></span> Back</button>
    </form>
    <?php echo "TEST"; ?>
  </div>
</div>
<script type="text/javascript">
	
</script>

</body>
</html>