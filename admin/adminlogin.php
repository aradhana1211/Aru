<?php
session_start();
if (isset($_SESSION['user_name']))
{
	header("Location:index.php");
	exit();
}
?>
<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">

    <title>Login - Penabiotech</title>

   <!-- include common vendor stylesheets & fontawesome -->
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/regular.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/brands.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/solid.min.css">


    <!-- include fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600&display=swap">


        <script src="js/ajax.js"></script>

    <!-- ace.css -->
    <link rel="stylesheet" type="text/css" href="dist/css/ace.min.css">


    <!-- favicon -->
    <link rel="icon" type="image/png" href="../images/logo.png" />

    <!-- "Login" page styles, specific to this page for demo only -->
    <style>
      .body-container {
        background-image: linear-gradient(#6baace, #264783);
        background-attachment: fixed;
        background-repeat: no-repeat;
      }

      .carousel-item>div {
        height: 100%;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
      }

      /* these rules are used to make sure in mobile devices, tab panes are not all the same height (for example 'forgot' pane is not as tall as 'signup' pane) */

      @media (max-width: 1199.98px) {
        .tab-sliding .tab-pane:not(.active) {
          max-height: 0 !important;
        }

        .tab-sliding .tab-pane.active {
          min-height: 80vh;
          max-height: none !important;
        }
      }
    </style>
  </head>

  <body>
    <div class="body-container">

      <div class="main-container container bgc-transparent">

        <div class="main-content minh-100 justify-content-center">
          <div class="p-2 p-md-4">
            <div class="row" id="row-1">
              <div class="col-12 col-xl-10 offset-xl-1 bgc-white shadow radius-1 overflow-hidden">

                <div class="row" id="row-2">

                  <div id="id-col-intro" class="col-lg-5 d-none d-lg-flex border-r-1 brc-default-l3 px-0">
                    <!-- the left side section is carousel in this demo, to show some example variations -->

                    <div id="loginBgCarousel" class="carousel slide minw-100 h-100">
                      <ol class="d-none carousel-indicators">
                        <li data-target="#loginBgCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#loginBgCarousel" data-slide-to="1"></li>
                        <li data-target="#loginBgCarousel" data-slide-to="2"></li>
                        <li data-target="#loginBgCarousel" data-slide-to="3"></li>
                      </ol>

                      <div class="carousel-inner minw-100 h-100">
                        <div class="carousel-item active minw-100 h-100">
                          <!-- default carousel section that you see when you open login page -->
                          <div style="background-image: url(assets/image/login-bg-1.svg);" class="px-3 bgc-blue-l4 d-flex flex-column align-items-center justify-content-center">
                            <a class="mt-5 mb-2" href="#!">
                              <img src="../images/logo.png" height='175px' width='512px'>
                            </a>

                            <h2 class="text-primary-d1">
                              Penabiotech <span class="text-80 text-dark-l1">International</span>
                            </h2>

                            <div class="mt-auto mb-4 text-dark-tp2">
                              Designed & Developed for Penabiotech International
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>


                  <div id="id-col-main" class="col-12 col-lg-7 py-lg-5 bgc-white px-0">
                    <!-- you can also use these tab links -->
                    <ul class="d-none mt-n4 mb-4 nav nav-tabs nav-tabs-simple justify-content-end bgc-black-tp11" role="tablist">
                      <li class="nav-item mx-2">
                        <a class="nav-link active px-2" data-toggle="tab" href="#id-tab-login" role="tab" aria-controls="id-tab-login" aria-selected="true">
                          Login
                        </a>
                      </li>
                      <li class="nav-item mx-2">
                        <a class="nav-link px-2" data-toggle="tab" href="#id-tab-signup" role="tab" aria-controls="id-tab-signup" aria-selected="false">
                          Signup
                        </a>
                      </li>
                    </ul>


                    <div class="tab-content tab-sliding border-0 p-0" data-swipe="right">

                      <div class="tab-pane active show mh-100 px-3 px-lg-0 pb-3" id="id-tab-login">
                        <!-- show this in desktop -->
                        <div class="d-none d-lg-block col-md-6 offset-md-3 mt-lg-4 px-0">
                          <h4 class="text-dark-tp4 border-b-1 brc-secondary-l2 pb-1 text-130">
                            <i class="fa fa-user text-orange-m1 mr-1"></i>
                            Master Admin Login
                          </h4>
                        </div>

                        <!-- show this in mobile device -->
                        <div class="d-lg-none text-secondary-m1 my-4 text-center">
                          <a href="#!">
                           <img src="img/gurukul.png" height='75px' width='150px'>
                          </a>
                          <h1 class="text-170">
                            <span class="text-blue-d1">
                                Penabiotech <span class="text-80 text-dark-tp3">International</span>
                            </span>
                          </h1>

                          Master Admin Login
                        </div>


                        <form autocomplete="off" class="form-row mt-4" id="loginForm">
						<div class="form-group col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2">
						 <center><span id="loginStatus"></span></center>
						 </div>
                          <div class="form-group col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                            <div class="d-flex align-items-center input-floating-label text-blue brc-blue-m2">
                              <input placeholder="Username" type="text" class="form-control form-control-lg pr-4 shadow-none" value="<?php if(isset($_COOKIE["gurukul_admin"])) { echo $_COOKIE["gurukul_admin"]; } ?>" name="gurukul_admin" required />
                              <i class="fa fa-phone text-grey-m2 ml-n4"></i>
                              <label class="floating-label text-grey-l1 ml-n3" for="id-login-username">
                                Username
                              </label>
                            </div>
                          </div>


                          <div class="form-group col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3 mt-2 mt-md-1">
                            <div class="d-flex align-items-center input-floating-label text-blue brc-blue-m2">
                              <input placeholder="Password" type="password" class="form-control form-control-lg pr-4 shadow-none" value="<?php if(isset($_COOKIE["gurukul_password"])) { echo $_COOKIE["gurukul_password"]; } ?>" name="gurukul_password" required />
                              <i class="fa fa-key text-grey-m2 ml-n4"></i>
                              <label class="floating-label text-grey-l1 ml-n3" for="id-login-password">
                                Password
                              </label>
                            </div>
                          </div>


                          <div class="form-group col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                            <label class="d-inline-block mt-3 mb-0 text-dark-l1">
                              <input type="checkbox" class="mr-1" id=" customCheckLogin" name="remember" checked />
                              Remember me
                            </label>

                            <button type="submit" class="btn btn-primary btn-block px-4 btn-bold mt-2 mb-4">
                              Sign In
                            </button>

                            <a href="login.php">
                              Admin Login
                            </a>
                          </div>
                        </form>


                        <div class="form-row">
                          <div class="col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3 d-flex flex-column align-items-center justify-content-center">

                            <hr class="brc-default-l2 mt-0 mb-2 w-100" />


                          </div>
                        </div>
                      </div>


                    </div><!-- .tab-content -->
                  </div>

                </div><!-- /.row -->

              </div><!-- /.col -->
            </div><!-- /.row -->

            <div class="d-lg-none my-3 text-white-tp1 text-center">
             Design & Developed for Penabiotech International.
            </div>
          </div>
        </div>

      </div>

    </div>

<script>
$(document).ready(function(){
    // File upload via Ajax
    $("#loginForm").on('submit', function(e){
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'ajaxadmin.php',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){
                $('#loginStatus').html('<p style="color:red;">Please Wait...</p>');
            },
            error:function(){
                $('#loginStatus').html('<p style="color:red;"Fetal Error</p>');
            },
            success: function(resp){
                if(resp == 'ok'){
                    $('#loginForm')[0].reset();
                    $('#loginStatus').html('<p style="color:red;"> Welcome!</p>');
                     window.location.href = "index.php";
                }else if(resp == 'err'){
                    $('#loginStatus').html('<p style="color:red;">Invalid Login.</p>');
                }
            }
        });
    });
	
});
</script>  


        <!-- include common vendor scripts used in demo pages -->
    <script src="dist/bootstrap.min.js"></script>
    <script src="dist/jquery.min.js"></script>
    <script src="dist/popper.js"></script>


    <!-- include vendor scripts used in "Login" page. see "/views//pages/partials/page-login/@vendor-scripts.hbs" -->


    <!-- include ace.js -->
    <script src="dist/js/ace.min.js"></script>



  </body>

</html>