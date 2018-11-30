<!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-user"></i> Profile </h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="<?php echo base_url('home_con')?>">Home</a></li>
              <li><i class="fa fa-user"></i>Profil</li>
            </ol>
          </div>
        </div>
<!--overview end-->



 <div class="row">
          <!-- profile-widget -->
          <div class="col-lg-12">
            <div class="profile-widget profile-widget-info">
              <div class="panel-body">
                <div class="col-lg-2 col-sm-2">
                  <h4><?php echo $_SESSION['user'];?></h4>
                  <div class="follow-ava my-image">
                    <a href="<?php echo site_url('/assets/gambar/admin/').$data['foto'];?>" data-lightbox="my-image"><img style="height: 70px; width:70px;" src="<?php echo site_url('/assets/gambar/admin/').$data['foto'];?>"></a>
                  </div>
                  <h6>ADMINISTRATOR</h6>
                </div>
                <div class="col-lg-4 col-sm-6 follow-info text-center">
                      <h6>ABOUT ME</h6>
                      <P><?php echo $data['about'];?></P> 
                </div>                 
                
                <div class="col-lg-2 col-sm-6 follow-info weather-category">
                  <ul>
                    <li class="active">

                      <i class="fa fa-trash-o fa-2x"> </i><a href="<?php echo site_url('Profil/hapus_akun/');?>"><button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i> Hapus Akun </button></a>
                    </li>
                  </ul>
                </div>

                <div class="col-lg-2 col-sm-6 follow-info weather-category">
                  <ul>
                    <li class="active">
                      <i class="fa fa-edit fa-2x"></i>
                      <a href="<?php echo site_url('Profil/editprofil/').$data['id'];?>"><button type="button" class="btn btn-warning"><i class="fa fa-edit"></i> Edit Biografi </button></a>
                    </li>
                  </ul>
                </div>

                <div class="col-lg-2 col-sm-6 follow-info weather-category">
                  <ul>
                    <li class="active">

                      <i class="fa fa-pencil-square-o fa-2x"> </i>
                      <a href="<?php echo site_url('Profil/editakun/').$data['id'];?>"><button type="button" class="btn btn-info"><i class="fa fa-pencil-square-o"></i> Edit Akun </button></a>
                    </li>
                  </ul>
                </div>

              </div>                  
            </div>

          </div>
        </div>
        <!-- page start-->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading tab-bg-info">
                <ul class="nav nav-tabs">
                  <li class="active" >
                    <a data-toggle="tab" href="#profile"><i class="icon_profile"></i>Profile</a>
                </ul>
              </header>

             <!-- <div class="panel-body"> -->
              <div id="profile" class="tab-pane">
                    <section class="panel">
                      
                      <div class="panel-body bio-graph-info">
                        <h1>Bio Graph</h1>
                        <div class="row">
                        
                          
                          <thead>
                            <tr>
                              <div class="bio-row">
                                <th>
                                  <p><span>Nama </span>: <?php echo $data['nama'];?> </p>
                                </th>
                              </div>
                              <div class="bio-row">
                                  <th>
                                  <p><span>Username </span>: <?php echo $data['username'];?></p>
                                  </th>
                              </div>
                              <div class="bio-row">
                                  <th>
                                  <p><span>Alamat</span>: <?php echo $data['alamat'];?></p>
                                  </th>
                              </div>
                              <div class="bio-row">
                                  <th>
                                  <p><span>Email </span>: <?php echo $data['email'];?></p>
                                  </th>
                                  </div>
                              <div class="bio-row">
                                  <th>
                                  <p><span>Jenis Kelamin </span>: <?php echo $data['jk'];?></p>
                                  </th>
                              </div>
                              <div class="bio-row">
                                  <th>
                                  <p><span>No HP </span>: <?php echo $data['no_hp'];?></p>
                                  </th>
                              </div>
                            </tr>
                          </thead>


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
                                        <input name="password" type="Password"  placeholder="Password " class="form-control" required>
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


                        </div>
                      </div>
                    </section>
                <section>
              </div>      
         </section>
     </div>
 </div>