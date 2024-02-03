<?php require 'config.php'; ?>
<DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../CSS/indexCss.css">

<style>
.mancant{
	width:700px;
	height:200px;
	display:inline-flex;
	margin-left:auto;
	margin-right:auto;
}
.mdid{
	/*display:inline-flex;
	float:right;*/
	width:200px; 
	height:200px;
}
.mddse{
/*	display:inline-flex;
	float:left;*/
	width:500px; 
	height:200px;
}
</style>
</head>

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
<h1><center>The Board of Directors & Top Level Management</center></h1>

<br/>
<div class="insert">
<form method = "POST" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data" >
To add New Top Level Management Officer Details
Director/Manager ID : <br/>
<input type ="text" name = "dirManid">
<br/>
Upload an Image : <br/>
<input type ="file" name = "dirManimg">
<br/>

Director/Manager Description : <br/>
<textarea rows="15" cols="20" name="dirMandes"></textarea>
<br/>

<br/>
<input type="submit" value ="Submit" name = "Submit_Btn" class="btn">

</form>
</div>
<br/><br/><br/><br/>

<form method ="POST" action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<div class="insert">
<h2>Delete Managers/Directors Details</h2>
 Enter the  ID For Delete
<input type ="text" name ="manDirId">
<input type ="submit"  value ="Delete" name ="btnSubmit">

</form>
</div>
<br/><br/>

<?php
if(isset ($_POST["Submit_Btn"]))
{
	$target_dir = "Upload/";
$target_file = $target_dir.basename($_FILES["dirManimg"]["name"]);
	
if(isset($_FILES["dirManimg"])){
	if(move_uploaded_file($_FILES["dirManimg"]["tmp_name"],$target_file)){
		echo"This file".basename($_FILES["dirManimg"]["name"])."is uploaded"."<br/>";
	}
	else{
		echo"Erorr";
	}
}
else{
	echo"File is not available";
}

$manDirId=$_POST["dirManid"];
$imageUp= $_FILES["dirManimg"]["name"];


	$manDirdex=$_POST["dirMandes"];
	
	$sql= "INSERT INTO manageTable (manegerId,managerImg,managerDes) VALUES ('$manDirId','$imageUp','$manDirdex')";
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
function deleteData($mdsId)
 {
	 global $con;
	 $sql = "DELETE FROM manageTable WHERE  manegerId = '$mdsId'";
	 if($con->query($sql)){
		 echo "Deleted Sucssefully";
	 }
	 else{
		 echo"Error:".$con->error;
	 }
	 
 }
  if(isset($_POST["btnSubmit"])){
	 $mdsId = $_POST["manDirId"];
	 if($mdsId !="")
	 {
		 deleteData($mdsId);
		
 }
  }


?>