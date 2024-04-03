<?php
define('DIR', '../');
require_once DIR.'config.php';
$control = new Controller(); 
$admin = new Admin();

if(isset($_POST['forgot'])) //POST - the action we have used
{
	
	$phone=$_POST['phone'];
	$email=$_POST['email'];

	//go to app / admin.ph
	$stmt=$admin->ret("SELECT * FROM `staff` where phone_no='$phone' and email='$email'");
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
	//$id=$row['u_id'];
	

	$num=$stmt->rowCount();
	if($num>0){
		echo "<script>alert('password is send to the phone number');window.location='../user/index.php';</script>";
	}
	else
	{
		 echo "<script>alert('please confirm the phone number');window.location='../user/index.php';</script>";
		// echo "please check username and password";
	}
}
?>
