<!doctype html>
<html lang="en">
<head>
	 <link rel="stylesheet" href="css/register.css"type="text/css"><?php include("headder.php"); ?>
	 <style>
		#bdy{
			background-image: url("https://media-public.canva.com/MADGv8Tcsnc/6/screen.jpg");
 background-color: #cccccc;
		}
	</style></head>

<?php
	
	if(isset($_POST['signup'])){
	$username = $_POST['username']; //filter_input(INPUT_POST, 'username');
	$email =$_POST[ 'email'];
	$password = $_POST[ 'password'];
	$phone = $_POST[ 'phone'];
	$address = $_POST[ 'address'];
	$gender = $_POST[ 'gender'];
	$age = $_POST['age'];
	$conf_password = $_POST[ 'confpassword'];
	if (!empty($username)){
		if (!empty($password)){
			
			// Create connection
			$conn = mysqli_connect('localhost', 'root', '', 'dd');
			if (mysqli_connect_error()){
				die('Connect Error ('. mysqli_connect_errno() .') '
				. mysqli_connect_error());
			}
			else{
				  if($password!=$conf_password){
					echo "<script>
						alert('Passwords donot match');
						window.location.href='register.php';
					</script>";
				}
				else{
					  $sql = "INSERT INTO `customers`( `username`, `password`, `email`, `phone`, `address`, `gender`, `age`) VALUES ('$username','$password', '$email','$phone','$address','$gender','$age')";
					  if (mysqli_query($conn,$sql)){
  
					  // header("Location: login.html");
					  echo "<script>
						  alert('Account created successfully');
						  window.location.href='login.php';
					  </script>";
					}
					else{
						echo "Error: ". $sql ."
						". $conn->error;
					}
			}
			$conn->close();
			}
		}
		else{
			echo "Password should not be empty";
			die();
		}
	}
	else{
		echo "Username should not be empty";
		die();
	}
	if ($age<=0 || $age>=100){
		echo"invalid age ";
	}
}


?>


	<body  id="bdy"  >
<div>
<div class="box">


  <h2>REGISTER</h2>
  
  <div>
	
	<form method="post" action="">
		<div style="width: 50%;float:left; padding-right:30px;">
	
			<div class="inputBox" >
				<input type="Username" name="username" required value="">
				<label>Username</label>
			</div>

			<div class="inputBox" >
				<input type="email" name="email" required value="">
				<label>email-Id</label>
			</div>
			
			<div class="inputBox">
				<input type="text" name="address" required value="">
				<label>Address</label>
			</div>
			
			<div class="inputBox">
				<input type="number" name="age"  required value="">
				<label>Age</label>
			</div>
		</div>
		<div style="width: 50%;float:left;padding-left:30px;">

			<div class="inputBox">
				<input type="text" name="phone"  required value="">
				<label >Phone</label> 
			</div> 
		
			<div class="inputBox">
				<input type="password" name="password"  required value="">
				<label >Password</label> 
			</div> 

			<div class="inputBox">
				<input type="password" name="confpassword" required value="">
				<label>Confirm Password</label>
			</div>
					<div style="padding-top: 8px;">
							
							<select class="form-control" name="gender" style="    background: rgba(0,0,0,0); color:white;font-size:large; border-top:transparent;border-left:transparent;border-right:transparent;border-radius:0px" >
								<option style="color:black;      background: red">Gender</option>
								<option style="color:black;      background: rgba(0,0,0,0); ">Male</option>
								<option style="color:black;      background: rgba(0,0,0,0);">Female</option>
								<option style="color:black;     background: rgba(0,0,0,0);">Others</option>
							</select>
							
					</div>
		</div>
		
</div>
		
		<div class="inp" align="center" style="padding-right: 0px;padding-top:320px;">
		<input type="submit" name="signup" value="SIGN UP" align="center" >
		</div>
		<div class="noacc" align="center">
			<p>Already have an account? <a href="login.php">Sign in</a></p>
			
		</div>
	</form>
</div>
  

</div></div>
</body>
</html>
