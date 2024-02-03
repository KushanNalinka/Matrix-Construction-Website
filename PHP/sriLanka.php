<?php require"config.php" ?>
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
<h1><center>Projects of Matrix Solutions in SriLanka</center></h1>
<br/>

<div class="insert">
<form method = "POST" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data" >
To add Project Details
Description ID : <br/>
<input type ="text" name = "prjId">
<br/>
Upload an Image 1: <br/>
<input type ="file" name = "prjImg1">
<br/>
Upload an Image 2: <br/>
<input type ="file" name = "prjImg2">
<br/>
Upload an Image 3: <br/>
<input type ="file" name = "prjImg3">
<br/>
Upload an Image 4: <br/>
<input type ="file" name = "prjImg4">
<br/>
Upload an Image 5: <br/>
<input type ="file" name = "prjImg5">
<br/>
Description 1 : <br/>
<textarea rows="4" cols="40" name="prjDes1"></textarea>
<br/>
Description 2 : <br/>
<textarea rows="4" cols="40" name="prjDes2"></textarea>

<input type="submit" value ="Submit" name = "Submit_Btn" class="btn">

</form>
</div>
<br/>
<br/>
<div class="searchdeletecon">
<form method ="POST" action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<h2>Delete Managers/Directors Details</h2>
 Enter the  ID For Delete
<input type ="text" name ="projectId">
<input type ="submit"  value ="Delete" name ="btnSubmit">

</form>
</div>

<br/><br/>

<?php
if(isset ($_POST["Submit_Btn"]))
{
	$target_dir = "Upload/";
$target_file = $target_dir.basename($_FILES["prjImg1"]["name"]);
	
if(isset($_FILES["prjImg1"])){
	if(move_uploaded_file($_FILES["prjImg1"]["tmp_name"],$target_file)){
		echo"This file".basename($_FILES["prjImg1"]["name"])."is uploaded"."<br/>";
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
$target_file = $target_dir.basename($_FILES["prjImg2"]["name"]);
	
if(isset($_FILES["prjImg2"])){
	if(move_uploaded_file($_FILES["prjImg2"]["tmp_name"],$target_file)){
		echo"This file".basename($_FILES["prjImg2"]["name"])."is uploaded"."<br/>";
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
$target_file = $target_dir.basename($_FILES["prjImg3"]["name"]);
	
if(isset($_FILES["prjImg3"])){
	if(move_uploaded_file($_FILES["prjImg3"]["tmp_name"],$target_file)){
		echo"This file".basename($_FILES["prjImg3"]["name"])."is uploaded"."<br/>";
	}
	else{
		echo"Erorr";
	}
}
else{
	echo"File is not available";
}
/*img4*/
$target_dir = "Upload/";
$target_file = $target_dir.basename($_FILES["prjImg4"]["name"]);
	
if(isset($_FILES["prjImg4"])){
	if(move_uploaded_file($_FILES["prjImg4"]["tmp_name"],$target_file)){
		echo"This file".basename($_FILES["prjImg4"]["name"])."is uploaded"."<br/>";
	}
	else{
		echo"Erorr";
	}
}
else{
	echo"File is not available";
}/*img5*/
$target_dir = "Upload/";
$target_file = $target_dir.basename($_FILES["prjImg5"]["name"]);
	
if(isset($_FILES["prjImg5"])){
	if(move_uploaded_file($_FILES["prjImg5"]["tmp_name"],$target_file)){
		echo"This file".basename($_FILES["prjImg5"]["name"])."is uploaded"."<br/>";
	}
	else{
		echo"Erorr";
	}
}
else{
	echo"File is not available";
}

$projecId=$_POST["prjId"];
$imageUp1= $_FILES["prjImg1"]["name"];
$imageUp2= $_FILES["prjImg2"]["name"];
$imageUp3= $_FILES["prjImg3"]["name"];
$imageUp4= $_FILES["prjImg4"]["name"];
$imageUp5= $_FILES["prjImg5"]["name"];
$prjdex1=$_POST["prjDes1"];
$prjdex2=$_POST["prjDes2"];

	
	
	$sql= "INSERT INTO projectsTable (prjsId,prjsIm1,prjsIm2,prjsIm3,prjsIm4,prjsIm5,prjsDes1,prjsDes2) VALUES ('$projecId','$imageUp1','$imageUp2','$imageUp3','$imageUp4','$imageUp5','$prjdex1','$prjdex2')";
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
function deleteData($prjId)
 {
	 global $con;
	 $sql = "DELETE FROM projectsTable WHERE  prjsId = '$prjId'";
	 if($con->query($sql)){
		 echo "Deleted Sucssefully";
	 }
	 else{
		 echo"Error:".$con->error;
	 }
	 
 }
  if(isset($_POST["btnSubmit"])){
	 $prjId = $_POST["projectId"];
	 if($prjId !="")
	 {
		 deleteData($prjId);
		
 }
  }


?>