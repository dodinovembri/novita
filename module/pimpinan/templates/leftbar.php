  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <?php                  
            include 'module/koneksi.php';
            $a = $_SESSION['username'];
            $query = "SELECT * FROM user WHERE username='$a'";
            $hasil = mysqli_query($koneksi, $query);

            while ($row = mysqli_fetch_array($hasil)) {
              $nama = $row['nama'];
              $jabatan = $row['jabatan'];
              $photo = $row['photo'];
            }
          ?>
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo "assets/photo_profil/".$photo; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">          
          <p><?php echo $nama; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>     
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li <?php if ($_GET["module"] == 'home'){echo 'class="active"'; }?>>
          <a href="?module=home">
            <i class="fa fa-home"></i> <span>Home</span>            
          </a>
        </li>                 
        <li <?php if ($_GET["module"] == 'hasil_penilaian'){echo 'class="active"'; }?>>
          <a href="?module=hasil_penilaian">
            <i class="fa fa-trophy"></i> <span>Hasil Penilaian</span>            
          </a>
        </li>    
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i>
            <span>Setting</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?module=foto_profil"><i class="fa fa-circle-o"></i> Foto Profile</a></li>                      
            <!-- <li><a href="?module=file_biodata"><i class="fa fa-circle-o"></i> File Biodata</a></li>  -->
            <li><a href="?module=setting"><i class="fa fa-circle-o"></i> Setting Password</a></li>                      
            <!-- no, nama, nip, pangkat gol, pendidikan                       -->
          </ul>
        </li>   
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>