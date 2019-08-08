<script type="text/javascript" language="JavaScript">
 function konfirmasi()
 {
 tanya = confirm("Anda Yakin Akan Mengubah Data ?");
 if (tanya == true) return true;
 else return false;
 }</script>
<div class="content-wrapper">
   <section class="content">
      <!-- /.row -->

      <div class="row">
        <div class="col-md-12">
          <div class="box">            
           <!-- /.box-header -->
           <div class="box-header with-border">
              <center><h3 class="box-title"><strong>Update Data Profil Syarat</strong></h3></center>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <?php 
                  $username = $_GET['username'];
                  $query = mysqli_query($koneksi, "SELECT user.*, role.role as role, user.role as id_role FROM user JOIN role ON user.role = role.id_role WHERE user.username='$username'");
                  while ($row = mysqli_fetch_array($query)) {
                     $username = $row['username'];
                     $role = $row['role'];
                     $id_role = $row['id_role'];
                   } 

                   $que = mysqli_query($koneksi, "SELECT pangkat_pendidikan.*, pangkat_golongan.*, pendidikan.* FROM pangkat_golongan JOIN pangkat_pendidikan ON pangkat_golongan.kode_pangkat = pangkat_pendidikan.pangkat JOIN pendidikan ON pangkat_pendidikan.pendidikan = pendidikan.id_pendidikan WHERE pangkat_pendidikan.`id_pegawai`='$username'");
                  while ($ro = mysqli_fetch_array($que)) {
                     $pangkat = $ro['nama_pangkat'];
                     $pendidikan = $ro['pendidikan'];
                   } ?>
                   <?php                   
                  $query_pegawai = mysqli_query($koneksi, "SELECT * FROM pegawai WHERE `id_pegawai`='$username'");
                  while ($row = mysqli_fetch_array($query_pegawai)) {
                     $nama_pegawai =  $row['nama_pegawai'];
                     $pangkat_golongan = $row['pangkat_golongan'];
                     $photo = $row['file_biodata'];
                   } ?>
                  <form class="form-sigin" method="POST" action="?module=simpan_update_user">
                      <div class="form-group"><label class="col-sm-2 control-label">NIP</label>
                          <div class="col-sm-10"><input type="text" name="id_pegawai" class="form-control" placeholder="Isikan dengan Nomor Identitas" value="<?php echo $username; ?>" readonly><br>  
                          </div>
                      </div>
                      <div class="form-group"><label class="col-sm-2 control-label">Role</label>
                          <div class="col-sm-10">
                            <select name="pendidikan" class="form-control" required>
                              <option value="<?php echo $id_role; ?>"><?php echo $role; ?></option>
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
                      <div class="form-group"><label class="col-sm-2 control-label">Nama</label>
                          <div class="col-sm-10"><input type="text" name="nama" class="form-control" value="<?php echo $nama_pegawai; ?>" ><br>  
                          </div>
                      </div>

                      <!--<div class="form-group"><label class="col-sm-2 control-label">Jenis Kelamin</label>
                          <div class="col-sm-10">
                            <select class="form-control" name="jk">
                              <?php if ($jk == "L") {
                                $jk_t = "Laki - Laki";
                              }else{
                                $jk_t = "Perempuan";
                              } ?>
                              <option value="<?php echo $jk; ?>"><?php echo $jk_t; ?></option>
                              <option value="L">Laki-Laki</option>
                              <option value="P">Perempuan</option>
                            </select><br>  
                          </div>
                      </div>-->
                      <div class="form-group"><label class="col-sm-2 control-label">Pangkat/Golongan</label>
                          <div class="col-sm-10">
                            <select name="pangkat" class="form-control" required>
                              <option value="<?php echo $pangkat_golongan; ?>"><?php echo $pangkat; ?></option>                              
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
                        <label for="inputEmail3" class="col-sm-2 control-label">File Biodata</label>
                        <div class="col-sm-10">
                          
                          <img src="<?php echo "assets/file_biodata/".$photo; ?>" width="30%" height="300px" alt="User Image"><br><br>                       
                        </div>
                      </div>                                       
                      <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-2">                          
                            <br>
                            <a href="?module=terima&username=<?php echo $username; ?>"><button class="btn btn-primary" type="button" onclick="return konfirmasi()">Terima</button> </a>
                            <a href="?module=tolak&username=<?php echo $username; ?>"><button class="btn btn-danger" type="button" onclick="return konfirmasi()">Tolak</button></a>                          
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