<div class="content-wrapper">
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">            
          <div class="box-body">
            <div class="row">            
              
                <!-- small box -->
                <?php include 'module/koneksi.php';
                $username = $_SESSION['username']; 
                $q = mysqli_query($koneksi, "SELECT pangkat_pendidikan.*, pangkat_golongan.* FROM pangkat_pendidikan JOIN pangkat_golongan ON pangkat_pendidikan.pangkat = pangkat_golongan.kode_pangkat WHERE pangkat_pendidikan.id_pegawai='$username'");
                while ($r = mysqli_fetch_array($q)) {
                  $id_pangkat = $r['pangkat'];
                  $pangkat = $r['nama_pangkat'];
                  $id_pendidikan = $r['pendidikan'];
                }

                $qu = mysqli_query($koneksi, "SELECT pangkat_pendidikan.*, pendidikan.*, pendidikan.pendidikan as pend FROM pangkat_pendidikan JOIN pendidikan ON pangkat_pendidikan.pendidikan = pendidikan.id_pendidikan WHERE pangkat_pendidikan.id_pegawai='$username'");
                while ($ro = mysqli_fetch_array($qu)) {
                  // $pangkat = $ro['nama_pangkat'];
                  $pendidikan = $ro['pend'];
                }
                ?>
                <form method="POST" action="?module=simpan_pangkat_pendidikan">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">NIP</label>

                    <div class="col-sm-10">
                      <input type="text" name="username" class="form-control" id="inputEmail3" value="<?php echo $username; ?>" placeholder="Jabatan" readonly>                     <br>
                    </div>
                  </div>
                  <div class="form-group"><label class="col-sm-2 control-label">Pangkat/Golongan</label>
                        <div class="col-sm-10">
                          <select name="pangkat" class="form-control" required>
                            <option value="<?php echo $id_pangkat; ?>"><?php echo $pangkat; ?></option>                              
                            <?php 
                            $query = mysqli_query($koneksi, "SELECT * FROM pangkat_golongan");
                            while ($row = mysqli_fetch_array($query)) { ?>
                                  <option value="<?php echo $row['kode_pangkat'] ?>"><?php echo $row['nama_pangkat']; ?></option>  
                                <?php
                              }
                            ?>
                          </select><br>                            
                        </div>
                    </div>

                     <div class="form-group"><label class="col-sm-2 control-label">Pendidikan</label>
                        <div class="col-sm-10">
                          <select name="pendidikan" class="form-control" required>
                            <option value="<?php echo $id_pendidikan; ?>"><?php echo $pendidikan; ?></option>                              
                            <?php 
                            $query = mysqli_query($koneksi, "SELECT * FROM pendidikan");
                            while ($row = mysqli_fetch_array($query)) { ?>
                                  <option value="<?php echo $row['id_pendidikan'] ?>"><?php echo $row['pendidikan']; ?></option>  
                                <?php
                              }
                            ?>
                          </select><br>                            
                        </div>
                    </div> 

                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label"></label>
                      <div class="col-sm-10">
                        <br><button type="submit" class="btn btn-info" onclick="return Validate()">SIMPAN</button>
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