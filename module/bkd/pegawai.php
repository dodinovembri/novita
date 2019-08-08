<script type="text/javascript" language="JavaScript">
 function konfirmasi()
 {
 tanya = confirm("Anda Yakin Akan Menghapus Data ?");
 if (tanya == true) return true;
 else return false;
 }</script>

  <div class="content-wrapper">
   <section class="content">
      <!-- /.row -->

      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                	<!-- <a href="?module=tambah_pegawai"><button type="button" class="btn btn-warning">Tambah Data Pegawai</button></a><br> -->
                 <?php
                        include 'module/koneksi.php';
                        $sqlSelect = "SELECT pegawai.*, pangkat_pendidikan.*, pangkat_golongan.*, pendidikan.* FROM pegawai, pangkat_golongan JOIN pangkat_pendidikan ON pangkat_golongan.kode_pangkat = pangkat_pendidikan.pangkat JOIN pendidikan ON pangkat_pendidikan.pendidikan = pendidikan.id_pendidikan WHERE pegawai.id_pegawai=pangkat_pendidikan.id_pegawai ";                        
                        $result = mysqli_query($koneksi, $sqlSelect); ?>                       
                        

                         
                        <div class="panel-body table-responsive">   
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIP</th>
                                    <th>Nama</th>
                                    <th>Pangkat/Golongan</th>
                                    <th>Pendidikan</th>
                                    <th>Acc BKD</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                    <?php
                        $no = 0;
                        while ($row = mysqli_fetch_array($result)) {
                          $no++;
                    ?>                  
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php  echo $row['id_pegawai']; ?></td>
                                <td><?php  echo $row['nama_pegawai']; ?></td>
                                <td><?php  echo $row['nama_pangkat']; ?></td>
                                <td><?php  echo $row['pendidikan']; ?></td>
                                <td><?php if ($row['status'] == 'acc_admin' ) {
                                  echo '<span class="glyphicon glyphicon-ok"></span>';
                                } elseif ($row['status'] == 'sudah') {
                                  echo "finish";
                                } else{
                                  echo $row['status'];
                                } ?></td>                               

                                
                                <td>
                                  <a href="?module=lihat_data_user&username=<?php echo $row['id_pegawai']; ?>"><button type="button" class="btn btn-warning">Lihat</button></a>
                                  <a href="?module=hapus_data_user&username=<?php echo $row['id_pegawai']; ?>"><button class="btn btn-danger" onclick="return konfirmasi()">Delete</button></a>
                                </td>
                            </tr>
                    <?php } ?>
                            </tbody>
                        </table>  
                        </div>                
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



  <footer class="main-footer">
    <strong>Copyright &copy; 2019 <a href="#">Novita</a>.</strong> All rights
    reserved.
  </footer>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>

<script src="assets/adminlte/dist/js/adminlte.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/bootswatch.js"></script>

<!-- tabel -->
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="assets/js/ie10-viewport-bug-workaround.js"></script>
<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
$(document).ready(function() {
 $('#example').dataTable( {
        "language": {
            "url": "assets/css/datatables/Indonesian.json"
        }
    } );
} );
</script> 

</html>