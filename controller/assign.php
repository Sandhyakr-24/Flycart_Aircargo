<?php
define('DIR','../');//(../)below one folder .if 2 folders are p[resent then (../../)
require_once DIR.'config.php';//we need config.php file from DIR
//$ some name to create an object
$control=new Controller();//we write code to run the program in controller
$admin=new Admin();


if(isset($_POST['add'])) //POST - the action we have used
{
	$id=$_POST['id'];
	$emp_id=$_POST['emp_id'];
	$adate=date('Y-m-d');
	
	$s="assigned";
	$stmt1 = $admin->ret("SELECT * FROM `staff` where emp_id=".$emp_id);
   $row1 = $stmt1->fetch(PDO::FETCH_ASSOC);
$ph=$row1['phone_no'];
	
	$stmt=$admin->cud("INSERT INTO `allocate`(`a_order_id`, `a_staff_id`, `a_date`) VALUES('".$id."','".$emp_id."','".$adate."')","saved"); 
	$stmt = $admin->cud("UPDATE `order` SET `assign`='".$s."' WHERE order_id=".$id,"updated");

// echo "<script>alert('inserted successfully');window.location='../employee/index.php';</script>";


  $admin->redirect1('../employee/notification/sendsms1.php?ph='.$ph.'&id='.$id);
}
?>