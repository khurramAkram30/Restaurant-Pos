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
    <style>
        .cardsetting {
            padding: 10px;
            background: aliceblue;
            height: auto;
        }

        .imgset {
            height: 100px;
            border-radius: 50%;
        }

        .displayfix {
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
            margin-top: 8px;
        }

        .rowset {
            padding-top: 50px;
            padding-right: 20px;
        }

        .columnset {
            display: flex;
            justify-content: end;
        }

        .Subtotal {
            font-size: 18px;
            font-weight: 500;
        }

        .buttons {
            color: white !important;
            font-size: 15px !important;
            font-weight: 500;
        }
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
                                <a href="https://themeforest.net/item/sash-bootstrap-5-admin-dashboard-template/35183671"
                                    class="btn ripple btn-secondary">Buy Now</a>
                                <a href="https://themeforest.net/user/spruko/portfolio" class="btn ripple btn-pink">Our
                                    Portfolio</a>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Navigation Style</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Vertical Menu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch15"
                                                id="myonoffswitch34" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch34" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Horizontal Click Menu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch15"
                                                id="myonoffswitch35" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch35" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Horizontal Hover Menu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch15"
                                                id="myonoffswitch111" class="onoffswitch2-checkbox">
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
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch7"
                                                id="myonoffswitch23" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch23" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">RTL Version</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch7"
                                                id="myonoffswitch24" class="onoffswitch2-checkbox">
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
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch1"
                                                id="myonoffswitch1" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch1" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Light Primary</span>
                                        <div class="">
                                            <input class="w-30p h-30 input-color-picker color-primary-light"
                                                value="#6c5ffc" id="colorID" oninput="changePrimaryColor()" type="color"
                                                data-id="bg-color" data-id1="bg-hover" data-id2="bg-border"
                                                data-id7="transparentcolor" name="lightPrimary">
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
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch1"
                                                id="myonoffswitch2" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch2" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Dark Primary</span>
                                        <div class="">
                                            <input class="w-30p h-30 input-dark-color-picker color-primary-dark"
                                                value="#6c5ffc" id="darkPrimaryColorID" oninput="darkPrimaryColor()"
                                                type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border"
                                                data-id3="primary" data-id8="transparentcolor" name="darkPrimary">
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
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch1"
                                                id="myonoffswitchTransparent" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitchTransparent" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Transparent Primary</span>
                                        <div class="">
                                            <input
                                                class="w-30p h-30 input-transparent-color-picker color-primary-transparent"
                                                value="#6c5ffc" id="transparentPrimaryColorID"
                                                oninput="transparentPrimaryColor()" type="color" data-id="bg-color"
                                                data-id1="bg-hover" data-id2="bg-border" data-id3="primary"
                                                data-id4="primary" data-id9="transparentcolor" name="tranparentPrimary">
                                        </div>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Transparent Background</span>
                                        <div class="">
                                            <input
                                                class="w-30p h-30 input-transparent-color-picker color-bg-transparent"
                                                value="#6c5ffc" id="transparentBgColorID" oninput="transparentBgColor()"
                                                type="color" data-id5="body" data-id6="theme"
                                                data-id9="transparentcolor" name="transparentBackground">
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
                                        <input
                                            class="w-30p h-30 input-transparent-color-picker color-primary-transparent"
                                            value="#6c5ffc" id="transparentBgImgPrimaryColorID"
                                            oninput="transparentBgImgPrimaryColor()" type="color" data-id="bg-color"
                                            data-id1="bg-hover" data-id2="bg-border" data-id3="primary"
                                            data-id4="primary" data-id9="transparentcolor" name="tranparentPrimary">
                                    </div>
                                </div>
                                <div class="switch-toggle d-flex mt-2">
                                    <a class="bg-img1" href="javascript:void(0);" onclick="bgImage(this)"><img
                                            src="../assets/images/media/bg-img1.jpg" alt="Bg-Image" id="bgimage1"></a>
                                    <a class="bg-img2" href="javascript:void(0);" onclick="bgImage(this)"><img
                                            src="../assets/images/media/bg-img2.jpg" alt="Bg-Image" id="bgimage2"></a>
                                    <a class="bg-img3" href="javascript:void(0);" onclick="bgImage(this)"><img
                                            src="../assets/images/media/bg-img3.jpg" alt="Bg-Image" id="bgimage3"></a>
                                    <a class="bg-img4" href="javascript:void(0);" onclick="bgImage(this)"><img
                                            src="../assets/images/media/bg-img4.jpg" alt="Bg-Image" id="bgimage4"></a>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Menu Styles</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle lightMenu d-flex">
                                        <span class="me-auto">Light Menu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch2"
                                                id="myonoffswitch3" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch3" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle colorMenu d-flex mt-2">
                                        <span class="me-auto">Color Menu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch2"
                                                id="myonoffswitch4" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch4" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle darkMenu d-flex mt-2">
                                        <span class="me-auto">Dark Menu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch2"
                                                id="myonoffswitch5" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch5" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle gradientMenu d-flex mt-2">
                                        <span class="me-auto">Gradient Menu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch2"
                                                id="myonoffswitch19" class="onoffswitch2-checkbox">
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
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch3"
                                                id="myonoffswitch6" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch6" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle  colorHeader d-flex mt-2">
                                        <span class="me-auto">Color Header</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch3"
                                                id="myonoffswitch7" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch7" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle darkHeader d-flex mt-2">
                                        <span class="me-auto">Dark Header</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch3"
                                                id="myonoffswitch8" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch8" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>

                                    <div class="switch-toggle darkHeader d-flex mt-2">
                                        <span class="me-auto">Gradient Header</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch3"
                                                id="myonoffswitch20" class="onoffswitch2-checkbox">
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
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch4"
                                                id="myonoffswitch9" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch9" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Boxed</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch4"
                                                id="myonoffswitch10" class="onoffswitch2-checkbox">
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
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch5"
                                                id="myonoffswitch11" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch11" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Scrollable</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch5"
                                                id="myonoffswitch12" class="onoffswitch2-checkbox">
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
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                id="myonoffswitch13" class="onoffswitch2-checkbox default-menu" checked>
                                            <label for="myonoffswitch13" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Icon with Text</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                id="myonoffswitch14" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch14" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Icon Overlay</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                id="myonoffswitch15" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch15" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Closed Sidemenu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                id="myonoffswitch16" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch16" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Hover Submenu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                id="myonoffswitch17" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch17" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Hover Submenu Style 1</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                id="myonoffswitch18" class="onoffswitch2-checkbox">
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
            <div class="main-content app-content mt-0" style="background-color: #f9f6f6 !important;">
                <div class="side-app p-0">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">
                        <!-- ROW-1 OPEN -->
                        <!-- Row -->

                        <div class="row">

                            <div class="col-lg-12 p-0">

                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <div class="row p-4">
                                            <div class="col-sm-4 col-md-4">
                                                <div class="form-group">
                                                    <label class="form-label">ORDER ID <span
                                                            class="text-red">*</span></label>
                                                    <input type="text" id="orderid" class="form-control"
                                                        value="" readonly>
                                                </div>
                                            </div>
                                            <div class="col-sm-8 col-md-8">
                                                <div class="form-group">
                                                    <label class="form-label">Tables <span
                                                            class="text-red">*</span></label>
                                                    <!-- <input type="text" class="form-control" placeholder="Last name"> -->
                                                    <!-- <select name="" >
                                                        <option value="" disabled selected>Select Table</option>

                                                    </select> -->

                                                    <input type="text" readonly id="tableshow" class="form-control">

                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="card" style="height: 500px;overflow: scroll;">

                                                    <div class="card-body">
                                                        <div class="panel panel-primary">
                                                            <div class="tab-menu-heading">
                                                                <div class="tabs-menu">
                                                                    <!-- Tabs -->
                                                                    <ul class="nav panel-tabs panel-secondary"
                                                                        id="dynamicTabs">
                                                               </ul>

                                                                </div>
                                                            </div>
                                                            <div class="panel-body tabs-menu-body">
                                                            <div class="row mb-2">
                                                                    <div class="col-md-12">
                                                                        <input type="text" class="form-control" placeholder="Search By Name" id="searchByName">
                                                                    </div>
                                                                </div>
                                                                <div class="row" id="itemsShow">

                                                                </div>
                                                                <!-- <div class="tab-content">
                                                                    <div class="tab-pane active" id="tab9">
                                                                        <div class="row" id="drinks">


                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane" id="tab10">
                                                                        <div class="row" id="food">



                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane" id="tab11">
                                                                        <div class="row" id="desert">



                                                                        </div>
                                                                    </div>

                                                                </div> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="row rowset">
                                            <div class="card">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Items</th>
                                                                <th>Qty</th>
                                                                <th>Extra</th>
                                                                <th>Extra price</th>
                                                                <th>SubTotal</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="cartbody"></tbody>

                                                    </table>

                                                </div>
                                            </div>

                                            <div class="col-md-9 columnset">
                                                <label for="" class="Subtotal">Sub Total</label>
                                            </div>

                                            <div class="col-md-2">
                                                <input type="number" id="subtotal" class="form-control">
                                            </div>


                                            <div class="col-md-9 columnset mt-2">
                                                <label for="" class="Subtotal">Discount (%)</label>
                                            </div>

                                            <div class="col-md-2 mt-2">
                                                <input type="number" id="Discount" onkeyup="discountedPrice()"
                                                    class="form-control">
                                            </div>

                                            <div class="col-md-9 columnset mt-2">
                                                <label for="" class="Subtotal ">Grand Total</label>
                                            </div>

                                            <div class="col-md-2 mt-2">
                                                <input type="number" id="PaidAmount" class="form-control">
                                            </div>

                                            <div class="col-md-1">
                                            </div>

                                            <div class="col-md-6 mt-3">
                                                <button class="btn btn-primary buttons form-control" id="holdCart">Hold
                                                    Order</button>
                                            </div>

                                            <div class="col-md-6 mt-3">
                                                <button class="btn btn-success buttons form-control"
                                                    id="Proceed">Proceed</button>
                                            </div>
                                        </div>


                                        <div class="row mt-2" id="paymentMethod" style="display:none">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="row mb-2">
                                                        <div class="col-md-8 columnset mt-2">
                                                            <label for="" class="Payment Subtotal">Payment
                                                                Method</label>
                                                        </div>

                                                        <div class="col-md-3 mt-2">
                                                            <select name="" class="form-control" id="paymentMethods">
                                                                <option value="Card">Card</option>
                                                                <option value="Cash">Cash</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-md-1">
                                                        </div>


                                                        <div class="col-md-8 columnset mt-2">
                                                            <label for="" class="Subtotal ">Paid Amount</label>
                                                        </div>

                                                        <div class="col-md-3 mt-2">
                                                            <input type="number" id="Paid" class="form-control">
                                                        </div>

                                                        <div class="col-md-1">
                                                        </div>

                                                        <div class="col-md-9 columnset mt-2">
                                                            <!-- <label for="" class="Subtotal ">Paid Amount</label> -->
                                                        </div>

                                                        <div class="col-md-2 mt-2">
                                                            <input type="button" name="btn" id="finishBtn"
                                                                onclick="finish()" class="btn btn-primary form-control"
                                                                value="Finish">
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>



                            </div>

                        </div>
                        <!-- /Row -->

                        <!-- <div class="row p-4 bg-white">
                            <h3>Order (In Progress)</h3>
                            <div class="col-md-12">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Order Id</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="Progress">

                                    </tbody>
                                </table>
                            </div>
                        </div> -->


                    </div>
                    <!-- CONTAINER CLOSED -->
                </div>
            </div>
            <!--app-content closed-->
        </div>

        <!-- edit modal -->
        <div class="modal fade" id="RequiredPswd">
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-content-demo">
                    <div class="modal-header">
                        <h6 class="modal-title">Required Password</h6><button aria-label="Close" class="btn-close"
                            data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">

                        <input type="hidden" id="idd">
                        <div class="row mb-4">
                            <label class="col-md-3 form-label">Password:</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="pswd" placeholder="Enter Password">
                                <label for="alert" id="notify"></label>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" onclick="submitPswd()">Submit Password</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- edit modal end -->

         <!-- ntification modal -->
         <div class="modal fade" id="notificationmodal">
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-content-demo">
                    <div class="modal-header">
                        <h6 class="modal-title">Website Order</h6><button aria-label="Close" class="btn-close"
                            data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">

                        <input type="hidden" id="idd">

                        <div class="row">
                            <div class="col-md-12">
                                <h3>
                                You have a new website order! 
                                </h3>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" onclick="WebsiteOrderPage()">Website Order Page</button>
                        <!-- <button class="btn btn-primary" onclick="finish()">Print Order</button> -->
                        
                    </div>
                </div>
            </div>
        </div>
<!-- ntification modal -->


        <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
        <script>

            // Enable pusher logging - don't include this in production
            Pusher.logToConsole = true;

     
            var pusher = new Pusher('13f373ebd75cbc52d306', {
                cluster: 'ap2'
            });
            var channel = pusher.subscribe('my-channel');
            channel.bind('my-event', function (data) {
              $("#notificationmodal").modal("show");
                

            });

            function WebsiteOrderPage(){
                window.location.href="pendingOrder.php"
            }
        </script>

        <!-- Sidebar-right -->

        <!--/Sidebar-right-->

        <!-- Country-selector modal-->

        <!-- FOOTER -->
        <!-- <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-12 col-sm-12 text-center">
                        Copyright © <span id="year"></span> <a href="javascript:void(0)">Sash</a>. Designed with <span class="fa fa-heart text-danger"></span> by <a href="javascript:void(0)"> Spruko </a> All rights reserved.
                    </div>
                </div>
            </div>
        </footer> -->
        <!-- FOOTER CLOSED -->
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
    <script src="../assets/js/typehead.js"></script>

    <!-- SIDEBAR JS -->
    <script src="../assets/plugins/sidebar/sidebar.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="../assets/plugins/p-scroll/perfect-scrollbar.js"></script>
    <script src="../assets/plugins/p-scroll/pscroll.js"></script>
    <script src="../assets/plugins/p-scroll/pscroll-1.js"></script>

    <!-- Color Theme js -->
    <script src="../assets/js/themeColors.js"></script>

    <!-- Sticky js -->
    <script src="../assets/js/sticky.js"></script>

    <!-- CUSTOM JS -->
    <script src="../assets/js/custom1.js"></script>

    <!-- Switcher js -->
    <script src="../assets/switcher/js/switcher.js"></script>

    <script src="../assets/js/url.js"></script>
    <script src="../assets/js/items.js"></script>
</body>

</html>


<script>

    const baseurl = url;
    var datas = "",updatetablearr=[];
    var arr = [];
    var extraname = "", extraprice = 0;

    function getItem() {
        $.ajax({
            url: `${baseurl}items/mobileItems.php`,
            type: "GET",
            contentType: "application/json",
            success: function (response, status) {
                var data = response.response;
                console.log(data);
                displayItem(data)
            },
            error: function (error) {
                console.log(error);
            }
        });
    }
    getCategories();
    function getCategories() {

        $.ajax({
            // url: `${baseurl}categories/read.php`,
            url:`http://localhost/restaurant/api/categories/read.php?type=mobile`,
            type: "GET",
            contentType: "application/json",
            success: function (response, status) {
                datas = response.response;
                displayTable(datas);
                console.log(response.response);
            },
            error: function (error) {
                console.log(error);
            }
        })
    }
    function displayTable(data) {
    var catHtml = "";
    
    data.forEach(item => {
        catHtml += `<li><a href="#tab${item.id}" onclick="itemsById(${item.id})" data-bs-toggle="tab"><span></span>${item.name}</a></li>`;
    });

    $("#dynamicTabs").html(catHtml);
}
var getId="";
function itemsById(id){
    getId=id;
    $.ajax({
            // url: `${baseurl}items/read.php?id=${id}`,
            url: `http://localhost/restaurant/api/items/read.php?id=${id}`,
            type: "GET",
            contentType: "application/json",
            success: function (response, status) {
                var data = response.response;
                displayItem(data);
                console.log(data)
            },
            error: function (error) {
                console.log(error);
            }
        });
}

function displayItem(data){
    var items = "";
    if(data){
                data.forEach(item => {
                    items += `  <div class="col-md-4">
                                     <div class="card cardsetting"
                                         onclick="addtocart(${item.id},1,'${item.name}',${item.sell})">
                                   
                                             <div class="displayfix">
                                                 <h5>${item.name}
                                                    </h5>
                                                <h4>&#163;${item.sell}</h4>
                                                </div>
                                                 </div>
                                                 </div>`;
                });
                $("#itemsShow").html(items);
            }else{
                $("#itemsShow").html("No Item Found In this Category");
            }
            
}

$("#searchByName").on("keyup",function(){
   var postdata={
    catId:getId,
    itemName:$("#searchByName").val()
   };
   $.ajax({
            url: `http://localhost/restaurant/api/items/itemsByName.php`,
            type: "POST",
            data:JSON.stringify(postdata),
            contentType: "application/json",
            success: function (response, status) {
                var data = response.response;
                displayItem(data);
                console.log(data)
            },
            error: function (error) {
                console.log(error);
            }
        });
})


    var tableid;
    function getOrderById() {
        const urlParams = new URLSearchParams(window.location.search);
        var id = urlParams.get('id');
        // alert(id);
        $.ajax({
            // url: `${baseurl}order/read.php?id=${id}`,
            url:`http://localhost/restaurant/api/order/read.php?id=${id}`,
            type: "GET",
            contentType: "application/json",
            success: function (response, status) {
                tableid=response.response[0].table_id;
                var orderId = $("#orderid").val(id);
                $("#tableshow").val(tableid);
                updatetablearr=response.response;
                console.log("found",updatetablearr);
                updateTable(updatetablearr);
            },
            error: function (status, error) {
                console.log(error);
            }
        });
    }

    function updateTable(data) {
        var tabledata = "", i = 0, subtotal = 0;
        data.forEach(item => {
            subtotal += parseFloat(item.subtotal);
            tabledata += `
    <tr>
    <td>${item.Product_Name}</td>
    <td><input type="text" class="form-control" readonly value="${item.quantity}" onkeyup="quantitychange('${i}')"></td>
    <td><input type="text" class="form-control" readonly value="${item.modifiers}"  onChange="extNameChange('${i}')"></td>
    <td><input type="text" class="form-control" readonly value="${item.modifier_price}" onChange="myFunc('${i}')"></td>
    <td>${item.subtotal}</td>
    <td><a class="btn text-danger btn-sm" onclick="removeItem('${item.itemId}')" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-trash-2 fs-14"></span></a>
    </td>

    </tr>
    
    `;
            i++;
        })
        $("#subtotal").val(subtotal);
        $("#PaidAmount").val(subtotal);
        $("#cartbody").html(tabledata);
    }

    function removeItem(id){
        $("#RequiredPswd").modal("show");
        $("#idd").val(id);
    }

    function submitPswd(){
    var pswd=$("#pswd").val();
    var itemid=$("#idd").val();
    console.log(itemid);
    if(pswd == "admin"){
        $.ajax({
            url: `${baseurl}order/delete.php?id=${itemid}`,
            type: "DELETE",
            contentType: "application/json",
            success: function (response, status) {
                $("#RequiredPswd").modal("hide"); 
                getOrderById(); 
                console.log("adas",arr);
                if(arr.length > 0){
                    console.log("testtt")
                    showdata(arr);
                }
            },
            error: function (status, error) {
                console.log(error);
            }
        });
    
    }
    }

    function editorder(index) {
        var new_url = `editorder.php?id=${index}`;
        window.location.href = new_url;
    }
    
    $(document).ready(function () {
        getItem();
        getOrderById();

    });


    function editSubcategory(index) {
        console.log(index);
        var result = datas[index];
        // console.log(result);
        $("#editmodal").modal('show');
        $("#idd").val(result.id);
        $("#editcategory").val(result.name);

    }


    function discountedPrice() {
        var discount = parseFloat($("#Discount").val());
        var discounted = (discount / 100);
        var subTotal = parseFloat($("#subtotal").val());
        var afterdiscount = parseFloat(discounted * subTotal);

        var discountedPrice = subTotal - afterdiscount;
        // console.log(discountedPrice);
        $("#PaidAmount").val(discountedPrice);

    }
 
   $("#holdCart").on("click", function (event) {
        event.preventDefault();
        if(arr.length > 0){
        var orderId = $("#orderid").val();
        var tableId = $("#tableshow").val();
        var subtotal = $("#subtotal").val();
        var paidAmount = $("#PaidAmount").val();
        var discount = $("#Discount").val();
        var OrderData = {
            Items: arr,
            order_Id: orderId,
            table_Id: tableId,
            subTotal: subtotal,
            paidAmount: paidAmount,
            Discount: discount
        };

        $.ajax({
            url: `http://localhost/restaurant/api/order/create.php`,
                    type: "POST",
                    data: JSON.stringify(OrderData),
                    contentType: "application/json",
                    success: function (response, status) {
                        var newUrl = `print.php?id=${orderId}`;
                        // window.location.href=newUrl;
                        window.open(newUrl, '_blank');
                window.location.href="createorder.php";
                
                // getInProgressOrder();
            },
            error: function (error) {
                console.log(error);
            }
        });
    }
    else{
        alert("Please Select atleast one product");
    }
   });
    

</script>
<script>



    function addtocart(pid, qty, name, price) {
        var SubTotal = parseFloat(qty * price);
        var pushdata = {
            productid: pid,
            quantity: qty,
            productname: name,
            itemprice: price,
            price: SubTotal,
            extname: extraname,
            extprice: extraprice
        }
        var existingItem = arr.find(item => item.productid === pid);

        if (existingItem) {
            var quant = existingItem.quantity++;
            var stotal = parseFloat((quant + 1) * price);
            existingItem.price = stotal;
        } else {
            // If it doesn't exist, add a new item
            arr.push(pushdata);
        }

        // console.log("array",arr);
        showdata(arr);
    }

    function showdata(data) {
        updateTable(updatetablearr);
        var sub=parseFloat($("#subtotal").val());
        var tabledatas= "", i = 0, subtotal = 0;
        data.forEach(item => {
            // alert(123);
            
            sub += item.price;
            tabledatas += `
    <tr>
    <td>${item.productname}</td>
    <td><input type="text" class="form-control quantity${i}" value="${item.quantity > 0 ? item.quantity : ""}" onkeyup="quantitychange('${i}')"></td>
    <td><input type="text" class="form-control extraname${i}" value="${item.extname.length > 0 ? item.extname : ""}"  onChange="extNameChange('${i}')"></td>
    <td><input type="text" class="form-control extraprice${i}" value="${item.extprice > 0 ? item.extprice : ""}" onChange="myFunc('${i}')"></td>
    <td>${item.price > 0 ? item.price : ""}</td>
    <td><a class="btn text-danger btn-sm" onclick="removeObj('${i}')" data-bs-toggle="tooltip" data-bs-original-title="Edit"><span class="fe fe-trash-2 fs-14"></span></a>
    </td>
  
    </tr>
    
    `;
            i++;
        })
        // console.log(sub);
        $("#cartbody").append(tabledatas);
        $("#subtotal").val(sub);
        $("#PaidAmount").val(sub);
    }

    function quantitychange(index) {
        var quantityextra = parseFloat(document.querySelector(`.quantity${index}`).value);
        arr[index].quantity = quantityextra;
        var itemsprice = arr[index].itemprice;
        // console.log(itemsprice);
        var subtotals = parseFloat(quantityextra * itemsprice);
        arr[index].price = subtotals + arr[index].extprice;

        // console.log("updated",arr);

        showdata(arr);

    }

    function myFunc(index) {
        var priceofextra = document.querySelector(`.extraprice${index}`).value;
        arr[index].extprice = parseFloat(priceofextra);
        arr[index].price = parseFloat(arr[index].price + arr[index].extprice);

        showdata(arr);

    }

    function extNameChange(index) {
        var nameofextra = document.querySelector(`.extraname${index}`).value;
        arr[index].extname = nameofextra;
        console.log(arr);
    }

    function removeObj(index) {
        arr.splice(index, 1);
        console.log(arr);
        showdata(arr);
    }


    $("#Proceed").on("click", function (event) {
        // event.preventDefault();
        // console.log(arr.length);
        var id = $("#orderid").val();
        if(arr.length == 0){   
            var newUrl = `finalbill.php?id=${id}`;
            window.open(newUrl,'_blank');
           $("#paymentMethod").css("display", "block");
        }
       
    });

    function addInDatabase() {
        var orderId = $("#orderid").val();
        var tableId = $("#tableshow").val();
        var subtotal = $("#subtotal").val();
        var paidAmount = $("#PaidAmount").val();
        var discount = $("#Discount").val();
        var OrderData = {
            Items: arr,
            order_Id: orderId,
            table_Id: tableId,
            subTotal: subtotal,
            paidAmount: paidAmount,
            Discount: discount
        };
        // console.log(OrderData);
        $.ajax({
            // url: `${baseurl}order/create.php`, 
            url: `${baseurl}order/create.php`,
            type: "POST",
            data: JSON.stringify(OrderData),
            contentType: "application/json",
            success: function (response, status) {
                // window.location.reload();
                // console.log(response);
                // getInProgressOrder();
            },
            error: function (error) {
                console.log(error);
            }
        });
    }

    function finish() {
        var payment = $("#paymentMethods").val();
        var id = $("#orderid").val();
        const postdata = {
            id: id,
            payment: payment
        }
        $.ajax({
            // url: `${baseurl}order/create.php`, 
            url: `http://localhost/restaurant/api/order/updateorderStatus.php`,
            type: "PUT",
            data: JSON.stringify(postdata),
            contentType: "application/json",
            success: function (response, status) {
                window.location.href="createorder.php";
                // console.log(response);
                // getInProgressOrder();
            },
            error: function (error) {
                console.log(error);
            }
        });
    }

   
    var status = "";
    function getstatus() {
        var id = $("#orderid").val();
        $.ajax({
            // url: `${baseurl}order/create.php`, 
            url: `${baseurl}order/orderStatus.php?id=${id}`,
            type: "GET",
            contentType: "application/json",
            success: function (response) {
                status = response;
            },
            error: function (error) {
                console.log(error);
            }
        });
    }

</script>