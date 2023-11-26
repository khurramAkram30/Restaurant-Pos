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
                    <h1>Order History</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End header -->

    <div class="container">
        <div class="row">
            <!-- <h3>Order History</h3> -->
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>OrderID</th>
                            <th>Date</th>
                            <th>Total</th>
                            <th>Notes</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody id="bodycat">
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>


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
        $('nav div div ul li').removeClass('active');
        if (currentLocation === "/restaurant/brownmunde/" + linkHref) {
            $('nav div div ul li').removeClass('active');
            // alert(linkHref);
            $(this).parent('li').addClass('nav-item active'); // Add class to the parent li
        }
    });

    var id=sessionStorage.getItem("userId");
    if(!id){
        window.location.href="login.php";
    }
    // console.log(id);
    $.ajax({
        url:`${localurl}users/userHistory.php?id=${id}`,
        type:"GET",
        contentType:"application/json",
        success:function(response){
            // console.log(response);
            displayTable(response.result);
        },
        error:function(error){
            console.log(error);
        }
    })

    function displayTable(data){
        var i=1,tabledata="";
        data.forEach(element => {
                tabledata += `
    <tr>
    <td>${i}</td>
    <td>Order${element.CustomOrderId}</td>
    <td>${element.date}</td>
    <td>${element.total}</td>
    <td>${element.notes}</td>
    <td>${element.status}</td>
    </tr>
    `;
                i++;
            });
            $("#bodycat").html(tabledata);

    }
</script>