<?php 
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
    {   
header('location:login.php');
}
else{
	if (isset($_POST['submit'])) {

		mysqli_query($con,"update orders set 	paymentMethod='".$_POST['paymethod']."' where userId='".$_SESSION['id']."' and paymentMethod is null ");
		unset($_SESSION['cart']);
		header('location:order-history.php');

	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="keywords" content="MediaCenter, Template, eCommerce">
	    <meta name="robots" content="all">

	    <title>Shopping Portal | Payment Method</title>
	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	    <link rel="stylesheet" href="assets/css/main.css">
	    <link rel="stylesheet" href="assets/css/green.css">
	    <link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/owl.transitions.css">
		<!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->
		<link href="assets/css/lightbox.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<link rel="stylesheet" href="assets/css/rateit.css">
		<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
		<link rel="stylesheet" href="assets/css/config.css">
		<link href="assets/css/green.css" rel="alternate stylesheet" title="Green color">
		<link href="assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
		<link href="assets/css/red.css" rel="alternate stylesheet" title="Red color">
		<link href="assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
		<link href="assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		<link rel="shortcut icon" href="assets/images/favicon.ico">
	</head>
    <body class="cnt-home">
	
		
<header class="header-style-1">
<?php include('includes/top-header.php');?>
<?php include('includes/main-header.php');?>
<?php include('includes/menu-bar.php');?>
</header>
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.html">Home</a></li>
				<li class='active'>Payment Method</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content outer-top-bd">
	<div class="container">
		<div class="checkout-box faq-page inner-bottom-sm">
			<div class="row">
				<div class="col-md-12">
					<h2>Choose Payment Method</h2>
					<div class="panel-group checkout-steps" id="accordion">
						<!-- checkout-step-01  -->
<div class="panel panel-default checkout-step-01">

	<!-- panel-heading -->
		<div class="panel-heading">
    	<h4 class="unicase-checkout-title">
	        <a data-toggle="collapse" class="" data-parent="#accordion" href="#collapseOne">
	         Select your Payment Method
	        </a>
	     </h4>
    </div>
    <!-- panel-heading -->

	<div id="collapseOne" class="panel-collapse collapse in">

		<!-- panel-body  -->
	    <div class="panel-body" style="
    background: linear-gradient(135deg,rgb(32, 21, 234), #2a5298);
    border-radius: 20px;
    box-shadow: 0 5px 15px rgba(60, 117, 250, 0.5);
    text-align: center;
    max-width: 1000px;
    margin: auto;
    color: white;
    font-family: Arial, sans-serif;;">
	    <form name="payment" method="post" style="font-size: 20px; font-family: 'Poppins', sans-serif; font-weight: 500;">
	    <input type="radio" name="paymethod" value="COD" checked="checked" > COD
		<br>
		<br>
	     <input type="radio" name="paymethod" value="Internet Banking"> Internet Banking
		 <br>
		 <br>
	     <input type="radio" name="paymethod" value="Debit / Credit card"> Debit / Credit card 
		 <br>
		 <br>
	     <input type="submit" value="SUBMIT" name="submit" class="btn btn-primary" style="
    background: linear-gradient(135deg,rgba(255, 255, 0, 0.93),rgb(72, 255, 0));
    border: none;
    color: white;
    padding: 10px 10px;
    font-size: 15px;
    font-weight: bold;
    border-radius: 50px;
    cursor: pointer;
    transition: all 0.3s ease-in-out;
    box-shadow: 0 5px 15px rgb(221, 0, 255);
    outline: none;
    position: relative;
    overflow: hidden;
"
onmouseover="this.style.transform='scale(1.2)'; this.style.boxShadow='0 0 20px rgba(255, 75, 43, 0.8)';"
onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 5px 15px rgba(255, 75, 43, 0.6)';"
onmousedown="this.style.transform='scale(0.95)'; this.style.boxShadow='0 0 10px rgba(255, 75, 43, 1)';"
onmouseup="this.style.transform='scale(1.2)'; this.style.boxShadow='0 0 20px rgba(255, 75, 43, 0.8)';">
	    	

	    </form>		
		</div>
		<!-- panel-body  -->

	</div><!-- row -->
</div>
<!-- checkout-step-01  -->
					  
					  	
					</div><!-- /.checkout-steps -->
				</div>
			</div><!-- /.row -->
		</div><!-- /.checkout-box -->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->
<?php echo include('includes/brands-slider.php');?>
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div><!-- /.body-content -->
<?php include('includes/footer.php');?>
	<script src="assets/js/jquery-1.11.1.min.js"></script>
	
	<script src="assets/js/bootstrap.min.js"></script>
	
	<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	
	<script src="assets/js/echo.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
	<script src="assets/js/bootstrap-slider.min.js"></script>
    <script src="assets/js/jquery.rateit.min.js"></script>
    <script type="text/javascript" src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
	<script src="assets/js/scripts.js"></script>

	<!-- For demo purposes – can be removed on production -->
	
	<script src="switchstylesheet/switchstylesheet.js"></script>
	
	<script>
		$(document).ready(function(){ 
			$(".changecolor").switchstylesheet( { seperator:"color"} );
			$('.show-theme-options').click(function(){
				$(this).parent().toggleClass('open');
				return false;
			});
		});

		$(window).bind("load", function() {
		   $('.show-theme-options').delay(2000).trigger('click');
		});
	</script>
	<!-- For demo purposes – can be removed on production : End -->

	


<form method="post" action="process-payment.php">
    <div id="payment-options">
        <label><input type="radio" name="paymethod" value="Credit Card" onclick="showPaymentFields('card')"> Credit Card</label>
        <label><input type="radio" name="paymethod" value="Internet Banking" onclick="showPaymentFields('bank')"> Internet Banking</label>
    </div>

    <div id="card-details" style="display:none;">
        <label>Card Number:</label>
        <input type="text" name="card_number" placeholder="Enter Card Number" required>
        <label>Expiry Date:</label>
        <input type="month" name="expiry_date" required>
        <label>CVV:</label>
        <input type="password" name="cvv" placeholder="CVV" required>
    </div>

    <div id="bank-details" style="display:none;">
        <label>Select Bank:</label>
        <select name="bank_name">
            <option value="SBI">State Bank of India</option>
            <option value="HDFC">HDFC Bank</option>
            <option value="ICICI">ICICI Bank</option>
        </select>
        <label>Mobile Banking ID:</label>
        <input type="text" name="bank_id" placeholder="Enter Banking ID" required>
    </div>

    <button type="submit" name="submit">Pay Now</button>
</form>

<script>
function showPaymentFields(type) {
    document.getElementById('card-details').style.display = (type === 'card') ? 'block' : 'none';
    document.getElementById('bank-details').style.display = (type === 'bank') ? 'block' : 'none';
}
</script>

</body>
</html>
<?php } ?>