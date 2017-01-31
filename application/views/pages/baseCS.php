<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Temu Barang</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/js/bootstrap-daterangepicker/daterangepicker.css" />

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <section id="container">
        <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
        <!--header start-->
        <header class="header black-bg">
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
            </div>
            <!--logo start-->
            <a href="#" class="logo"><b>TEMU BARANG</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                
                <!--  notification end -->
            </div>
            <div class="top-menu">
                <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="<?php echo base_url('login/logout'); ?>">Logout</a></li>
                </ul>
            </div>
        </header>
        <!--header end-->

        <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">

                    <p class="centered">
                        <a href="#"><img src="<?php echo base_url();?>assets/img/pp/<?php $profile = $this->session->userdata('profile');
                            echo $profile['0']['foto_user']; ?>"
                   class="img-circle" width="60" height="60"></a>
                    </p>
                    <h5 class="centered"><?php 
                  $profile = $this->session->userdata('profile');
                  echo $profile['0']['nama_user']; ?></h5>

                    <!-- <li class="mt">
                        <a href="index.html">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-desktop"></i>
                            <span>UI Elements</span>
                        </a>
                        <ul class="sub">
                            <li><a href="general.html">General</a></li>
                            <li><a href="buttons.html">Buttons</a></li>
                            <li><a href="panels.html">Panels</a></li>
                        </ul>
                    </li> -->

                    <li class="sub-menu">
                        <a href="<?php echo base_url();?>cs/tampiledit">
                            <i class="fa fa-cogs"></i>
                            <span>Edit Profile</span>
                        </a>
                        <!-- <ul class="sub">
                            <li><a href="calendar.html">Calendar</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="todo_list.html">Todo List</a></li>
                        </ul> -->
                    </li> 
                    <li class="sub-menu">
                        <a href="<?php echo base_url();?>cs">
                            <i class="fa fa-book"></i>
                            <span>Tambah Barang</span>
                        </a>
                        <!-- <ul class="sub">
                            <li><a href="blank.html">Blank Page</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="lock_screen.html">Lock Screen</a></li>
                        </ul> -->
                    </li>
                    <!-- <li class="sub-menu">
                        <a class="active" href="javascript:;">
                            <i class="fa fa-tasks"></i>
                            <span>Forms</span>
                        </a>
                        <ul class="sub">
                            <li class="active"><a href="form_component.html">Form Components</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-th"></i>
                            <span>Data Tables</span>
                        </a>
                        <ul class="sub">
                            <li><a href="basic_table.html">Basic Table</a></li>
                            <li><a href="responsive_table.html">Responsive Table</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class=" fa fa-bar-chart-o"></i>
                            <span>Charts</span>
                        </a>
                        <ul class="sub">
                            <li><a href="morris.html">Morris</a></li>
                            <li><a href="chartjs.html">Chartjs</a></li>
                        </ul>
                    </li> -->

                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->

<?php echo $content; ?>
 <!--footer start-->
        <footer class="site-footer">
            <div class="text-center">
                2017 - Kelompok 1 - Temu Barang - SMK Telkom Malang
                <!-- <a href="" class="go-top">
                    <i class="fa fa-angle-up"></i>
                </a> -->
            </div>
        </footer>
        <!--footer end-->
    </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="<?php echo base_url();?>assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="<?php echo base_url();?>assets/js/jquery-ui-1.9.2.custom.min.js"></script>

    <!--custom switch-->
    <script src="<?php echo base_url();?>assets/js/bootstrap-switch.js"></script>

    <!--custom tagsinput-->
    <script src="<?php echo base_url();?>assets/js/jquery.tagsinput.js"></script>

    <!--custom checkbox & radio-->

    <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-daterangepicker/date.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-daterangepicker/daterangepicker.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>


    <script src="<?php echo base_url();?>assets/js/form-component.js"></script>


    <script>
        //custom select box

        $(function() {
            $('select.styled').customSelect();
        });
    </script>

</body>

</html>