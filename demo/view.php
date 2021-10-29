<?php 
require 'libs/Smarty.class.php';
$smarty = new Smarty;

session_start();
include("config.php");

	if(isset($_SESSION['uname']))
	{
		$user = $_SESSION['uname'];
		echo "Welcome $user";
	}
		
	$sql=mysqli_query($con,"select * from user");
	while($res=mysqli_fetch_array($sql))
	{
		$data[]=$res;
	}
	if(isset($_GET['del']))
	{
		$del = mysqli_query($con,"delete from user where id='".$_GET['del']."'");
		header("location:view.php");
	}

$smarty->assign('user',$data);
$smarty->display('view.tpl');
?>	