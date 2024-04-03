<?php
define('DIR','../');//(../)below one folder .if 2 folders are p[resent then (../../)
require_once DIR.'config.php';//we need config.php file from DIR
//$ some name to create an object
$control=new Controller();//we write code to run the program in controller
$admin=new Admin();


if(isset($_POST['submit'])) //POST - the action we have used
{
	
	if($_POST['exist']=="other")
	{
		$oid=$_POST['oid'];
	$amount=$_POST['amount'];
	$val=date('Y-m-d');
	$date1=date('Y-m-d');
	$status="paid";
		$pay=$_POST['order'];
		$card=$_POST['card'];
		$exp=$_POST['exp'];
		$cvv=$_POST['cvv'];
		$holder=$_POST['holder'];
		$type="card";
		if($exp<=$val)
		{
			echo $oid;
			echo "<script>alert('card expired,Check your card');window.location='../pay/index.php?id=".$oid."';</script>";
		}
		else
		{

		$stmt=$admin->cud("INSERT INTO `payment`(`oid1`, `amount`, `type`, `pdate`, `pstatus`, `cvv`, `hname`, `expdate`, `cardno`) VALUES('".$oid."','".$amount."','".$type."','".$date1."','".$status."','".$cvv."','".$holder."','".$exp."','".$card."')","saved");
		echo "<script>alert('inserted successfully');window.location='../pay/thank.php';</script>";
		}
		
	}
}
	//go to app / admin.php
else{
		echo "dfghjk";
		$oid=$_GET['oid'];
	$amount=$_GET['amount'];

	$date1=date('Y-m-d');
	$status="paid";

	$type="cash"; 
	$stmt=$admin->cud("INSERT INTO `payment`(`oid1`, `amount`, `type`, `pdate`, `pstatus`) VALUES('".$oid."','".$amount."','".$type."','".$date1."','".$status."')","saved");
	 //cud inside admin we have to copy to stmt to get the query go to database localhost/phpmyadmin  demo/register/squ select insert
 echo "<script>alert('inserted successfully');window.location='../pay/thank.php';</script>";
}



?>
