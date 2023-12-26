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
        .form-control {
            min-height: 0px;
        }

        .btn-login {
            background: #d0a772;
            height: 40px;
            padding-top: 6px !important;
        }

        .accountDiv {
            display: flex;
            justify-content: center;
            background: black;
            color: white;
            font-size: 20px;
        }
  
        .ulset{
            padding-left: 20px;
            list-style: disc !important;
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
                    <h1>REGISTERATION</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End header -->

    <!-- Start About -->
    <div class="about-section-box">
        <div class="container">
            <div class="row">

                <div class="col-md-8">
                    <div class="card p-4">
                        <div>
                            <h1>Register Account</h1>
                            <p>If you already have an account with us, please login at the <a class=""
                                    href="login.php">Login Page</a></p>
                        </div>
                        <h3>Your Personal Details</h3>
                        <div class="row">

                            <div class="col-md-3 mb-1">
                                <label for=""><span>*</span>First Name</label>
                            </div>
                            <div class="col-md-8 mb-1">
                                <input type="text" id="fname" class="form-control">
                            </div>
                            <div class="col-md-1 mb-1"></div>

                            <div class="col-md-3 mb-1">
                                <label for=""><span>*</span>Last Name</label>
                            </div>
                            <div class="col-md-8 mb-1">
                                <input type="text" id="lname" class="form-control">
                            </div>
                            <div class="col-md-1 mb-1"></div>

                            <div class="col-md-3 mb-1">
                                <label for=""><span>*</span>Email</label>
                            </div>
                            <div class="col-md-8 mb-1">
                                <input type="text" id="email" class="form-control">
                            </div>
                            <div class="col-md-1 mb-1"></div>

                            <div class="col-md-3 mb-1">
                                <label for=""><span>*</span>Telephone</label>
                            </div>
                            <div class="col-md-8 mb-1">
                                <input type="text" id="phone" class="form-control">
                            </div>
                            <div class="col-md-1 mb-1"></div>

                            <div class="col-md-3 mb-1">
                                <label for=""><span>*</span>Fax</label>
                            </div>
                            <div class="col-md-8 mb-1">
                                <input type="text" id="fax" class="form-control">
                            </div>
                            <div class="col-md-1 mb-1"></div>
                        </div>



                        <h3>Your Address</h3>
                        <div class="row">

                            <div class="col-md-3 mb-1">
                                <label for=""><span>*</span>Post Code</label>
                            </div>
                            <div class="col-md-8 mb-1">
                                <input type="text" id="pcode" class="form-control">
                            </div>
                            <div class="col-md-1 mb-1"></div>

                            <div class="col-md-3 mb-1">
                                <label for=""><span>*</span>Address 1</label>
                            </div>
                            <div class="col-md-8 mb-1">
                                <input type="text" id="address1" class="form-control">
                            </div>
                            <div class="col-md-1 mb-1"></div>

                            <!-- <div class="col-md-3 mb-1">
                                <label for=""><span>*</span>Address 2</label>
                            </div>
                            <div class="col-md-8 mb-1">
                                <input type="text" id="address2" class="form-control">
                            </div> -->
                            <!-- <div class="col-md-1 mb-1"></div> -->

                            <div class="col-md-3 mb-1">
                                <label for=""><span>*</span>City</label>
                            </div>
                            <div class="col-md-8 mb-1">
                                <input type="text" id="city" class="form-control">
                            </div>
                            <div class="col-md-1 mb-1"></div>

                        </div>


                        <h3>Your Password</h3>
                        <div class="row">

                            <div class="col-md-3 mb-1">
                                <label for=""><span>*</span>Password</label>
                            </div>
                            <div class="col-md-8 mb-1">
                                <input type="password" id="pswd" class="form-control">
                                <label for="repassword" id="password_message" style=""></label>

                            </div>
                            <div class="col-md-1 mb-1"></div>

                            <div class="col-md-3 mb-1">
                                <label for=""><span>*</span>Password Confirm</label>
                            </div>
                            <div class="col-md-8 mb-1">
                                <input type="password" id="confirm_pswd" class="form-control">
                                <label for="repassword" id="statusOfPassword" style=""></label>
                            </div>
                            <div class="col-md-1 mb-1"></div>

                            <!-- <div class="col-md-3 mb-1">
                            </div>
                            <div class="col-md-8 mb-1">
                                <input type="checkbox" id="agree" class="">
                                <label for="">I have read and agree to the Privacy Policy</label>
                            </div>
                            <div class="col-md-1 mb-1"></div> -->

                            <div class="col-md-3 mb-1">
                                <!-- <label for=""><span>*</span>Password Confirm</label> -->
                            </div>
                            <div class="col-md-8 mb-1">
                                <button class="btn btn-login" id="registerbtn"  onclick="Register()">Continue</button>
                            </div>
                            <div class="col-md-1 mb-1"></div>
                        </div>

                    </div>
                </div>

                <div class="col-md-4">
            <?php
            require "accountSection.php";
            ?>

                </div>

            </div>
        </div>
    </div>
    <!-- End About -->


    <!-- Start Footer -->
    <?php
    require "footer.php";

    ?>
    <!-- End Fo1oter -->


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
    <script src="js/registerValidation.js"></script>
    <!-- <script src="js/getItem.js"></script> -->
    <script src="js/url.js"></script>
</body>

</html>
<script>
    var liveUrl=local;
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


    $("#confirm_pswd").on("keyup",function(){
        var password=$("#pswd").val();
    var confirm_pswd=$("#confirm_pswd").val();
       if(confirm_pswd == password){
        $("#statusOfPassword").html("");
       console.log(password);
       console.log(confirm_pswd);
       $("#registerbtn").prop("disabled", false);

    }
    else{   
        $("#statusOfPassword").html("Password Not Match");
        $("#statusOfPassword").css("color","red");
        $("#registerbtn").prop("disabled", true);
    }
    
    })

    function Register(){
        
        var postdata={
            fname:$("#fname").val(),
            lname:$("#lname").val(),
            email:$("#email").val(),
            telephone:$("#phone").val(),
            fax:$("#fax").val(),
            password:$("#pswd").val(),
            postCode:$("#pcode").val(),
            address1:$("#address1").val(),
            // address2:$("#address2").val(),
            city:$("#city").val(),
        }

        $.ajax({
        url: `${liveUrl}users/register.php`,
        type: "POST",
        data:JSON.stringify(postdata),
        contentType: "application/json",
        success: function (response, status) {
            alert("User Inserted");
            window.location.reload();
        },
        error: function (error) {
            console.log(error);
        }
    });



    }


</script>