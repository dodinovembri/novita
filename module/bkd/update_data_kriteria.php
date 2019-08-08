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

      <?php  
      		$id_kriteria = $_GET['id_kriteria'];

      		$query_select = mysqli_query($koneksi, "SELECT * FROM kriteria where `id_kriteria`='$id_kriteria'");
      		while ($row_kriteria = mysqli_fetch_array($query_select)) {
      			$aspek = $row_kriteria['aspek'];
      			$nama_kriteria = $row_kriteria['nama_kriteria'];
      			$target = $row_kriteria['target'];
      			$jenis = $row_kriteria['jenis'];
      		}

      		if ($aspek == 1) {
      			$id_aspek = 1;
      			$aspek = "Kompetensi Teknis";
      		}
      		else if ($aspek == 2) {
      			$id_aspek = 2;
      			$aspek = "Kompetensi Manajerial";
      		}
      		elseif ($aspek == 3) {
      			$id_aspek = 3;
      			$aspek = "Kompetensi Sosial Kultural";
      		}

      		if ($jenis == 1) {
      			$id_jenis = 1;
      			$jenis = "Core";	
      		}
      		else if ($jenis == 2) {
      			$id_jenis = 2;
      			$jenis = "Secondary";
      		}
      ?>

      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <center><h3 class="box-title"><strong>Update Data Kriteria</strong></h3></center>
            </div>
           <!-- /.box-header -->          
            <div class="box-body">
              <div class="row">
                <div class="col-md-12"> 
                  <!-- awal -->
                <form class="form-horizontal" action="?module=simpan_update_data_kriteria" method="post" enctype="multipart/form-data">      
                	<input type="hidden" name="id_kriteria" value="<?php echo $id_kriteria; ?>">
                <div class="box-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Aspek</label>

                    <div class="col-sm-10"> 
                    	<select name="id_aspek" class="form-control" required>
                              <option value="<?php echo $id_aspek; ?>"><?php echo $aspek; ?></option>
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
                      <input type="text" name="nama_kriteria" class="form-control" id="inputEmail3" value="<?php echo $nama_kriteria; ?>" placeholder="Nama Kriteria" required onkeypress='return harusHuruf(event)'>                     
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Target</label>

                    <div class="col-sm-10">
                      <input type="number" min="1"  max="5" name="target" class="form-control" id="inputEmail3" value="<?php echo $target; ?>" placeholder="Target" required>                     
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Jenis</label>

                    <div class="col-sm-10">
                    	<select name="jenis" class="form-control" required>
                    		<option value="<?php echo $id_jenis; ?>"><?php echo $jenis; ?></option>
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