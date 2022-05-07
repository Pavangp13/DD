<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/login_style.css" type="text/css">
	<style>
		body{
			background-image: url("https://media-public.canva.com/MADGv8Tcsnc/6/screen.jpg");
 background-color: #cccccc;
		}
	</style>
</head>
<?php include('headder.php'); ?>
<?php
session_start();
if (isset($_POST['login'])) {
	$con = mysqli_connect('localhost', 'root', '', 'dd');
	if (mysqli_connect_errno()) {
		die("Failed to connect with MySQL: " . mysqli_connect_error());
	}
	$username = $_POST['username'];
	$password = $_POST['password'];

	//to prevent from mysqli injection  
	$username = stripcslashes($username);   //this will remove the slashes from the username 
	$password = stripcslashes($password);
	$username = mysqli_real_escape_string($con, $username);  //this will remove the special characters in a string
	$password = mysqli_real_escape_string($con, $password);

	$sql = "select * from customers where username = '$username' and password = '$password'";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($result);

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$_SESSION['user'] = $_POST['username'];
	}


	if (mysqli_num_rows($result)) {
		echo "<script>
						alert('Logged in successfully');
						window.location.href='index.php';
						</script>";
	} else {
		echo "<script>alert('Login failed. Invalid username or password.')</script>";
	}
}
?>

<body>
	<div class="box">
		<h2>Login</h2>
		<form action="" method="POST">
			<div class="inputBox">
				<input type="text" name="username" required value="">
				<label>Username</label>
			</div>
			<div class="inputBox">
				<input type="password" name="password" required value="">

				<label>Password</label>
			</div>
			<div class="inp">
				<input type="submit" name="login" value="Sign In" text-align="center">
			</div>
			<div class="noacc">
				<p>Don't have an account? <a href="register.php">Sign up</a></p>
			</div>
		</form>
	</div>
</body>

</html>