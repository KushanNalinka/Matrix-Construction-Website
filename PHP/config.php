<?php
//for iwt sessions
 $server= "localhost";
$userName = "root";
$password ="";
$database ="constructionSite";

$con = new mysqli($server,$userName,$password,$database);

if($con -> connect_error)
{
	die("Connection failed :".$con->connect_error);
}
else
{
	echo " ";
}
?>