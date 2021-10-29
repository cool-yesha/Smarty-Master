<?php 
require 'libs/Smarty.class.php';
$smarty = new Smarty;

include("config.php");

$sql = mysqli_query($con,"select * from user where id='".$_GET['id']."'");
$data = mysqli_fetch_array($sql);

if(isset($_POST['submit']))
{
	$qry = mysqli_query($con,"update user set name='".$_POST['name']."',age='".$_POST['age']."',password='".$_POST['password']."' where id='".$_POST['id']."'");
	header("location:view.php");
}

$smarty->assign('users',$data);
$smarty->display('edit.tpl');
?>	