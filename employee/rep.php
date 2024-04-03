<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>flycart - Bootstrap Admin Template</title>

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
        <h3><i class="fa fa-angle-right"></i>Update Report & Status</h3>
        <div class="row">
          <div class="col-md-12">
            <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i></h4>
              <hr>
              <table class="table">
                <thead>
                  <tr>
                    <th>user_id</th>
                    <th>User Name</th>
                    <th>Origin</th>
                    <th>Destination</th>
                    <th>tot_piece</th>
                    <th>tot_weight</th>
                     <th>Status</th>
                    <th>action</th>
                 
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $c=0;
     $stmt = $admin->ret("SELECT * FROM `order` inner join `user` on `user`.uid=`order`.user_id");
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
      $c++;
    ?>
                  <tr>
                    <td><?php echo $c;?></td>
                    <td><?php echo $row['u_name'];?></td>
                  <td><?php echo $row['origin'];?></td>
                   <td><?php echo $row['dest'];?></td>
                    <td><?php echo $row['tot_piece'];?></td>
                      <td><?php echo $row['tot_weight'];?></td>
                   <?php if($row['track']=="orderplaced"){?>
                   <td><a href="../controller/orderupdate.php?id=<?php echo $row['order_id'];?>"><button class="label label-warning label-mini"><?php echo "order";?></button></a></td> 
                 <?php }elseif($row['track']=="packed"){
                  ?>
                  <td><a href="../controller/orderupdate.php?id=<?php echo $row['order_id'];?>"><button class="label label-info label-mini"><?php echo "packed";?></button></a></td> 
                   <?php }
                  ?>
                  <?php if($row['track']=="shipped"){
                  ?>
                  <td><a href="../controller/orderupdate.php?id=<?php echo $row['order_id'];?>"><button class="label label-success label-mini"><?php echo "shipped";?></button></a></td> 
                   <?php }?>
                   
                  <td>
                    <form action="../controller/track.php"  method="post">
                      <input type="hidden" name="oid" value="<?php echo $row['order_id'];?>">
                    <select name="track">
                       <option >tracking</option>
                      <option value="orderplaced">orderplaced</option>
                       <option value="packed">packed</option>
                        <option value="shipped">shipped</option>
                    </select>
                    <input type="submit" name="add" class="btn btn-primary" value="go">
                  </form>
                  </td>
                
                  </tr>
                <?php }?>
                 
                </tbody>
              </table>
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
