<!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-home"></i>DASHBOARD</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="<?php echo base_url('home_con')?>">Dashboard</a></li>
            </ol>
          </div>
        </div>
<!--overview end-->
<style type="text/css">
  .jumbotron{ 
      background: url(assets/gambar/Ba2.jpg); 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      /*overflow: hidden;*/
    }
  </style>



<div class="jumbotron">
  <center><h3>Selamat Datang di Website Pengarsipan Agenda Surat Masuk dan Surat Keluar </br>PKM PEJERUK</h3></center>

<!-- JUMLAH KOTAK SURAT MASUK-->
<div class="row">
  <div class="panel"></div>
   <div class="col-lg- col-md-3 col-sm-12 col-xs-12"></div>

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box blue-bg">
              <a href="<?php echo site_url('/Surat/surat_masuk/');?>"><i class="fa fa-envelope"></i></a>
              <div class="count">
                <?php
                  foreach($data as $dat){
                  $id = $dat->id;

                  echo $id;
              }?>
          </div>
              <div class="title">SURAT MASUK</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

<!-- JUMLAH KOTAK SURAT KELUAR-->
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box green-bg">
              <a href="<?php echo site_url('/Surat/surat_keluar/');?>"><i class="  fa fa-envelope-o"></i></a>
              <div class="count">
                <?php
                  foreach($data2 as $dat){
                  $id = $dat->id;

                  echo $id;
              }?>
              </div>
              <div class="title">SURAT KELUAR</div>
            </div>
            <!--/.info-box-->
          </div>

          <div class="col-lg-3 col-md-3 "></div>
         </div>

         <!-- jumbutrom end -->
</div>    


<!--carousel start-->
<div class="page-header">
<section class="panel">
  <div id="c-slide" class="carousel slide auto panel-body">
    <ol class="carousel-indicators out">
      <li class="active" data-slide-to="0" data-target="#c-slide"></li>
      <li class="" data-slide-to="1" data-target="#c-slide"></li>
      <li class="" data-slide-to="2" data-target="#c-slide"></li>
    </ol>
    <div class="carousel-inner">
      <div class="item text-center active">
        <h3>PUSKESMAS PEJERUK</h3>
        <small class="">Website Pengarsipan Surat</small>
      </div>
      <div class="item text-center">
        <h3>PUSKESMAS PEJERUK</h3>
        <small class="">Surat Masuk</small>
      </div>
      <div class="item text-center">
        <h3>PUSKESMAS PEJERUK</h3>
        <small class="">Surat Keluar</small>
      </div>
    </div>
    <a data-slide="prev" href="#c-slide" class="left carousel-control">
                      <i class="arrow_carrot-left_alt2"></i>
                  </a>
    <a data-slide="next" href="#c-slide" class="right carousel-control">
                      <i class="arrow_carrot-right_alt2"></i>
                  </a>
  </div>
</section>
</div>
<!--carousel end-->

