<?php
define('DIR', '../');
require_once DIR . 'config.php';
$control = new Controller(); 
$admin = new Admin();

$id=$_GET['id'];

$stmt = $admin->cud("DELETE FROM `staff` where emp_id=".$id,"Deleted");


echo "<script>alert('data deletes successfully');</script>";
$admin->redirect1('../Dashio/index.php');	

?>