<?php
define('DIR','../');//(../)below one folder .if 2 folders are p[resent then (../../)
require_once DIR.'config.php';//we need config.php file from DIR
//$ some name to create an object
$control=new Controller();//we write code to run the program in controller
$admin=new Admin();

if(isset($_POST['add'])) //POST - the action we have used
{
	
	$email=$_POST['d'];
	$password=$_POST['password'];
	//go to app / admin.ph
	$stmt=$admin->ret("SELECT * FROM `admin` where email='$email'and password='$password'");
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
	//$id=$row['u_id'];
	//$_SESSION['id']=$id;

	$num=$stmt->rowCount();


	if($num>0){
		$_SESSION['aname']=$row['name'];
		$_SESSION['aid']=$row['aid'];
		$id=$_SESSION['id'];

		 $admin->redirect1('../Dashio/index.php');	
	}
	$fe="front employee";
	$stmt1=$admin->ret("SELECT * FROM staff WHERE  email='".$email."' and password = '".$password."' and designation='".$fe."'");
	$row1=$stmt1->fetch(PDO::FETCH_ASSOC);
	//$id=$row['u_id'];
	//$_SESSION['id']=$id;

	$num1=$stmt1->rowCount();
	if($num1>0){
		$_SESSION['ename']=$row1['emp_name'];
		$_SESSION['eid']=$row1['emp_id'];
	

		 $admin->redirect1('../employee/index.php');	
	}
	else
	{
		 echo "<script>alert('please check username and password');window.location='../user/index.php';</script>";
		// echo "please check username and password";
	}
}
if(isset($_POST['forgot'])){
$email=$_POST['email'];
$phone=$_POST['phone'];

$stmt1=$admin->ret("SELECT * FROM staff WHERE  email='".$email."' and phone_no = '".$phone."'");
	$row1=$stmt1->fetch(PDO::FETCH_ASSOC);
	$num=$stmt->rowCount();
	if($num>0)
	{
		$admin->redirect1('../employee/upass.php');
	}




}
?>