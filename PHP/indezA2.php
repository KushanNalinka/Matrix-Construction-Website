<?php echo""; ?>
<?php require 'config.php'; ?>
<DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../CSS/indexCss.css">
<script src="../JS/firstPageJs.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
<br/>
<div class="insert">
<form method = "POST" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data" >
To add 2 Pictures and a Single News Description for the First Page
<br/>
Description ID : <br/>
<input type ="text" name = "desid">
<br/>
Upload an Image : <br/>
<input type ="file" name = "img">
<br/>
Upload another Image : <br/>
<input type ="file" name = "img1">
<br/>
Description : <br/>
<textarea rows="25" cols="55" name="des" placeholder="Enter the description related to the news and be carefull word limit in betwwen250-400, If you are planning to exceed the word limit please be kind enough to short the description. You can view the images you Entered and Description You written at last of the page"></textarea>
<br/>

<br/>
<input type="submit" value ="Submit" name = "Submit_Btn" class="btn">

</form>
</div>
<br/><br/>
<form method ="POST" action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<div class="insert">
<h2>Delete News Record with double pic</h2>
 Enter the News ID For Delete
<input type ="text" name ="newsId">
<input type ="submit"  value ="Delete" name ="btnSubmit">

</form>
</div>
<br/><br/>
<div class="insert">
<form method = "POST" action = "search.php" enctype="multipart/form-data" >
You Can Enter the New Project Details of the company with a single description and a single image.
<br/>
You should include the project Id which was given by the company 
<br/>
Project ID : <br/>
<input type ="text" name = "prjid" required>
<br/>
Project Name : <br/>
<input type ="text" name = "prjname" width="100%" required >
<br/>
Upload  Image : <br/>
<input type ="file" name = "img2"required >
<br/>
Description : <br/>
<textarea rows="25" cols="55" name="des" placeholder="Enter the description related to the news and be carefull word limit in betwwen250-400, If you are planning to exceed the word limit please be kind enough to short the description. You can view the images you Entered and Description You written at last of the page"></textarea>
<br/>
<input type="submit" value ="Submit" name = "Submit_Btn" class="btn">
</form>
</div>
<br/><br/>

<?php
if(isset ($_POST["Submit_Btn"]))
{
	$target_dir = "Upload/";
$target_file = $target_dir.basename($_FILES["img"]["name"]);
	
if(isset($_FILES["img"])){
	if(move_uploaded_file($_FILES["img"]["tmp_name"],$target_file)){
		echo"This file".basename($_FILES["img"]["name"])."is uploaded"."<br/>";
	}
	else{
		echo"Erorr";
	}
}
else{
	echo"File is not available";
}
$target_dir = "Upload/";
$target_file = $target_dir.basename($_FILES["img1"]["name"]);
	
if(isset($_FILES["img1"])){
	if(move_uploaded_file($_FILES["img1"]["tmp_name"],$target_file)){
		echo"This file".basename($_FILES["img1"]["name"])."is uploaded"."<br/>";
	}
	else{
		echo"Erorr";
	}
}
else{
	echo"File is not available";
}
$newsId=$_POST["desid"];
$imageUp= $_FILES["img"]["name"];
$imageUp1= $_FILES["img1"]["name"];

	$dex=$_POST["des"];
	
	$sql= "INSERT INTO addImage (newsId,image,image1,text) VALUES ('$newsId','$imageUp','$imageUp1','$dex')";
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
function deleteData($newnId)
 {
	 global $con;
	 $sql = "DELETE FROM addImage WHERE newsId  = '$newnId'";
	 if($con->query($sql)){
		 echo "Deleted Sucssefully";
	 }
	 else{
		 echo"Error:".$con->error;
	 }
	 
 }
  if(isset($_POST["btnSubmit"])){
	 $newnId = $_POST["newsId"];
	 if($newnId !="")
	 {
		 deleteData($newnId);
		
 }
  }


?>


</body>
</html>