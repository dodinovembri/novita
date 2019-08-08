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
              <center><h3 class="box-title"><strong>Tambah Data Kriteria</strong></h3></center>
            </div>
           <!-- /.box-header -->          
            <div class="box-body">
              <div class="row">
                <div class="col-md-12"> 
                  <!-- awal -->
                <form class="form-horizontal" action="?module=simpan_data_kriteria" method="post" enctype="multipart/form-data">                
                <div class="box-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Aspek</label>

                    <div class="col-sm-10"> 
                    	<select name="id_aspek" class="form-control" required>
                              <option></option>
                              <?php 
                              $query = mysqli_query($koneksi, "SELECT * FROM aspek");
                              while ($row = mysqli_fetch_array($query)) { ?>
                                    <option value="<?php echo $row['id_aspek'] ?>"><?php echo $row['nama_aspek']; ?></option>  
                                  <?php
                                }
                              ?>
                        </select><br>                                                         
                    </div>
                  </div>                  
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nama Kriteria</label>

                    <div class="col-sm-10">
                      <input type="text" name="nama_kriteria" class="form-control" id="inputEmail3" placeholder="Nama Kriteria" required onkeypress='return harusHuruf(event)'>                     
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Target</label>

                    <div class="col-sm-10">
                      <input type="number" min="1" max="5" name="target" class="form-control" id="inputEmail3" placeholder="Target" required>                     
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Jenis</label>

                    <div class="col-sm-10">
                    	<select name="jenis" class="form-control" required>
                    		<option></option>
                    		<option value="1">Core</option>
                    		<option value="2">Secondary</option>
                    	</select>                      
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