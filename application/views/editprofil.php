 <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-user"></i> EDIT BIOGRAFI</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="<?php echo base_url('home_con')?>">Home</a></li>
              <li><i class="fa fa-user"></i><a href="<?php echo base_url('profil/home_profil');?>">Profil</a></li>
              <li><i class="fa fa-edit"></i>Edit Biografi</li>
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

  <div class="row">
    <div class="col-sm-2">
    </div>


    <div class="col-sm-8">
      <section class="panel">
        <header class="panel-heading text-center" >
          UPDATE DATA DIRI
            </header>
              <div class="panel-body">
                <form  method="post" action="<?php echo site_url('Profil/edit_profil/').$data['id']?>" enctype='multipart/form-data'>
                  <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control round-input" value="<?php echo $data['nama'];?>" name="nama" value="" type="text" placeholder="Nama" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label>Alamat</label>
                    <input class="form-control round-input" name="alamat" type="text" value="<?php echo $data['alamat'];?>" value="" placeholder="Alamat" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label>Email </label>
                    <input class="form-control round-input" name="email" type="email" value="<?php echo $data['email'];?>" value="" placeholder="Email" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label>Jenis Kelamin</label>
                                        <select class="form-control m-bot15" name="JK">
                                            <option>L</option>
                                            <option>P</option>  
                                       </select>
                  </div>
                  <div class="form-group">
                    <label>No HP</label>
                    <input class="form-control round-input" name="hp" type="text" value="<?php echo $data['no_hp'];?>" placeholder="No Handphone" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label>Foto Profil</label>
                    <img id="image-preview" class="img-thumbnail img-responsive">
                    <br/>
                    <input name="gambar" type="file"  id="image-source" onchange="previewImage();" value="<?php echo $data['foto'];?>" placeholder="No Handphone" required>
                  </div>
                  <div class="form-group">
                    <label>About Me</label>
                    <textarea  class="form-control ckeditor" name="about"><?php echo $data['about'];?></textarea>
                  </div>
                  <div class="form-group">
                    <button name="submit" type="submit" class="btn btn-success"><i class="fa fa-keyboard-o" aria-hidden="true"></i> Update </button>                    
                  </div>
                  <div class="form-footer">
                  </div>
                </form>
              </div>
           </section>
        </div>


    <div class="col-sm-2">
    </div>
</div>