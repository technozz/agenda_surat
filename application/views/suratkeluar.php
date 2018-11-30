<!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-envelope-o"></i> SURAT KELUAR</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="<?php echo base_url('home_con')?>">Home</a></li>
              <li><i class="fa fa-envelope-o"></i>Surat</li>
              <li><i class="fa fa-envelope"></i>Surat Keluar</li>
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
  
  <!-- Modal-->
  <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
    <div role="document" class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <center><h4 id="exampleModalLabel" class="modal-title" class="text-center">Masukan Data Surat</h4></center>
        </div>
         <form method="post" action="<?php echo site_url('/surat/suratkeluar/'); ?>" enctype="multipart/form-data">
            <div class="modal-body">
            <div class="form-group">
              <label>Kode Surat</label>
              <input name="nomor_berkas" type="text" placeholder="Kode Surat" class="form-control" required="">
            </div>
            <div class="form-group">
              <label>Alamat Penerima</label>
              <input name="alamat" type="text" placeholder="Alamat Penerima" class="form-control" required="">
            </div>
            <div class="form-group">
              <label>Tanggal Kirim</label>
              <input type='date' class="form-control" name="tanggal" placeholder="Tanggal Dikirim" required="">
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
              <input name="gambar" type="file" placeholder="foto" id="image-source" onchange="previewImage();" >
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
</div>
</div>


<div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                <div class="text-center">
                  <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Surat</button>
                  <a href="<?php echo site_url('/Excel_export/action2/');?>" target="_blank"><button type="button" class="btn btn-warning btn-md" ><i class="fa fa-file-excel-o"></i> Export Excel </button></a>
                  <a href="<?php echo site_url('/surat/print2');?>" target="_blank"><button type="button" class="btn btn-info" ><i class="fa fa-print"></i> Print To PDF </button></a>
                </div>
              </header>
              <table  id="dataTables"  class="table table-bordered">
                  <thead>
                  <tr class="success">
                    <th><i></i>No</th>
                    <th><i></i> Kode</th>
                    <th><i></i> Alamat Penerima</th>
                    <th><i></i> Tanggal Kirim</th>
                    <th><i></i> Perihal</th>
                    <th><i></i> No Petunjuk</th>
                    <th><i></i> Gambar</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $no=0;
                    foreach ($data as $apa):
                      $no++;
                    ?>
                  <tr class="active">
                    <td><?php echo $no;?></td>
                    <td><?php echo $apa['kode'];?></td>
                    <td><?php echo $apa['alamat'];?></td>
                    <td><?php echo date("d-m-Y",strtotime($apa['tanggal']));?></td>
                    <td><?php echo $apa['perihal'];?></td>
                    <td><?php echo $apa['n_petunjuk'];?></td>
                    <td><a href="<?php echo site_url('/assets/gambar/surat_keluar/').$apa['gambar'];?>" data-lightbox="mygallery"><center><i class="fa fa-image fa-3x"></i></center></a></td>
                    <td>
                      <div class="btn-group" align="center">
                        <a href="<?php echo site_url('Surat_keluar/edit2/').$apa['id'];?>"><button data-placement="left" data-toggle="tooltip" type="button" class="btn btn-info btn-xs tooltips" data-original-title="Edit Surat"><i class="fa fa-edit"></i> EDIT </button></a>
                        <a href="<?php echo site_url('Surat_keluar/hapus2/').$apa['id'];?>"><button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash-o fa-lg"></i> HAPUS</button></a>
                        <a href="<?php echo site_url('Surat_keluar/gambar2/').$apa['id'];?>"><button data-placement="left" data-toggle="tooltip" type="button" class="btn btn-info btn-xs tooltips" data-original-title="Edit Foto"><i class="fa fa-image"></i> FOTO</button></a>                     
                      </div>
                    </td>
                  </tr>
                <?php endforeach; ?>
                </tbody>
              </table>
            </section>
          </div>
        </div>