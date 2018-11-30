 <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-image"></i> EDIT GAMBAR SURAT</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="<?php echo base_url('home_con')?>">Home</a></li>
              <li><i class="fa fa-envelope-o"></i>Surat</li>
              <li><i class="fa fa-envelope"></i><a href="<?php echo base_url('surat/Surat_keluar/');?>">Surat Keluar</a></li>
              <li><i class="fa fa-image"></i>Edit Gambar</li>
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
    <div class="col-sm-3">
    </div>


    <div class="col-sm-6">
      <section class="panel">
        <header class="panel-heading text-center" >
          UPDATE DATA
            </header>
              <div class="panel-body">
                <form method="post" action="<?php echo site_url('/Surat_keluar/edit_gambar2/').$data['id']; ?>" enctype="multipart/form-data">
                 
                  <div class="form-group" align="center">
                    <label for="InputFile">Foto Surat</label>
                    <img id="image-preview" alt="image preview" class="img-thumbnail img-responsive">
                    <br/>
                    <input name="gambar" type="file" id="image-source" onchange="previewImage();" value="<?php echo $data['gambar'];?>" placeholder="foto">
                  </div>
                  <div class="form-footer">
                  	<div class="form-group">
                    <button name="submit" type="submit" class="btn btn-success"><i class="fa fa-keyboard-o" aria-hidden="true"></i> Update </button>                    
                  </div>
                  </div>
                </form>
              </div>
           </section>
        </div>


    <div class="col-sm-3">
    </div>
</div>