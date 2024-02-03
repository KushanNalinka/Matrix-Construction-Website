<?php require'config.php'; ?>
<DOCTYPE html>
<html>

<head>
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
<h1><b><center>AWARDS AND CERTIFICATIONS OF MATRIX CONSTRUCTIONS</center></b></h1>
<div class="insert">
<form method = "POST" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data" >
To add Awards and Certifications

Awards or certification Name : <br/>
<input type ="text" name = "awNa">
<br/>
Awards or certification Year : <br/>
<input type ="text" name = "awDa">
<br/>
Upload an Image 1: <br/>
<input type ="file" name = "awImg1">
<br/>
Upload an Image 2: <br/>
<input type ="file" name = "awImg2">
<br/>
Upload an Image 3: <br/>
<input type ="file" name = "awImg3">
<br/>
Upload an Image 4: <br/>
<input type ="file" name = "awImg4">
<br/>
Upload an Image 5: <br/>
<input type ="file" name = "awImg5">
<br/>
Description 1 : <br/>
<textarea rows="4" cols="40" name="awDes1"></textarea>
<br/>
Description 2 : <br/>
<textarea rows="4" cols="40" name="awDes2"></textarea>
<br/>
Description 3 : <br/>
<textarea rows="4" cols="40" name="awDes3"></textarea>
<br/>
<input type="submit" value ="Submit" name = "Submit_Btn" class="btn">
</form>
</div>
<br/><br/><br/>
<div class="searchdeletecon">
<form method ="POST" action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<h2>Delete Awards Details</h2>
 Enter the  ID For Delete
<input type ="text" name ="awardsName">
<input type ="submit"  value ="Delete" name ="btnSubmit">
</form>
</div>
<br/><br/>

	<?php
if(isset ($_POST["Submit_Btn"]))
{
	$target_dir = "Upload1/";
$target_file = $target_dir.basename($_FILES["awImg1"]["name"]);
	
if(isset($_FILES["awImg1"])){
	if(move_uploaded_file($_FILES["awImg1"]["tmp_name"],$target_file)){
		echo"This file".basename($_FILES["awImg1"]["name"])."is uploaded"."<br/>";
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
$target_file = $target_dir.basename($_FILES["awImg2"]["name"]);
	
if(isset($_FILES["awImg2"])){
	if(move_uploaded_file($_FILES["awImg2"]["tmp_name"],$target_file)){
		echo"This file".basename($_FILES["awImg2"]["name"])."is uploaded"."<br/>";
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
$target_file = $target_dir.basename($_FILES["awImg3"]["name"]);
	
if(isset($_FILES["awImg3"])){
	if(move_uploaded_file($_FILES["awImg3"]["tmp_name"],$target_file)){
		echo"This file".basename($_FILES["awImg3"]["name"])."is uploaded"."<br/>";
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
$target_file = $target_dir.basename($_FILES["awImg4"]["name"]);
	
if(isset($_FILES["awImg4"])){
	if(move_uploaded_file($_FILES["awImg4"]["tmp_name"],$target_file)){
		echo"This file".basename($_FILES["awImg4"]["name"])."is uploaded"."<br/>";
	}
	else{
		echo"Erorr";
	}
}
else{
	echo"File is not available";
}/*img5*/
$target_dir = "Upload1/";
$target_file = $target_dir.basename($_FILES["awImg5"]["name"]);
	
if(isset($_FILES["awImg5"])){
	if(move_uploaded_file($_FILES["awImg5"]["tmp_name"],$target_file)){
		echo"This file".basename($_FILES["awImg5"]["name"])."is uploaded"."<br/>";
	}
	else{
		echo"Erorr";
	}
}
else{
	echo"File is not available";
}

$aName=$_POST["awNa"];
$aDate=$_POST["awDa"];
$imageUp1= $_FILES["awImg1"]["name"];
$imageUp2= $_FILES["awImg2"]["name"];
$imageUp3= $_FILES["awImg3"]["name"];
$imageUp4= $_FILES["awImg4"]["name"];
$imageUp5= $_FILES["awImg5"]["name"];
$awsdex1=$_POST["awDes1"];
$awsdex2=$_POST["awDes2"];
$awsdex3=$_POST["awDes3"];

	
	
	$sql= "INSERT INTO awardsTable (aNm,aDa,aImg1,aImg2,aImg3,aImg4,aImg5,aDes1,aDes2,aDes3) VALUES ('$aName','aDate','$imageUp1','$imageUp2','$imageUp3','$imageUp4','$imageUp5','$awsdex1','$awsdex2','$awsdex3')";
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
function deleteData($awsNa)
 {
	 global $con;
	 $sql = "DELETE FROM awardsTable WHERE  aNm LIKE '%$awsNa%'";
	 if($con->query($sql)){
		 echo "Deleted Sucssefully";
	 }
	 else{
		 echo"Error:".$con->error;
	 }
	 
 }
  if(isset($_POST["btnSubmit"])){
	 $awsNa = $_POST["awardsName"];
	 if($awsNa !="")
	 {
		 deleteData($awsNa);
		
 }
  }


?>
