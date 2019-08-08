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
           <!--  <div class="box-header with-border">
              <center><h3 class="box-title"><strong>Data Set Aspek</strong></h3></center>
            </div> -->
           <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                	<a href="?module=tambah_data_aspek"><button type="button" class="btn btn-warning">Tambah Data Aspek</button></a><br>
                 <?php
                        include 'module/koneksi.php';
                        $sqlSelect = "SELECT * FROM aspek";                        
                        $result = mysqli_query($koneksi, $sqlSelect); ?>
                         
                        <div class="panel-body table-responsive">   
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <!-- <th>ID Aspek</th> -->
                                    <th>Nama</th>
                                    <th>Bobot</th>
                                    <th>Bobot Core</th>
                                    <th>Bobot Secondary</th>
                                    <th>Nama Singkat</th>
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
                                <!-- <td><?php  echo $row['id_aspek']; ?></td> -->
                                <td><?php  echo $row['nama_aspek']; ?></td>
                                <td><?php  echo $row['bobot']; ?></td>
                                <td><?php  echo $row['bobot_core']; ?></td>
                                <td><?php  echo $row['bobot_secondary']; ?></td>
                                <td><?php  echo $row['nama_singkat']; ?></td>
                                <td>
                                  <a href="?module=update_data_aspek&id_aspek=<?php echo $row['id_aspek']; ?>"><button type="button" class="btn btn-warning">Update</button></a>
                                  <a href="?module=hapus_data_aspek&id_aspek=<?php echo $row['id_aspek']; ?>"><button class="btn btn-danger" onclick="return konfirmasi()">Delete</button></a>
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
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <center>Prediksi</center>  
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="?module=algoritmabackpro" method="post">            
                  <input type="hidden" name="status" value="cal">
                  <input type="hidden" class="form-control" type="text" name="merk" value="<?php echo $row['merk']; ?>">
                  <input type="hidden" class="form-control" type="text" name="tipe" value="<?php echo $row['tipe']; ?>">            
                  <input type="hidden" class="form-control" type="text" name="stand" value="<?php echo $row['stand']; ?>">
                  <input type="hidden" class="form-control" type="text" name="jenis" value="<?php echo $row['jenis']; ?>">
                  <center><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Hitung Prediksi</button></center>            
              </form>
              </div>
          </div>
          
        </div>
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