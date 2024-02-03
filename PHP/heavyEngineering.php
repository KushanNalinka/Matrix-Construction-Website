<?php require'config.php'; ?>
<DOCTYPE html>
<html>

<head>

<link rel="stylesheet" href="../CSS/indexCss.css">


</head>
<body>
<link rel="stylesheet" href="../CSS/indexCss.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
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
<h1><center><b>HEAVY ENGINEERING OF MATRIX CONSTRUCTIONS (PVT)LTD</b></center></h1>
<br/><br/><br/>

<div class="insert">
<form method = "POST" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data" >
To Heavy Engineering Details
Recognition ID : <br/>
<input type ="text" name = "hvyId">
<br/>
Upload an Image 1: <br/>
<input type ="file" name = "hvyImg">
Description  : <br/>
<textarea rows="15" cols="40" name="hvyDes"></textarea>
<br/>
<input type="submit" value ="Submit" name = "Submit_Btn1" class="btn">
</form>
</div>
<br/><br/><br/>
<div class="searchdeletecon">
<form method ="POST" action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<h2>Delete Heavy Engineering Details</h2>
 Enter the  ID For Delete
<input type ="text" name ="heavyEngineeringId">
<input type ="submit"  value ="Delete" name ="btnSubmit1">
</form>
</div>
<br/><br/>

<?php
if(isset ($_POST["Submit_Btn1"]))
{
	$target_dir = "Upload/";
$target_file = $target_dir.basename($_FILES["hvyImg"]["name"]);
	
if(isset($_FILES["hvyImg"])){
	if(move_uploaded_file($_FILES["hvyImg"]["tmp_name"],$target_file)){
		echo"This file".basename($_FILES["hvyImg"]["name"])."is uploaded"."<br/>";
	}
	else{
		echo"Erorr";
	}
}
else{
	echo"File is not available";
}
$hveId=$_POST["hvyId"];
$imageUp1= $_FILES["hvyImg"]["name"];
$hvdex=$_POST["hvyDes"];

	
	
	$sql= "INSERT INTO heavyEngineering (hvId,hvImg,hvdes) VALUES ('$hveId','$imageUp1','$hvdex')";
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
function deleteData($heavyId)
 {
	 global $con;
	 $sql = "DELETE FROM heavyEngineering WHERE  hvId = '$heavyId'";
	 if($con->query($sql)){
		 echo "Deleted Sucssefully";
	 }
	 else{
		 echo"Error:".$con->error;
	 }
	 
 }
  if(isset($_POST["btnSubmit1"])){
	 $heavyId = $_POST["heavyEngineeringId"];
	 if($heavyId !="")
	 {
		 deleteData($heavyId);
		
 }
  }


?>