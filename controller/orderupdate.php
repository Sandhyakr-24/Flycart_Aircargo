<?php
define('DIR', '../');
require_once DIR.'config.php';
$control = new Controller(); 
$admin = new Admin();

    # code...
    $id=$_GET['id'];
    $status="confirmed";
	
 $stmt = $admin->cud("UPDATE `order` SET `status`='".$status."' WHERE order_id=".$id,"updated");
 echo "<script>alert('updated successfully');</script>";


  $admin->redirect1('../employee/order.php');
 ?>