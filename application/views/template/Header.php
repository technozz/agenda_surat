<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>ARSIP SURAT PUSKESMAS PEJERUK</title>

  <!-- Bootstrap CSS -->
  <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">

  <link href="<?php echo base_url('assets/datatables/datatables.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/datatables/Buttons-1.5.1/buttons.bootstrap4.min.css')?>" rel="stylesheet">

  <!-- bootstrap theme -->
  <link href="<?php echo base_url('assets/css/bootstrap-theme.css')?>" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="<?php echo base_url('assets/css/elegant-icons-style.css')?>" rel="stylesheet" />
  <link href="<?php echo base_url('assets/css/font-awesome.min.css')?>" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="<?php echo base_url('assets/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')?>" rel="stylesheet" />
  <link href="<?php echo base_url('assets/assets/fullcalendar/fullcalendar/fullcalendar.css')?>" rel="stylesheet" />
  <link href="<?php echo base_url('assets/assets/fullcalendar/fullcalendar/fullcalendar.print.css')?>" rel="stylesheet" media='print'/>
  <link href="<?php echo base_url('assets/assets/fullcalendar/fullcalendar/theme.css')?>" rel="stylesheet" />

  <!-- easy pie chart-->
  <link href="<?php echo base_url('assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')?>" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.css')?>" type="text/css">
  <link href="<?php echo base_url('assets/css/jquery-jvectormap-1.2.2.css')?>" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/fullcalendar.css')?>">
  <link href="<?php echo base_url('assets/css/widgets.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/csscss/style-responsive.css')?>" rel="stylesheet" />
  <link href="<?php echo base_url('assets/css/xcharts.min.css')?>" rel=" stylesheet">
  <link href="<?php echo base_url('assets/css/jquery-ui-1.10.4.min.css')?>" rel="stylesheet">

  <!-- LIGHTBOX -->
  <link href="<?php echo base_url('assets/css/lightbox.css')?>" rel="stylesheet">
 
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="<?php echo base_url('home_con');?>" class="logo">PKM <span class="lite">PEJERUK</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          <li>
            <form class="navbar-form">
              <input class="form-control" placeholder="Search" type="text">
            </form>
          </li>
        </ul>
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">


          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img style="height: 35px; width:35px;" src="<?php echo site_url('/assets/gambar/admin/').$data3['foto'];?>" alt="">
                            </span>
                            <span class="username"><?php echo $_SESSION['user']; ?></span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="<?php echo site_url('Profil/home_profil/');?>"><i class="icon_profile"></i> My Profile</a>
              </li>
              <li>
                <a href="<?php echo site_url('Profil/hapus_akun/');?>"><i class="fa fa-plus"></i>Tambah Admin</a>
              </li>
              <li>
                <a data-toggle="modal" href="#myModal2"><i class="fa fa-power-off"></i> Log Out</a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"> LOGOUT</h4>
                      </div>
                      <div class="modal-body text-center">

                        ANDA YAKIN UNTUK KELUAR ?

                      </div>
                      <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-info" type="button">Batal</button>
                        <a href="<?php echo base_url('login/logout'); ?>"><button class="btn btn-danger fa fa-power-off" type="button"> Logout</button></a>
                      </div>
                    </div>
                  </div>
                </div>

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="">
            <a class="" href="<?php echo base_url('home_con');?>">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>


          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_mail_alt"></i>
                          <span>Surat</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="<?php echo base_url('Surat/surat_masuk/');?>">Surat Masuk</a></li>

              <li><a class="" href="<?php echo base_url('Surat/surat_keluar/');?>">Surat Keluar</a></li>
            </ul>
          </li>


          <li class="sub-menu">
            <a href="<?php echo base_url('/Kode/lihat_kode');?>" class="">
                          <i class="fa fa-cogs"></i>
                          <span>Kode Surat</span>
            </a>
          </li>


          <li class="">
            <a class="" href="<?php echo base_url('Grafik/grafik_surat/');?>">
                          <i class="fa fa-bar-chart-o"></i>
                          <span>Grafik Surat</span>
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
        