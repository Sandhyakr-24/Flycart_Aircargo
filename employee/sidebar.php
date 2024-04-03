<?php
define('DIR','../');//(../)below one folder .if 2 folders are p[resent then (../../)
require_once DIR.'config.php';//we need config.php file from DIR
//$ some name to create an object
$control=new Controller();//we write code to run the program in controller
$admin=new Admin();
?>
<div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
        <a href="index.php"><p class="centered"><img src="img/emp1.jpg" class="img-circle" width="115" height="89"></a></p>
          <h5 class="centered"></h5>
 <!--   <li class="mt">->
           <a href="dashboard1.php">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>-->
          
         <li>
            <a href="order.php">
              <i class="fa fa-first-order"></i>
              <span>Order</span>
              </a>
          </li>
          <li>
            <a href="viewpay.php">
              <i class="fa fa-money"></i>
              <span>Payment</span>
              </a>
          </li>
          <li>
            <a href="noti.php">
              <i class="fa fa-users"></i>
              <span>Allocate G.Staff</span>
              </a>
          </li>
          <li>
            <a href="rep.php">
              <i class="fa fa-book"></i>
              <span>Update Report </span>
              </a>
          </li>
        
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-bell"></i>
              <span>Notification</span>
              </a>
            <ul class="sub">
              <li><a href="not.php">Assigned Order</a></li>
              <li><a href="not2.php">Other Order</a></li> 
            </ul></li>
            <li>
            <a href="feedback.php">
              <i class="fa fa-commenting"></i>
              <span>Feedback</span>
              </a>
          </li>
          
        <!-- sidebar menu end-->
      </div>
    </aside>