<!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-bar-chart-o"></i> Grafik Surat</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="<?php echo base_url('home_con')?>">Home</a></li>
              <li><i class="fa fa-bar-chart-o"></i>Grafik</li>
            </ol>
          </div>
        </div>
<!--overview end-->
<div class="row">
  <!-- <div class="col-lg-12">
    <h4 class="page-header"> <i class="fa fa-bar-chart-o"></i> Grafik Surat Masuk</h4> -->
    <!-- <label class="control-label" for="inputSuccess">Pilih Tipe Grafik</label> -->
  <!-- </div> -->

      <div class="col-lg-3">
        <label for="tipe">PILIH TIPE GRAFIK</label>
          <select class="form-control m-bot15" id="tipe" onChange="document.location.href=this.options[this.selectedIndex].value;">
              <option> </option>
              <option value="<?php echo site_url('/Grafik/linechart/');?>">Line Chart</option>
              <option value="<?php echo site_url('/Grafik/barchart/');?>">Bar Chart</option>
              
          </select>
        </div>

    </div>