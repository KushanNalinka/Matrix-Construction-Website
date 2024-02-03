<?php echo "";
require'config.php';?>

<DOCTYPE html>
<head>
<title>Drop-Down-Menu-Style</title>
<link rel="stylesheet" href="../CSS/index1Css.css">
<script src="../JS/firstPageJs.js"></script>
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
 .menu-barul li button
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
position:relative;
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
<li><a href="../HTML/whorking experience.html">Working Experience</a></li>
<li><a href="../HTML/what we offer.html">What we Offer</a></li>
<li><a href="userTraining.php">Training & Opportunities</a></li>
</ul>
</div></li>
<li><a href ="userProjects.php">Project</a>
</li>
<li><a href="../PHP/logoff.php" >LogOut</a></li>
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
<div class="namedivcon" width="100%" height="300px">
<h1><center><b>WELCOME TO MATRIX CONSTRUCTIONS PLC</b></center></h1>
<br/>
<h2><center><i>The Monarch of the construction Kingdom</i></center></h2>

</div>
<br/><br/>
<div class="maindivcontainer">
Hello
</div>
<br/><br/>
<?php 
$sql = "SELECT*FROM addImage";
$result = $con->query($sql);
if($result->num_rows>0)
{
	while($row=$result->fetch_array())
	{ ?>
		<div class="newsim1" >
		<img  width="100%" height="100%" src = "Upload/<?=$row['image']?>" style="border-radius:15px;">
		</div>
		<div class="newsim2">
		<img width="100%" height="100%" src = "Upload/<?=$row['image1']?>" style="border-radius:15px;">
		</div>
		<div class="newsdes">
		<p><?= $row['text'] ?></p>";
		</div>
<?php }  }?>

<br/>
<button   class="bt1" name="btn1" onclick="loadData('btn1')">Buiding Construction</button>
<button  class="bt2" name="btn2" onclick="loadData('btn2')">Civil Engineering</button>
<button  class="bt3"  name="btn3" onclick="loadData('btn3')">Heavy Engineering</button>
<br/>
<div class= "image">
<img class="buildingim" src="../IMAGES/buiding.jpg" id ="image1" alt="A building image" width="100%" height="300px">
</div>
<div class="content" id ="para">In the United States of America building engineering, also known as Architectural engineering is the application of engineering principles and technology to building design and construction. A building engineer is involved in planning, designing, constructing, operating, maintaining, supervising and renovating building structures. This includes airports, bridges, channels, dams, harbors, irrigation projects, pipelines, power plants, roads, railroads and water and sewage systems. However, designing an entire building is a huge task for a single person; architects work with civil and structural engineers to discuss technical issues and the structural integrity of a building.
</div>

<br/><br/><br/>
<br/><br/><br/>

<br/><hr/><br/><br/><br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<div class="di1" style="color:yellow; padding:20px; box-sizing:border-box; ">Work on California's high-speed train began in 2015 and is scheduled for completion in 2029. It will connect eight of the 10 largest cities in the state and reach from San Diego in the south to San Francisco in the north. The project will be completed in two phases: Phase 1 will connect Los Angeles to San Francisco; Phase 2 will extend connections to San Diego and Sacramento. The train will be 100-percent electric and will be powered entirely by renewable energy and capable of speeds up to 200 miles per hour. </div>
<div class="di2" style="color:blue; padding:20px; box-sizing:border-box; ">Libya has been working on the "Great Man-Made River" (GMR) project since 1985. It is the largest irrigation project in the world. When completed, it will irrigate more than 350,000 acres of arable land and will substantially increase available drinking water in most of Libya's urban centers. The water source for the project is the underground Nubian Sandstone Aquifer System. The project is scheduled for completion in 2030.</div>
<div class="di3" style="color:white; padding:20px; box-sizing:border-box; ">A project is a series of related a tasks which when they are carried in the correct order will lead to the completion of the project. Projects are temporary, generally resulting in the creation of a tangible product or outcome. This is as opposed to a programme, which is a series of interrelated projects that may be carried out repeatedly or continuously in order to support an ongoing process. For more information, see Project v programme A construction project, sometimes just referred to as a ‘project’, is the organised process of constructing, renovating, refurbishing, etc. a building, structure or infrastructure. The project process typically starts with an overarching requirement which is developed through the creation of a brief, feasibility studies, option studies, design, financing and construction.</div>
<div class="di4" style=" padding:20px; box-sizing:border-box; ">Construction projects are typically one off's. That is, a project team, brief and financing are put together to produce a unique design that delivers a single project. Once the project is complete the team is disbanded and sometimes will not work together again. This can make it difficult to develop ideas or relationships, and so lessons learned are often not carried forward to the next project. The exceptions to this are repeat developers such as supermarket chains, housebuilders, and so on. Typically, a construction project comprises many smaller projects which require a wide range of different disciplines working in collaboration. Large numbers of people are involved on a typical construction project, with the structure and composition of the project team usually changing through its duration. Projects may be coordinated by a project manager (or by a lead consultant) who is supported by professionals such as an architect, engineer, cost consultant and so on. For more information, see Project team.</div>
<div class="di5"  style="color:yellow; padding:20px; box-sizing:border-box; " >This separation of project roles into different disciplines, and contractual arrangements that further separate the client, consultants, contractors and subcontractors can make construction projects adversarial. This can result in conflict, opposition, confrontation, dispute and even hostility.

Solutions that have been put forward to combat the adversarial nature of construction projects include:

Partnering and collaborative contracts such as NEC
Alternative dispute resolution.
Careful consideration of selection criteria.
Integrated supply teams.
Fair payment practices
Other collaborative practices.
For more information, see Adversarial behaviour in the UK construction industry.</div>
<div class="di6"style="color:blue; padding:20px; box-sizing:border-box; ">
 This can include major infrastructure works such as roads, bridges, dams, railways, tunnels, and so on, or public facilities such as hospitals, schools, prisons, libraries, leisure centres, and so on. For more information, see Public project definition.
A ‘private project’ is one that is financed, controlled or commissioned by a private party, i.e. one that is not a government. Private parties can include individuals, corporations, charities, privately-funded institutions, schools, hospitals, and so on.
Some projects involve both public and private entities. Public Private Partnerships (PPPs) are a very broad range of partnerships in which the public and private sectors collaborate for some mutual benefit, which can include the completion of a construction project.</div>
<br/>
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
<li><a  style = "text-decoration:none;" href='../HTML/home.html'>Home</a></li>
<br/><br>
 <li><a  style = "text-decoration:none;" href='../HTML/aboutUs.html'>About Us</a></li>
 <br/><br>
 <li><a  style = "text-decoration:none;" href='../HTML/services.html'>Services</a></li>
 <br/><br>
 <li><a  style = "text-decoration:none;" href='../HTML/contactUs.html'>Contact</a></li>
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