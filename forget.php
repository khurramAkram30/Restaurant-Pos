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

    <style>
        form {
            display: flex;
            justify-content: center;
        }

        input {
            margin: 0 0.5rem;
            padding: 0.5rem;
            border: 1px solid #333;
            width: 50px;
            height: 50px;
            text-align: center;
            font-size: 3rem;
        }

        .special {
            margin-top: 2rem;
            font-size: 2rem;
            opacity: 1;
            visibility: visible;
            transition: all 0.3s ease;
        }

        .special i {
            font-size: 1rem;
            cursor: pointer;
        }

        .special.hidden {
            opacity: 0;
            visibility: hidden;
        }
        /*  */
        
        /*  */
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
                    <h1>Forget Password</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End header -->

    <!-- Start About -->
    <div class="about-section-box">
        <div class="container">
            <div class="row" id="row1" style="display:">
                <div class="col-lg-2 col-md-2 text-center">
                </div>
                <div class="col-lg-2 col-md-2 text-center">
                    <label for="">Enter Your Email</label>
                </div>
                <div class="col-lg-4 col-md-6 text-center">

                    <input type="email" class="form-control" id="email">

                </div>
                <div class="col-lg-2 col-md-4 text-center">

                    <button class="btn btn-success" id="sendMail">Send Mail</button>

                </div>
            </div>
            <div class="row" id="row2" style="display:none;">
                <div class="col-md-12">
                    <form>
                        <input type="text" class="code" maxlength=1 />
                        <input type="text" class="code" maxlength=1 />
                        <input type="text" maxlength=1 class="code" />
                        <input type="text" maxlength=1 class="code" />
                    </form>
                    <div class="col-md-12 text-center mt-2">
                        <button class="btn btn-success" id="verify">Verify</button>

                    </div>


                </div>
            </div>

            <div class="row" id="row3" style="display: none;">
                <div class="col-lg-2 col-md-2 text-center">
                </div>
                <div class="col-lg-2 col-md-2 text-center">
                    <label for="">Email*</label>
                </div>
                <div class="col-lg-4 col-md-6 text-center">

                    <input type="text" class="form-control" readonly id="emailread">

                </div>
                <div class="col-lg-4 col-md-6 text-center">
                </div>



                <div class="col-lg-2 col-md-2 text-center">
                </div>
                <div class="col-lg-2 col-md-2 text-center">
                    <label for="">New Password*</label>
                </div>
                <div class="col-lg-4 col-md-6 mt-2 text-center">

                    <input type="password" class="form-control" id="pswd">

                </div>
                <div class="col-lg-4 col-md-6 text-center">

                </div>
            
                <div class="col-lg-4 col-md-6 text-center">
                </div>
                
                <div class="col-lg-4 col-md-6 text-center mt-2">
                <button class="btn btn-success" id="changePassword">Verify</button>

            </div>

                <div class="col-lg-4 col-md-6 text-center">
                </div>

                
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


    <!-- success modal -->
    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <div class="card">
            <div class="card-img"> <img class="img-fluid" src="https://i.imgur.com/d0Jfn62.png"> </div>
            <div class="card-title">
                <p>Success!</p>
            </div>
            <div class="card-text">
                <p>Check your email. We have sent you a code for the next process.</p>
            </div>
             <!-- <button class="btn">Track delivery</button> -->
        </div>
    </div>
</div>
    <!-- end success modal -->


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
    <script src="js/url.js"></script>

</body>

</html>
<script>
    var localurl=local;
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


    const inputs = document.querySelectorAll(".code");
    const codeBlock = document.getElementById("code-block");
    const code = document.getElementById("code");
    const form = document.querySelector("form");
    let userCode;
    inputs.forEach((input, key) => {
        if (key !== 0) {
            input.addEventListener("click", function () {
                inputs[0].focus();
            });
        }
        input.addEventListener("keyup", function () {
            if (input.value) {
                if (key === 3) {
                    // Last one tadaa
                    userCode = [...inputs].map((input) => input.value).join("");
                    // codeBlock.classList.remove("hidden");
                    // code.innerText = userCode;
                    console.log(userCode);
                } else {
                    inputs[key + 1].focus();
                }
            }
        });
    });

    const reset = () => {
        form.reset();
        codeBlock.classList.add("hidden");
        code.innerText = "";
    };

    let userEmail="";
    var loader=document.getElementById("loader");

    $("#sendMail").on("click",function(){
        let email=$("#email").val();
        userEmail=email;
        var posdata={
            email:email,
        };
         loader.style.display="block";
        $.ajax({
        url:`${localurl}forget/create.php`,
        type:"POST",
        data:JSON.stringify(posdata),
        contentType:"application/json",
        success:function(response){
            // console.log(response);
            loader.style.display="none";
           
            $("#row1").css("display","none");
            $("#row2").css("display","block");
         
        },
        error:function(error){
          alert("Please Enter Your Correct Email");
        } 
        })
    })

    $("#verify").on("click",function(){
        var posdata={
            email:userEmail,
            code:userCode,
        }
        loader.style.display="block";
        $.ajax({
        url:`${localurl}forget/verify.php`,
        type:"POST",
        data:JSON.stringify(posdata),
        contentType:"application/json",
        success:function(response){
            console.log(response);
            if(response.message == "No Data Fetched"){
                loader.style.display="none";
                alert("Wrong Code");
            }
            else{

            
            setTimeout(() => {
                loader.style.display="none";
                
            $("#row2").css("display","none");
            $("#row3").css("display","block");
            $("#emailread").val(response.email);
            }, 2000);
        }
            // console.log(response);
        },
        error:function(error){
            console.log(error);
          alert("Please Enter Your Correct Email");
        } 
        })
    });

    $("#changePassword").on("click",function(){
        let emailuser= $("#emailread").val();
        let pswd= $("#pswd").val();
        var postdata={
            email:emailuser,
            pswd:pswd,
        };
        $.ajax({
            url:`${localurl}forget/changePassword.php`,
            type:"POST",
            data:JSON.stringify(postdata),
            contentType:"application/json",
            success:function(response){
                alert("Password Updated");
                window.location.href="login.php";
            },
            error:function(error){

                console.log(error);
            }
        })
    })
</script>