<?php 
session_start();
$Username= $_POST['username'];
$Password= md5($_POST['password']);

if ($Username=="hrandika" && $Password==md5("randika")) {
	header("Location: catalog.php");
	$_SESSION["LOGIN"]=true;
	$_SESSION["USERNAME"]=$Username;
$_SESSION["ERROR"]="";
} else {
	$_SESSION["ERROR"] = "USERNAME ATAU PASSWORD SALAH!!!";
	header("Location:login.php"); 

}

?>