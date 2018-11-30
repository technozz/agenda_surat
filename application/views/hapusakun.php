<!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-list-alt"></i>DAFTAR AKUN</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="<?php echo base_url('home_con')?>">Home</a></li>
              <li><i class="fa fa-list-alt"></i>Daftar Akun</li>
            </ol>
          </div>
        </div>
<!--overview end-->

<!-- MODAL KE SATU -->

    <div class="card-body text-center">
                            <!-- Modal-->
                            <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                              <div role="document" class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <center><h4 id="exampleModalLabel" class="modal-title" class="text-center">Masukan Data Admin Baru</h4></center>
                                  </div>
                                  <div class="modal-body">
                                    <form method="post" action="<?php echo site_url('profil/tambahadmin'); ?>" enctype='multipart/form-data'>
                                      <div class="form-group">
                                        <label>Username</label>
                                        <input name="username" type="text"   placeholder="username" class="form-control" required>
                                      </div>
                                      <div class="form-group">
                                        <label>Password</label>
                                        <input name="password" type="Password"  placeholder="Password " class="form-control form-password" required>
                                      </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" data-dismiss="modal" class="btn btn-danger btn-sm"><i class="icon_close_alt2" aria-hidden="true"></i> Tutup</button>
                                    <button type="reset"  class="btn btn-warning btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i> Reset</button>
                                    <button name="submit" type="submit" class="btn btn-success btn-sm"><i class="fa fa-keyboard-o" aria-hidden="true"></i> Input </button>
                                  </div>
                                </form>
                                </div>
                              </div>
                            </div>
                          </div>
                          </div>


<div class="row">
    <div class="col-sm-3">
 </div>

  <!-- TABEL PERTAMA -->

<div class="row">
  <div class="col-sm-6">
    <section class="panel">
      <header class="panel-heading">
        <center>LIST ADMIN PKM PEJERUK</center>
      </header>
      <table class="table table-striped" id="dataTables">
        <thead>
          <tr>
            <th>No </th>
            <th>Username</th>
            <th>Password</th>
            <th>Aksi</th>
            <th><button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-success btn-xs" ><i class="fa fa-plus"></i> Tambah Admin</button></th>
            <!-- <th><a href="#myModal" data-toggle="modal" class="btn btn-primary btn-xs">Tambah Kode</a></th> -->
          </tr>
        </thead>
        <tbody>
          <?php $no=0;
            foreach ($data as $apa):
            	$no++;
            ?>
          <tr>
          	<td><?php echo $no;?></td>
            <td><?php echo $apa['username'];?></td>
            <td><?php echo $apa['password'];?></td>
            <td>
              <div class="btn-group">
                <a data-toggle="modal" href="#myModal3"><button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash-o fa-lg"></i> HAPUS</button></a>
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


 <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"> HAPUS AKUN </h4>
                      </div>
                      <div class="modal-body text-center">

                        <p>ANDA YAKIN UNTUK MENGHAPUS AKUN <h4>"<?php echo $apa['username'];?>" ?</h4></p>

                        <p>-- Jangan Menghapus Akun Yang Sedang Aktif Karena Dapat Menyebabkan Kegagalan Sistem --</p>

                      </div>
                      <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-info" type="button">Batal</button>
                        <a href="<?php echo site_url('/profil/hapus/').$apa['id'];?>"><button class="btn btn-danger fa fa-trash-o" type="button"> Hapus</button></a>
                      </div>
                    </div>
                  </div>
                </div>

