<?php
session_start();
include("../database.php");

if(!isset($_SESSION["user_name"]))
    { 
      
        header("location:login.php");
    } else {
      $id =$_SESSION["id"];
      $result = mysqli_query($con,"SELECT * FROM users WHERE id='$id'");
      $row  = mysqli_fetch_array($result);
      if(is_array($row)) {
        $usename = $row['name'];
        $role = $row['designation'];
      }
  } ?>
<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">

    <title>Admin | Franmax International</title>

    <!-- include common vendor stylesheets & fontawesome -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/regular.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/brands.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/solid.min.css">



    <!-- include vendor stylesheets used in "DataTables" page. see "/views//pages/partials/table-datatables/@vendor-stylesheets.hbs" -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/datatables.net-bs4@1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/datatables.net-buttons-bs4@1.7.0/css/buttons.bootstrap4.min.css">


    <!-- include fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600&display=swap">



    <!-- ace.css -->
    <link rel="stylesheet" type="text/css" href="./dist/css/ace.min.css">


    <!-- favicon -->
    <link rel="icon" type="image/png" href="../images/logo.jpg" />

    <!-- "DataTables" page styles, specific to this page for demo only -->
    <style>
      .body-container {
        /* so that sticky thead works */
        overflow: visible;
      }

      thead.is-stuck>tr>th {
        border-bottom: 1px solid #e8e8e8 !important;
      }

      .dt-print-view {
        background-color: #fff;
      }

      .dt-print-view .dataTable th:nth-child(1),
      .dt-print-view .dataTable th:nth-child(2),
      .dt-print-view .dataTable th:last-child,
      .dt-print-view .dataTable td:nth-child(1),
      .dt-print-view .dataTable td:nth-child(2),
      .dt-print-view .dataTable td:last-child {
        display: none
      }
    </style>
  </head>

  <body>
    <div class="body-container">
      <nav class="navbar navbar-expand-lg navbar-fixed navbar-blue">
        <div class="navbar-inner">

          <div class="navbar-intro justify-content-xl-between">

            <button type="button" class="btn btn-burger burger-arrowed static collapsed ml-2 d-flex d-xl-none" data-toggle-mobile="sidebar" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle sidebar">
              <span class="bars"></span>
            </button><!-- mobile sidebar toggler button -->

            <a class="navbar-brand text-white text-120" href="#">
              <i class="fa fa-leaf"></i>
              <span>Franmax</span>
            </a><!-- /.navbar-brand -->

            <button type="button" class="btn btn-burger mr-2 d-none d-xl-flex" data-toggle="sidebar" data-target="#sidebar" aria-controls="sidebar" aria-expanded="true" aria-label="Toggle sidebar">
              <span class="bars"></span>
            </button><!-- sidebar toggler button -->

          </div><!-- /.navbar-intro -->
          


          <!-- mobile #navbarMenu toggler button -->
          <button class="navbar-toggler ml-1 mr-2 px-1" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navbar menu">
            <span class="pos-rel">
                  <img class="border-2 brc-white-tp1 radius-round" width="36" src="assets/image/avatar/avatar6.jpg" alt="Jason's Photo">
                  <span class="bgc-warning radius-round border-2 brc-white p-1 position-tr mr-n1px mt-n1px"></span>
            </span>
          </button>


          <div class="navbar-menu collapse navbar-collapse navbar-backdrop" id="navbarMenu">

            <div class="navbar-nav">
              <ul class="nav">


                <li class="nav-item dropdown order-first order-lg-last">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img id="id-navbar-user-image" class="d-none d-lg-inline-block radius-round border-2 brc-white-tp1 mr-2 w-6" src="assets/image/avatar/avatar6.jpg" alt="Jason's Photo">
                    <span class="d-inline-block d-lg-none d-xl-inline-block">
                              <span class="text-90" id="id-user-welcome">Welcome,</span>
                    <span class="nav-user-name"><?php echo $usename;?></span>
                    </span>

                    <i class="caret fa fa-angle-down d-none d-xl-block"></i>
                    <i class="caret fa fa-angle-left d-block d-lg-none"></i>
                  </a>

                  <div class="dropdown-menu dropdown-caret dropdown-menu-right dropdown-animated brc-primary-m3 py-1">
                    <div class="d-none d-lg-block d-xl-none">
                      <div class="dropdown-header">
                        Welcome, Admin
                      </div>
                      <div class="dropdown-divider"></div>
                    </div>
                    
                    
                    <div class="dropdown-divider brc-primary-l2"></div>
                    <a class="dropdown-item btn btn-outline-grey bgc-h-secondary-l3 btn-h-light-secondary btn-a-light-secondary" href="../admin/logout.php">
                      <i class="fa fa-power-off text-warning-d1 text-105 mr-1"></i>
                      Logout
                    </a>

                    <div class="dropdown-divider brc-primary-l2"></div>
                    <a class="dropdown-item btn btn-outline-grey bgc-h-secondary-l3 btn-h-light-secondary btn-a-light-secondary" href="../admin/myprofile.php?user_id=<?php echo $id; ?>">
                      <i class="fa fa-user text-warning-d1 text-105 mr-1"></i>
                      My profile
                    </a>
                  </div>
                </li><!-- /.nav-item:last -->

              </ul><!-- /.navbar-nav menu -->
            </div><!-- /.navbar-nav -->

          </div><!-- /#navbarMenu -->


        </div><!-- /.navbar-inner -->
      </nav>
      <div class="main-container bgc-white">

        <div id="sidebar" class="sidebar sidebar-fixed expandable sidebar-light">
          <div class="sidebar-inner">

            <div class="ace-scroll flex-grow-1" data-ace-scroll="{}">

              <ul class="nav has-active-border active-on-right">


                <li class="nav-item-caption">
                  <span class="fadeable pl-3">MAIN</span>
                  <span class="fadeinable mt-n2 text-125">&hellip;</span>
                  <!--
               			OR something like the following (with `.hideable` text)
               		-->
                  <!--
               			<div class="hideable">
               				<span class="pl-3">MAIN</span>
               			</div>
               			<span class="fadeinable mt-n2 text-125">&hellip;</span>
               		-->
                </li>


                <li class="nav-item">

                  <a href="index.php" class="nav-link">
                    <i class="nav-icon fa fa-tachometer-alt"></i>
                    <span class="nav-text fadeable">
               	  <span>Dashboard</span>
                    </span>


                  </a>

                  <b class="sub-arrow"></b>

                </li>


                <li class="nav-item">

                  <a href="category.php" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <span class="nav-text fadeable">
               	  <span>Categories</span>
                    </span>


                  </a>

                  <b class="sub-arrow"></b>

                </li>
                <li class="nav-item">

                  <a href="products.php" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <span class="nav-text fadeable">
               	  <span>Products</span>
                    </span>


                  </a>

                  <b class="sub-arrow"></b>

                </li>
                <li class="nav-item">
                  <a href="search.php" class="nav-link">
                    <i class="nav-icon fas fa-search"></i>
                    <span class="nav-text fadeable">
               	      <span>Search</span>
                    </span>
                  </a>
                  <b class="sub-arrow"></b>
                </li>
                <li class="nav-item">
                  <a href="add.php" class="nav-link">
                    <i class="nav-icon fas fa-plus"></i>
                    <span class="nav-text fadeable">
                      <span>Add lead</span>
                    </span>
                  </a>
                  <b class="sub-arrow"></b>
                </li>
                <li class="nav-item">
                  <a href="uploadlead.php" class="nav-link">
                    <i class="nav-icon fas fa-upload"></i>
                    <span class="nav-text fadeable">
                      <span>Upload Leads In Excel</span>
                    </span>
                  </a>
                  <b class="sub-arrow"></b>
                </li>
                
                <li class="nav-item">

                  <a href="newsletter.php" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <span class="nav-text fadeable">
               	  <span>Enquiry</span>
                    </span>


                  </a>

                  <b class="sub-arrow"></b>

                </li>
                <?php if($role != 'user' ) {?>
                <li class="nav-item">
                  <a href="userindex.php" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <span class="nav-text fadeable">
               	  <span>User</span>
                    </span>


                  </a>

                  <b class="sub-arrow"></b>

                </li>
                <?php } ?>
                 <li class="nav-item">
                  <a href="brandindex.php" class="nav-link">
                    <i class="nav-icon fa fa-bold"></i>
                    <span class="nav-text fadeable">
                  <span>Brand</span>
                    </span>


                  </a>

                  <b class="sub-arrow"></b>

                </li>
                <li class="nav-item">

                  <a href="quatation.php" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <span class="nav-text fadeable">
               	  <span>Quatation</span>
                    </span>


                  </a>

                  <b class="sub-arrow"></b>

                </li>
                <li class="nav-item">

                  <a href="banner_images.php" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <span class="nav-text fadeable">
               	  <span>Banner Images</span>
                    </span>


                  </a>

                  <b class="sub-arrow"></b>

                </li>
                <li class="nav-item">

                  <a href="newsindex.php" class="nav-link">
                    <i class="nav-icon far fa-newspaper"></i>
                    <span class="nav-text fadeable">
                  <span>News</span>
                    </span>


                  </a>

                  <b class="sub-arrow"></b>

                </li>

                <li class="nav-item">
                  <a href="manage.php" class="nav-link">
                    <i class="nav-icon far fa-newspaper"></i>
                    <span class="nav-text fadeable">
                    <span>Manage Website</span>
                    </span>
                  </a>
                  <b class="sub-arrow"></b>
                </li>

              </ul>

            </div><!-- /.sidebar scroll -->


            <div class="sidebar-section">
              <div class="sidebar-section-item fadeable-bottom">
                <div class="fadeinable">
                  <!-- shows this when collapsed -->
                  <div class="pos-rel">
                    <img alt="Alexa's Photo" src="assets/image/avatar/avatar3.jpg" width="42" class="px-1px radius-round mx-2 border-2 brc-default-m2" />
                    <span class="bgc-success radius-round border-2 brc-white p-1 position-tr mr-1 mt-2px"></span>
                  </div>
                </div>

              </div>
            </div>

          </div>
        </div>