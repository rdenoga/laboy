<!DOCTYPE html>
<div class="phpclass">
	<?php
		$host = "localhost";
		$user = "root";
		$pass = "";
		$db = "db_laboybaboy";
		$err = "";

		mysql_connect($host, $user, $pass);
		mysql_select_db($db);
	
		if (isset($_POST['username'])) {
			$uname = $_POST['username'];
			$upass = $_POST['userpass'];

			//if (empty($uname) || empty($upass)) {
			//	$err = "Login Failed! Enter your Username and Password!";
			//	echo $err;
			//}

			$sqlquery = "Select * from tbl_user WHERE cusername ='". $uname ."' AND cpassword = '". $upass ."' limit 1 ";

			$result = mysql_query($sqlquery);

			if (mysql_num_rows($result) == 1) {
				//echo "Login Success!";
				//echo "<script type='text/javascript'>alert('Login successfully!')</script>";
				header("Location: admin.php");
			}

			else{
				echo "You have entered an invalid Username or Password";
			}
		}
?>
</div>

<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" coyjntent="width=device-width, initial-scale=1"> 
    <title>Laboy Baboy Tours</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
 	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script> 
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

		.phpclass{
			color: red;
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
        <input id="username" name="username" type="text" class="form-control">
      </div>
      <p></p>
      <div class="from-group">
        <label for="password" class="sr-only"></label>
        <input id="userpass" name="userpass" type="password" class="form-control">
      </div>    
      <p></p>

      <button type="submit" name="login" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-ok-sign"></span> Login</button>  
      <a href="index.html" button type="button" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-log-out"></span> Back</button></div>
    </form>

  </div>
<!--
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>

<script src="js/index.js"></script>
<script type="text/javascript">

$(document).ready(function() {
    $('#reg_form').bootstrapValidator({
    	fields: {
    		username:{
    			validators:{
    				notEmpty: {
                        message: 'Please Enter your Username'
                    }
    			}
    		}

    		password:{
    			validators:{
    				notEmpty:{
    					message: 'Please Enter your Password'
    				}
    			}
    		}

    .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#reg_form').data('bootstrapValidator').resetForm();
 
            // Prevent form submission
            e.preventDefault();
 
            // Get the form instance
            var $form = $(e.target);
 
            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');
 
            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});
</script> -->
</body>
</html>