<?php require 'config.php';
if(isset($_POST["btnSubmit"])){
	$username=$_POST["name"];
	$email=$_POST["email"];
	$mobileNumber=$_POST["phone"];
	$password=$_POST["password"];
	$cpassword=$_POST["cpassword"];
	if($password == $cpassword){
		$sql="SELECT*FROM registerTable  WHERE  u_name ='$username'";
		$result= mysqli_query($con,$sql);
		if(!$result->num_rows > 0){
			$sqli = "INSERT INTO registerTable (u_name,u_email,u_mobile,u_password) VALUES('$username','$email','$mobileNumber','$password')";
			$results = mysqli_query($con,$sqli);
			if($results)
			{
				echo "<script>alert('Registration Completed.')</script>";
				}
			else
			{
				echo "<script>alert('Something Went Wrong.')</script>";
				
				}
			
		
		}
		
		
		else{
			echo "<script>alert(' Username is already exist.')</script>";
			}
		
	}else{
	echo"<script>alert('Password not matched.')</script>";
		
	}
}


?>
<DOCTYPE html>
<html>
<head>
<style>
body{
	background-image:url("../IMAGES/log1.jpg");
	background-size: cover;
	
}
.formbox{
	
	background-color:rgba(0,0,0,0.4);
	margin:0 auto;
	margin-top:5%;
	margin-bottom:5%;
	border-radius:15px;
	
}
.btn{
	background-color:green;
	color:white;
	padding:15px;
	border-radius:12px;
	width:50%;
	opacity:0.5;
	margin-left:100px;
}
.btn:hover{
	background-color:white;
	color:black;
}
</style>
</head>
<body>
<div  class="formbox" style="width:500px; ">
<form class="formbox" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
<h1><center style="color:white;">Register</center></h1>
<br/>
<input type="text" name="name" placeholder="Username">

<br/>
<input type="email" name="email" placeholder="Email">
<br/>
<input type="phone" name="phone" placeholder="Mobile Phone number">
<br/>
<input type="password" name="password" placeholder="Password">
<br/>
<input type="password" name="cpassword" placeholder="Re-Enter Password">
<br/>
<input type="submit" name="btnSubmit" value="Register" class="btn">
<br/>
Have an account<a href="login.php" style="color:white; text-decoration:none;" >Login Here</a>
</form>
</div>
</body>