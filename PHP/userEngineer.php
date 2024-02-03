<?php
require'config.php';?>

<DOCTYPE html>
<head>
<title>Drop-Down-Menu-Style</title>
<link rel="stylesheet" href="../CSS/index1Css.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
}
*{ 
	margin:0;
	padding:0;
	box-sizing:border-box; 
}
.navigation{
	display:inline-flex;
	width:100%;
	height:auto;
	background-color:green;
}
.navbar{
	
	display:inline-flex;
	 text-align:center;
	 margin-top:30px;
	 margin-bottom:30px;
	 margin-left:30px;
}
.menu-bar
{
	/*display:inline-flex;*/
}
.menu-bar ul
{
	align-items: center;
	display:inline-flex;
	list-style:none;
	color:white;
}
.menu-bar ul li 
{
	padding:15px;
	margin:15px;
}
.profile{
	display:inline-flex;
	float:right;
	 margin-top:30px;
	 margin-bottom:20px;
	 margin-left:30px;
}
 .fa-user:hover {
  background-color: #000;
}
 .fa-user {
  display: block;
  text-align: center;
  padding: 8px;
  transition: all 0.3s ease;
  color: white;
 
}
	
.search{
	display:inline-flex;
	
	float:right;
	 margin-top:50px;
	 margin-bottom:30px;
	 margin-left:50px;
}
 .menu-bar ul li button
 {
    color: white;
    outline: none;
    border: none;
    background: transparent;
    cursor: pointer;
    font-family: sans-serif;
}
 .menu-bar ul li button:hover
{
    color: aqua;
}

.menu-bar ul li a
{
	
	text-decoration:none;
	color:white;
}
.menu-bar ul li.active , .menu-bar ul li:hover
{
	background:#2bab0d;
	border-radius:3px;
}
.sub-menu1 
{
	display:none;
}
.menu-bar ul li:hover .sub-menu1 
{
	display:block;
	position:absolute;
	background:rgb(0,100,0);
	margin-top:15px;
	margin-left:-15px;
	
}
.menu-bar li:hover .sub-menu1 ul
{ 
  display:block;

}
.menu-bar li:hover .sub-menu1 ul li
{
	width:170px;
	padding:4px;
	border-bottom:1px dotted #fff;
	background::transparent;
	border-radius:0;
	text-align:left;
	margin-right:45px;
	
}
.menu-bar li:hover .sub-menu1 ul li:last-child
{
	border-bottom:none;
	
}
.maindivcontainer{
	width:100%;
	height:600px;
background-image:url(../IMAGES/as8.jpeg)
overflow:hidden;

background-position:center;

background-repeat:no-repeat;
background-size:cover;
animation-name:example23;
animation-direction:alternative-reverse;
animation-duration:10s;

animation-iteration-count:infinite;
animation-play-state:running;
animation-timing-function:ease-in-out;

}

@keyframes example23{
	
	0%{
	background-image:url(../IMAGES/as8.jpeg);
	}
	25%{
		background-image:url(../IMAGES/a1.jpg);
		}
	50%{
		background-image:url(../IMAGES/a7.jpg);
		}
	75%{
		background-image:url(../IMAGES/a3.jpeg);
		}
	100%{
		background-image:url(../IMAGES/a6.jpg);
		}
}

</style>
<body>
<div class="navigation">
 <div class="navbar">
           
                <p>Matrix </p>
            </div>
<div class="menu-bar">
<ul>
<li class="active" ><a href ="#">About Us</a>
<div class="sub-menu1">
<ul class="sub">
<li><a href="../HTML/history.html">History</a></li>
<li><a href="../HTML/vision and mission.html">Mission & Vision</a></li>
<li><a href="userAwards.php">Aword & Certifications</a></li>
<li><a href="userManagement.php">Management</a></li>
</ul>
</div></li>
<li><a href ="#">Services</a>
<div class="sub-menu1">
<ul class="sub">
<li><a href="userManufacturing.php">Manufacturing</a></li>
<li><a href="userHeavyEngineering.php">Heavy Engineering</a></li>
<li><a href="userEngineer.php">Engineer Teams</a></li>
<li><a href="userWorker.php">Workers & Technicians</a></li>

</ul>
</div>
</li>
<li><a href ="#">Financial</a><div class="sub-menu1">
<ul class="sub">
<li><a href="../HTML/annual report.html">Anual Report</a></li>
<li><a href="../HTML/statics and trading.html">Statistic & Trading</a></li>
<li><a href="../HTML/insurence and law.html">Insurance & Law</a></li>
</ul>
</div></li>

<li><a href ="#">Resources</a><div class="sub-menu1">
<ul class="sub">
<li><a href="../HTML/working experience.html">Working Experience</a></li>
<li><a href="../HTML/what we offer.html">What we Offer</a></li>
<li><a href="userTraining.php">Training & Opportunities</a></li>
</ul>
</div></li>
<li><a href ="userProjects.php">Project</a>
</li>
<li><a href="location.href='../PHP/login.php';" >LogOut</a></li>
</ul>
</div>
<div class="profile">
<a href="resetPassword.php"><i class="fa fa-user" style="font-size:36px"></i></a>
</div>
<div class="search"><form method="POST" action="search.php">
<input type="text" placeholder="Search..." name="search">
<input type="submit" value="Search" name="btnSubmit">
</form>
</div>

</div>
<br/>
<h1><b><center>ENGINEERS AND ENGINEER GROUPS  OF MATRIX CONSTRUCTIONS</center></b></h1>
<br/>
<div class="maindivcontainer">
</div>
<br/>
<?php 
$sql = "SELECT*FROM engineerTable";
$results = $con->query($sql);
if($results->num_rows>0)
{
	while($row=$results->fetch_array())
	{
		if($row['enId']%2 == 0){?>
<div width="100%" height="200px" style="background-color:#00FFFF;"> Group Name : <?=$row['enNa'];?></div>
<div style="width:33.33%; height:600px; float:right;">
<img src="Upload/<?=$row['enImg1']?>" width="100%" height="50%">
<div style="width:100%; height:50%;"> <?=$row['enDes1']?></div>
</div>
<div style="width:33.33%; height:600px; float:left;">
<img src="Upload/<?=$row['enImg2']?>" width="100%" height="50%">
<div style="width:100%; height:50%;"> <?=$row['enDes2']?></div>
</div>
<div style="width:33.33%; height:600px; margin:0 auto;">
<img src="Upload/<?=$row['enImg3']?>" width="100%" height="50%">
<div style="width:100%; height:50%;"> <?=$row['enDes3']?></div>
</div>
		<?php }else {?>
		<div width="100%" height="200px" style="background-color:red;"> Group Name : <?=$row['enNa'];?></div>
<div style="width:33.33%; height:600px; float:right;">
<img src="Upload/<?=$row['enImg1']?>" width="100%" height="50%">
<div style="width:100%; height:50%;"> <?=$row['enDes1']?></div>
</div>
<div style="width:33.33%; height:600px; float:left;">
<img src="Upload/<?=$row['enImg2']?>" width="100%" height="50%">
<div style="width:100%; height:50%;"> <?=$row['enDes2']?></div>
</div>
<div style="width:33.33%; height:600px; margin:0 auto;">
<img src="Upload/<?=$row['enImg3']?>" width="100%" height="50%">
<div style="width:100%; height:50%;"> <?=$row['enDes3']?></div>
</div>
	<?php } }
}?>
<br/><br/><br/>
<div class="divla1" style="width:30%; height:400px; float:right; margin-right:5%; border-radius:15px; padding:10px; box-sizing:border-box; background-image:url('../IMAGES/uk9.jpg'); background-size: cover; background-position: center;}">
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<br/>
<a href="#" class="fa fa-linkedin"></a>
<a href="#" class="fa fa-youtube"></a>
<a href="#" class="fa fa-instagram"></a>
<br/>
<a href="#" class="fa fa-pinterest"></a>
<a href="#" class="fa fa-skype"></a>
<a href="#" class="fa fa-android"></a>

</div>
<div class="divla2"style="width:25%; height:400px; float:left; margin-left:5%; border-radius:15px; box-sizing:border-box; background-image:url('../IMAGES/as17.jpg');">
<img  src="../IMAGES/certificate.jpg" width="100%" height="200px">
</div>
<div class="divla3"style="width:25%; height:400px; margin:0 auto;  margin-left:35%; margin-right:40%; border-radius:15px; padding:5px; box-sizing:border-box; background-image:url('../IMAGES/as13.jpg');">
<ul style="list-style:none;">
<li><a " style = 'text-decoration:none;'" href='#'>Home</a></li>
<br/><br>
 <li><a " style = 'text-decoration:none;'" href='#'>About Us</a></li>
 <br/><br>
 <li><a " style = 'text-decoration:none;'" href='#'>Services</a></li>
 <br/><br>
 <li><a " style = 'text-decoration:none;'" href='#'>Contact</a></li>
</ul>
<img src="../IMAGES/mc1.png" width="50%" height="80px" style="margin-left:80px; border-radius:15px;"><br/>
<br/><h3><center><i><p >The Monarch of the Construction Kigdom</p></i></center></h3>
</div>
<br/>
<div style="width:100%; height:80px; background-color:#191970;">
<center><b><?php echo date("Y"); ?><p style="color:white;">MATRIX  CONSTRUCTIONS  PLC  All Rights Reserved  | <span><a href="#"style="color:white; text-decoration:none;">WebWorldWide</a></span>  | <span><a href="#"style="color:white; text-decoration:none;">Feedbacks</a></span></p></b></center>
</div>
</body>
</html>