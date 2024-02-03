<?php 
require'config.php';

?>
<DOCTYPE html>
<html>
<head>
<title>Forgeten Password</title>
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
<div  class="formbox" style="width:500px;">
<?php if(!isset($_POST["btnSubmit"])) {?> 
<form  class="formbox" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
<h1><center>Reset Your Password</center></h1>
<br/>
Enter Your Username
<input type="text" name="name" placeholder="Username">
<br/>
Enter Your Las Password as You Remeber
<input type="password" name="password" placeholder="Password">
<br/>
You will Recive an Email Regarding Your Password
<br/>
<input type="submit" name="btnSubmit" value="Submit" class="btn">
<br/>
</form>
<?php } ?>
</div>
<?php
if(isset($_POST["btnSubmit"])) {
	header("Location:index1.php");
}
?>

</body>
</html>