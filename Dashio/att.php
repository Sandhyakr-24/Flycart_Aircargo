<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>flycart- Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <?php include "header.php";?>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <?php include "sidebar.php";?>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i></h3>
        <div class="row">
          <div class="col-md-12">
            <div class="content-panel">
              <h3><i class="fa fa-angle-right">Attendance Add and View</i></h3>
              <hr>
              <div class="card-footer text-right">
                                        <a href="attview.php"><button type="submit" class="btn btn-info" name="add">view attendence</button></a>
                                    </div>
               <form action="../controller/att.php" method="POST">

              <table class="table">
                <thead>
                  <tr>
                     
                    <th>SI</th>
                    <th>Name</th>
                    <th>action</th>
                 
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $c=0;
                  $i=0;
     $stmt = $admin->ret("SELECT * FROM `staff` ");
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
      $c++;
    ?>
                  <tr>
                    <td><?php echo $c;?></td>
                    <td><?php echo $row['emp_name'];?></td>
                    <td><?php echo $row['designation'];?></td>
                    <input type="hidden" value="<?php echo $row['emp_id']; ?>" name="studid<?php echo $i;?>">
                                                        
                    <td><input type="radio" name="status<?php echo $i;?>" checked value="present"> Present
                                         <input type="radio" name="status<?php echo $i;?>" value="absent"> Absent</td>

                                       
                
                  </tr>
                <?php $i++;}?>
                 
                </tbody>

              </table>
              <input type="hidden" name="no" value="<?php echo $i;?>">
                                    <div class="card-footer text-right">
                                        <button type="submit" class="btn btn-primary" name="add">Add Attendance</button>
                                    </div>
                                    </form>
            </div>
          </div>
          <!-- /col-md-12 -->
          
        </div>
        <!-- /row -->
      </section>
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="basic_table.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  
</body>

</html>
