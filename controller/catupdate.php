<?php
define('DIR', '../');
require_once DIR.'config.php';
$control = new Controller(); 
$admin = new Admin();
if (isset($_POST['add']))

{
    # code...
    $id=$_POST['id'];
    $class_name=$_POST['class_name'];
	$good_type=$_POST['good_type'];
	$weight=$_POST['weight'];
	$rate_perkg=$_POST['rate_perkg'];
 $stmt = $admin->cud("UPDATE `category` SET `class_name`='".$class_name."',`good_type`='".$good_type."',`weight`='".$weight."',`rate_perkg`='".$rate_perkg."' WHERE cat_id=".$id,"updated");
 echo "<script>alert('updated successfully');</script>";


  $admin->redirect1('../Dashio/index.php');
}
 ?>