<?php
define('DIR','../');//(../)below one folder .if 2 folders are p[resent then (../../)
require_once DIR.'config.php';//we need config.php file from DIR
//$ some name to create an object
$control=new Controller();//we write code to run the program in controller
$admin=new Admin();


if(isset($_POST['add'])) //POST - the action we have used
{
	$sname=$_POST['sname'];
	
	$stmt=$admin->cud("INSERT INTO `service`(`service_name`) VALUES ('".$sname."')","saved"); 
echo "<script>alert('inserted successfully');</script>";


 $admin->redirect1('../Dashio/index.php');
}
?>