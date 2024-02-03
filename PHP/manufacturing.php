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
<h1><b><center>CONSTRUCTIONS AND MANUFACTURING OF MATRIX</center></b></h1>
<div class="insert">
<form method = "POST" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data" >
To add Construction Details
Construction ID : <br/>
<input type ="text" name = "coId">
<br/>
Upload an Image 1: <br/>
<input type ="file" name = "coImg1">
<br/>
Upload an Image 2: <br/>
<input type ="file" name = "coImg2">
<br/>
Upload an Image 3: <br/>
<input type ="file" name = "coImg3">
<br/>
Upload an Image 4: <br/>
<input type ="file" name = "coImg4">
<br/>
Upload an Image 5: <br/>
<input type ="file" name = "coImg5">
<br/>
Description 1 : <br/>
<textarea rows="4" cols="40" name="coDes1"></textarea>
<br/>
Description 2 : <br/>
<textarea rows="4" cols="40" name="coDes2"></textarea>
<br/>
Description 3 : <br/>
<textarea rows="4" cols="40" name="coDes3"></textarea>
<br/>
<input type="submit" value ="Submit" name = "Submit_Btn" class="btn">
</form>
</div>
<br/><br/><br/>
<div class="searchdeletecon">
<form method ="POST" action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<h2>Delete Construction Details</h2>
 Enter the  ID For Delete
<input type ="text" name ="constructionId">
<input type ="submit"  value ="Delete" name ="btnSubmit">
</form>
</div>
<br/><br/>
<div class="insert">
<form method = "POST" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data" >
To add Manufacturing Details
Manufacturing ID : <br/>
<input type ="text" name = "manId">
<br/>
Upload an Image 1: <br/>
<input type ="file" name = "manImg">
Description  : <br/>
<textarea rows="15" cols="40" name="manDes"></textarea>
<br/>
<input type="submit" value ="Submit" name = "Submit_Btn1" class="btn">
</form>
</div>
<br/><br/><br/>
<div class="searchdeletecon">
<form method ="POST" action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<h2>Delete Manufacturing Details</h2>
 Enter the  ID For Delete
<input type ="text" name ="manufacturingId">
<input type ="submit"  value ="Delete" name ="btnSubmit1">
</form>
</div>
<br/><br/>


</body>
</html>
<?php
if(isset ($_POST["Submit_Btn"]))
{
	$target_dir = "Upload1/";
$target_file = $target_dir.basename($_FILES["coImg1"]["name"]);
	
if(isset($_FILES["coImg1"])){
	if(move_uploaded_file($_FILES["coImg1"]["tmp_name"],$target_file)){
		echo"This file".basename($_FILES["coImg1"]["name"])."is uploaded"."<br/>";
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
$target_file = $target_dir.basename($_FILES["coImg2"]["name"]);
	
if(isset($_FILES["coImg2"])){
	if(move_uploaded_file($_FILES["coImg2"]["tmp_name"],$target_file)){
		echo"This file".basename($_FILES["coImg2"]["name"])."is uploaded"."<br/>";
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
$target_file = $target_dir.basename($_FILES["coImg3"]["name"]);
	
if(isset($_FILES["coImg3"])){
	if(move_uploaded_file($_FILES["coImg3"]["tmp_name"],$target_file)){
		echo"This file".basename($_FILES["coImg3"]["name"])."is uploaded"."<br/>";
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
$target_file = $target_dir.basename($_FILES["coImg4"]["name"]);
	
if(isset($_FILES["coImg4"])){
	if(move_uploaded_file($_FILES["coImg4"]["tmp_name"],$target_file)){
		echo"This file".basename($_FILES["coImg4"]["name"])."is uploaded"."<br/>";
	}
	else{
		echo"Erorr";
	}
}
else{
	echo"File is not available";
}/*img5*/
$target_dir = "Upload1/";
$target_file = $target_dir.basename($_FILES["coImg5"]["name"]);
	
if(isset($_FILES["coImg5"])){
	if(move_uploaded_file($_FILES["coImg5"]["tmp_name"],$target_file)){
		echo"This file".basename($_FILES["coImg5"]["name"])."is uploaded"."<br/>";
	}
	else{
		echo"Erorr";
	}
}
else{
	echo"File is not available";
}

$cosId=$_POST["coId"];
$imageUp1= $_FILES["coImg1"]["name"];
$imageUp2= $_FILES["coImg2"]["name"];
$imageUp3= $_FILES["coImg3"]["name"];
$imageUp4= $_FILES["coImg4"]["name"];
$imageUp5= $_FILES["coImg5"]["name"];
$cosdex1=$_POST["coDes1"];
$cosdex2=$_POST["coDes2"];
$cosdex3=$_POST["coDes3"];

	
	
	$sql= "INSERT INTO constructionTable (csId,csImg1,csImg2,csImg3,csImg4,csImg5,csDes1,csDes2,csDes3) VALUES ('$cosId','$imageUp1','$imageUp2','$imageUp3','$imageUp4','$imageUp5','$cosdex1','$cosdex2','$cosdex3')";
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
function deleteData($consId)
 {
	 global $con;
	 $sql = "DELETE FROM constructionTable WHERE  csId = '$consId'";
	 if($con->query($sql)){
		 echo "Deleted Sucssefully";
	 }
	 else{
		 echo"Error:".$con->error;
	 }
	 
 }
  if(isset($_POST["btnSubmit"])){
	 $consId = $_POST["constructionId"];
	 if($consId !="")
	 {
		 deleteData($consId);
		
 }
  }


?>
<?php
if(isset ($_POST["Submit_Btn1"]))
{
	$target_dir = "Upload1/";
$target_file = $target_dir.basename($_FILES["manImg"]["name"]);
	
if(isset($_FILES["manImg"])){
	if(move_uploaded_file($_FILES["manImg"]["tmp_name"],$target_file)){
		echo"This file".basename($_FILES["manImg"]["name"])."is uploaded"."<br/>";
	}
	else{
		echo"Erorr";
	}
}
else{
	echo"File is not available";
}
$mfId=$_POST["manId"];
$imageUp1= $_FILES["manImg"]["name"];
$mfdex=$_POST["manDes"];

	
	
	$sql= "INSERT INTO manufacturingTable (mnId,mnIm,mnDes) VALUES ('$mfId','$imageUp1','$mfdex')";
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
function deletemnfs($musId)
 {
	 global $con;
	 $sql = "DELETE FROM manufacturingTable WHERE  mnId = '$musId'";
	 if($con->query($sql)){
		 echo "Deleted Sucssefully";
	 }
	 else{
		 echo"Error:".$con->error;
	 }
	 
 }
  if(isset($_POST["btnSubmit1"])){
	 $musId = $_POST["manufacturingId"];
	 if($musId !="")
	 {
		 deletemnfs($musId);
		
 }
  }


?>