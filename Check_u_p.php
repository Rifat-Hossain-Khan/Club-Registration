<?php
include("db_rw.php");
$u=$_REQUEST["uname"];
$p=md5($_REQUEST["pword"]);
$va="select id,password from user";
$ar=array();
$ar=getDataFromDBS($va); 
//echo "<pre>"; print_r($ar); echo "</pre>";

//echo $u;
//echo "<br/>";
//echo $p;

//session_start();
//$_SESSION["flag"]="";
//print_r($_REQUEST["pword"]);

if(isset($ar[$u]) && $ar[$u]==$p)
{
	//$_SESSION["flag"]="1234";
	header("Location:Home_Club.php");
}	
else
	header("Location:login.php?error=Incorrect User ID or Password");

?>