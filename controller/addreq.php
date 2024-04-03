<?php
define('DIR','../');//(../)below one folder .if 2 folders are p[resent then (../../)
require_once DIR.'config.php';//we need config.php file from DIR
//$ some name to create an object
$control=new Controller();//we write code to run the program in controller
$admin=new Admin();


if(isset($_POST['add'])) //POST - the action we have used
{
	$sname=$_POST['sname'];
	$sclass=$_POST['sclass'];
	$uid=$_SESSION['uid'];

	
	$stmt=$admin->cud("INSERT INTO `request`(`category`,`class_name`,`user_id`) VALUES ('".$sname."','".$sclass."','".$uid."')","saved"); 
echo "<script>alert('inserted successfully');</script>";


 $admin->redirect1('../user/index.php');
}
?>