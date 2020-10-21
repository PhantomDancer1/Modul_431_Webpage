

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
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
	


<?php
		require_once $_SERVER['DOCUMENT_ROOT'].'/Webpage/login/connection.php';
		/*$user=$conn->query('select * from login;');


		while ($us =$user->fetch_array()) {


					echo $us["userpw"];

		}
		*/
		if(isset($_POST["email"]))	{
			$email = $_POST["email"];
}
		if(isset($_POST["username"]))	{
			$username = $_POST["username"];
			}
		if(isset($_POST["pass"]))	{
			$pass = $_POST["pass"];
}
		if(isset($_POST["pass1"]))	{
			$pass1 = $_POST["pass1"];
		}
		
			$insertlogindata=$conn->prepare("insert into login (username,email,userpw) values (?,?,?);");
				$params = $insertlogindata->bind_param("sss",$username, $email, $pass);
				$params = $insertlogindata->execute();
				$insertlogindata->close();
				$conn->close();
				if ($params!==false) {
				header('Location:/webpage/index.html');
				}
	?>




	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/background.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Create Account
				</span>
				<form method="post" action="./register.php" class="login100-form validate-form p-b-33 p-t-5">

					<div class="wrap-input100 validate-input" data-validate = "Enter E-Mail">
						<input class="input100" type="E-Mail" name="email" placeholder="E-Mail">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="User name">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="confirmPassword password">
						<input class="input100" type="password" name="pass1" placeholder="Confirm Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>


					<div class="container-login100-form-btn m-t-32">
						<button class="back100-form-btn" onclick="location.href='../index.html'">
							back
						</button>
						<button class="register100-form-btn">
							Registrieren
							
						
						</button>
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