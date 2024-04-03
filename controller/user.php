<?php
define('DIR','../');//(../)below one folder .if 2 folders are p[resent then (../../)
require_once DIR.'config.php';//we need config.php file from DIR
//$ some name to create an object
$control=new Controller();//we write code to run the program in controller
$admin=new Admin();


if(isset($_POST['add'])) //POST - the action we have used
{
	$u_name=$_POST['u_name'];
	$u_addr=$_POST['u_addr'];
	$pin=$_POST['pin'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$password=$_POST['password'];

	
	$stmt=$admin->cud("INSERT INTO `user`(`u_name`, `u_addr`,`pin`, `password`, `phone`, `email`) VALUES ('".$u_name."','".$u_addr."','".$pin."','".$password."','".$phone."','".$email."')","saved"); 
echo "<script>alert('inserted successfully');</script>";


 $admin->redirect1('../Dashio/register/login.php');
}
?>