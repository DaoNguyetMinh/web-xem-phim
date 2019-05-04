<!DOCTYPE html>
<html lang="en">
<head>
	<title>Đăng ký</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form action = "Registation.php" method = "post" class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-53">
						Sign up
					</span>
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Username
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="username" autofocus >
						<span class="focus-input100"></span>
					</div>
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Email
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Email is required">
						<input class="input100" type="text" name="email" >
						<span class="focus-input100"></span>
					</div>
					<div class="p-t-13 p-b-9">
						<span class="txt1">
							Password
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" >
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button action= "Registation.php"class="login100-form-btn" id = "submit" name = "submit">
							Submit
						</button>
					</div>
					<?php
					if(isset($_POST["submit"])){
						if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])) {
							require_once("conn.php");
							$username = $_POST['username'];
							$email = $_POST['email'];
							$password = $_POST['password'];
							$sql = "SELECT * FROM Account WHERE userName = '$username' or email = '$email'";
							$result = $conn->query($sql);
							$row = $result->fetch_assoc();
							if($row == 0){
								$conn->query("Insert into Account(username,email,password,level) values('$username' , '$email' , '$password' , 2)"); 
								echo "<div class='alert alert-success' > Register Sucessfully </div>";
								//header("Location: Registation.php");
							} 
							else{
								echo "<div class='alert alert-danger' > Register Failed </div>";	
								//header("Location: Registation.php");		
							}
						}
					}
					?>
					<div class="w-full text-center p-t-55">
						<a href="Login.php" class="txt2 bo1">
							Sign in now
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>