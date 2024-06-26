<?php
define('DIR','../');
require_once DIR . 'config.php';

$control = new Controller(); 
$admin = new Admin();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Flycart</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <p>
                &nbsp;&nbsp;
                 &nbsp;&nbsp;
                  &nbsp;&nbsp;
                   &nbsp;&nbsp;
                    &nbsp;&nbsp;
                     &nbsp;&nbsp; 
                     &nbsp;&nbsp;
                     &nbsp;&nbsp;
                     &nbsp;&nbsp;
                     &nbsp;&nbsp;
                     &nbsp;&nbsp;
                     &nbsp;&nbsp;
                     &nbsp;&nbsp;
                     &nbsp;&nbsp; 
                     &nbsp;&nbsp;
                      &nbsp;&nbsp;
             <h1><center><b>THANK YOU !!</b></center></h1> 
               
                <h4><center><a href="../user/index.php">Get Back To Home</a></center></h4>
            
             <!-- <img src="pay/img/logoo.png"> -->  
            
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
$("input[type='radio']").change(function(){
if($(this).val()=="other")
{
$("#cvv").show();
$("#card").show();
$("#holder").show();
$("#exp").show();
$("#labcvv").show();
$("#labcard").show();
$("#labexp").show();
$("#labholder").show();
}
else
{
$("#cvv").hide();
$("#card").hide();
$("#holder").hide();
$("#exp").hide();
$("#labcvv").hide();
$("#labcard").hide();
$("#labexp").hide();
$("#labholder").hide();
}
});
});
</script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->