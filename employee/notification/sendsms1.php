<?php

define('DIR','../../');//(../)below one folder .if 2 folders are p[resent then (../../)
require_once DIR.'config.php';//we need config.php file from DIR
//$ some name to create an object
$control=new Controller();//we write code to run the program in controller
$admin=new Admin();
require('textlocal.class.php');

$textlocal = new Textlocal('amalvv248@gmail.com', 'amalvv248A');
$id=$_GET['id'];
$ph=$_GET['ph'];
$numbers = array($id);
$sender = 'TXTLCL';
$otp = rand(1000,9999);
                  $c=0;
     $stmt = $admin->ret("SELECT * FROM `user`inner join `order` inner join `payment` inner join `category` on `payment`.oid1 =`order`.order_id and `order`.user_id =`user`.uid and `category`.cat_id=`order`.catid where order_id=".$id);
   $row = $stmt->fetch(PDO::FETCH_ASSOC);
$message = 'customer name:'.$row['u_name'].'category'.$row['u_name'].'address'.$row['u_addr'];

try {
    $result = $textlocal->sendSms($numbers, $message, $sender);
    print_r($result);
    $admin->redirect1('../admin/visitor.php');

} catch (Exception $e) {
    die('Error: ' . $e->getMessage());
}
?>