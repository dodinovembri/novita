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
    <div class="row">
      <div class="col-md-12">
        <div class="box">            
          <div class="box-body">
            <div class="row">            
              
                <!-- small box -->
                <?php $username = $_SESSION['username']; ?>
                <form class="form-horizontal" action="?module=simpan_password" method="post" enctype="multipart/form-data">
                	
                   <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Username</label>

                      <div class="col-sm-10">
                        <input type="text" name="username" class="form-control" id="inputEmail3" value="<?php echo $username; ?>" placeholder="Jabatan" readonly>                     
                      </div>
                    </div> 
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">New Password</label>

                    <div class="col-sm-10">
                      <input type="password" name="password" class="form-control" id="txtPassword" placeholder="Password" required>                  
                    </div>
                  </div>  
                   <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Confirm Password</label>

                    <div class="col-sm-10">
                      <input type="password" name="password" class="form-control" id="txtConfirmPassword" placeholder="Konfirmasi Password" required>                      
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