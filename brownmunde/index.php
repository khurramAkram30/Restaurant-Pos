<!DOCTYPE html>
<html lang="en"><!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Brown Munde</title>
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

    <style>
       
    </style>
</head>

<body>
    <!-- Start header -->
    <?php
    require "header.php";

    ?>
    <!-- End header -->

    <!-- Start slides -->
    <div id="slides" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="images/slider-01.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Brown Munde </strong></h1>
                            <!-- <p class="m-b-40">See how your users experience your website in realtime or view  <br> 
                            trends to see any changes in performance over time.</p> -->
                            <p>
                                <a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a>
                                <a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Order</a>
                            </p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/slider-02.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Brown Munde </strong></h1>
                            <!-- <p class="m-b-40">See how your users experience your website in realtime or view  <br> 
                            trends to see any changes in performance over time.</p> -->
                            <p>
                                <a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a>
                                <a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Order</a>
                            </p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/slider-03.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Brown Munde </strong></h1>
                            <!-- <p class="m-b-40">See how your users experience your website in realtime or view  <br> 
                            trends to see any changes in performance over time.</p> -->
                            <p>
                                <a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a>
                                <a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Order</a>
                            </p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End slides -->

    <!-- Start About -->
    <div class="about-section-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <img src="images/about-img.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                    <div class="inner-column">
                        <h1>Welcome To <span>Brown Munde</span></h1>
                        <!-- <h4>Little Story</h4> -->
                        <p>Brown Munde is located in 7-9 Princes street, Kilmarnock, KA1 3DD. Our authentic, Indian Tapas-style food allows our customers to enjoy a little bit of everything! 
                            The chef's home-made food is fresh, healthy and packed with flavour. </p>
                        <a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Start QT -->
    <div class="qt-box qt-background">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-left">
                    <p class="lead ">
                        " If you're not the one cooking, stay out of the way and compliment the chef. "
                    </p>
                    <span class="lead">Michael Strahan</span>
                </div>
            </div>
        </div>
    </div>
    <!-- End QT -->

    <!-- Start Menu -->
    <div class="menu-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-title text-center">
                        <h2>Special Menu</h2>
                        <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".drinks">Drinks</button>
                            <button data-filter=".lunch">Lunch</button>
                            <button data-filter=".dinner">Dinner</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row special-list" id="items-list">
                <!-- <div class="col-lg-4 col-md-6 special-grid drinks">
                    <div class="gallery-single fix">
                        <img src="images/img-01.jpg" class="img-fluid" alt="Image">
                        <div class="why-text">
                            <h4>Special Drinks 1</h4>
                            <p>Sed id magna vitae eros sagittis euismod.</p>
                            <h5> $7.79</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 special-grid drinks">
                    <div class="gallery-single fix">
                        <img src="images/img-02.jpg" class="img-fluid" alt="Image">
                        <div class="why-text">
                            <h4>Special Drinks 2</h4>
                            <p>Sed id magna vitae eros sagittis euismod.</p>
                            <h5> $9.79</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 special-grid drinks">
                    <div class="gallery-single fix">
                        <img src="images/img-03.jpg" class="img-fluid" alt="Image">
                        <div class="why-text">
                            <h4>Special Drinks 3</h4>
                            <p>Sed id magna vitae eros sagittis euismod.</p>
                            <h5> $10.79</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 special-grid lunch">
                    <div class="gallery-single fix">
                        <img src="images/img-04.jpg" class="img-fluid" alt="Image">
                        <div class="why-text">
                            <h4>Special Lunch 1</h4>
                            <p>Sed id magna vitae eros sagittis euismod.</p>
                            <h5> $15.79</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 special-grid lunch">
                    <div class="gallery-single fix">
                        <img src="images/img-05.jpg" class="img-fluid" alt="Image">
                        <div class="why-text">
                            <h4>Special Lunch 2</h4>
                            <p>Sed id magna vitae eros sagittis euismod.</p>
                            <h5> $18.79</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 special-grid lunch">
                    <div class="gallery-single fix">
                        <img src="images/img-06.jpg" class="img-fluid" alt="Image">
                        <div class="why-text">
                            <h4>Special Lunch 3</h4>
                            <p>Sed id magna vitae eros sagittis euismod.</p>
                            <h5> $20.79</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 special-grid dinner">
                    <div class="gallery-single fix">
                        <img src="images/img-07.jpg" class="img-fluid" alt="Image">
                        <div class="why-text">
                            <h4>Special Dinner 1</h4>
                            <p>Sed id magna vitae eros sagittis euismod.</p>
                            <h5> $25.79</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 special-grid dinner">
                    <div class="gallery-single fix">
                        <img src="images/img-08.jpg" class="img-fluid" alt="Image">
                        <div class="why-text">
                            <h4>Special Dinner 2</h4>
                            <p>Sed id magna vitae eros sagittis euismod.</p>
                            <h5> $22.79</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 special-grid dinner">
                    <div class="gallery-single fix">
                        <img src="images/img-09.jpg" class="img-fluid" alt="Image">
                        <div class="why-text">
                            <h4>Special Dinner 3</h4>
                            <p>Sed id magna vitae eros sagittis euismod.</p>
                            <h5> $24.79</h5>
                        </div>
                    </div>
                </div> -->

            </div>
        </div>
    </div>
    <!-- End Menu -->

    <!-- Start Gallery -->
    <div class="gallery-box">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-title text-center">
                        <h2>Gallery</h2>
                        <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p> -->
                    </div>
                </div>
            </div>
            <div class="tz-gallery">
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <a class="lightbox" href="images/gallery-img-01.jpg">
                            <img class="img-fluid" src="images/gallery-img-01.jpg" alt="Gallery Images">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a class="lightbox" href="images/gallery-img-02.jpg">
                            <img class="img-fluid" src="images/gallery-img-02.jpg" alt="Gallery Images">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a class="lightbox" href="images/gallery-img-03.jpg">
                            <img class="img-fluid" src="images/gallery-img-03.jpg" alt="Gallery Images">
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <a class="lightbox" href="images/gallery-img-04.jpg">
                            <img class="img-fluid" src="images/gallery-img-04.jpg" alt="Gallery Images">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a class="lightbox" href="images/gallery-img-05.jpg">
                            <img class="img-fluid" src="images/gallery-img-05.jpg" alt="Gallery Images">
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <a class="lightbox" href="images/gallery-img-06.jpg">
                            <img class="img-fluid" src="images/gallery-img-06.jpg" alt="Gallery Images">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery -->

    <!-- Start Customer Reviews -->
    <!-- <div class="customer-reviews-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-title text-center">
                        <h2>Customer Reviews</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 mr-auto ml-auto text-center">
                    <div id="reviews" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner mt-4">
                            <div class="carousel-item text-center active">
                                <div class="img-box p-1 border rounded-circle m-auto">
                                    <img class="d-block w-100 rounded-circle" src="images/profile-1.jpg" alt="">
                                </div>
                                <h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Paul Mitchel</strong>
                                </h5>
                                <h6 class="text-dark m-0">Web Developer</h6>
                                <p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem
                                    tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel,
                                    semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius
                                    nibh non aliquet.</p>
                            </div>
                            <div class="carousel-item text-center">
                                <div class="img-box p-1 border rounded-circle m-auto">
                                    <img class="d-block w-100 rounded-circle" src="images/profile-3.jpg" alt="">
                                </div>
                                <h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Steve Fonsi</strong>
                                </h5>
                                <h6 class="text-dark m-0">Web Designer</h6>
                                <p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem
                                    tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel,
                                    semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius
                                    nibh non aliquet.</p>
                            </div>
                            <div class="carousel-item text-center">
                                <div class="img-box p-1 border rounded-circle m-auto">
                                    <img class="d-block w-100 rounded-circle" src="images/profile-7.jpg" alt="">
                                </div>
                                <h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Daniel vebar</strong>
                                </h5>
                                <h6 class="text-dark m-0">Seo Analyst</h6>
                                <p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem
                                    tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel,
                                    semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius
                                    nibh non aliquet.</p>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Customer Reviews -->

    <!-- Start Contact info -->
    <div class="contact-imfo-box">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <i class="fa fa-volume-control-phone"></i>
                    <div class="overflow-hidden">
                        <h4>Phone</h4>
                        <p class="lead">
                            01563 508050
                        </p>
                    </div>
                </div>
                <!-- <div class="col-md-4">
                    <i class="fa fa-envelope"></i>
                    <div class="overflow-hidden">
                        <h4>Email</h4>
                        <p class="lead">
                            yourmail@gmail.com
                        </p>
                    </div>
                </div> -->
                <div class="col-md-6">
                    <i class="fa fa-map-marker"></i>
                    <div class="overflow-hidden">
                        <h4>Location</h4>
                        <p class="lead">
                        7-9 Princes street, Kilmarnock KA1 3DD
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact info -->

    <!-- Start Footer -->
  <?php
  require "footer.php";
  ?>
    <!-- End Footer -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    
    <script src="js/getItems.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script>
// Drinks
 getDrinksItem(function (resulte) {
    var insertData="";
    $("#items-list").html("");
    resulte.forEach(item =>{
      insertData +=`<div class="col-lg-4 col-md-6 special-grid drinks" id="drinks">
                    <div class="gallery-single fix">
                        <img src="images/img-03.jpg" class="img-fluid" alt="Image">
                        <div class="why-text">
                        <h4>${item.name}</h4>
                            <p>Sed id magna vitae eros sagittis euismod.</p>
                            <h5> $10.79</h5>
                        </div>
                    </div>
                </div>
        `;
    });
    $("#items-list").append(insertData);
});

getFoodItem(function (resulte) {
    var insertData="";
    // $("#items-list").html("");
    resulte.forEach(item =>{
      insertData +=`<div class="col-lg-4 col-md-6 special-grid lunch" id="lunch">
                    <div class="gallery-single fix">
                        <img src="images/img-03.jpg" class="img-fluid" alt="Image">
                        <div class="why-text">
                        <h4>${item.name}</h4>
                            <p>Sed id magna vitae eros sagittis euismod.</p>
                            <h5> $10.79</h5>
                        </div>
                    </div>
                </div>
        `;
    });
    $("#items-list").append(insertData);
});

getDesertItem(function (resulte) {
  
    var insertData="";
    // $("#items-list").html("");
    resulte.forEach(item =>{
      insertData +=`<div class="col-lg-4 col-md-6 special-grid dinner" id="dinner" >
                    <div class="gallery-single fix">
                        <img src="images/img-03.jpg" class="img-fluid" alt="Image">
                        <div class="why-text">
                            <h4>${item.name}</h4>
                            <p>Sed id magna vitae eros sagittis euismod.</p>
                            <h5> $10.79</h5>
                        </div>
                    </div>
                </div>
        `;
    });
    $("#items-list").append(insertData);
});




</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>

<script>
         
</script>