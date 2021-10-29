<?php 
require 'libs/Smarty.class.php';
$smarty = new Smarty;

include("config.php");

if(isset($_POST['submit']))
{
	//$sql = mysqli_query($success, "SELECT * FROM login WHERE username = '".$_POST['username']."' and password = '".md5($_POST['password'])."'");
	//$row = mysqli_num_rows($sql);
	$sql = mysqli_query($con,"insert into user(name,age,password) values('".$_POST['name']."','".$_POST['age']."','".md5($_POST['password'])."')");
	header("location:view.php");
	echo "Record added successfully";
}	

$smarty->display('insert.tpl');
?>	