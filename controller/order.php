<?php
define('DIR','../');//(../)below one folder .if 2 folders are p[resent then (../../)
require_once DIR.'config.php';//we need config.php file from DIR
//$ some name to create an object
$control=new Controller();//we write code to run the program in controller
$admin=new Admin();


if(isset($_POST['add'])) //POST - the action we have used
{
	$id=$_SESSION['uid'];
	$catid=$_POST['catid'];
	$origin=$_POST['origin'];
	$dest=$_POST['dest'];
	$dest2=$_POST['dest2'];
	$zip=$_POST['zip'];
	$tot_piece=$_POST['tot_piece'];
	$tot_weight=$_POST['tot_weight'];
	$iamount=$_POST['amount'];
	$status="ordered";
	 $stmt1 = $admin->ret("SELECT * FROM `category` where cat_id='".$catid."'");
    $row = $stmt1->fetch(PDO::FETCH_ASSOC);
    $r=$row['rate_perkg'];
    $res=$tot_weight*$r;
    $amount=$res;


	$stmt=$admin->Rcud("INSERT INTO `order`(`user_id`, `origin`, `dest`,`dest2`,`zip`,`tot_piece`, `tot_weight`, `amount`, `status`, `catid`) VALUES ('".$id."','".$origin."','".$dest."','".$dest2."','".$zip."','".$tot_piece."','".$tot_weight."','".$amount."','".$status."','".$catid."')","saved"); 
echo "<script>alert('inserted successfully');</script>";


  $admin->redirect1('../pay/index.php?id='.$stmt);
}
?>