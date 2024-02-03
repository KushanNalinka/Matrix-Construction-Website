<?php require'config.php'; ?>
<DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="../CSS/awardsCss.css">
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
<li><a href="../HTML/adminHistory.html">History</a></li>
<li><a href="../HTML/adminVision.html">Mission & Vision</a></li>
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
<li><a href ="#">Financial</a><div class="sub-menu1">
<ul class="sub">
<li><a href="../HTML/adminAnualReport.html">Anual Report</a></li>
<li><a href="../HTML/adminStatistics.html">Statistic & Trading</a></li>

<li><a href="../HTML/adminInsurance.html">Insurance & Law</a></li>
</ul>
</div></li>

<li><a href ="#">Resources</a><div class="sub-menu1">
<ul class="sub">
<li><a href="../HTML/adminWorking.html">Working Experience</a></li>
<li><a href="../HTML/adminWhatWeOffer.html">What we Offer</a></li>
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
<h1><b><center>WORKERS AND TECHNICIANS OF MATRIX CONSTRUCTIONS</center></b></h1>
<div class="insert">
<form method = "POST" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data" >
To add Workers and Technicians Details

Workers /Technician Group Name : <br/>
<input type ="text" name = "wsNa">
<br/>
Upload an Image 1: <br/>
<input type ="file" name = "wsImg1">
<br/>
Upload an Image 2: <br/>
<input type ="file" name = "wsImg2">
<br/>
Upload an Image 3: <br/>
<input type ="file" name = "wsImg3">
Description 1 : <br/>
<textarea rows="4" cols="40" name="wsDes1"></textarea>
<br/>
Description 2 : <br/>
<textarea rows="4" cols="40" name="wsDes2"></textarea>
<br/>
Description 3 : <br/>
<textarea rows="4" cols="40" name="wsDes3"></textarea>
<br/>
<input type="submit" value ="Submit" name = "Submit_Btn" class="btn">
</form>
</div>
<br/><br/><br/>
<div class="searchdeletecon">
<form method ="POST" action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<h2>Delete Awards Details</h2>
 Enter the Name For Delete
<input type ="text" name ="workersName">
<input type ="submit"  value ="Delete" name ="btnSubmit">
</form>
</div>
<?php 
$sql = "SELECT*FROM workersTable";
$results = $con->query($sql);
if($results->num_rows>0)
{
	while($row=$results->fetch_array())
	{?>
<div width="100%" height="100px" style="background-color:#00FFFF;"> Group Name : <?=$row['wNa'];?></div>
<div style="width:33.33%; height:600px; float:right;">
<img src="Upload/<?=$row['wImg1']?>" width="100%" height="50%">
<div style="width:100%; height:50%;"> <?=$row['wDes1']?></div>
</div>
<div style="width:33.33%; height:600px; float:left;">
<img src="Upload/<?=$row['wImg2']?>" width="100%" height="50%">
<div style="width:100%; height:50%;"> <?=$row['wDes2']?></div>
</div>
<div style="width:33.33%; height:600px; margin:0 auto;">
<img src="Upload/<?=$row['wImg3']?>" width="100%" height="50%">
<div style="width:100%; height:50%;"> <?=$row['wDes3']?></div>
</div>
	<?php }
}?>
<br/><br/>
<?php 
if(isset ($_POST["Submit_Btn"]))
{
	$target_dir = "Upload/";
$target_file = $target_dir.basename($_FILES["wsImg1"]["name"]);
	
if(isset($_FILES["wsImg1"])){
	if(move_uploaded_file($_FILES["wsImg1"]["tmp_name"],$target_file)){
		echo"This file".basename($_FILES["wsImg1"]["name"])."is uploaded"."<br/>";
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
$target_file = $target_dir.basename($_FILES["wsImg2"]["name"]);
	
if(isset($_FILES["wsImg2"])){
	if(move_uploaded_file($_FILES["wsImg2"]["tmp_name"],$target_file)){
		echo"This file".basename($_FILES["wsImg2"]["name"])."is uploaded"."<br/>";
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
$target_file = $target_dir.basename($_FILES["wsImg3"]["name"]);
	
if(isset($_FILES["wsImg3"])){
	if(move_uploaded_file($_FILES["wsImg3"]["tmp_name"],$target_file)){
		echo"This file".basename($_FILES["wsImg3"]["name"])."is uploaded"."<br/>";
	}
	else{
		echo"Erorr";
	}
}
else{
	echo"File is not available";
}

$wName=$_POST["wsNa"];

$imageUp1= $_FILES["wsImg1"]["name"];
$imageUp2= $_FILES["wsImg2"]["name"];
$imageUp3= $_FILES["wsImg3"]["name"];
$wsdex1=$_POST["wsDes1"];
$wsdex2=$_POST["wsDes2"];
$wsdex3=$_POST["wsDes3"];

	
	
	$sql= "INSERT INTO workersTable (wNa,wImg1,wImg2,wImg3,wDes1,wDes2,wDes3) VALUES ('$wName','$imageUp1','$imageUp2','$imageUp3','$wsdex1','$wsdex2','$wsdex3')";
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
function deleteData($wksNa)
 {
	 global $con;
	 $sql = "DELETE FROM workersTable WHERE  wNa LIKE '%$wksNa%'";
	 if($con->query($sql)){
		 echo "Deleted Sucssefully";
	 }
	 else{
		 echo"Error:".$con->error;
	 }
	 
 }
  if(isset($_POST["btnSubmit"])){
	 $wksNa = $_POST["workersName"];
	 if($wksNa !="")
	 {
		 deleteData($wksNa);
		
 }
  }


?>