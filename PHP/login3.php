<?php require'config.php'; echo"Admin";
if(isset($_POST["btnSubmit"])){
	$username = $_POST["name"];
	$password = $_POST["password"];
	$sql= "SELECT * FROM loginTable WHERE username='$username' AND password ='$password'";
	$result =mysqli_query($con,$sql);
	if($result->num_rows >0)
	{
		header("Location:indezA2.php");
	}
	else{
		echo "<script>alert('Email OR Password Is incorrect.')</script>";
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
input[type=text] {
  width: 80%;
  padding: 12px 20px;
  margin-left:40px;
  border-radius:15px;
}
input[type=password] {
  width: 80%;
  padding: 12px 20px;
  margin-left:40px;
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
.btn1{
	background-color:green;
	color:white;
	padding:15px;
	border-radius:12px;
	width:50%;
	opacity:0.5;
	
}
.btn1:hover{
	background-color:white;
	color:black;
}

</style>
</head>
<body>
<div class="formbox" style="width:500px; height:400px;">
<button style="width:50%; height:50px; float:left;" onclick="location.href='../PHP/login2.php';" class="btn1">User</button>
<button style="width:50%; height:50px; float:right;" onclick="location.href='../PHP/login3.php';" class="btn1">Administrator</button>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
<h1><Center>Log-In Admin</center></h1>
<br/>
<input type="text" name="name" placeholder="Username">
<br/><br/>
<input type="password" name="password" placeholder="Re-Enter Password">
<br/><br/>
<input type="submit" name="btnSubmit" value="Log in" class="btn">
<br/>
</form>
</div>
</body>
</html>