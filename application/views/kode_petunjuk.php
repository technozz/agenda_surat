<!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-cog fa-spin"></i>KODE SURAT</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="<?php echo base_url('home_con')?>">Home</a></li>
              <li><i class="fa fa-cog fa-spin"></i>Kode Surat</li>
            </ol>
          </div>
        </div>
<!--overview end-->

<!-- MODAL KE SATU -->

    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
            <h4 class="modal-title">Tambah Kode</h4>
          </div>
          <div class="modal-body">
            <form role="form" method="post" action="<?php echo site_url('/kode/kode_urusan_pegawai'); ?>" enctype="multipart/form-data">
              <div class="form-group">
                <label>Kode</label>
                  <input name="kode" type="text" placeholder="Kode" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Keterangan</label>
                <input name="keterangan" type="text" placeholder="Petunjuk" class="form-control" required>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>

<!-- MODAL KE DUA -->

   <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal-1" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
            <h4 class="modal-title">Tambah Kode </h4>
          </div>
          <div class="modal-body">
            <form role="form" method="post" action="<?php echo site_url('/kode/kode_urusan_umum'); ?>" enctype="multipart/form-data">
              <div class="form-group">
                <label>Kode</label>
                  <input name="kode" type="text" placeholder="Kode" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Keterangan</label>
                <input name="keterangan" type="text" placeholder="Petunjuk" class="form-control" required>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- MODAL KE TIGA -->

   <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal-2" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
            <h4 class="modal-title">Tambah Kode </h4>
          </div>
          <div class="modal-body">
            <form role="form" method="post" action="<?php echo site_url('/kode/kode_p2m'); ?>" enctype="multipart/form-data">
              <div class="form-group">
                <label>Kode</label>
                  <input name="kode" type="text" placeholder="Kode" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Keterangan</label>
                <input name="keterangan" type="text" placeholder="Petunjuk" class="form-control" required>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- MODAL KE EMPAT -->

   <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal-3" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
            <h4 class="modal-title">Tambah Kode </h4>
          </div>
          <div class="modal-body">
            <form role="form" method="post" action="<?php echo site_url('/kode/kode_pembinaan_kesehatan'); ?>" enctype="multipart/form-data">
              <div class="form-group">
                <label>Kode</label>
                  <input name="kode" type="text" placeholder="Kode" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Keterangan</label>
                <input name="keterangan" type="text" placeholder="Petunjuk" class="form-control" required>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- TABEL PERTAMA -->

<div class="row">
  <div class="col-sm-6">
    <section class="panel">
      <header class="panel-heading">
        <center>URUSAN PEGAWAI-UP 1</center>
      </header>
      <table class="table table-striped" id="dataTables">
        <thead>
          <tr>
            <th>Kode </th>
            <th>Keterangan</th>
            <th>Aksi</th>
            <th><a href="#myModal" data-toggle="modal" class="btn btn-primary btn-xs">Tambah Kode</a></th>
          </tr>
        </thead>
        <tbody>
          <?php 
            foreach ($data as $apa):
            ?>
          <tr>
            <td><?php echo $apa['kode'];?></td>
            <td><?php echo $apa['keterangan'];?></td>
            <td>
              <div class="btn-group">
                <a href="<?php echo site_url('/kode/hapus/').$apa['id'];?>"><button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash-o fa-lg"></i> HAPUS</button></a>
              </div>
            </td>
            <td>
            </td>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
    </section>
  </div>
  

<!-- Tabel Kedua Mulai -->

          <div class="col-sm-6">
            <section class="panel">
              <header class="panel-heading">
                <center>URUSAN UMUM</center>
              </header>
              <table class="table table-striped" id="dataTables2">
                <thead>
                  <tr>
                    <th>Kode </th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                    <th><a href="#myModal-1" data-toggle="modal" class="btn btn-primary btn-xs">Tambah Kode</a></th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    foreach ($data2 as $apa):
                    ?>
                  <tr>
                    <td><?php echo $apa['kode'];?></td>
                    <td><?php echo $apa['keterangan'];?></td>
                    <td>
                      <div class="btn-group">
                        <a href="<?php echo site_url('/kode/hapus2/').$apa['id'];?>"><button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash-o fa-lg"></i> HAPUS</button></a>
                      </div>
                    </td>
                    <td>
                    </td>
                  </tr>
                <?php endforeach; ?>
                </tbody>
              </table>
            </section>
          </div>
        </div>


<!-- TABEL KE TIGA -->

<div class="row">
  <div class="col-sm-6">
    <section class="panel">
      <header class="panel-heading">
        <center>P2M</center>
      </header>
      <table class="table table-striped" id="dataTables3">
        <thead>
          <tr>
            <th>Kode </th>
            <th>Keterangan</th>
            <th>Aksi</th>
            <th><a href="#myModal-2" data-toggle="modal" class="btn btn-primary btn-xs">Tambah Kode</a></th>
          </tr>
        </thead>
        <tbody>
          <?php 
            foreach ($data3 as $apa):
            ?>
          <tr>
            <td><?php echo $apa['kode'];?></td>
            <td><?php echo $apa['keterangan'];?></td>
            <td>
              <div class="btn-group">
                <a href="<?php echo site_url('/kode/hapus3/').$apa['id'];?>"><button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash-o fa-lg"></i> HAPUS</button></a>
              </div>
            </td>
            <td>
            </td>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
    </section>
  </div>


<!-- TABEL KE EMPAT -->

  <div class="col-sm-6">
    <section class="panel">
      <header class="panel-heading">
        <center> PEMBINAAN KESEHATAN (PK)</center>
      </header>
      <table class="table table-striped" id="dataTables4">
        <thead>
          <tr>
            <th>Kode </th>
            <th>Keterangan</th>
            <th>Aksi</th>
            <th><a href="#myModal-3" data-toggle="modal" class="btn btn-primary btn-xs">Tambah Kode</a></th>
          </tr>
        </thead>
        <tbody>
          <?php 
            foreach ($data4 as $apa):
            ?>
          <tr>
            <td><?php echo $apa['kode'];?></td>
            <td><?php echo $apa['keterangan'];?></td>
            <td>
              <div class="btn-group">
                <a href="<?php echo site_url('/kode/hapus4/').$apa['id'];?>"><button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash-o fa-lg"></i> HAPUS</button></a>
              </div>
            </td>
            <td>
            </td>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
    </section>
  </div>
</div>