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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha384-g3S4AaZrR6ss3gA7JOZApkZOyGdP+Kpb0laJwFBl9Ae9Pc3iQH+1Ij3QH6tI/Fr5" crossorigin="anonymous">

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    <style>
        body {
            color: black;
        }

        .h2design {
            display: flex;
            /* justify-content: center; */

        }

        .collection {
            display: flex;
            gap: 10px;
        }

        .ShoppingCart {
            display: flex;
            gap: 10px;
        }

        .form-control {
            border-radius: 0px;
            min-height: 0px;
        }

        .labels {
            display: flex;
            align-items: center;
            justify-content: end;
            font-size: 17px;
            font-weight: 600;
        }

        .col-md-4 input {
            text-align: center;
        }

        .card-header {
            padding: 0px;
            margin-bottom: 0;
            background-color: rgba(0, 0, 0, .03);
            border-bottom: 1px solid rgba(0, 0, 0, .125);
        }

        .btn-login {
            background: #d0a772;
            height: 40px;
            padding-top: 6px !important;
        }

        .form-check-input {
            height: 20px;
        }

        .form-check-label {
            font-size: 16px;
            font-weight: 800;
        }

        .productbox {
            background-color: #F5F0F0;
            padding: 10px;
            margin-bottom: 10px;
            -webkit-box-shadow: 0 8px 6px -6px #999;
            -moz-box-shadow: 0 8px 6px -6px #999;
            box-shadow: 0 8px 6px -6px #999;
        }

        .producttitle {
            font-weight: bold;
            padding: 5px 0 5px 0;
        }

        .productprice {
            border-top: 1px solid #dadada;
            padding-top: 5px;
        }

        .pricetext {
            font-weight: bold;
            font-size: 1.4em;
        }

        .tutorial-table {
            border: #D0D0D0 1px solid;
            font-size: 0.8em;
            color: #4e4e4e;
        }

        .tutorial-table th {
            background: #efefef;
            padding: 12px;
            border-bottom: #e0e0e0 1px solid;
            text-align: left;
        }

        .tutorial-table td {
            padding: 12px;
            border-bottom: #D0D0D0 1px solid;
        }
    </style>
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
                    <h1>My Cart</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End header -->


    <!-- body -->

    <div class="container mt-2 mb-2">
        <div class="row">
            <div class="col-md-12 h2design">
                <h2 style="font-weight:600">Checkout</h2>
            </div>

            <div class="col-md-6">
                <div class="card p-4 mb-2">
                    <div class="collection">
                        <span class="fa fa-male" style="font-size: 22px;"></span>
                        <h3>Collection</h3>
                    </div>

                    <div class="collection">
                        <h3>Collection Time:</h3>
                        <h4 style="font-size: 18px;">04:15 PM (Monday)</h4>

                    </div>

                    <div class="form-group">
                        <label for="">Notes</label>
                        <textarea name="" id="instruction" cols="30" class="form-control" rows="3"></textarea>
                    </div>

                </div>

                <div class="card p-4">
                    <div class="ShoppingCart">
                        <span class="fa fa-shopping-bag" style="font-size: 22px;"></span>
                        <h3>Shopping Cart</h3>
                    </div>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody id="cart">

                            </tbody>
                        </table>
                    </div>

                    <div class="col-md-12 mb-2" style="border: 1px solid;"></div>

                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4 labels">
                            <label for="Sub-total">Sub-Total:</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="" id="subTotal" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4 labels">
                            <label for="Sub-total">Collection:</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="" id="collectionPrice" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4 labels">
                            <label for="Sub-total">Service Charge:</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="" id="service" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4 labels">
                            <label for="Sub-total">Total:</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="" id="total" readonly>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-6">
                <div class="card p-4 mb-2">

                    <div class="collection">
                        <span class="fa fa-address-card" style="font-size: 22px;"></span>
                        <h3>Account & Billing Details</h3>
                    </div>
                    <!--  -->
                    <div class="accordion" id="accordionExample">
                        <div class="card" id="one">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button"
                                        data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        <span class="fa fa-file-o" style="font-size: 22px;"></span>

                                        I'm A Guest
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <!-- 
                                        <div class="form-control">
                                            Not Now,I will create an account later <a href="#" class="text-left collapsed"
                                                type="button" data-toggle="collapse" data-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">Create An Account</a>
                                        </div> -->


                                    <div class="m-0 mt-2">
                                        <h2>YOUR PERSONAL DETAILS</h2>
                                        <div class="row mb-1">
                                            <label for="inputEmail3" class="col-md-3 col-form-label">First Name:</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="inputName">
                                            </div>
                                        </div>

                                        <div class="row mb-1 ">
                                            <label for="inputEmail3" class="col-md-3 col-form-label">Last Name:</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="inputLastName">
                                            </div>
                                        </div>

                                        <div class="row mb-1">
                                            <label for="inputEmail3" class="col-md-3 col-form-label">*Email:</label>
                                            <div class="col-md-9">
                                                <input type="email" class="form-control" id="inputEmail">
                                            </div>
                                        </div>

                                        <div class="row mb-1">
                                            <label for="inputEmail3" class="col-md-3 col-form-label">Telephone:</label>
                                            <div class="col-md-9">
                                                <input type="phone" class="form-control" id="inputphone">
                                            </div>
                                        </div>

                                        <div class="row mb-1">
                                            <label for="inputEmail3" class="col-md-3 col-form-label">Post Code:</label>
                                            <div class="col-md-5">
                                                <input type="phone" class="form-control" id="inputpostCode">
                                            </div>
                                        </div>

                                        <div class="row mb-1">
                                            <label for="inputEmail3" class="col-md-3 col-form-label">Street
                                                Name:</label>
                                            <div class="col-md-9">
                                                <input type="phone" class="form-control" id="inputStreet">
                                            </div>
                                        </div>

                                        <div class="row mb-1">
                                            <label for="inputEmail3" class="col-md-3 col-form-label">Address 1:</label>
                                            <div class="col-md-9">
                                                <input type="phone" class="form-control" id="inputAdress1">
                                            </div>
                                        </div>

                                        <div class="row mb-1">
                                            <label for="inputEmail3" class="col-md-3 col-form-label">Address 2:</label>
                                            <div class="col-md-9">
                                                <input type="phone" class="form-control" id="inputAdress2">
                                            </div>
                                        </div>

                                        <div class="row mb-1">
                                            <label for="inputEmail3" class="col-md-3 col-form-label">City:</label>
                                            <div class="col-md-9">
                                                <input type="phone" class="form-control" id="inputCity">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" id="two">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        <span class=" fa fa-sign-in" style="font-size: 22px;"></span>

                                        I'M already A Customer
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 style="text-align: center;font-weight:700">Login</h4>
                                        </div>
                                    </div>

                                    <div class="row mb-1">
                                        <label for="inputEmail3" class="col-md-3 col-form-label">Email:</label>
                                        <div class="col-md-9">
                                            <input type="email" class="form-control" id="inputEmailforlogin">
                                        </div>
                                    </div>

                                    <div class="row mb-1">
                                        <label for="inputEmail3" class="col-md-3 col-form-label">Password:</label>
                                        <div class="col-md-9">
                                            <input type="password" class="form-control" id="inputpswdforlogin">
                                        </div>
                                    </div>

                                    <div class="row mb-1">
                                        <!-- <label for="inputEmail3" class="col-md-3 col-form-label">Password:</label> -->
                                        <div class="col-md-3"></div>
                                        <div class="col-md-9    ">
                                            <!-- <input type="button" class="form-control" id="inputpswdforlogin"> -->
                                            <button class="btn btn-login" onclick="login()">Login</button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>


                        <!-- 3 -->
                        <div class="card" style="display:none" id="third">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        <span class=" fa fa-sign-in" style="font-size: 22px;"></span>

                                        Account Details
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 style="text-align: center;font-weight:700">Your Information</h4>
                                        </div>
                                    </div>

                                    <div class="row mb-1">
                                        <label for="inputEmail3" class="col-md-3 col-form-label">Zip Code:</label>
                                        <div class="col-md-9">
                                            <input type="number" value="1234" readonly class="form-control">
                                        </div>
                                    </div>


                                    <div class="row mb-1">
                                        <label for="inputEmail3" class="col-md-3 col-form-label">Address:</label>
                                        <div class="col-md-9">
                                            <textarea name="" class="form-control" id="" cols="30" rows="5"
                                                readonly></textarea>
                                        </div>
                                    </div>



                                </div>
                            </div>

                        </div>
                        <!-- 3 -->

                    </div>
                    <!--  -->
                </div>

                <div class="card p-4 mb-2">
                    <div class="collection">
                        <span class="fa fa-credit-card" style="font-size: 22px;"></span>
                        <h3>Choose Payment Method</h3>
                    </div>

                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="cash" name="paymentMethod" value="cash">
                            Cash
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" id="card" name="paymentMethod"
                                value="card">Card
                        </label>
                    </div>
                </div>

                <!-- Payment form -->
                <form role="form" action="" method="POST" name="cardpayment" id="payment-form">

                    <div class="card p-4" id="stripe" style="display: none;">
                        <div class="collection">
                            <!-- <i class=""></i> -->
                            <span class="fa fa-cc-stripe" style="font-size: 22px;"></span>
                            <h3>Stripe</h3>
                        </div>


                        <div class="panel-body">

                            <!-- Display errors returned by createToken -->
                            <div class="payment-status" style="color: red;"></div>


                            <input type="hidden" name="productId" value="<?php echo $productId; ?>" />

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="couponCode">CARD HOLDER NAME</label>
                                        <input type="text" class="form-control" name="holdername"
                                            placeholder="Enter Card Holder Name" autofocus required id="name" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="couponCode">EMAIL</label>
                                        <input type="email" class="form-control" name="email" placeholder="Email"
                                            id="email" required />
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="cardNumber">CARD NUMBER</label>
                                        <div class="input-group">

                                            <input type="text" class="form-control" name="card_number"
                                                placeholder="Valid Card Number" autocomplete="cc-number"
                                                id="card_number" maxlength="16" data-stripe="number" required />
                                            <span class="input-group-addon"
                                                style=" position: absolute; right: 15px; top: 5px;">
                                                <i class="fa fa-credit-card"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-xs-4 col-md-4">
                                    <div class="form-group">
                                        <label for="cardExpiry"><span class="visible-xs-inline">MON</span></label>
                                        <select name="card_exp_month" id="card_exp_month" class="form-control"
                                            data-stripe="exp_month" required>
                                            <option>MON</option>
                                            <option value="01">01 ( JAN )</option>
                                            <option value="02">02 ( FEB )</option>
                                            <option value="03">03 ( MAR )</option>
                                            <option value="04">04 ( APR )</option>
                                            <option value="05">05 ( MAY )</option>
                                            <option value="06">06 ( JUN )</option>
                                            <option value="07">07 ( JUL )</option>
                                            <option value="08">08 ( AUG )</option>
                                            <option value="09">09 ( SEP )</option>
                                            <option value="10">10 ( OCT )</option>
                                            <option value="11">11 ( NOV )</option>
                                            <option value="12">12 ( DEC )</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xs-4 col-md-4">
                                    <div class="form-group">
                                        <label for="cardExpiry"><span class="visible-xs-inline">YEAR</span></label>
                                        <select name="card_exp_year" id="card_exp_year" class="form-control"
                                            data-stripe="exp_year">
                                            <option>Year</option>
                                            <option value="20">2020</option>
                                            <option value="21">2021</option>
                                            <option value="22">2022</option>
                                            <option value="23">2023</option>
                                            <option value="24">2024</option>
                                            <option value="25">2025</option>
                                            <option value="26">2026</option>
                                            <option value="27">2027</option>
                                            <option value="28">2028</option>
                                            <option value="29">2029</option>
                                            <option value="30">2030</option>
                                            <option value="31">2031</option>
                                            <option value="32">2032</option>
                                            <option value="33">2033</option>
                                            <option value="34">2034</option>
                                            <option value="35">2035</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-md-4 pull-right">
                                    <div class="form-group">
                                        <label for="cardCVC">CV CODE</label>
                                        <input type="password" class="form-control" name="card_cvc" placeholder="CVC"
                                            autocomplete="cc-csc" id="card_cvc" required />
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>


                    <div class="row mt-3" id="cashbtn">
                        <div class="col-md-12">
                            <button class="btn form-control" onclick="saveData()"
                                style="background:#d0a772;">Pay</button>
                        </div>
                    </div>

                    <div class="row mt-3" id="paymentButton" style="display: none;">
                        <div class="col-md-12">
                            <button class="subscribe btn btn-lg btn-block submit" style="background-color: #d0a772;"
                                type="submit" id="payBtn">PAY NOW ( $
                                <?php echo 10; ?> )
                            </button>
                        </div>
                    </div>

                </form>





            </div>
        </div>
    </div>


    <!-- end Body -->

    <!-- Start Footer -->
    <?php
    require "footer.php";

    ?>
    <!-- End Footer -->


    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="https://js.stripe.com/v2/"></script>

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
    <script src="js/url.js"></script>

</body>

</html>
<script>
    var localurl = local;
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

    var userId = sessionStorage.getItem("userId");
    if (userId) {
        $("#one").css("display", "none");
        $("#two").css("display", "none");
        $("#third").css("display", "block");
        $("#collapseThree").addClass("show");
    }

</script>

<script>
    function login(){
      var email= $("#inputEmailforlogin").val();
      var pswd= $("#inputpswdforlogin").val();
      if(email == ""){
        alert("please Fill the email");
      }
      if(pswd == ""){
        alert("please fill the password");
      }
      if(email != "" && pswd != ""){
        var postdata={
        email:$("#inputEmailforlogin").val(),
        password:$("#inputpswdforlogin").val(),
      }
        $.ajax({
        url: `${localurl}users/login.php`,
        type: "POST",
        data:JSON.stringify(postdata),
        contentType: "application/json",
        success: function (response, status) {
            var user=response.user;
            // console.log(user)
            var userid=user[0].id;
            var useremail=user[0].email;
            var username=user[0].firstName;
            sessionStorage.setItem("userInformation",JSON.stringify(user[0]));
            sessionStorage.setItem("userId",userid);
            sessionStorage.setItem("userEmail",useremail);
            sessionStorage.setItem("userName",username);
            var loader=document.getElementById("loader");
            loader.style.display="block";
            setTimeout(() => {
                window.location.reload();
            }, 2000);
            // window.location.href="index.php";
        },
        error: function (error) {
            console.log(error);
        }
    });
      }
    }


    var shoppingCartSession = JSON.parse(sessionStorage.getItem('shoppingCart'));
    if (!shoppingCartSession) {
        window.location.href = "menu.php";
    }
    var instrucion = JSON.parse(sessionStorage.getItem("Instruction"));
    Cart();
    function Cart() {
        var tabledata = "";
        // var shoppingCartSession = JSON.parse(sessionStorage.getItem('shoppingCart'));
        // var instrucion = JSON.parse(sessionStorage.getItem("Instruction"));
        // // console.log(instrucion);
        $("#instruction").val(instrucion.specialInstruction);
        $("#subTotal").val(instrucion.Subtotal);
        $("#collectionPrice").val(instrucion.collectionPrice);
        $("#service").val(instrucion.serviceCharges);
        $("#total").val(instrucion.total);
        $("#payBtn").html(`PAY NOW ${instrucion.total}`)

        shoppingCartSession.forEach(item => {
            tabledata += `
        <tr>
        <td>${item.productname}</td>
        <td>${item.quantity}</td>
        <td>${item.itemprice}</td>
        <td>${item.price}</td>
        </tr>
        `;
        });
        $("#cart").html(tabledata);
    }




    document.querySelector('.btn').addEventListener('click', function () {
        const icon = this.querySelector('span.fa');

        if (this.getAttribute('aria-expanded') === 'true') {
            // If expanded, change to down arrow
            icon.classList.remove('fa-chevron-up');
            icon.classList.add('fa-chevron-down');
        } else {
            // If collapsed, change to up arrow
            icon.classList.remove('fa-chevron-down');
            icon.classList.add('fa-chevron-up');
        }
    });

    document.addEventListener('DOMContentLoaded', function () {

    });


    var cash = $("#cash").prop("checked");
    var card = $("#card").prop("checked");
    var paymentMethod = "";
    $("#cash").on("click", function () {
        paymentMethod = $("#cash").val();
        $("#cashbtn").css("display", "block");
        $("#stripe").css("display", "none");
        $("#paymentButton").css("display", "none");
    });
    $("#card").on("click", function () {
        paymentMethod = $("#card").val();
        $("#cashbtn").css("display", "none");
        $("#stripe").css("display", "block");
        $("#paymentButton").css("display", "block");


    });

    function saveData() {
        var postdata;
        var collapseId;
        var collapses = document.querySelectorAll('.collapse');
        collapses.forEach(function (collapse) {
            if (collapse.classList.contains('show')) {
                collapseId = collapse.id;
            }
        });
        if (collapseId == "collapseOne") {
            postdata = {
                items: shoppingCartSession,
                instrucion: instrucion,
                userInfo: {
                    fname: $("#inputName").val(),
                    lname: $("#inputLastName").val(),
                    email: $("#inputEmail").val(),
                    telephone: $("#inputphone").val(),
                    postCode: $("#inputpostCode").val(),
                    streetName: $("#inputStreet").val(),
                    address1: $("#inputAdress1").val(),
                    address2: $("#inputAdress2").val(),
                    city: $("#inputCity").val()
                },
                paymentMethod: paymentMethod,
                userType: "Guest",
            };
            console.log(postdata);
        }
        else {
            postdata = {
                items: shoppingCartSession,
                instrucion: instrucion,
                paymentMethod: paymentMethod,
                userType: "User",
                userId: userId,
            };
            console.log(postdata);
        }

        $.ajax({
            url: `${localurl}websiteOrder/create.php`,
            type: "POST",
            data: JSON.stringify(postdata),
            contentType: "application/json",
            success: function (response, status) {
                console.log(response);
                sessionStorage.removeItem('shoppingCart');
                sessionStorage.removeItem('Instruction');
                window.location.href = "menu.php";
            },
            error: function (error) {
                console.log(error);
            }
        })





    }

    // stripe 

    Stripe.setPublishableKey('pk_test_51NuUFzDgVxQRS4HbcB17j2prKLxa1wzaKevVlyknHR9D1V0RfQf1EtStSSLgYQ0KHeNfDnmahBG411DU1UmgkX3z00IEnzjizz');

    function stripeResponseHandler(status, response) {
        if (response.error) {
            // Enable the submit button
            $('#payBtn').removeAttr("disabled");
            // Display the errors on the form
            $(".payment-status").html('<p>' + response.error.message + '</p>');
        } else {
            var form$ = $("#payment-form");
            // Get token id
            var token = response.id;
            alert(token);
            // Insert the token into the form
            form$.append("<input type='hidden' name='stripeToken' value='" + token + "' />");
            // Submit form to the server
            // form$.get(0).submit();
            var formData = new FormData(form$[0]);
            formData.append('stripeToken', token);

            // Send the form data to the server using AJAX
            sendDataFromStripe(token);
        }
    }

    $(document).ready(function () {
        // On form submit
        $("#payment-form").submit(function () {
            // Disable the submit button to prevent repeated clicks
            $('#payBtn').attr("disabled", "disabled");

            // Create single-use token to charge the user
            Stripe.createToken({
                number: $('#card_number').val(),
                exp_month: $('#card_exp_month').val(),
                exp_year: $('#card_exp_year').val(),
                cvc: $('#card_cvc').val()
            }, stripeResponseHandler);

            // Submit from callback
            return false;
        });
    });


    function sendDataFromStripe(token) {
        var postdata;
        var collapseId;
        var collapses = document.querySelectorAll('.collapse');
        collapses.forEach(function (collapse) {
            if (collapse.classList.contains('show')) {
                collapseId = collapse.id;
            }
        });
        if (collapseId == "collapseOne") {
            postdata = {
                items: shoppingCartSession,
                instrucion: instrucion,
                userInfo: {
                    fname: $("#inputName").val(),
                    lname: $("#inputLastName").val(),
                    email: $("#inputEmail").val(),
                    telephone: $("#inputphone").val(),
                    postCode: $("#inputpostCode").val(),
                    streetName: $("#inputStreet").val(),
                    address1: $("#inputAdress1").val(),
                    address2: $("#inputAdress2").val(),
                    city: $("#inputCity").val(),
                },
                paymentMethod: paymentMethod,
                userType: "Guest",
                stripeToken: token,
            };
            console.log(postdata);
        }
        else {
            postdata = {
                items: shoppingCartSession,
                instrucion: instrucion,
                paymentMethod: paymentMethod,
                userType: "User",
                userId: userId,
                stripeToken: token,
            };
            console.log(postdata);
        }
        $.ajax({
            url: `${localurl}websiteOrder/create.php`,
            type: "POST",
            data: JSON.stringify(postdata),
            contentType: "application/json",
            success: function (response, status) {
                console.log(response);
                sessionStorage.removeItem('shoppingCart');
                sessionStorage.removeItem('Instruction');
                window.location.href = "index.php";
            },
            error: function (error) {
                console.log(error);
            }
        })
    }
</script>