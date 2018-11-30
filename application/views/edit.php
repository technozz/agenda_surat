 <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-edit"></i> EDIT DATA SURAT</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="<?php echo base_url('home_con')?>">Home</a></li>
              <li><i class="fa fa-envelope-o"></i>Surat</li>
              <li><i class="fa fa-envelope"></i><a href="<?php echo base_url('surat/surat_masuk/');?>">Surat Masuk</a></li>
              <li><i class="fa fa-edit"></i>Edit</li>
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
          UPDATE DATA
            </header>
              <div class="panel-body">
                <form method="post" action="<?php echo site_url('/surat/edit_surat/').$data['id']; ?>" enctype="multipart/form-data">
                  <div class="form-group">
                    <label>Kode Surat</label>
                    <input class="form-control round-input" name="nomor_berkas" value="<?php echo $data['kode']; ?>" type="text" placeholder="Kode Surat" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label>Alamat Pengirim</label>
                    <input class="form-control round-input" name="alamat" type="text" value="<?php echo $data['alamat']; ?>" placeholder="Alamat Pengirim" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label>Tanggal </label>
                    <input class="form-control round-input" name="tanggal" type="date" value="<?php echo $data['tanggal']; ?>" placeholder="Tanggal Surat" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label>Nomor Surat</label>
                    <input class="form-control round-input" name="nomor" type="date" value="<?php echo $data['nomor']; ?>" placeholder="Nomor Surat" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label>Perihal</label>
                    <input class="form-control round-input" name="perihal" type="text" value="<?php echo $data['perihal']; ?>" placeholder="Perihal" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label>Nomor Petunjuk</label>
                    <input class="form-control round-input" name="nomor_petunjuk" type="text" value="<?php echo $data['n_petunjuk']; ?>" placeholder="Nomor Petunjuk" class="form-control" required>
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