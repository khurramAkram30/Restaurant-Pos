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
    <!-- <link rel="stylesheet" href="css/custom.css"> -->

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        .why-text h6 {
            color: #ffffff;
            font-size: 15px;
            font-weight: 500;
            font-family: 'Arbutus Slab', serif;
        }

        .filter-button-group {
            border: 1px solid #e4e4e4;
            border-radius: 4px;
            margin: 1px 15px;
            display: inline-block;
        }

        .cartItem {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 10px;
        }

        .img-fluid {
            max-width: 100%;
            height: auto;
            border-radius: 15px !important;
            padding: 6px;
        }

        .gallery-single {
            position: relative;
            overflow: hidden;
            -webkit-box-shadow: 0 0 10px #ccc;
            box-shadow: 0 0 10px #ccc;
            border-radius: 15px;
        }

        .btnset {
            width: 100%;
            border-radius: 30px !important;
            padding: 5px !important;
        }

        .labelSet {
            width: 70px;
            text-align: center;
            background: #080808;
            color: white;
            font-weight: 500;
            border-radius: 16px;
        }

        .cutomize {
            text-align: center;
            background-color: black;
            color: white;
            font-size: 18px;
            font-weight: 800;
            border-radius: 0px !important;
            margin-bottom: 1px;

        }

        .radiobtn {
            height: 25px;
            width: 25px;
        }
        .collectionTime{
            font-size: 18px;
            font-weight: 800;
        }
    </style>

</head>

<body>
    <!-- Start header -->
    <?php
    require "header.php";

    ?>
    <!-- End header -->

    <!-- Start All Pages -->
    <div class="all-page-title page-breadcrumb">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Special Menu</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Pages -->


    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="special-menu text-center">
                    <div class="button-group filter-button-group">
                        <button class="active" data-filter=".drinks">Drinks</button>
                        <button data-filter=".lunch">Food</button>
                        <button data-filter=".dinner">Sweets</button>
                    </div>
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter=".drinks">Drinks</button>
                            <button data-filter=".lunch">Lunch</button>
                            <button data-filter=".dinner">Dinner</button>
                            <button class="active" data-filter=".drinks">Food</button>
                            <button data-filter=".lunch">Lunch</button>
                            <button data-filter=".dinner">Dinner</button>
                            <button class="active" data-filter=".drinks">Sweets</button>
                            <button data-filter=".lunch">Lunch</button>



                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- Start Menu -->
    <div class="menu-box p-0">
        <div class="container">
       


            <div class="row special-list mb-3" id="items-list">
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 special-grid drinks">
                            <div class="gallery-single fix">
                                <img src="images/img-01.jpg" class="img-fluid" alt="Image">
                                <div class="cartItem">
                                    <h4><b>Baby Aubergine & Potato</b></h4>
                                    <!-- <p class="text-center">ladyfingers cooked with fresh tomatoes</p> -->
                                    <label class="labelSet" for="">$45</label>
                                    <button class="btn mb-1 btnset" onclick="alert(123)">Add To Cart</button>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 special-grid drinks">
                            <div class="gallery-single fix">
                                <img src="images/img-02.jpg" class="img-fluid" alt="Image">
                                <div class="cartItem">
                                    <h4><b>Baby Aubergine & Potato</b></h4>
                                    <!-- <p class="text-center">ladyfingers cooked with fresh tomatoes</p> -->
                                    <label class="labelSet" for="">$45</label>
                                    <button class="btn mb-1 btnset" onclick="alert(123)">Add To Cart</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 special-grid drinks">
                            <div class="gallery-single fix">
                                <img src="images/img-03.jpg" class="img-fluid" alt="Image">
                                <div class="cartItem">
                                    <h4><b>Baby Aubergine & Potato</b></h4>
                                    <!-- <p class="text-center">ladyfingers cooked with fresh tomatoes</p> -->
                                    <label class="labelSet" for="">$45</label>
                                    <button class="btn mb-1 btnset" onclick="alert(123)">Add To Cart</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-8 " style="padding-top: 30px;">
                    <div class=" cutomize ">
                        <label for="">Your Order</label>
                    </div>
                    <div class="row" style="padding-left:15px;padding-right:15px;">

                        <div class="col-md-6 d-flex p-4"
                            style="background-color: black; gap: 10px;border-right: 1px solid white;">
                            <input type="radio" value="Home Delivery" class="radiobtn">
                            <label for="" style="color: #ffffff;">Home Delivery</label>
                        </div>

                        <div class="col-md-6 d-flex p-4" style="background-color: black; gap: 10px">
                            <input type="radio" value="Home Delivery" class="radiobtn">
                            <label for="" style="color: #ffffff;">Collection</label>
                        </div>

                        <div class="form-group w-100 text-center collectionTime">
                            <label for="sel1" class="form-label">Collection Time</label>
                            <select class="form-control " id="sel1" name="sellist1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>

                        <div class="form-group w-100 text-center collectionTime" style="display: none;">
                            <label for="sel1" class="form-label">We Are Delivering On These Zip Codes</label>
                            <select class="form-control " id="sel1" name="sellist1">
                                <option>743500</option>
                                <option>12345</option>
                                <option>12456</option>
                                <option>09876</option>
                            </select>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Menu -->

    <!-- #region -->

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

    $(document).ready(function () {
        var defaultFilter = '.drinks';
        var $grids = $('#items-list').isotope({
            itemSelector: '.special-grid'
        });
        // Set the default filter value to 'drinks'
        // Filter the items on page load
        $grids.isotope({
            filter: defaultFilter
        });

      $(".special-grid ").css("position","unset");  

      $(".special-list").css("height", "auto");

// Set the height to "auto" on window resize
$(window).resize(function() {
    $(".special-list").css({
        "height": "auto",
        "min-height": "initial",  // Reset min-height if necessary
    });
});

      
    });

  
</script>


     <!-- <div class="row">
                <div class="col-lg-9">
                    <div class="heading-title text-center mb-0">
                        <h2>Menu</h2>
                    </div>
                </div>
            </div> -->
            <!-- <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter=".drinks">Drinks</button>
                            <button data-filter=".lunch">Lunch</button>
                            <button data-filter=".dinner">Dinner</button>
                        </div>
                        <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter=".drinks">Drinks</button>
                            <button data-filter=".lunch">Lunch</button>
                            <button data-filter=".dinner">Dinner</button>
                            <button class="active" data-filter=".drinks">Drinks</button>
                            <button data-filter=".lunch">Lunch</button>
                            <button data-filter=".dinner">Dinner</button>
                            <button class="active" data-filter=".drinks">Drinks</button>
                            <button data-filter=".lunch">Lunch</button>
                            
                

                        </div>
                    </div>
                    </div>
                </div>
            </div> -->

<!-- 
<div class="col-lg-4 col-md-6 special-grid lunch">
                            <div class="gallery-single fix">
                                <img src="images/img-04.jpg" class="img-fluid" alt="Image">
                                <div class="cartItem">
                                    <h4><b>Baby Aubergine & Potato</b></h4>
                                    <label class="labelSet" for="">$45</label>
                                    <button class="btn mb-1 btnset" onclick="alert(123)">Add To Cart</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 special-grid lunch">
                            <div class="gallery-single fix">
                                <img src="images/img-05.jpg" class="img-fluid" alt="Image">
                                <div class="cartItem">
                                    <h4><b>Baby Aubergine & Potato</b></h4>
                                    <label class="labelSet" for="">$45</label>
                                    <button class="btn mb-1 btnset" onclick="alert(123)">Add To Cart</button>
                                </div>
                            </div>
                        </div>


                        
                        <div class="col-lg-4 col-md-6 special-grid lunch">
                            <div class="gallery-single fix">
                                <img src="images/img-06.jpg" class="img-fluid" alt="Image">
                                <div class="cartItem">
                                    <h4><b>Baby Aubergine & Potato</b></h4>
                                    <label class="labelSet" for="">$45</label>
                                    <button class="btn mb-1 btnset" onclick="alert(123)">Add To Cart</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 special-grid dinner">
                            <div class="gallery-single fix">
                                <img src="images/img-07.jpg" class="img-fluid" alt="Image">
                                <div class="cartItem">
                                    <h4><b>Baby Aubergine & Potato</b></h4>
                                    <label class="labelSet" for="">$45</label>
                                    <button class="btn mb-1 btnset" onclick="alert(123)">Add To Cart</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 special-grid dinner">
                            <div class="gallery-single fix">
                                <img src="images/img-08.jpg" class="img-fluid" alt="Image">
                                <div class="cartItem">
                                    <h4><b>Baby Aubergine & Potato</b></h4>
                                    <label class="labelSet" for="">$45</label>
                                    <button class="btn mb-1 btnset" onclick="alert(123)">Add To Cart</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 special-grid dinner">
                            <div class="gallery-single fix">
                                <img src="images/img-09.jpg" class="img-fluid" alt="Image">
                                <div class="cartItem">
                                    <h4><b>Baby Aubergine & Potato</b></h4>
                                    <label class="labelSet" for="">$45</label>
                                    <button class="btn mb-1 btnset" onclick="alert(123)">Add To Cart</button>
                                </div>
                            </div>
                        </div> -->