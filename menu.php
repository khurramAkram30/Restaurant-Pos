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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

        .collectionTime {
            font-size: 18px;
            font-weight: 800;
        }

        td,
        th {
            text-align: center;
        }

        .labels {
            display: flex;
            align-items: center;
            justify-content: end;
            font-size: 17px;
            font-weight: 600;
        }

        .form-control {
            border-radius: 0px;
            min-height: 0px;
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
                    <div class="button-group filter-button-group" id="categories">
                        <!-- <button class="active" data-filter=".drinks">Drinks</button>
                        <button data-filter=".lunch">Food</button>
                        <button data-filter=".dinner">Sweets</button> -->
                    </div>
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group" id="subCategories">




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
                    <div class="row" id="products">
                        <!-- <div class="col-lg-4 col-md-6 special-grid Drinks ">
                            <div class="gallery-single fix">
                                <img src="images/img-01.jpg" class="img-fluid" alt="Image">
                                <div class="cartItem">
                                    <h4><b>Baby Aubergine & Potato</b></h4>
                                    <label class="labelSet" for="">$45</label>
                                    <button class="btn mb-1 btnset" onclick="cart(1,'Baby Aubergine & Potato',45,2)">Add
                                        To Cart</button>
                                </div>

                            </div>
                        </div>

                      

                        <div class="col-lg-4 col-md-6 special-grid Sweet">
                            <div class="gallery-single fix">
                                <img src="images/img-03.jpg" class="img-fluid" alt="Image">
                                <div class="cartItem">
                                    <h4><b>Baby Aubergine & Potato</b></h4>
                                    <label class="labelSet" for="">$45</label>
                                    <button class="btn mb-1 btnset"
                                        onclick="cart(3,'Baby Aubergine & Potato3',47,5)">Add To Cart</button>
                                </div>
                            </div>
                        </div> -->

                    </div>
                </div>


                <div class="col-lg-4 col-md-12 " style="padding-top: 30px;">
                    <div class=" cutomize ">
                        <label for="">Your Order</label>
                    </div>
                    <div class="row" id="yourOrder" style="padding-left:15px;padding-right:15px;">

                        <div class="col-md-6 d-flex p-4"
                            style="background-color: black; gap: 10px;border-right: 1px solid white;">
                            <input type="radio" value="Home Delivery" name="deliveryType" id="home" class="radiobtn">
                            <label for="" style="color: #ffffff;">Home Delivery</label>
                        </div>

                        <div class="col-md-6 d-flex p-4" style="background-color: black; gap: 10px">
                            <input type="radio" value="collection" name="deliveryType" id="collect" class="radiobtn">
                            <label for="" style="color: #ffffff;">Collection</label>
                        </div>

                        <div class="form-group w-100 text-center collectionTime" id="collectionselect">
                            <label for="sel1" class="form-label">Collection Time</label>
                            <h3>Collect Your order after</h3>
                            <label for="" id="collecttimefromdatabase"></label>
                        </div>

                        <div class="form-group w-100 text-center collectionTime" id="homeDeliveryselect"
                            style="display: none;">
                            <h3>We are deliver your Order after </h3>
                            <label for="" id="deliverytimefromdatabase"></label>
                            <br>
                            <label for="sel1" class="form-label">Enter Post Code</label>
                            <input type="text" class="form-control" id="deliveryZipCode" name="sellist1">
                            <label for="" id="deliveryZipCodeStatus"></label>
                            <!-- <select class="form-control "  name="sellist1">

                                <option value="KA1">KA1 - 5 Pounds</option>
                                <option value="KA2">KA2 - 5 Pounds</option>
                                <option value="KA3">KA3 - 5 Pounds</option>
                                <option value="KA4">KA4 - 5 Pounds</option>
                                <option value="KA5">KA5 - 5 Pounds</option>
                                <option value="KA16">KA16 - 6 Pounds</option>
                                <option value="KA169">KA169 - 6 Pounds</option>
                                <option value="KA17">KA17 - 6 Pounds</option>
                                <option value="KA170">KA170 - 6 Pounds</option>
                                <option value="KA33">KA33 - 6 Pounds</option>
                                <option value="KA36">KA36 - 6 Pounds</option>
                            </select> -->
                        </div>


                        <div class="table-responsive" id="table" style="display: none;">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th>Qty</th>
                                        <th>Price</th>
                                        <th>Remove</th>
                                    </tr>
                                </thead>

                                <tbody id="cart">

                                </tbody>
                            </table>

                        </div>

                        <div class="col-md-12 mb-2" style="border: 1px solid;"></div>

                        <!-- sub total -->
                        <div class="row" id="info" style="display: none;">

                            <div class="col-md-3"></div>
                            <div class="col-md-4 labels">
                                <label for="">Sub-Total</label>
                            </div>
                            <div class="col-md-5 mb-1">
                                <div class="input-group">
                                    <span class="input-group-text">£</span>
                                    <input type="text" id="subtotal" readonly class="form-control">
                                </div>
                            </div>

                            <!-- sub total -->


                            <!-- collection -->
                            <div class="col-md-3"></div>
                            <div class="col-md-4 labels">
                                <label for="" id="type">Collection</label>
                            </div>
                            <div class="col-md-5 mb-1">
                                <div class="input-group">
                                    <span class="input-group-text">£</span>
                                <input type="text" id="collectPrice" value="0" readonly class="form-control">
                            </div>
                            </div>  
                            <!-- Collection -->

                            <!-- Service  -->
                            <div class="col-md-2"></div>
                            <div class="col-md-5 labels">
                                <label for="">Service Charge</label>
                            </div>
                            <div class="col-md-5 mb-1">
                                <div class="input-group">
                                    <span class="input-group-text">£</span>
                              <input type="text" id="service" value=".5" readonly class="form-control">
                            </div>
                            </div>

                            <!-- Service -->

                            <!-- Total  -->
                            <div class="col-md-2"></div>
                            <div class="col-md-5 labels">
                                <label for="">Total</label>
                            </div>
                            <div class="col-md-5 mb-1">
                                <div class="input-group">
                                    <span class="input-group-text">£</span>
                                <input type="text" id="total" readonly class="form-control">
                            </div>
                            </div>
                            <!-- Total -->

                            <!-- special -->
                            <div class="col-md-12 mb-1">
                                <textarea name="" class="form-control" id="instruction" cols="30" rows="4"
                                    placeholder="Special instrucion if you have any.."></textarea>
                            </div>
                            <!-- special -->

                            <div class="col-md-12 mb-1">
                                <button class="btn btn-primary form-control" id="checks" onclick="SaveData()"
                                    style="background:#d0a772;"> Checkout
                                </button>
                            </div>
                            <!-- special -->

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
    <!-- <script src="../assets/js/url.js"></script> -->
    <script src="js/getItems.js"></script>
</body>

</html>
<script>
    // const baseurl = url;
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
        getCategories();
        item();
        var defaultFilter = '.drinks';
        var $grids = $('#items-list').isotope({
            itemSelector: '.special-grid'
        });
        // Set the default filter value to 'drinks'
        // Filter the items on page load
        $grids.isotope({
            filter: defaultFilter
        });

        $(".special-grid ").css("position", "unset");

        $(".special-list").css("height", "auto");



    });

    $("input[name='deliveryType']").change(function () {
        var home = $("#home").prop("checked");
        if (home) {
            // alert("Home Delivery selected");
            $('#collectionselect').css("display", "none");

            $('#homeDeliveryselect').css("display", "block");

            timearr.forEach(item => {
                if (item.name == "Home Delivery") {
                    // console.log(item.name);
                    $("#deliverytimefromdatabase").html(item.time);
                }
            })

        }
        else {
            $('#homeDeliveryselect').css("display", "none");
            $('#collectionselect').css("display", "block");
            $("#type").html("Collection");
            $("#collectPrice").val(0);

        }
    });

</script>

<script>
    var arr = [];

    function cart(id, name, price, qty) {
        $(".special-list").css("height", "auto");
        $("#info").css("display", "contents");
        $("#table").css("display", "block");
        var SubTotal = parseFloat(qty * price);
        var pushdata = {
            productid: id,
            quantity: qty,
            productname: name,
            itemprice: price,
            price: SubTotal,
        }
        var existingItem = arr.find(item => item.productid === id);

        if (existingItem) {
            var quant = existingItem.quantity++;
            var stotal = parseInt((quant + 1) * price);
            existingItem.price = stotal;
        } else {
            // If it doesn't exist, add a new item
            arr.push(pushdata);
        }
        alert("item added to cart");
        showdata(arr);
    }

    function showdata(data) {
        
        var collectionPrice = $("#collectPrice").val();
        var servicePrice = $("#service").val();

        sessionStorage.setItem('shoppingCart', JSON.stringify(data));


        var tabledata = "", i = 0, subtotal = 0, total = 0;
        data.forEach(item => {
            subtotal += item.price;
            tabledata += `
    <tr>
    <td>${item.productname}</td>
    <td><input type="text" class="form-control quantity${i}" value="${item.quantity > 0 ? item.quantity : ""}" onkeyup="quantitychange('${i}')"></td>
    <td>${item.price > 0 ? item.price : ""}</td>
    <td><a class="btn text-danger btn-sm" onclick="removeObj('${i}')" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fa fa-trash-o fs-14"></span></a>
    </td>
  
    </tr>
    
    `;
            i++;
        })
        // 
        // total = parseInt(collectionPrice + servicePrice) + subtotal;
        $("#subtotal").val(subtotal);
        var collectionPrice = parseFloat($("#collectPrice").val());
        var servicePrice = parseFloat($("#service").val()); // Assuming #service contains a numeric value, if not, adjust accordingly
        var subtotal = parseFloat($("#subtotal").val());

        var total = collectionPrice + servicePrice + subtotal;
        $("#total").val(total);


        $("#cart").html(tabledata);
    }

    function quantitychange(index) {
        var quantityextra = parseInt(document.querySelector(`.quantity${index}`).value);
        arr[index].quantity = quantityextra;
        var itemsprice = arr[index].itemprice;
        // console.log(itemsprice);
        var subtotals = parseFloat(quantityextra * itemsprice);
        arr[index].price = subtotals;

        // console.log("updated",arr);

        showdata(arr);

    }

    function removeObj(index) {
        arr.splice(index, 1);
        console.log(arr);
        showdata(arr);
    }

    // testing

    // testing


    function SaveData() {
        var home = $("#home").prop("checked");
        var collect = $("#collect").prop("checked");
        var zipcode = $("#deliveryZipCode").val();
        var collectTime = $("#collecttimefromdatabase").text();
        var collectionPrice = $("#collectPrice").val();
        var servicePrice = $("#service").val();
        var total = $("#total").val();
        var instrucion = $("#instruction").val();
        var subs = $("#subtotal").val();
        var zipcode = $("#deliveryZipCode").val();

        if (arr.length > 0) {
            if(subs > 10){
            if (!home && !collect) {
                alert("Please Select the Delivery type ");
            }
            if (home) {
                if (zipcode == "") {
                    alert("Please enter post code");
                }
                else {
                    var postdata = {
                        zipcode: zipcode,
                        collectionPrice: collectionPrice,
                        serviceCharges: servicePrice,
                        total: total,
                        specialInstruction: instrucion,
                        Subtotal: subs,
                        deliveryType: $("#home").val(),
                    };
                    console.log(postdata);
                    sessionStorage.setItem('Instruction', JSON.stringify(postdata));
                    sessionStorage.setItem('shoppingCart', JSON.stringify(arr));
                    window.location.href = "ShoppingCart.php";
                    // window.location.href="ShoppingCart.php"
                }
            }
            if (collect) {
                var postdata = {
                    CollectionTime: collectTime,
                    collectionPrice: collectionPrice,
                    serviceCharges: servicePrice,
                    total: total,
                    specialInstruction: instrucion,
                    Subtotal: subs,
                    deliveryType: $("#collect").val(),
                };

                sessionStorage.setItem('Instruction', JSON.stringify(postdata));
                sessionStorage.setItem('shoppingCart', JSON.stringify(arr));
                window.location.href = "ShoppingCart.php";
            }
        }
        else{
            alert("Minimum Order £10");
        }
        }
        else {
            alert("Select atleast One Product");
        }

    }





    // Set the height to "auto" on window resize
    $(window).resize(function () {
        // Use setTimeout to delay execution after 2 seconds'
        setTimeout(function () {
            $("#items-list").css({
                "height": "auto",
                "min-height": "initial",  // Reset min-height if necessary
            });

        }, 0); // 2000 milliseconds (2 seconds)
    });
    loadItem();

    function loadItem() {
        $(".special-list").css("height", "auto");
        $("#info").css("display", "contents");
        $("#table").css("display", "block");
        var collectionPrice = $("#collectPrice").val();
        var servicePrice = $("#service").val();
        var getItem = JSON.parse(sessionStorage.getItem('shoppingCart'));
        // console.log(getItem);
        var tabledata = "", i = 0, subtotal = 0, total = 0;
        // arr.push(getItem);
        if (getItem) {
            for (var j = 0; j < getItem.length; j++) {
                arr.push(getItem[j]);
            }
            // console.log(arr);
            showdata(arr);
        }

    }
    $("#deliveryZipCode").on("keyup", function () {
        var zipcode = $("#deliveryZipCode").val();
        // var zipcode = $("#deliveryZipCode").val();
        var pattern = /^(KA1|KA2|KA3|KA4|KA5|ka1|ka2|ka3|ka4|ka5|Ka1|Ka2|Ka3|Ka4|Ka5)/;

        if (pattern.test(zipcode)) {
            // Valid input, it starts with "KA1", "KA2", "KA3", "KA4", or "KA5"
            // console.log("Valid Zip Code");
            $("#checks").prop("disabled", false);
            $("#deliveryZipCodeStatus").css("display","none");

            $("#type").html("Delivery");
            $("#collectPrice").val(5);
            var collectionPrice = parseFloat($("#collectPrice").val());
            var servicePrice = parseFloat($("#service").val()); // Assuming #service contains a numeric value, if not, adjust accordingly
            var subtotal = parseFloat($("#subtotal").val());

            var total = collectionPrice + servicePrice + subtotal;
            // console.log(total);
            $("#total").val(total);
        } else {
            // Invalid input
            $("#deliveryZipCodeStatus").css("display","block");

            $("#deliveryZipCodeStatus").html("We Are Deliver only in these Post Code: KA1,KA2,KA3,KA4,KA5");
            // alert("");
            $("#checks").prop("disabled", true);
            // You can show an alert or perform other actions here
        }

    })

    // var prices = {
    //     "KA1": 5,
    //     "KA2": 5,
    //     "KA3": 5,
    //     "KA4": 5,
    //     "KA5": 5,
    //     "KA16": 6,
    //     "KA169": 6,
    //     "KA17": 6,
    //     "KA170": 6,
    //     "KA33": 6,
    //     "KA36": 6,
    // };

    // // Check if the entered ZIP code is a key in the prices object
    // if (prices.hasOwnProperty(zipcode)) {
    //     var selectedPrice = prices[zipcode];
    //     // console.log("Selected Price: " + selectedPrice + " Euro");
    //     $("#type").html("Delivery");
    //     $("#collectPrice").val(selectedPrice);
    //     var collectionPrice = parseFloat($("#collectPrice").val());
    //     var servicePrice = parseFloat($("#service").val()); // Assuming #service contains a numeric value, if not, adjust accordingly
    //     var subtotal = parseFloat($("#subtotal").val());

    //     var total = collectionPrice + servicePrice + subtotal;
    //     // console.log(total);
    //     $("#total").val(total);
    // } else {
    //     console.log("ZIP code not found in prices object");
    // }

    time();
    var timearr = "";
    function time() {
        $.ajax({
            // url: `${baseurl}order/create.php`, 
            url: `http://localhost/restaurant/api/orderTime/read.php`,
            type: "GET",
            contentType: "application/json",
            success: function (response, status) {
                // window.location.href="createorder.php";
                timearr = response.response;
                timearr.forEach(item => {
                    if (item.name == "Collection") {
                        // console.log(item.name);
                        $("#collecttimefromdatabase").html(item.time);
                    }
                })
                // console.log(response.response);
                // getInProgressOrder();
            },
            error: function (error) {
                console.log(error);
            }
        });
    }

</script>