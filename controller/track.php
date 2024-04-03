<?php
define('DIR', '../');
require_once DIR.'config.php';
$control = new Controller(); 
$admin = new Admin();

    # code...
    if(isset($_POST['add']))
    {
    	$id=$_POST['oid'];

	$track=$_POST['track'];
 $stmt = $admin->cud("UPDATE `order` SET `track`='".$track."' WHERE order_id=".$id,"updated");
 echo "<script>alert('updated successfully');</script>";


  $admin->redirect1('../employee/rep.php');
}

 ?>