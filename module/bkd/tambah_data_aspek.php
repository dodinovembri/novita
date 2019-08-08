<?php include 'module/koneksi.php'; ?>
<script>

function harusHuruf(evt){
        var charCode = (evt.which) ? evt.which : event.keyCode
        if ((charCode < 65 || charCode > 90)&&(charCode < 97 || charCode > 122)&&charCode>32)
            return false;
        return true;
}


</script>
  <div class="content-wrapper">
   <section class="content">
      <!-- /.row -->

      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <center><h3 class="box-title"><strong>Tambah Data Aspek</strong></h3></center>
            </div>
           <!-- /.box-header -->          
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <!-- awal -->
                <form class="form-horizontal" action="?module=simpan_data_aspek" method="post" enctype="multipart/form-data">                
                <div class="box-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nama Aspek</label>

                    <div class="col-sm-10">                                    
                      <input type="text" name="nama_aspek" class="form-control" id="inputEmail3" placeholder="Nama Aspek" required onkeypress='return harusHuruf(event)'>                      
                    </div>
                  </div>                  
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Bobot</label>

                    <div class="col-sm-10">
                      <input type="number" min="0" max="100" name="bobot" class="form-control" id="inputEmail3" placeholder="Bobot" required>                     
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Bobot Core</label>

                    <div class="col-sm-10">
                      <input type="number" min="0" max="100" name="bobot_core" class="form-control" id="inputEmail3" placeholder="Bobot Core" required>                     
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Bobot Secondary</label>

                    <div class="col-sm-10">
                      <input type="number" min="0" max="100" name="bobot_secondary" class="form-control" id="inputEmail3" placeholder="Bobot Secondary" required>                     
                    </div>
                  </div>
                 <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nama Singkat</label>

                    <div class="col-sm-10">
                      <input type="text" name="nama_singkat" class="form-control" id="inputEmail3" placeholder="Nama Singkat" required onkeypress='return harusHuruf(event)'>                     
                    </div>
                  </div>                                   
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                      <br><button type="submit" class="btn btn-info">SIMPAN</button>
                    </div>
                  </div>
                </div>
                <!-- /.box-body -->
              </form>                                        
                  <!-- akhir -->
                </div>
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>      
      <!-- /.row -->
    </section>
  </div>


<?php include 'module/templates/footer.php'; ?>