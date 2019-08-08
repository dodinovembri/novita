<div class="content-wrapper">
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">            
          <div class="box-body">
            <div class="row">            
              
                <!-- small box -->
                <?php                  
                  include 'module/koneksi.php';
                  $a = $_SESSION['username'];
                  $query = "SELECT * FROM pegawai WHERE id_pegawai='$a'";
                  $hasil = mysqli_query($koneksi, $query);

                  while ($row = mysqli_fetch_array($hasil)) {                    
                    $photo = $row['file_biodata'];
                  }
                ?>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">File Biodata</label>
                  <div class="col-sm-10">
                    
                    <img src="<?php echo "assets/file_biodata/".$photo; ?>" width="30%" height="300px" alt="User Image"><br><br>
                  <?php $username = $_SESSION['username']; ?>
                  </div>
                </div>
                 <form class="form-horizontal" action="?module=simpan_file_biodata" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">NIP</label>

                        <div class="col-sm-10">
                          <input type="text" name="username" class="form-control" id="inputEmail3" value="<?php echo $username; ?>" placeholder="Jabatan" readonly>                     
                        </div>
                      </div> 
               	  	<div class="form-group">
	                    <label for="inputEmail3" class="col-sm-2 control-label">File Biodata</label>

	                    <div class="col-sm-10">
	                      <input type="file" name="file" class="form-control" id="inputEmail3" value="<?php echo $photo; ?>" placeholder="Jabatan" required>                     
	                    </div>
                  	</div>

                  	<div class="form-group">
	                    <label for="inputEmail3" class="col-sm-2 control-label"></label>
	                    <div class="col-sm-10">
	                      <br><button type="submit" name="upload" value="upload" class="btn btn-info" onclick="return Validate()">SIMPAN</button>
	                    </div>
                  	</div>
               	  </form>
           

            </div>              
          </div>
        </div>          
      </div>        
    </div>          
  </section>
</div>

<?php include 'module/templates/footer.php'; ?>