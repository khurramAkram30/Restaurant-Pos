<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Brown Munde Restaurant</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!-- Start header -->
    <?php
    require "header.php";

    ?>
	<!-- End header -->
	
	<!-- Start header -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Contact Us</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End header -->
	
	<!-- Start About -->
	<div class="about-section-box">
		<div class="container">
			<div class="row">
			
				<div class="col-lg-6 col-md-6 text-center">
					<div class="inner-column">
						<h1>Address</h1>
						<h2>Brown Munde</h2>
                        <h3>7-9 Princes street, Kilmarnock KA1 3DD</h3>
                        <h3><span style="font-weight: bold;">Telephone:</span> 01563 508050</h3>
						<!-- <p>Brown Munde is located in 7-9 Princes street, Kilmarnock, KA1 3DD. Our authentic, Indian Tapas-style food allows our customers to enjoy a little bit of everything! The chef's home-made food is fresh, healthy and packed with flavour. Gone are the days of additional oils and colourings. With over 20 years combined experience in Scotland's best Indian restaurants, the Brown Munde are committed to providing delicious food that keeps our customers coming back for more.</p> -->
						<!-- <p>Sed semper orci sit amet porta placerat. Etiam quis finibus eros. Sed aliquam metus lorem, a pellentesque tellus pretium a. Nulla placerat elit in justo vestibulum, et maximus sem pulvinar.</p> -->
						<!-- <a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a> -->
					</div>
				</div>
                <div class="col-lg-6 col-md-6">
					<!-- <img src="images/about-img.jpg" alt="" class="img-fluid"> -->
                    <iframe height="450" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2253.6962921580734!2d-4.498629684075094!3d55.60729918051465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x488832936905118b%3A0x422d07fff1535b1c!2sParis%20Match%20Cafe%20Bar%2C%207-9%20Princes%20St%2C%20Kilmarnock%20KA1%203DD%2C%20UK!5e0!3m2!1sen!2sin!4v1687775121716!5m2!1sen!2sin" style="border:0;" width="100%"></iframe>
				</div>
			</div>
		</div>
	</div>
	<!-- End About -->
	

	<!-- Start Footer -->
	<?php
    require "footer.php";

    ?>
	<!-- End Footer -->
	
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>
<script>
    var currentLocation = window.location.pathname;
    //   alert(currentLocation);
      // Find the matching link in the navigation and add the active class
      $('nav div div ul li a').each(function () {
        var linkHref = $(this).attr('href');
        if (currentLocation === "/restaurant/brownmunde/" + linkHref) {
            $('nav div div ul li').removeClass('active');
            // alert(linkHref);
            $(this).parent('li').addClass('nav-item active'); // Add class to the parent li
        }
      });
      </script>