<script type="text/javascript">
    function Validate() {
        var password = document.getElementById("txtPassword").value;
        var confirmPassword = document.getElementById("txtConfirmPassword").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script>
<div class="content-wrapper">
   <section class="content">
      <!-- /.row -->

      <div class="row">
        <div class="col-md-12">
          <div class="box">            
           <!-- /.box-header -->
           <div class="box-header with-border">
              <center><h3 class="box-title"><strong>Update Data User</strong></h3></center>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <?php 
                  $username = $_GET['username'];
                  $query = mysqli_query($koneksi, "SELECT * FROM user WHERE `username`='$username'");
                  while ($row = mysqli_fetch_array($query)) {
                     $username = $row['username'];
                     $id_role = $row['role'];
                   } ?>
                   <?php                   
                  $query_pegawai = mysqli_query($koneksi, "SELECT * FROM pegawai WHERE `id_pegawai`='$username'");
                  while ($row = mysqli_fetch_array($query_pegawai)) {
                     $jk = $row['jk']; 
                     $pangkat_golongan = $row['pangkat_golongan'];
                     $pendidikan = $row['pendidikan'];
                   } ?>
                  <form class="form-sigin" method="POST" action="?module=simpan_update_user">
                      <div class="form-group"><label class="col-sm-2 control-label">NIP</label>
                          <div class="col-sm-10"><input type="text" name="id_pegawai" class="form-control" placeholder="Isikan dengan Nomor Identitas" value="<?php echo $username; ?>" readonly><br>  
                          </div>
                      </div>
                      <div class="form-group"><label class="col-sm-2 control-label">Role</label>
                          <div class="col-sm-10">
                            <select name="id_role" class="form-control" required>
                              <option value="<?php echo $id_role; ?>"><?php echo $id_role; ?></option>
                              <?php 
                              $query = mysqli_query($koneksi, "SELECT * FROM role");
                              while ($row = mysqli_fetch_array($query)) { ?>
                                    <option value="<?php echo $row['id_role'] ?>"><?php echo $row['role']; ?></option>  
                                  <?php
                                }
                              ?>
                            </select><br>                            
                          </div>
                      </div>
                      <div class="form-group"><label class="col-sm-2 control-label">Jenis Kelamin</label>
                          <div class="col-sm-10">
                            <select class="form-control" name="jk">
                              <option value="<?php echo $jk; ?>"><?php echo $jk; ?></option>
                              <option value="L">Laki-Laki</option>
                              <option value="P">Perempuan</option>
                            </select><br>  
                          </div>
                      </div>
                      <div class="form-group"><label class="col-sm-2 control-label">Pangkat/Golongan</label>
                          <div class="col-sm-10">
                            <select name="pangkat" class="form-control" required>
                              <option value="<?php echo $pangkat_golongan; ?>"><?php echo $pangkat_golongan; ?></option>                              
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
                              <option value="<?php echo $pendidikan; ?>"><?php echo $pendidikan; ?></option>                              
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
                        <label for="inputEmail3" class="col-sm-2 control-label">New Password</label>

                        <div class="col-sm-10">
                          <input type="password" name="password" class="form-control" id="txtPassword" placeholder="Password" required><br>                      
                        </div>
                      </div>  
                       <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Confirm Password</label>

                        <div class="col-sm-10">
                          <input type="password" name="password" class="form-control" id="txtConfirmPassword" placeholder="Konfirmasi Password" required>                      
                        </div>
                      </div>                        
                      <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-2">                          
                            <br><button class="btn btn-primary" type="submit" onclick="return Validate()">SIMPAN</button>
                        </div> 
                      </div>
                  </form>
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