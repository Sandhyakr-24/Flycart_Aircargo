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
   <div class="site-section" style="background-image:url('img/catt.jpg');" >
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Payement information</h2>
                </div>
                <div class="card-body">
                    <form action="../Controller/pay.php" method="POST">
                        <div class="form-row p-t-20">
                            <label class="label label--block">Payment method?</label>
                             <input type="hidden" checked="checked" name="oid" value="<?php echo $_GET['id'];?>">
                            <div class="p-t-15">
                                <label class="radio-container m-r-55">cash
                                    <input type="radio"  name="exist" checked="checked">
                                    <span class="checkmark" ></span>
                                </label>
                                <label class="radio-container">card
                                    <input type="radio" name="exist" value="other">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <!-- <div class="form-row m-b-55">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="first_name">
                                            <label class="label--desc">first name</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="last_name">
                                            <label class="label--desc">last name</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="form-row">
                            <div class="name" style="display: none"id="labcvv">Cvv</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" style="display:none"type="text" name="cvv" id="cvv" pattern="^\d{3}$" title="3 numeric character numeric only" required="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name" style="display:none" id="labholder">Holder name</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5"style="display:none" id="holder" type="text" name="holder" pattern="[A-Za-z]+" title="letters only" required="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name" style="display:none" id="labexp">Expiry date</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" style="display:none"type="text" name="exp" id="exp" placeholder="YYYY-MM-DD" required="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name" style="display:none" id="labcard">Card number</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="card"style="display:none" id="card" pattern="^\d{16}$" title="16 numeric character numeric only" required="" >
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="order" value="<?php echo $_GET['order_id']?>">
                      
                        <div class="form-row">
                            <div class="name">Amount</div>
                           <?php
                    $id=$_GET['id'];
     $stmt = $admin->ret("SELECT * FROM `order` where order_id='".$id."'");
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    ?>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" id="holder" type="text" name="amount" value="<?php echo $row['amount'];?>">
                                </div>
                            </div>
                        </div>
                        <input type="hidden" class="input--style-5" id="holder" type="text" name="rid" value="<?php echo $_GET['id'];?>">
                        <!-- <div class="form-row-b-55">
                            <div class="name">Phone</div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="area_code">
                                            <label class="label--desc">Area Code</label>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="phone">
                                            <label class="label--desc">Phone Number</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="form-row">
                            <div class="name">Subject</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="subject">
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            <option>Subject 1</option>
                                            <option>Subject 2</option>
                                            <option>Subject 3</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         -->
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit" name="submit" id="pay1" style="display: none">submit</button>
                            <a href="../Controller/pay.php?oid=<?php echo $id;?>&&amount=<?php echo $row['amount'];?>" class="btn btn--radius-2 btn--red" id="pay">pay</button>
                        </div>
                    </form>
                </div>
            </div>
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
$("#pay1").show();
$("#pay").hide();

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
$("#pay1").hide();
$("#pay").show();
}
});
});
</script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->