<?php
define('DIR','../');//(../)below one folder .if 2 folders are p[resent then (../../)
require_once DIR.'config.php';//we need config.php file from DIR
//$ some name to create an object
$control=new Controller();//we write code to run the program in controller
$admin=new Admin();


if(isset($_POST['add'])) //POST - the action we have used
{
	$emp_name=$_POST['emp_name'];
	$emp_address=$_POST['emp_address'];
	$phone_no=$_POST['phone_no'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$designation=$_POST['designation'];
	
	$stmt=$admin->cud("INSERT INTO `staff`(`emp_name`, `emp_address`, `phone_no`, `email`, `password`, `designation`) VALUES ('".$emp_name."','".$emp_address."','".$phone_no."','".$email."','".$password."','".$designation."')","saved"); 
echo "<script>alert('inserted successfully');</script>";


 $admin->redirect1('../Dashio/index.php');
}
?>