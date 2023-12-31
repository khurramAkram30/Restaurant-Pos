<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- FAVICON -->
    <!-- <link rel="shortcut icon" type="image/x-icon" href="../assets/images/brand/favicon.ico" /> -->
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

    <style>
        .login-img::before {
            content: "";
            background: linear-gradient(to right, rgb(0 0 0 / 60%) 0%, #dcf7ff91 100%) !important;
            height: 100%;
            width: 100%;
            position: absolute;
        }
    </style>
</head>

<body class="app sidebar-mini ltr login-img">

    <!-- BACKGROUND-IMAGE -->
    <div class="">

        <!-- GLOABAL LOADER -->
        <div id="global-loader">
            <img src="../assets/images/loader.svg" class="loader-img" alt="Loader">
        </div>
        <!-- /GLOABAL LOADER -->

        <!-- PAGE -->
        <div class="page">
            <div class="">

                <!-- CONTAINER OPEN -->
                <div class="col col-login mx-auto mt-7">
                    <div class="text-center">
                        <a href="index.html"><img src="../assets/images/brown-munde.png" height="120px"
                                class="header-brand-img" alt=""></a>
                    </div>
                </div>

                <div class="container-login100">
                    <div class="wrap-login100 p-6">
                        <form class="login100-form validate-form">
                            <span class="login100-form-title pb-5">
                                Login
                            </span>
                            <div class="panel panel-primary">
                                <div class="tab-menu-heading">
                                    <div class="tabs-menu1">
                                        <!-- Tabs -->
                                        <ul class="nav panel-tabs">
                                            <!-- <li class="mx-0"><a href="#tab5" class="active" data-bs-toggle="tab">Email</a></li> -->
                                            <!-- <li class="mx-0"><a href="#tab6" data-bs-toggle="tab">Mobile</a></li> -->
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body tabs-menu-body p-0 pt-5">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab5">
                                            <div class="wrap-input100 validate-input input-group"
                                                data-bs-validate="Valid email is required: ex@abc.xyz">
                                                <a href="javascript:void(0)"
                                                    class="input-group-text bg-white text-muted">
                                                    <i class="zmdi zmdi-account text-muted" aria-hidden="true"></i>
                                                </a>
                                                <input class="input100 border-start-0 form-control ms-0" type="text"
                                                    id="username" placeholder="Email">
                                            </div>
                                            <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                                <a href="javascript:void(0)"
                                                    class="input-group-text bg-white text-muted">
                                                    <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                                </a>
                                                <input class="input100 border-start-0 form-control ms-0" type="password"
                                                    id="password" placeholder="Password">
                                            </div>
                                            <div class="text-end pt-4">
                                                <!-- <p class="mb-0"><a href="forgot-password.html" class="text-primary ms-1">Forgot Password?</a></p> -->
                                            </div>
                                            <div class="container-login100-form-btn">
                                                <a onclick="login()" class="login100-form-btn "
                                                    style="background: #cccccc;">
                                                    Login
                                                </a>
                                            </div>
                                            <!-- <div class="text-center pt-3">
                                                <p class="text-dark mb-0">Not a member?<a href="register.html" class="text-primary ms-1">Sign UP</a></p>
                                            </div>
                                            <label class="login-social-icon"><span>Login with Social</span></label>
                                            <div class="d-flex justify-content-center">
                                                <a href="javascript:void(0)">
                                                    <div class="social-login me-4 text-center">
                                                        <i class="fa fa-google"></i>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <div class="social-login me-4 text-center">
                                                        <i class="fa fa-facebook"></i>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <div class="social-login text-center">
                                                        <i class="fa fa-twitter"></i>
                                                    </div>
                                                </a>
                                            </div> -->
                                        </div>
                                        <div class="tab-pane" id="tab6">
                                            <div id="mobile-num" class="wrap-input100 validate-input input-group mb-4">
                                                <a href="javascript:void(0)"
                                                    class="input-group-text bg-white text-muted">
                                                    <span>+91</span>
                                                </a>
                                                <input class="input100 border-start-0 form-control ms-0">
                                            </div>
                                            <div id="login-otp" class="justify-content-around mb-5">
                                                <input class="form-control text-center w-15" id="txt1" maxlength="1">
                                                <input class="form-control text-center w-15" id="txt2" maxlength="1">
                                                <input class="form-control text-center w-15" id="txt3" maxlength="1">
                                                <input class="form-control text-center w-15" id="txt4" maxlength="1">
                                            </div>
                                            <span>Note : Login with registered mobile number to generate OTP.</span>
                                            <div class="container-login100-form-btn ">
                                                <a href="javascript:void(0)" class="login100-form-btn btn-primary"
                                                    id="generate-otp">
                                                    Proceed
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <!-- CONTAINER CLOSED -->
            </div>
        </div>
        <!-- End PAGE -->

    </div>
    <!-- BACKGROUND-IMAGE CLOSED -->

    <!-- JQUERY JS -->
    <script src="../assets/js/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- SHOW PASSWORD JS -->
    <script src="../assets/js/show-password.min.js"></script>

    <!-- GENERATE OTP JS -->
    <script src="../assets/js/generate-otp.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="../assets/plugins/p-scroll/perfect-scrollbar.js"></script>

    <!-- Color Theme js -->
    <script src="../assets/js/themeColors.js"></script>
    <script src="../assets/js/amigos.js"></script>
    <!-- CUSTOM JS -->
    <script src="../assets/js/custom.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-messaging.js"></script>


</body>
<script>
     const firebaseConfig = {
            apiKey: "AIzaSyAz7ZADD0Rp2faTg3xXkfwG6dUQ0TVtXFc",
            authDomain: "pushnotificationkhurram.firebaseapp.com",
            projectId: "pushnotificationkhurram",
            storageBucket: "pushnotificationkhurram.appspot.com",
            messagingSenderId: "739387410055",
            appId: "1:739387410055:web:62960343d9b7eea45b9a22"
        };

        const app = firebase.initializeApp(firebaseConfig);
        const messaging = firebase.messaging();

        document.addEventListener('DOMContentLoaded', function () {
    Notification.requestPermission().then(permission => {
        if (permission === "granted") {
            messaging.getToken({ vapidKey: "BJ1xR-TyHNF61iEy5KgMzHgIo6_bGPPJkeC3_gCHQ9lPejvgcmqBF49CRlK7-xK220QVAwXT4KbOFBDZuxeFupg" })
       .then(function (fcmToken) {
                    console.log("Current Token: " + fcmToken);
                })
                .catch(function (error) {
                    console.error("Error getting FCM token:", error);
                });
        }
    });
});
function login() {
    var username = $("#username").val();
    var pswd = $("#password").val();

    if (username == "BrownMunde" && pswd == "BrownMunde12345") {
        messaging.getToken({ vapidKey: "BJ1xR-TyHNF61iEy5KgMzHgIo6_bGPPJkeC3_gCHQ9lPejvgcmqBF49CRlK7-xK220QVAwXT4KbOFBDZuxeFupg" })
         .then(function (fcmToken) {
                console.log("New Token: " + fcmToken);

                var postdata = {
                    name: username,
                    token: fcmToken
                };

                // Now you can make your AJAX call or perform other actions that depend on the fcmToken
                $.ajax({
                    url: "http://localhost/restaurant/api/firebase_push_notification/create.php",
                    type: "POST",
                    data: JSON.stringify(postdata),
                    contentType: "application/json",
                    success: function (response) {
                        console.log(response);
                    },
                    error: function (error) {
                        console.log(error);
                    },
                });

                sessionStorage.setItem("username", username);
                window.location.href = "Dashboard.php";
            })
            .catch(function (error) {
                console.error("Error getting FCM token:", error);
            });
    } else {
        alert("Incorrect username and Password");
    }
}

</script>

</html>