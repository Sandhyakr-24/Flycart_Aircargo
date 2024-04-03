<?php
define('DIR','../');
require_once DIR.'config.php';

$control=new Controller();
$admin=new Admin();

if(isset($_POST['add']))
{
  $no=$_POST['no'];
  $adate=date('Y-m-d');
  $stmt1 = $admin->ret("SELECT * FROM `attendance` where attdate='".$adate."'");
    $row1 = $stmt1->fetch(PDO::FETCH_ASSOC);
    $num=$stmt1->rowCount();
    if($num==0)
    {
  for($i=0;$i<$no;$i++){
  	 $name=$_POST['studid'.$i];
  
  $status=$_POST['status'.$i];
  
  $stmt=$admin->cud("INSERT INTO `attendance`(`empid`, `status`, `attdate`) VALUES('".$name."','".$status."',now())","saved");
  }

 
  echo "<script>alert('data saved');</script>";
  $admin->redirect('../Dashio/attview');
}
else{
	echo "<script>alert('Todays attendance is already  taken');window.location='../Dashio/attview.php'</script>";
}

}
?>
