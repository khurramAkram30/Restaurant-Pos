<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Brown Munde">
    <meta name="author" content="Brown Munde">
    <meta name="keywords" content="Brown Munde">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon2.png" />

    <!-- TITLE -->
    <title>Brown Munde</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="../assets/css/style.css" rel="stylesheet" />
    <link href="../assets/css/dark-style.css" rel="stylesheet" />
    <link href="../assets/css/transparent-style.css" rel="stylesheet">
    <link href="../assets/css/skin-modes.css" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="../assets/css/icons.css" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="../assets/colors/color1.css" />

    <!-- INTERNAL Switcher css -->
    <link href="../assets/switcher/css/switcher.css" rel="stylesheet" />
    <link href="../assets/switcher/demo.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

<style>
   
</style>
</head>

<body class="app sidebar-mini ltr light-mode">

    <!-- Switcher -->
    <div class="switcher-wrapper">
        <div class="demo_changer">
            <div class="form_holder sidebar-right1">
                <div class="row">
                    <div class="predefined_styles">
                        <div class="swichermainleft text-center">
                            <div class="p-3 d-grid gap-2">
                                <a href="../../index.html" class="btn ripple btn-primary mt-0">View Demo</a>
                                <a href="https://themeforest.net/item/sash-bootstrap-5-admin-dashboard-template/35183671" class="btn ripple btn-secondary">Buy Now</a>
                                <a href="https://themeforest.net/user/spruko/portfolio" class="btn ripple btn-pink">Our Portfolio</a>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Navigation Style</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Vertical Menu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch15" id="myonoffswitch34" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch34" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Horizontal Click Menu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch15" id="myonoffswitch35" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch35" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Horizontal Hover Menu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch15" id="myonoffswitch111" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch111" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>LTR and RTL VERSIONS</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">LTR Version</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch7" id="myonoffswitch23" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch23" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">RTL Version</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch7" id="myonoffswitch24" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch24" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Light Theme Style</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Light Theme</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch1" id="myonoffswitch1" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch1" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Light Primary</span>
                                        <div class="">
                                            <input class="w-30p h-30 input-color-picker color-primary-light" value="#6c5ffc" id="colorID" oninput="changePrimaryColor()" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id7="transparentcolor" name="lightPrimary">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Dark Theme Style</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Dark Theme</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch1" id="myonoffswitch2" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch2" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Dark Primary</span>
                                        <div class="">
                                            <input class="w-30p h-30 input-dark-color-picker color-primary-dark" value="#6c5ffc" id="darkPrimaryColorID" oninput="darkPrimaryColor()" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id3="primary" data-id8="transparentcolor"
                                                name="darkPrimary">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Transparent Theme Style</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Transparent Theme</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch1" id="myonoffswitchTransparent" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitchTransparent" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Transparent Primary</span>
                                        <div class="">
                                            <input class="w-30p h-30 input-transparent-color-picker color-primary-transparent" value="#6c5ffc" id="transparentPrimaryColorID" oninput="transparentPrimaryColor()" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id3="primary"
                                                data-id4="primary" data-id9="transparentcolor" name="tranparentPrimary">
                                        </div>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Transparent Background</span>
                                        <div class="">
                                            <input class="w-30p h-30 input-transparent-color-picker color-bg-transparent" value="#6c5ffc" id="transparentBgColorID" oninput="transparentBgColor()" type="color" data-id5="body" data-id6="theme" data-id9="transparentcolor" name="transparentBackground">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Transparent Bg-Image Style</h4>
                            <div class="skin-body switch_section">
                                <div class="switch-toggle d-flex">
                                    <span class="me-auto">Bg-Image Primary</span>
                                    <div class="">
                                        <input class="w-30p h-30 input-transparent-color-picker color-primary-transparent" value="#6c5ffc" id="transparentBgImgPrimaryColorID" oninput="transparentBgImgPrimaryColor()" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id3="primary" data-id4="primary"  data-id9="transparentcolor" name="tranparentPrimary">
                                    </div>
                                </div>
                                <div class="switch-toggle d-flex mt-2">
                                    <a class="bg-img1" href="javascript:void(0);" onclick="bgImage(this)"><img src="../assets/images/media/bg-img1.jpg"  alt="Bg-Image" id="bgimage1"></a>
                                    <a class="bg-img2" href="javascript:void(0);" onclick="bgImage(this)"><img src="../assets/images/media/bg-img2.jpg"  alt="Bg-Image"  id="bgimage2"></a>
                                    <a class="bg-img3" href="javascript:void(0);" onclick="bgImage(this)"><img src="../assets/images/media/bg-img3.jpg"  alt="Bg-Image" id="bgimage3"></a>
                                    <a class="bg-img4" href="javascript:void(0);" onclick="bgImage(this)"><img src="../assets/images/media/bg-img4.jpg"  alt="Bg-Image" id="bgimage4"></a>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Menu Styles</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle lightMenu d-flex">
                                        <span class="me-auto">Light Menu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch3" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch3" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle colorMenu d-flex mt-2">
                                        <span class="me-auto">Color Menu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch4" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch4" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle darkMenu d-flex mt-2">
                                        <span class="me-auto">Dark Menu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch5" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch5" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle gradientMenu d-flex mt-2">
                                        <span class="me-auto">Gradient Menu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch19" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch19" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Header Styles</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle lightHeader d-flex">
                                        <span class="me-auto">Light Header</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch6" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch6" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle  colorHeader d-flex mt-2">
                                        <span class="me-auto">Color Header</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch7" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch7" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle darkHeader d-flex mt-2">
                                        <span class="me-auto">Dark Header</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch8" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch8" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>

                                    <div class="switch-toggle darkHeader d-flex mt-2">
                                        <span class="me-auto">Gradient Header</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch20" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch20" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Layout Width Styles</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Full Width</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch4" id="myonoffswitch9" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch9" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Boxed</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch4" id="myonoffswitch10" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch10" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Layout Positions</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Fixed</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch5" id="myonoffswitch11" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch11" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Scrollable</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch5" id="myonoffswitch12" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch12" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft leftmenu-styles">
                            <h4>Sidemenu layout Styles</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Default Menu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6" id="myonoffswitch13" class="onoffswitch2-checkbox default-menu" checked>
                                            <label for="myonoffswitch13" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Icon with Text</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6" id="myonoffswitch14" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch14" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Icon Overlay</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6" id="myonoffswitch15" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch15" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Closed Sidemenu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6" id="myonoffswitch16" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch16" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Hover Submenu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6" id="myonoffswitch17" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch17" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Hover Submenu Style 1</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6" id="myonoffswitch18" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch18" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Reset All Styles</h4>
                            <div class="skin-body">
                                <div class="switch_section my-4">
                                    <button class="btn btn-danger btn-block" onclick="localStorage.clear();
										document.querySelector('html').style = '';
										names() ;
                                        resetData() ;" type="button">Reset All
									</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Switcher -->

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="../assets/images/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!-- app-Header -->
           <?php 
           include "header.php";
           ?>
            <!-- /app-Header -->

            <!--APP-SIDEBAR-->
           <?php
            include "sidebar.php";
           ?>
            <!--app-content open-->
            <div class="main-content app-content mt-0" style="background-color: white !important;">
                <div class="side-app p-0">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">
                        <!-- ROW-1 OPEN -->
                        <!-- Row -->
                        
<div class="row">
                            
                            <div class="col-lg-12 p-0">
                                <form action="" enctype="multipart/form-data">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">View All Website Order</div>
                                    </div>
                                    <div class="card-body">
                                    

                                        <div class="row mt-5">
                                        <div class="col-md-3">
                                            <label for="">Select Collection or Pending Order</label>
                                        </div>
                                        <div class="col-md-3">
                                            <select name="" id="deliveryType" class="form-control">
                                                <option value="Collection"> Collection </option>
                                                <option value="Home Delivery"> Home Delivery </option>

                                            </select>
                                    </div>
                                    <div class="col-md-3"></div>
                                        

                                        <div class="table-responsive">
                                        <table class="table" id="Collection">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Order Id</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Phone</th>
                                                    <th>Address</th>
                                                    <th>Notes</th>
                                                    <th>Total</th>
                                                    <th>Time</th>
                                                    <th>Payment Method</th>
                                                    <th>Kitchen Print</th>
                                                    <th>Final bill</th>
                                                    
                                                    </tr>
                                                </thead>
                                                <tbody id="bodycat">

                                                </tbody>
                                            </table>

                                        <table class="table" id="HomeDelivery" style="display: none;">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Order Id</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Phone</th>
                                                    <th>Address</th>
                                                    <th>Notes</th>
                                                    <th>Total</th>
                                                    <th>Payment Method</th>
                                                    <th>Kitchen Print</th>
                                                    <th>Final bill</th>
                                                    
                                                
                                                </tr>
                                            </thead>
                                            <tbody id="body">

                                            </tbody>
                                        
                                        </table>
                                       
                                        </div>
                                    </div>


                                
                                    </div>
                                    <div class="card-footer">
                                        <!--Row-->
                                      
                                        <!--End Row-->
                                    </div>
                                </div>
                                </form>
                            </div>

                        </div>  
                        <!-- /Row -->
                    </div>
                    <!-- CONTAINER CLOSED -->
                </div>
            </div>
            <!--app-content closed-->
        </div>




        <!-- edit modal -->
    
        <!-- edit modal end -->
        
    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JQUERY JS -->
    <script src="../assets/js/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- SIDE-MENU JS -->
    <script src="../assets/plugins/sidemenu/sidemenu.js"></script>

	<!-- TypeHead js -->
	<script src="../assets/plugins/bootstrap5-typehead/autocomplete.js"></script>
    <!-- <script src="../assets/js/typehead.js"></script> -->

    <!-- SIDEBAR JS -->
    <script src="../assets/plugins/sidebar/sidebar.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="../assets/plugins/p-scroll/perfect-scrollbar.js"></script>
    <!-- <script src="../assets/plugins/p-scroll/pscroll.js"></script>
    <script src="../assets/plugins/p-scroll/pscroll-1.js"></script> -->

    <!-- Color Theme js -->
    <script src="../assets/js/themeColors.js"></script>

    <!-- Sticky js -->
    <script src="../assets/js/sticky.js"></script>

    <!-- CUSTOM JS -->
    <script src="../assets/js/custom1.js"></script>

    <!-- Switcher js -->
    <script src="../assets/switcher/js/switcher.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="../assets/js/url.js"></script>

</body>

</html>


<script>
const baseurl=url;
var datas="",categoryresult="",subcategoryresult="";
$(document).ready(function(){
//     $.ajax({
//     url:`${baseurl}categories/read.php`,
//     type:"GET",
//     contentType:"application/json",
//     success:function(response,status){
//         console.log(response);
//         categoryresult=response.response;
//     },
//     error:function(error){
//         console.log(error);
//     }
// })

// $.ajax({
//     url:`${baseurl}subcategories/read.php`,
//     type:"GET",
//     contentType:"application/json",
//     success:function(response,status){
//         console.log(response);
//         subcategoryresult=response.response;
//     },
//     error:function(error){
//         console.log(error);
//     }
// })

$("#deliveryType").on("change",function(){
   var value=$("#deliveryType").val();
    if(value == "Home Delivery"){
        deliveryOrder();
    }
    else{
        collectionOrder();  
    }
})

collectionOrder();
function collectionOrder(){
    $("#HomeDelivery").css("display","none");
    $("#Collection").css("display","block");
$.ajax({
    url:`http://localhost/restaurant/api/websiteOrder/collectionOrder.php`,
    type:"GET",
    contentType:"application/json",
    success:function(response,status){
        datas=response.Data;
        // console.log(datas);
        displaycollection(datas);
        // var table = new DataTable('#pending');
    },
    error:function(error){
        console.log(error);
    }
})
}


function deliveryOrder(){
    $("#Collection").css("display","none");
    $("#HomeDelivery").css("display","block");
    $.ajax({
    url:`http://localhost/restaurant/api/websiteOrder/deliveryOrder.php`,
    type:"GET",
    contentType:"application/json",
    success:function(response,status){
        datas=response.Data;
        // console.log(datas);
        displaydelivery(datas);
        // var table = new DataTable('#pending');
    },
    error:function(error){
        console.log(error);
    }
})
}

function displaydelivery(data){
var tabledata='',i=1;
data.forEach(element => {
    tabledata+=`
    <tr>
    <td>${i}</td>
    <td>Order${element.CustomOrderId}</td>
    <td>${element.firstName}</td>
    <td>${element.lastName}</td>
    <td>${element.phone}</td>
    <td>${element.address1}</td>
    <td>${element.notes}</td>
    <td>${element.total}</td>
    <td>${element.paymentMethod}</td>
    <td>
            <a class="btn text-primary btn-sm" onclick="Printorder('${element.CustomOrderId}')" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fa fa-print fs-14"></span></a></td>
            <td>
            <a class="btn text-primary btn-sm" onclick="FinalPrintorder('${element.CustomOrderId}')" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fa fa-print fs-14"></span></a></td>

    </tr>
    `;
    i++;
});
$("#body").html(tabledata);
}

function displaycollection(data){
var tabledata='',i=1;
data.forEach(element => {
    tabledata+=`
    <tr>
    <td>${i}</td>
    <td>Order${element.CustomOrderId}</td>
    <td>${element.firstName}</td>
    <td>${element.lastName}</td>
    <td>${element.phone}</td>
    <td>${element.address1}</td>
    <td>${element.notes}</td>
    <td>${element.total}</td>
    <td>${element.time}</td>
    <td>${element.paymentMethod}</td>
    <td>
            <a class="btn text-primary btn-sm" onclick="Printorder('${element.CustomOrderId}')" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fa fa-print fs-14"></span></a></td>
            <td>
            <a class="btn text-primary btn-sm" onclick="FinalPrintorder('${element.CustomOrderId}')" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fa fa-print fs-14"></span></a></td>

    </tr>
    `;
    i++;
});
$("#bodycat").html(tabledata);
}

});

function Printorder(id) {
    var newUrl = `websiteKitchens_copy.php?id=${id}`;
        // window.location.href=newUrl;
        window.open(newUrl, '_blank');
    }

    
    function FinalPrintorder(id){
        var newUrl = `websiteCustomer_copy.php?id=${id}`;
        // window.location.href=newUrl;
        window.open(newUrl, '_blank');
    }



</script>

