<?php
define('DIR','../');//(../)below one folder .if 2 folders are p[resent then (../../)
require_once DIR.'config.php';//we need config.php file from DIR
//$ some name to create an object
$control=new Controller();//we write code to run the program in controller
$admin=new Admin();


if(isset($_POST['submit'])) //POST - the action we have used
{
	$uid=$_POST['uid'];
	$feedback=$_POST['feedback'];
	$adate=date('Y-m-d');
	
	
	$stmt=$admin->cud("INSERT INTO `feedback`(`userid`, `feedback`, `fdate`) VALUES('".$uid."','".$feedback."','".$adate."')","saved"); 
echo "<script>alert('inserted successfully');</script>";


 $admin->redirect1('../user/cat.php');
}
?>