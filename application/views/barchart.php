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

      <div class="col-lg-3">
        <label for="tipe">PILIH TIPE GRAFIK</label>
          <select class="form-control m-bot15"  onChange="document.location.href=this.options[this.selectedIndex].value;">
              <option value="<?php echo site_url('/Grafik/barchart/');?>">Bar Chart</option>
              <option value="<?php echo site_url('/Grafik/linechart/');?>">Line Chart</option>
              
              
          </select>
        </div>

      <?php
              foreach($data as $dat){
                  $tanggal[] = $dat->tanggal;
                  $id[] = $dat->id;
                  
              }
          ?>

      <?php
          foreach($data2 as $data2){
              $tanggal2[] = $data2->tanggal;
              $id2[] = $data2->id;
          }
      ?>


<div class="row">
        <div class="col-lg-10">
      	<tr>
        	<td><canvas id="canvas" width="1000" height="280"></canvas></td>
        </tr>
    </div>
        <div class="col-lg-2">
        <tr>
        	<td><p><span >Keterangan:  </span></p></td>
	        <td><p ><span class="label label-info">Surat masuk</span></p></td>
		    <td><p ><span class="label label-success">Surat Keluar</span></p></td>
        </tr>
       </div>
   </div>

        <!--Load chart js-->
        <script src="<?php echo base_url('assets/chartjs/Chart.min.js');?>"></script>
          <script>

                    var barChartData = {
                       
                        labels : <?php echo json_encode($tanggal);?>,
                        datasets : [

                            
                            {   
                                
                                fillColor : "rgba(151,187,205,0.5)",
                                strokeColor : "rgba(151,187,205,1)",
                                data : <?php echo json_encode($id);?>
                            },
                            {   
                                
                                fillColor : "rgba(102, 255, 102,0.5)",
                                strokeColor : "rgba(220,220,220,1)",
                                data : <?php echo json_encode($id2);?>
                            }


                        ]
                        
                        
                    }

                    var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Bar(barChartData);

                // var myDoughnut = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);
                
                
        </script>
    </div>
