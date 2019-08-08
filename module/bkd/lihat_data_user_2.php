<?php include 'module/koneksi.php'; ?>

  <div class="content-wrapper">
   <section class="content">
      <!-- /.row -->

      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <center><h3 class="box-title"><strong>Profile</strong></h3></center>
            </div>
           <!-- /.box-header -->
           <?php  
              $a = $_GET['username'];
              $query = "SELECT * FROM user WHERE username='$a'";
              $hasil = mysqli_query($koneksi, $query);

              $photo = "";
              while ($row = mysqli_fetch_array($hasil)) {
                $username = $row['username'];
                $nama = $row['nama'];
                $jabatan = $row['jabatan'];
                $tempat_lahir = $row['tempat_lahir'];
                $photo = $row['photo'];               

              }
           ?>
           <?php                
              $query_u = "SELECT * FROM pegawai WHERE id_pegawai='$a'";
              $hasil_u = mysqli_query($koneksi, $query_u);

              $photo = "";
              while ($row = mysqli_fetch_array($hasil_u)) {               
                $nama_pegawai =  $row['nama_pegawai'];
                $jabatan = $row['jabatan'];
                $nama_jabatan = $row['nama_jabatan'];
                $tempat_lahir = $row['tempat_lahir'];
                $tanggal_lahir = $row['tanggal_lahir'];
                $jk = $row['jk'];
                $agama = $row['agama'];
                $unit_kerja = $row['unit_kerja'];
                $instansi_kerja = $row['instansi_kerja'];
                $alamat = $row['alamat'];                
              }
           ?>
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <!-- awal -->
                <form class="form-horizontal" action="?module=simpan_update_user" method="post" enctype="multipart/form-data">                
                <div class="box-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>

                    <div class="col-sm-10">
                      <input type="text" name="nama" class="form-control" id="inputEmail3" value="<?php echo $nama_pegawai; ?>" placeholder="Nama Lengkap" required>                     
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">NIP</label>

                    <div class="col-sm-10">                                    
                      <input type="text" name="username" class="form-control" id="inputEmail3" value="<?php echo $username; ?>" placeholder="Username" readonly>                      
                    </div>
                  </div> 
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Jabatan</label>

                    <div class="col-sm-10">
                      <input type="radio" name="jabatan" value="Struktural" <?php if ($jabatan == "Struktural") {
                        echo "checked";
                      } ?>>Struktural<br>
                      <input type="radio" name="jabatan" value="Fungsional" <?php if ($jabatan == "Fungsional") {
                        echo "checked";
                      } ?>>Fungsional
                      <input type="text" name="nama_jabatan" class="form-control" id="inputEmail3" value="<?php echo $nama_jabatan; ?>" placeholder="Nama Jabatan" required>                     
                    </div>
                  </div>                 
                  
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Tempat Lahir</label>

                    <div class="col-sm-10">
                      <input type="text" name="tempat_lahir" class="form-control" id="inputEmail3" value="<?php echo $tempat_lahir; ?>" placeholder="Tempat Lahir" required>                     
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Tanggal Lahir</label>

                    <div class="col-sm-10">
                      <input type="date" name="tanggal_lahir" class="form-control" id="inputEmail3" value="<?php echo $tanggal_lahir; ?>" placeholder="Tempat Lahir" required>                     
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Jenis Kelamin</label>

                    <div class="col-sm-10">
                      <select class="form-control" name="jk">
                        <option value="<?php echo $jk; ?>"><?php if ($jk == "L") {
                          $jk = "Laki-Laki";
                          echo $jk;
                        } elseif ($jk == "P") {
                          $jk = "Perempuan";
                          echo $jk;
                        } ?></option>
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                      </select>                     
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Agama</label>

                    <div class="col-sm-10">
                      <input type="text" name="agama" class="form-control" id="inputEmail3" value="<?php echo $agama; ?>" placeholder="Agama" required>                     
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Unit Kerja</label>

                    <div class="col-sm-10">
                      <input type="text" name="unit_kerja" class="form-control" id="inputEmail3" value="<?php echo $unit_kerja; ?>" placeholder="Unit Kerja" required>                     
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Instansi Kerja</label>

                    <div class="col-sm-10">
                      <input type="text" name="instansi_kerja" class="form-control" id="inputEmail3" value="<?php echo $instansi_kerja; ?>" placeholder="Instansi Kerja" required>                     
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>

                    <div class="col-sm-10">
                      <input type="text" name="alamat" class="form-control" id="inputEmail3" value="<?php echo $alamat; ?>" placeholder="Alamat" required>                     
                    </div>
                  </div>                   
                   
                  <!-- <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                      <br><button type="submit" name="upload" value="upload" class="btn btn-info" onclick="return Validate()">SIMPAN</button>
                    </div>
                  </div>-->
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