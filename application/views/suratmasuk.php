<!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-envelope-o"></i> SURAT MASUK</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="<?php echo base_url('home_con')?>">Home</a></li>
              <li><i class="fa fa-envelope-o"></i>Surat</li>
              <li><i class="fa fa-envelope"></i>Surat Masuk</li>
            </ol>
          </div>
        </div>
<!--overview end-->
<style type="text/css">
    #image-preview{
      display:none;
      width : 250px;
      height : 300px;
  }
</style>

<div class="card-body text-center">
  
  <!-- Modal Tambah Surat-->
  <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
    <div role="document" class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <center><h4 id="exampleModalLabel" class="modal-title" class="text-center">Masukan Data Surat</h4></center>
        </div>
          <form method="post" action="<?php echo site_url('/surat/suratmasuk/'); ?>" enctype="multipart/form-data">
            <div class="modal-body">
            <div class="form-group">
              <label>Kode Surat</label>
              <input name="nomor_berkas" type="text" placeholder="Kode Surat"  class="form-control" required="">
            </div>
            <div class="form-group">
              <label>Alamat Pengirim</label>
              <input name="alamat" type="text" placeholder="Alamat Pengirim" class="form-control" required="">
            </div>
            <div class="form-group">
              <label>Tanggal Surat</label>
              <input name="tanggal_surat" type='date' class="form-control" placeholder="Tanggal Surat" required="">
            </div>
            <div class="form-group">
              <label>Tanggal Diterima</label>
              <input name="tanggal_terima" type='date' class="form-control" placeholder="Tanggal Diterima" required="">
            </div>
            <div class="form-group">
              <label>Nomor</label>
              <input name="nomor" type="text" placeholder="Nomor" class="form-control" required="">
            </div>
            <div class="form-group">
              <label>Perihal</label>
              <input name="perihal" type="text" placeholder="Perihal" class="form-control" required="">
            </div>
            <div class="form-group">
              <label>Nomor Petunjuk</label>
              <input name="nomor_petunjuk" type="text" placeholder="Nomor Petunjuk" class="form-control" required="">
            </div>
            <div class="form-group" align="center">
              <label >Foto Surat</label>
              <img id="image-preview" alt="image preview" class="img-thumbnail img-responsive">
              <br/>
              <input name="gambar" id="image-source" onchange="previewImage();" type="file" placeholder="foto" >
            </div>
          </div>
            <div class="modal-footer">
              <button type="button" data-dismiss="modal" class="btn btn-danger btn-sm"><i class="icon_close_alt2" aria-hidden="true"></i> Tutup</button>
              <button type="reset"  class="btn btn-warning btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i> Reset</button>
              <button name="submit" type="submit" value="upload"  class="btn btn-success btn-sm"><i class="fa fa-keyboard-o" aria-hidden="true"></i> Input </button>
          </div>
        </form>
  </div>
</div>
</div></div>

<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        <div class="text-center">
          <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-success" ><i class="fa fa-plus"></i> Tambah Surat</button>
          <a href="<?php echo site_url('/Excel_export/action/');?>" target="_blank"><button type="button" class="btn btn-warning" ><i class="fa fa-file-excel-o"></i> Export Excel</button></a>
          <a href="<?php echo site_url('/surat/print');?>" target="_blank"><button type="button" class="btn btn-info" ><i class="fa fa-print"></i> Print To PDF </button></a>
          <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-success" ><i class="fa fa-plus"></i> Pencarian Lanjutan</button>
        </div>
      </header>
                <table  id="dataTables" class="table table-bordered">
                  <thead>
                    <tr class="success">
                      <th>No</th>
                      <th>Kode</th>
                      <th>Alamat</th>
                      <th>Tanggal Surat</th>
                      <th>Tanggal Diterima</th>
                      <th>Perihal</th>
                      <th>No Petunjuk</th>
                      <th>Gambar</th>
                      <th>Aksi</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php $no=0;
                      foreach ($data as $apa):
                        $no++;
                      ?>
                      <tr class="active my-image">
                      <td><?php echo $no; ?></td>
                      <td><?php echo $apa['kode'];?></td>
                      <td><?php echo $apa['alamat'];?></td>
                      <td><?php echo date("d-m-Y",strtotime($apa['tanggal_surat']));?></td>
                      <td><?php echo date("d-m-Y",strtotime($apa['nomor']));?></td>
                      <td><?php echo $apa['perihal'];?></td>
                      <td><?php echo $apa['n_petunjuk'];?></td>
                      <td><a href="<?php echo site_url('/assets/gambar/surat_masuk/').$apa['gambar'];?>" data-lightbox="my-image"><center><i class="fa fa-image fa-3x"></i></center></a></td>
                      <td>
                        <div class="btn-group" align="center">
                          <a href="<?php echo site_url('/surat/edit/').$apa['id'];?>"><button data-placement="left" data-toggle="tooltip" type="button" class="btn btn-info btn-xs tooltips" data-original-title="Edit Surat"><i class="fa fa-edit"></i> EDIT </button></a>
                          <a href="<?php echo site_url('/surat/hapus/').$apa['id'];?>"><button data-placement="right" data-toggle="tooltip" type="button" class="btn btn-danger btn-xs tooltips" data-original-title=""><i class="fa fa-trash-o "></i> HAPUS</button></a>
                          <a href="<?php echo site_url('/surat/gambar/').$apa['id'];?>"><button button data-placement="left" data-toggle="tooltip" type="button" class="btn btn-info btn-xs tooltips" data-original-title="Edit Foto Surat"><i class="fa fa-image "></i> FOTO</button></a>
                        </div>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
              </table>
            </section>
          </div>
    </div>










