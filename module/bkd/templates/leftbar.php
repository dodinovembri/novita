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
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i>
            <span>SPK</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">                      
            <li><a href="?module=hasil_pemilihan_sekretaris"><i class="fa fa-circle-o"></i> Pemilihan Sekretaris</a></li>
            <li><a href="?module=hasil_pemilihan_kabid"><i class="fa fa-circle-o"></i> Pemilihan KABID</a></li> 
            <!-- no, nama, nip, pangkat gol, pendidikan                       -->
          </ul>
        </li>
       <li <?php if ($_GET["module"] == 'hasil_penilaian'){echo 'class="active"'; }?>>
          <a href="?module=hasil_penilaian">
            <i class="fa fa-group"></i> <span>Nilai</span>            
          </a>                                      
       </li>
        <li <?php if ($_GET["module"] == 'aspek'){echo 'class="active"'; }?>>
          <a href="?module=aspek">
            <i class="fa fa-gears"></i> <span>Aspek</span>            
          </a>                                      
       </li>
        <li <?php if ($_GET["module"] == 'kriteria'){echo 'class="active"'; }?>>
          <a href="?module=kriteria">
            <i class="fa fa-puzzle-piece"></i> <span>Kriteria</span>            
          </a>                                      
       </li>     
       <!--  <li >
          <a href="?module=profile_spk">
            <i class="fa fa-dashboard"></i> <span>Profile SPK</span>            
          </a>                                      
       </li>  -->
        <li <?php if ($_GET["module"] == 'perhitungan'){echo 'class="active"'; }?>>
          <a href="?module=perhitungan">
            <i class="fa fa-plus-square"></i> <span>Perhitungan</span>            
          </a>                                      
       </li>
       <!--  <li >
          <a href="?module=hasil">
            <i class="fa fa-trophy"></i> <span>Hasil Perankingan</span>            
          </a>                                      
       </li>     -->  
         <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i>
            <span>Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?module=pegawai_2"><i class="fa fa-circle-o"></i> Data Pegawai</a></li>                      
            <li><a href="?module=pegawai"><i class="fa fa-circle-o"></i> Data Profile Syarat Pegawai</a></li> 
            <!-- no, nama, nip, pangkat gol, pendidikan                       -->
          </ul>
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
            <!--<li><a href="?module=file_biodata"><i class="fa fa-circle-o"></i> File Biodata</a></li> -->
            <li><a href="?module=setting"><i class="fa fa-circle-o"></i> Setting Password</a></li>                      
            <!-- no, nama, nip, pangkat gol, pendidikan                       -->
          </ul>
        </li> 
        <!--  <li>
          <a href="?module=hasil">
            <i class="fa fa-gg"></i> <span>Hasil Akhir</span>            
          </a>
        </li>   -->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>