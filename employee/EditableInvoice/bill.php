<?php
define('DIR','../../');//(../)below one folder .if 2 folders are p[resent then (../../)
require_once DIR.'config.php';//we need config.php file from DIR
//$ some name to create an object
$control=new Controller();//we write code to run the program in controller
$admin=new Admin();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>flycart</title>
	
	<link rel='stylesheet' type='text/css' href='css/style.css' />
	<link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
	<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='js/example.js'></script>

</head>

<body>

	<div id="page-wrap">

		<textarea id="header">INVOICE</textarea>
		
		<div id="identity">
		
            <textarea id="address">FLYCART
Mangalore
575001
Flycart@gmail.com

Phone: (555) 555-5555</textarea>

            <div id="logo">

              <div id="logoctr">
                <a href="javascript:;" id="change-logo" title="Change logo">Change Logo</a>
                <a href="javascript:;" id="save-logo" title="Save changes">Save</a>
                |
                <a href="javascript:;" id="delete-logo" title="Delete logo">Delete Logo</a>
                <a href="javascript:;" id="cancel-logo" title="Cancel changes">Cancel</a>
              </div>

              <div id="logohelp">
                <input id="imageloc" type="text" size="50" value="" /><br />
                (max width: 540px, max height: 100px)
              </div>
              <img id="image" src="images/logoo.png" alt="logo" width="190" height="70" />
            </div>
		
		</div>
		
		<div style="clear:both"></div>
		
		<div id="customer">

            <textarea id="customer-title">Thank You ,</textarea>

            <table id="meta">
                <tr>
                    <td class="meta-head">Invoice </td>
                    <td><textarea>000123</textarea></td>
                </tr>
                <tr>

                    <td class="meta-head">Date</td>
                    <td><textarea id="date">December 15, 2009</textarea></td>
                </tr>
                <!-- <tr>
                    <td class="meta-head">Amount Due</td>
                    <td><div class="due">$875.00</div></td>
                </tr> -->

            </table>
		
		</div>
		
		<table id="items">
		
		  <tr>
		  	<th>To</th>
		      <th>classname</th>
		      <th>tot_piece</th>
		      <th>tot-weight</th>
		      <th>origin</th>
		      <th>destination</th>
	
		  </tr>
		  <?php
                  $c=0;
                  $id=$_GET['id'];
     $stmt = $admin->ret("SELECT * FROM `user`inner join `order` inner join `payment` inner join `category`on `payment`.oid1 =`order`.order_id and `order`.user_id =`user`.uid and `category`.cat_id =`order`.catid and order_id='".$id."'");
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
      $c++;
      $amount=$row['amount'];
      
    ?>
		  <tr class="item-row">
		  	<td class="description"><textarea><?php echo $row['u_name'];?></textarea></td>
		      <td class="item-name"><div class="delete-wpr"><textarea><?php echo $row['class_name'];?></textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>
		      <td class="description"><textarea><?php echo $row['tot_piece'];?></textarea></td>
		      <td><textarea class="cost"><?php echo $row['tot_weight'];?></textarea></td>
		      <td><textarea class="qty"><?php echo $row['origin'];?></textarea></td>
		      <td><span class="price"><?php echo $row['dest'];?></span></td>

		  </tr>
		<?php }?>
		  
		  
		  
		  <!-- <tr id="hiderow">
		    <td colspan="5"><a id="addrow" href="javascript:;" title="Add a row">Add a row</a></td>
		  </tr> -->
		<!--   
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Subtotal</td>
		      <td class="total-value"><div id="subtotal">$875.00</div></td>
		  </tr>
		  <tr>

		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Total</td>
		      <td class="total-value"><div id="total">$875.00</div></td>
		  </tr>
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Amount Paid</td>

		      <td class="total-value"><textarea id="paid">$0.00</textarea></td>
		  </tr> -->
		  <tr>
		      <td colspan="2" class="blank"> </td>
		    <td>Total Amount =<td colspan="2" class="total-line balance"></td>
		      <td class="total-value balance"><div class="due">Rs.<?php echo $amount;?></div></td>
		  </tr>
		
		</table>
		
		<div id="terms">
		  <h5>Terms</h5>
		  <textarea>NET 30 Days. Finance Charge of 1.5% will be made on unpaid balances after 30 days.</textarea>
		</div>
	
	</div>
	
</body>

</html>