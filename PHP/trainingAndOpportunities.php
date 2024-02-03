<?php 
require 'config.php';
?>
<DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="../CSS/trainingCss.css">
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
<h1><b><center>TRAININGS AND OPPORTUNITIES OF MATRIX</center></b></h1>
<div class="insert">
<form method = "POST" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data" >
To add Training Details
Training ID : <br/>
<input type ="text" name = "trId">
<br/>
Upload an Image 1: <br/>
<input type ="file" name = "trImg1">
<br/>
Upload an Image 2: <br/>
<input type ="file" name = "trImg2">
<br/>
Upload an Image 3: <br/>
<input type ="file" name = "trImg3">
<br/>
Upload an Image 4: <br/>
<input type ="file" name = "trImg4">
<br/>
Upload an Image 5: <br/>
<input type ="file" name = "trImg5">
<br/>
Description 1 : <br/>
<textarea rows="4" cols="40" name="trDes1"></textarea>
<br/>
Description 2 : <br/>
<textarea rows="4" cols="40" name="trDes2"></textarea>
<br/>
Description 3 : <br/>
<textarea rows="4" cols="40" name="trDes3"></textarea>
<br/>
Description 4 : <br/>
<textarea rows="4" cols="40" name="trDes4"></textarea>
<br/>
<input type="submit" value ="Submit" name = "Submit_Btn" class="btn">
</form>
</div>
<br/><br/><br/>
<div class="searchdeletecon">
<form method ="POST" action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<h2>Delete Training Details</h2>
 Enter the  ID For Delete
<input type ="text" name ="trainingId">
<input type ="submit"  value ="Delete" name ="btnSubmit">
</form>
</div>
<br/><br/>
<div class="insert">
<form method = "POST" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data" >
To add Recognition of Employee Details
Recognition ID : <br/>
<input type ="text" name = "reId">
<br/>
Upload an Image 1: <br/>
<input type ="file" name = "reImg">
Description  : <br/>
<textarea rows="15" cols="40" name="reDes"></textarea>
<br/>
<input type="submit" value ="Submit" name = "Submit_Btn1" class="btn">
</form>
</div>
<br/><br/><br/>
<div class="searchdeletecon">
<form method ="POST" action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<h2>Delete Recognition Details</h2>
 Enter the  ID For Delete
<input type ="text" name ="recognitionId">
<input type ="submit"  value ="Delete" name ="btnSubmit1">
</form>
</div>
<br/><br/>

<?php
if(isset ($_POST["Submit_Btn"]))
{
	$target_dir = "Upload1/";
$target_file = $target_dir.basename($_FILES["trImg1"]["name"]);
	
if(isset($_FILES["trImg1"])){
	if(move_uploaded_file($_FILES["trImg1"]["tmp_name"],$target_file)){
		echo"This file".basename($_FILES["trImg1"]["name"])."is uploaded"."<br/>";
	}
	else{
		echo"Erorr";
	}
}
else{
	echo"File is not available";
}
/*img2*/
$target_dir = "Upload1/";
$target_file = $target_dir.basename($_FILES["trImg2"]["name"]);
	
if(isset($_FILES["trImg2"])){
	if(move_uploaded_file($_FILES["trImg2"]["tmp_name"],$target_file)){
		echo"This file".basename($_FILES["trImg2"]["name"])."is uploaded"."<br/>";
	}
	else{
		echo"Erorr";
	}
}
else{
	echo"File is not available";
}
/*img3*/
$target_dir = "Upload1/";
$target_file = $target_dir.basename($_FILES["trImg3"]["name"]);
	
if(isset($_FILES["trImg3"])){
	if(move_uploaded_file($_FILES["trImg3"]["tmp_name"],$target_file)){
		echo"This file".basename($_FILES["trImg3"]["name"])."is uploaded"."<br/>";
	}
	else{
		echo"Erorr";
	}
}
else{
	echo"File is not available";
}
/*img4*/
$target_dir = "Upload1/";
$target_file = $target_dir.basename($_FILES["trImg4"]["name"]);
	
if(isset($_FILES["trImg4"])){
	if(move_uploaded_file($_FILES["trImg4"]["tmp_name"],$target_file)){
		echo"This file".basename($_FILES["trImg4"]["name"])."is uploaded"."<br/>";
	}
	else{
		echo"Erorr";
	}
}
else{
	echo"File is not available";
}/*img5*/
$target_dir = "Upload1/";
$target_file = $target_dir.basename($_FILES["trImg5"]["name"]);
	
if(isset($_FILES["trImg5"])){
	if(move_uploaded_file($_FILES["trImg5"]["tmp_name"],$target_file)){
		echo"This file".basename($_FILES["trImg5"]["name"])."is uploaded"."<br/>";
	}
	else{
		echo"Erorr";
	}
}
else{
	echo"File is not available";
}

$trsId=$_POST["trId"];
$imageUp1= $_FILES["trImg1"]["name"];
$imageUp2= $_FILES["trImg2"]["name"];
$imageUp3= $_FILES["trImg3"]["name"];
$imageUp4= $_FILES["trImg4"]["name"];
$imageUp5= $_FILES["trImg5"]["name"];
$trdex1=$_POST["trDes1"];
$trdex2=$_POST["trDes2"];
$trdex3=$_POST["trDes3"];
$trdex4=$_POST["trDes4"];

	
	
	$sql= "INSERT INTO trainingTable (trsId,trsImg1,trsImg2,trsImg3,trsImg4,trsImg5,trsDes1,trsDes2,trsDes3,trsDes4) VALUES ('$trsId','$imageUp1','$imageUp2','$imageUp3','$imageUp4','$imageUp5','$trdex1','$trdex2','$trdex3','$trdex4')";
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
function deleteData($trnsId)
 {
	 global $con;
	 $sql = "DELETE FROM trainingTable WHERE  trsId = '$trnsId'";
	 if($con->query($sql)){
		 echo "Deleted Sucssefully";
	 }
	 else{
		 echo"Error:".$con->error;
	 }
	 
 }
  if(isset($_POST["btnSubmit"])){
	 $trnsId = $_POST["trainingId"];
	 if($trnsId !="")
	 {
		 deleteData($trnsId);
		
 }
  }


?>
<?php
if(isset ($_POST["Submit_Btn1"]))
{
	$target_dir = "Upload1/";
$target_file = $target_dir.basename($_FILES["reImg"]["name"]);
	
if(isset($_FILES["reImg"])){
	if(move_uploaded_file($_FILES["reImg"]["tmp_name"],$target_file)){
		echo"This file".basename($_FILES["reImg"]["name"])."is uploaded"."<br/>";
	}
	else{
		echo"Erorr";
	}
}
else{
	echo"File is not available";
}
$opoId=$_POST["reId"];
$imageUp1= $_FILES["reImg"]["name"];
$opdex=$_POST["reDes"];

	
	
	$sql= "INSERT INTO opportunitiesTable (opId,opIm,opDes) VALUES ('$opoId','$imageUp1','$opdex')";
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
function deleteOppo($oppoId)
 {
	 global $con;
	 $sql = "DELETE FROM opportunitiesTable WHERE  opId = '$oppoId'";
	 if($con->query($sql)){
		 echo "Deleted Sucssefully";
	 }
	 else{
		 echo"Error:".$con->error;
	 }
	 
 }
  if(isset($_POST["btnSubmit1"])){
	 $oppoId = $_POST["recognitionId"];
	 if($oppoId !="")
	 {
		 deleteOppo($oppoId);
		
 }
  }


?>