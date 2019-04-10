<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="ThemeBucket" />
    <link rel="shortcut icon" href="images/favicon.png" />
    <title>Profile</title>
    <!--Core CSS -->
    <link href="../bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-reset.css" rel="stylesheet">
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/style-responsive.css" rel="stylesheet" />

</head>
<body>
<section id="container">
    <!--header start-->
    <header class="header fixed-top clearfix">
        <!--logo start-->
        <div class="brand">

            <a href="index.html" class="logo">
                <img src="images/logo.png" alt="" />
            </a>
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars"></div>
            </div>
        </div>
        <!--logo end-->

        <div class="top-nav clearfix">
            <!--search & user info start-->
            <ul class="nav pull-right top-menu">

                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" src="images/avatar1_small.jpg" />
                        <span class="username">John Doe</span>
                        <b class="caret"></b>
                    </a>
                </li>
                <!-- user login dropdown end -->

            </ul>
            <!--search & user info end-->
        </div>
    </header>
    <!--header end-->
    <!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a href="index.html">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-laptop"></i>
                    <span>Categories</span>
                </a>
                <ul class="sub">
                    <li><a href="#">Create</a></li>
                    <li><a href="#">View</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-book"></i>
                    <span>Stories</span>
                </a>
                <ul class="sub">
                    <li><a href="#">Create</a></li>
                    <li><a href="#">View</a></li>
                </ul>
            </li>
            <li>
                <a href="fontawesome.html">
                    <i class="fa fa-bullhorn"></i>
                    <span>Profile </span>
                </a>
            </li>

            <li>
                <a href="login.html">
                    <i class="fa fa-user"></i>
                    <span>Log Out</span>
                </a>
            </li>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">

       <div class="row">
            <div class="col-md-12">
                <section class="panel">
                    <div class="panel-body profile-information">
                       <div class="col-md-3">
                           <div class="profile-pic text-center">
                               <img src="images/lock_thumb.jpg" alt=""/>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="profile-desk">
                               <h1>David Rojormillan</h1>
                               <span class="text-muted">Email:  | Phone: </span>
                               <br>
                               <a href="registration.html" class="btn btn-primary">Add Story</a>
                           </div>
                       </div>
                       <div class="col-md-3">
                           <div class="profile-statistics">
                               <h1>1240</h1>
                               <p>Stories</p>
                               <h1>50</h1>
                               <p>BookMarks</p>

                           </div>
                       </div>
                    </div>
                </section>
            </div>
        </div> <!-- End -->


        <!-- start of header -->
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Edit Profile
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">First Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Last Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="Email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Phone Number</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">Change Profile Photo</label>
                                    <input type="file" id="exampleInputFile">
                                    <p class="help-block">Format: PNG, JPG (< 1MB)</p>
                                </div>
                                <div class="form-group">
                                  <button type="submit" class="btn btn-info">Submit</button>
                                    </div>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
        </div>

    </section>
    </section>
    <!--main content end-->

</section>
<!-- Placed js at the end of the document so the pages load faster -->
<!--Core js-->
<!--Core js-->
<script src="../js/lib/jquery.js"></script>
<script src="../bs3/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="../js/accordion-menu/jquery.dcjqaccordion.2.7.js"></script>
<script src="../js/scrollTo/jquery.scrollTo.min.js"></script>
<script src="../assets/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
<script type="text/javascript" src="../assets/ckeditor/ckeditor.js"></script>

<!--common script init for all pages-->
<script src="../js/scripts.js"></script>

<!--icheck init -->
<script src="../js/icheck/icheck-init.js"></script>
</body>
</html>