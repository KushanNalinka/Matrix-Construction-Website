<?php echo "Sello"; 
 require'config.php'?>
  <?php 
 if(isset ($_POST["Submit_Btn"]))
{
	$target_dir = "Uploads/";
$target_file = $target_dir.basename($_FILES["img2"]["name"]);
	
if(isset($_FILES["img2"])){
	if(move_uploaded_file($_FILES["img2"]["tmp_name"],$target_file)){
		echo"This file".basename($_FILES["img2"]["name"])."is uploaded"."<br/>";
	}
	else{
		echo"Erorr";
	}
}
else{
	echo"File is not available";
	
}

$prjsId=$_POST["prjid"];
$imageUp2= $_FILES["img2"]["name"];
$name=$_POST["prjname"];
$dest=$_POST["des"];
$sql= "INSERT INTO project (prjId,prjName,image,prjDes) VALUES ('$prjsId','$name','$imageUp2','$dest')";
if($con->query($sql)){
header("location:index2.php");
}
else{echo"An error has occured";}

}
 ?>
 <?php
 if(isset($_POST["btnSubmit"])){
 $name = $_POST["search"];
 
 $result=mysqli_query($con,"SELECT*FROM project WHERE prjName LIKE'%$name%'");
 if($result->num_rows >0)
	{
while($row = mysqli_fetch_array($result))
{?>
<div style="width:50%; float:right;">
<img src="Uploads/<?=$row["image"];?>" width="100%" height="400px">
</div>
<div style="width:50%; float:left;">
<p><?= $row["prjDes"];?></p>
</div>

<?php }
	}
	else{
		echo"<h1><center>No ResultFound.</center></h1>";
	}
 }
?>







