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

    function angka(evt){
        var charCode = (evt.which) ? evt.which : event.keyCode
        if ((charCode < 48 || charCode > 57)&&charCode>32)
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
           <!-- /.box-header -->
           <div class="box-header with-border">
              <center><h3 class="box-title"><strong>Input Data Pegawai</strong></h3></center>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <form class="form-sigin" method="POST" action="?module=simpan_pegawai">
                      <div class="form-group"><label class="col-sm-2 control-label">NIP</label>
                          <div class="col-sm-10"><input type="text" name="id_pegawai" class="form-control" placeholder="Isikan dengan Nomor Identitas" required onkeypress='return angka(event)'><br>  
                          </div>
                      </div>
                      <div class="form-group"><label class="col-sm-2 control-label">Role</label>
                          <div class="col-sm-10">
                            <select name="id_role" class="form-control" required>
                              <option></option>
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