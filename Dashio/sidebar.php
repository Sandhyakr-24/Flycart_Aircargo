<?php
define('DIR','../');//(../)below one folder .if 2 folders are p[resent then (../../)
require_once DIR.'config.php';//we need config.php file from DIR
//$ some name to create an object
$control=new Controller();//we write code to run the program in controller
$admin=new Admin();
?>

<div id="sidebar" class="nav-collapse ">
  <div>
  

<p><h3>ADMIN</h3></p>


</div>
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
         <a href="index.php"><p class="centered"><img src="img/admin1.png" class="img-circle" width="110" height="87"></a></p>
          <h5 class="centered"></h5>
          
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-plane"></i>
              <span>services</span>
              </a>
            <ul class="sub">
              <li><a href="addservice.php">add</a></li>
              <li><a href="viewservice.php">view</a></li>

              
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>category</span>
              </a>
            <ul class="sub">
              <li><a href="catadd.php">add</a></li>
              <li><a href="viewcat.php">view</a></li>
               <li><a href="viewreq.php">view request</a></li>
              
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-users"></i>
              <span>staffs</span>
              </a>
            <ul class="sub">
              <li><a href="addstaff.php">add</a></li>
              <li><a href="viewstaff.php">view</a></li>
              
            </ul>
          </li>
          <li>
            <a href="att.php">
              <i class="  fa fa-address-book"></i>
              <span>attendence</span>
              </a>
          </li>
          
        <!-- sidebar menu end-->
      </div>
    </aside>