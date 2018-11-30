 <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-edit"></i> EDIT AKUN</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="<?php echo base_url('home_con')?>">Home</a></li>
              <li><i class="fa fa-user"></i><a href="<?php echo base_url('profil/home_profil');?>">Profil</a></li>
              <li><i class="fa fa-edit"></i>Edit Akun</li>
            </ol>
          </div>
        </div>
<!--overview end-->

  <div class="row">
    <div class="col-sm-2">
    </div>

    <div class="col-sm-8">
      <section class="panel">
        <header class="panel-heading text-center" >
          UPDATE AKUN
            </header>
              <div class="panel-body">
                <form  method="post" action="<?php echo site_url('/Profil/edit_akun/').$data['id']?>" enctype='multipart/form-data'>
                  <div class="form-group">
                    <label>Username</label>
                    <input class="form-control round-input" value="<?php echo $data['username'];?>" name="username" value="" type="text" placeholder="Username" required>
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control round-input" name="password"  value="<?php echo $data['password'];?>" placeholder="Password" required>
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
