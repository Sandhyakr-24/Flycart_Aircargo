<?php
define('DIR','../');//(../)below one folder .if 2 folders are p[resent then (../../)
require_once DIR.'config.php';//we need config.php file from DIR
//$ some name to create an object
$control=new Controller();//we write code to run the program in controller
$admin=new Admin();


if(isset($_POST['add'])) //POST - the action we have used
{
	$class_name=$_POST['class_name'];
	$good_type=$_POST['good_type'];
	$weight=$_POST['weight'];
	$rate_perkg=$_POST['rate_perkg'];
	$target_dir="../image/";
	$image =$target_dir.basename($_FILES["image"]["name"]);
	move_uploaded_file($_FILES["image"]["tmp_name"],$image);
	$imageFileType = strtolower(pathinfo($image,PATHINFO_EXTENSION));
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"&& $imageFileType != "gif" ) {
		echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed');window.location='../user/index.php';</script>";

  $uploadOk = 0;
}
else{
	
	$stmt=$admin->cud("INSERT INTO `category`(`class_name`, `good_type`, `weight`, `rate_perkg`,`image`) VALUES ('".$class_name."','".$good_type."','".$weight."','".$rate_perkg."','".$image."')","saved"); 
 echo "<script>alert('inserted successfully');</script>";


  $admin->redirect1('../Dashio/index.php');
}
}
?>