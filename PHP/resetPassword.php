<?php require 'config.php';
if(isset($_POST["btnSubmit"])){
	$username=$_POST["name"];
	$password=$_POST["password"];
		
		$results = mysqli_query($con,"SELECT * FROM registerTable WHERE u_name = '$username'");
     while($row = mysqli_fetch_array($results))
{
	$username=$row["u_name"];
	$phoneNum=$row["u_mobile"];
	$emailaddress=$row["u_email"];
	$userpass=$row["u_password"];

}
}


?>
<?php
if(isset($_POST["update"]))
{

$name =$_POST["newName"];
$mobile =$_POST["newNum"];
$email =$_POST["newEmail"];
$password=$_POST["newPass"];
// update user details
	$result = mysqli_query($con, "UPDATE registerTable SET  u_password ='$password' , u_email= '$email', u_mobile ='$mobile' WHERE u_name ='$name' ");
	//Redirect to homepage to display updated users in list
	header("Location: index1.php");
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
<div class="formbox" style="width:500px;">
<?php if(!isset($_POST["btnSubmit"])) {?> 
<form  method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
<h1 style="color:white;"><center>Reset Your Password</center></h1>
<br/>
Enter Your Username
<input type="text" name="name" placeholder="Username">
<br/>
Enter Your Password
<input type="password" name="password" placeholder="Password">
<br/>
<input type="submit" name="btnSubmit" value="Submit" class="btn">
<br/>
</form>
<?php } ?>
</div>
<?php 
if(isset($_POST["btnSubmit"])){
	?>
<div class="formbox">
<form  method ="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
First You have To fill the form above
Update User Details
Name: <br/>
<input type = "text" name ="newName" value = "<?php echo $username;?>" >
<br/>
(Please Don't Change Your Username OtherWise Your Information will not updates
<br/>
Mobile Phone Number: <br/>
<input type = "phone" name ="newNum" value = "<?php echo $phoneNum;?>" >
<br/>
Email Address: <br/>
<input type = "email" name ="newEmail" value = "<?php echo $emailaddress;?>" >
<br/>
Your Password: <br/>
<input type = "password" name ="newPass" value = "<?php echo $userpass;?>" >
<br/>
<input type="submit" name="update" value="Submit" class="btn">
</form>
</div>
<?php }?>
</body>