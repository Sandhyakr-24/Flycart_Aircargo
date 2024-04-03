<?php
require('textlocal.class.php');

$textlocal = new Textlocal('amalvv248@gmail.com', 'amalvv248A');
$id=$_GET['id'];
$numbers = array($id);
$sender = 'TXTLCL';
$otp = rand(1000,9999);
$message = 'your order has been received suceesfully:Our groundstaff will be collecting your belongings'.$otp;

try {
    $result = $textlocal->sendSms($numbers, $message, $sender);
    print_r($result);
} catch (Exception $e) {
    die('Error: ' . $e->getMessage());
}
?>