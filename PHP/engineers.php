<?php require'config.php'; ?>
<DOCTYPE html>
<html>

<head>

<link rel="stylesheet" href="../CSS/indexCss.css">
</head>
<body>
<div class="navigation">
 <div class="navbar">
            <div>
                <p>Matrix </p>
            </div>
<div class="menu-bar">
<ul>
<li class="active" ><a href ="indezA2.php">About Us</a>
<div class="sub-menu1">
<ul class="sub">
<li><a href="../PHP/awards.php">Aword & Certifications</a></li>
<li><a href="../PHP/management.php">Management</a></li>
</ul>
</div></li>
<li><a href ="#">Services</a>
<div class="sub-menu1">
<ul class="sub">
<li><a href="../PHP/manufacturing.php">Manufacturing</a></li>
<li><a href="../PHP/heavyEngineering.php">Heavy Engineering</a></li>
<li><a href="../PHP/engineers.php">Engineer Teams</a></li>
<li><a href="../PHP/workers.php">Workers & Technicians</a></li>
</ul>
</div>
</li>
<li><a href ="#">Financial</a>
</li>

<li><a href ="#">Resources</a><div class="sub-menu1">
<ul class="sub">
<li><a href="../PHP/trainingAndOpportunities.php">Training & Opportunities</a></li>
</ul>
</div></li>
<li><a href ="../PHP/sriLanka.php">Project</a>
</li>
<li><a href="../PHP/login.php"> LogOut </a>
</li>
</ul>
</div>
<div class="search"><form method="POST" action="../PHP/search.php">
<input type="text" placeholder="Search..." name="search">
<input type="submit" value="Search" name="btnSubmit">
</form>
</div>

</div>
</div>
<br/>
<h1><b><center>ENGINEERS AND ENGINEER GROUPS  OF MATRIX CONSTRUCTIONS</center></b></h1>
<div class="insert">
<form method = "POST" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data" >
To add Engineer Group Details

Engineer Group Name : <br/>
<input type ="text" name = "eNa">
<br/>

Upload an Image 1: <br/>
<input type ="file" name = "eImg1">
<br/>
Upload an Image 2: <br/>
<input type ="file" name = "eImg2">
<br/>
Upload an Image 3: <br/>
<input type ="file" name = "eImg3">
<br/>
Description 1 : <br/>
<textarea rows="4" cols="40" name="eDes1"></textarea>
<br/>
Description 2 : <br/>
<textarea rows="4" cols="40" name="eDes2"></textarea>
<br/>
Description 3 : <br/>
<textarea rows="4" cols="40" name="eDes3"></textarea>
<br/>
<input type="submit" value ="Submit" name = "Submit_Btn" class="btn">
</form>
</div>
<br/><br/><br/>
<div class="searchdeletecon">
<form method ="POST" action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<h2>Delete Engineer Group Details</h2>
 Enter the  Name For Delete
<input type ="text" name ="engineerName">
<input type ="submit"  value ="Delete" name ="btnSubmit">
</form>
</div>
<br/><br/>

<?php
if(isset ($_POST["Submit_Btn"]))
{
	$target_dir = "Upload/";
$target_file = $target_dir.basename($_FILES["eImg1"]["name"]);
	
if(isset($_FILES["eImg1"])){
	if(move_uploaded_file($_FILES["eImg1"]["tmp_name"],$target_file)){
		echo"This file".basename($_FILES["eImg1"]["name"])."is uploaded"."<br/>";
	}
	else{
		echo"Erorr";
	}
}
else{
	echo"File is not available";
}
/*img2*/
$target_dir = "Upload/";
$target_file = $target_dir.basename($_FILES["eImg2"]["name"]);
	
if(isset($_FILES["eImg2"])){
	if(move_uploaded_file($_FILES["eImg2"]["tmp_name"],$target_file)){
		echo"This file".basename($_FILES["eImg2"]["name"])."is uploaded"."<br/>";
	}
	else{
		echo"Erorr";
	}
}
else{
	echo"File is not available";
}
/*img3*/
$target_dir = "Upload/";
$target_file = $target_dir.basename($_FILES["eImg3"]["name"]);
	
if(isset($_FILES["eImg3"])){
	if(move_uploaded_file($_FILES["eImg3"]["tmp_name"],$target_file)){
		echo"This file".basename($_FILES["eImg3"]["name"])."is uploaded"."<br/>";
	}
	else{
		echo"Erorr";
	}
}
else{
	echo"File is not available";
}
$eName=$_POST["eNa"];
$imageUp1= $_FILES["eImg1"]["name"];
$imageUp2= $_FILES["eImg2"]["name"];
$imageUp3= $_FILES["eImg3"]["name"];
$endex1=$_POST["eDes1"];
$endex2=$_POST["eDes2"];
$endex3=$_POST["eDes3"];

	
	
	$sql= "INSERT INTO engineerTable (enNa,enImg1,enImg2,enImg3,enDes1,enDes2,enDes3) VALUES ('$eName','$imageUp1','$imageUp2','$imageUp3','$endex1','$endex2','$endex3')";
	if($con-> query($sql))
{
	echo"Connected Sucsessfully";
}
else{
	echo "Error".$con->error;
}


}
?>
<?php
function deleteData($engNa)
 {
	 global $con;
	 $sql = "DELETE FROM engineerTable WHERE  enNa LIKE '%$engNa%'";
	 if($con->query($sql)){
		 echo "Deleted Sucssefully";
	 }
	 else{
		 echo"Error:".$con->error;
	 }
	 
 }
  if(isset($_POST["btnSubmit"])){
	 $engNa = $_POST["engineerName"];
	 if($engNa !="")
	 {
		 deleteData($engNa);
		
 }
  }


?>