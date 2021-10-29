<?php 
require 'libs/Smarty.class.php';
$smarty = new Smarty;

include("config.php");

if(isset($_POST['submit']))
{
	$sql = mysqli_query($con, "SELECT * FROM user WHERE name = '".$_POST['name']."' and password = '".md5($_POST['password'])."'");
	$row = mysqli_num_rows($sql);
	//$sql = mysqli_query($con,"insert into user(name,age,password) values('".$_POST['name']."','".$_POST['age']."','".md5($_POST['password'])."')");
	if($row>0)
	{
		$_SESSION['uname'] = $_POST['name'];
		header("location:view.php");
	}
	else
	{
		echo "username or password is incorrect";
	}
}	

$smarty->display('login.tpl');
?>	