<div class="content-wrapper">
   <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">            
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">               
                <?php  
                	include 'module/koneksi.php';
                	$id_pegawai = $_GET['id_pegawai'];
                	$query = "SELECT * FROM pegawai WHERE id_pegawai='$id_pegawai'";
                	$hasil = mysqli_query($koneksi, $query);

                	while ($row = mysqli_fetch_array($hasil)) {
                		$nama = $row['nama_pegawai'];
                	}                  

                ?>                
                    <form class="form-horizontal" action="?module=simpan_nilai" method="post"> <div class="box-body">
                        <input type="hidden" name="id_pegawai" value="<?php echo $id_pegawai; ?>">
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-2 control-label">ID Pegawai</label>

                                  <div class="col-sm-10">                                    
                                    <input type="text" name="id_pegawai" class="form-control" id="inputEmail3" placeholder="NIM" value="<?php echo $id_pegawai; ?>" readonly>                      
                                  </div>
                                </div>                  
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>

                                  <div class="col-sm-10">
                                    <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Nama Lengkap" value="<?php echo $nama; ?>" readonly><br>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-2 control-label"></label>
                                  <div class="col-sm-10">
                                    <span style="color: red">Nilai Untuk Aspek Kompetensi Teknis</span>                    
                                  </div>
                                </div>
                                 <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-2 control-label">Diklat Teknis</label>

                                  <div class="col-sm-10">
                                    <!-- <input type="text" name="diklat_teknis" class="form-control"> -->
                                    <select name="diklat_teknis" class="form-control" required>
                                      <option></option>
                                      <option value="1">Belum Memiliki Diklat Teknis</option>
                                      <option value="2">Diklat Teknis belum sesuai dengan syarat jabatan</option>
                                      <option value="3">Kekurangan 1 Level jumlah diklat teknis</option>
                                      <option value="4">Sesuai dengan jumlah yang dibutuhkan</option>
                                      <option value="5">Melebihi jumlah jenis diklat yang dibutuhkan</option>
                                    </select>                                    
                                  </div>
                                </div> 
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-2 control-label">Diklat PIM</label>

                                  <div class="col-sm-10">
                                    <!-- <input type="text" name="diklat_teknis" class="form-control"> -->
                                    <select name="diklat_PIM" class="form-control" required>
                                      <option></option>
                                      <option value="1">Belum Ada</option>
                                      <option value="2">PIM IV</option>
                                      <option value="3">PIM III</option>
                                      <option value="4">PIM II</option>
                                      <option value="5">PIM I</option>
                                    </select>                                    
                                  </div>
                                </div>
                                  <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-2 control-label">Pengalaman Jabatan</label>

                                  <div class="col-sm-10">
                                    <!-- <input type="text" name="diklat_teknis" class="form-control"> -->
                                    <select name="pengalaman_jabatan" class="form-control" required>
                                      <option></option>
                                      <option value="1">Belum Pernah Menduduki Jabatan Struktural Eselon IV</option>
                                      <option value="2">Sudah Pernah Menduduki Jabatan Struktural Eselon IV/b</option>
                                      <option value="3">Sudah Pernah Menduduki Jabatan Struktural Eselon IV/a</option>
                                      <option value="4">Sudah Pernah Menduduki Jabatan Struktural Eselon III/b</option>
                                      <option value="5">Sudah Pernah Menduduki Jabatan Struktural Eselon III/a</option>
                                    </select>                                    
                                  </div>
                                </div> 
                                 <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-2 control-label">Hukuman Disiplin</label>

                                  <div class="col-sm-10">
                                    <!-- <input type="text" name="disiplin_teknis" class="form-control"> -->
                                    <select name="hukuman_disiplin" class="form-control">
                                     <option></option>
                                      <option value="1">Memiliki >3 Jenis Hukuman Disiplin</option>
                                      <option value="2">Memiliki 3 Jenis Hukuman Disiplin</option>
                                      <option value="3">Memiliki 2 Jenis Hukuman Disiplin</option>
                                      <option value="4">Memiliki 1 Jenis Hukuman Disiplin</option>
                                      <option value="5">Tidak Pernah Dijatuhi Hukuman Disiplin</option>
                                    </select>
                                  </div>
                                </div> 
                                 <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-2 control-label">Usia</label>

                                  <div class="col-sm-10">
                                    <!-- <input type="text" name="disiplin_teknis" class="form-control"> -->
                                    <select name="usia" class="form-control">
                                     <option></option>
                                      <option value="1">Dibawah 36 Tahun</option>
                                      <option value="2">36 - 40 Tahun</option>
                                      <option value="3">41 - 45 Tahun</option>
                                      <option value="4">46 - 50 Tahun</option>
                                      <option value="5">50 - 58 Tahun</option>
                                    </select>
                                  </div>
                                </div> 
                                 <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-2 control-label">Lama Bekerja</label>

                                  <div class="col-sm-10">
                                    <!-- <input type="text" name="disiplin_teknis" class="form-control"> -->
                                    <select name="lama_bekerja" class="form-control">
                                     <option></option>
                                      <option value="1">1 - 3 Tahun</option>
                                      <option value="2">4 - 6 Tahun</option>
                                      <option value="3">7 - 9 Tahun</option>
                                      <option value="4">10 - 12 Tahun</option>
                                      <option value="5">> 12 Tahun</option>
                                    </select>
                                  </div>
                                </div>
                                </div>  <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-2 control-label"></label>
                                  <div class="col-sm-10">
                                    <span style="color: red">Nilai Untuk Aspek Kompetensi Manajerial</span>                    
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-2 control-label">Integritas</label>

                                  <div class="col-sm-10">
                                    <select name="integritas" class="form-control" required>
                                      <option></option>
                                      <option value="1">Sangat Kurang</option>
                                      <option value="2">Kurang</option>
                                      <option value="3">Cukup</option>
                                      <option value="4">Baik</option>
                                      <option value="5">Sangat Baik</option>
                                    </select>                 
                                  </div>
                                </div>
                                    <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-2 control-label">Kerja Sama</label>

                                  <div class="col-sm-10">
                                   <select name="kerja_sama" class="form-control" required>
                                      <option></option>
                                      <option value="1">Sangat Kurang</option>
                                      <option value="2">Kurang</option>
                                      <option value="3">Cukup</option>
                                      <option value="4">Baik</option>
                                      <option value="5">Sangat Baik</option>
                                    </select>                    
                                  </div>
                                </div> 
                                 <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-2 control-label">Komunikasi</label>

                                  <div class="col-sm-10">
                                    <select name="komunikasi" class="form-control" required>
                                      <option></option>
                                      <option value="1">Sangat Kurang</option>
                                      <option value="2">Kurang</option>
                                      <option value="3">Cukup</option>
                                      <option value="4">Baik</option>
                                      <option value="5">Sangat Baik</option>
                                    </select>                                    
                                  </div>
                                </div>                                  
                                 <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-2 control-label">Orientasi pada Hasil</label>

                                  <div class="col-sm-10">
                                    <select name="orientasi_hasil" class="form-control" required>
                                      <option></option>
                                      <option value="1">Sangat Kurang</option>
                                      <option value="2">Kurang</option>
                                      <option value="3">Cukup</option>
                                      <option value="4">Baik</option>
                                      <option value="5">Sangat Baik</option>
                                    </select>                 
                                  </div>
                                </div>    
                                 <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-2 control-label">Pelayanan Publik</label>

                                  <div class="col-sm-10">
                                    <select name="pelayanan_publik" class="form-control" required>
                                      <option></option>
                                      <option value="1">Sangat Kurang</option>
                                      <option value="2">Kurang</option>
                                      <option value="3">Cukup</option>
                                      <option value="4">Baik</option>
                                      <option value="5">Sangat Baik</option>
                                    </select>                 
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-2 control-label">Pengembangan diri dan orang lain</label>

                                  <div class="col-sm-10">
                                    <select name="pengembangan_diri" class="form-control" required>
                                      <option></option>
                                      <option value="1">Sangat Kurang</option>
                                      <option value="2">Kurang</option>
                                      <option value="3">Cukup</option>
                                      <option value="4">Baik</option>
                                      <option value="5">Sangat Baik</option>
                                    </select>                 
                                  </div>
                                </div>  
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-2 control-label">Mengelola Perubahan</label>

                                  <div class="col-sm-10">
                                    <select name="mengelola_perubahan" class="form-control" required>
                                      <option></option>
                                      <option value="1">Sangat Kurang</option>
                                      <option value="2">Kurang</option>
                                      <option value="3">Cukup</option>
                                      <option value="4">Baik</option>
                                      <option value="5">Sangat Baik</option>
                                    </select>                 
                                  </div>
                                </div> 
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-2 control-label">Pengambilan Keputusan</label>

                                  <div class="col-sm-10">
                                    <select name="pengambilan_keputusan" class="form-control" required>
                                      <option></option>
                                      <option value="1">Sangat Kurang</option>
                                      <option value="2">Kurang</option>
                                      <option value="3">Cukup</option>
                                      <option value="4">Baik</option>
                                      <option value="5">Sangat Baik</option>
                                    </select>                 
                                  </div>
                                </div>                           
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-2 control-label"></label>
                                  <div class="col-sm-10">
                                    <span style="color: red">Nilai Untuk Aspek Kompetensi Sosial Kultural</span>                    
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-2 control-label">Perekat Bangsa</label>

                                  <div class="col-sm-10">
                                   <select name="perekat_bangsa" class="form-control" required>
                                      <option></option>
                                     <option value="1">Sangat Kurang</option>
                                      <option value="2">Kurang</option>
                                      <option value="3">Cukup</option>
                                      <option value="4">Baik</option>
                                      <option value="5">Sangat Baik</option>
                                    </select>                    
                                  </div>
                                </div>
                                 <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-2 control-label">Empati</label>

                                  <div class="col-sm-10">
                                    <select name="empati" class="form-control" required>
                                      <option></option>
                                      <option value="1">Sangat Kurang</option>
                                      <option value="2">Kurang</option>
                                      <option value="3">Cukup</option>
                                      <option value="4">Baik</option>
                                      <option value="5">Sangat Baik</option>
                                    </select>  
                                  </div>
                                </div>  
                                 <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-2 control-label">Interaksi Sosial</label>

                                  <div class="col-sm-10">
                                    <select name="interaksi" class="form-control" required>
                                      <option></option>
                                      <option value="1">Sangat Kurang</option>
                                      <option value="2">Kurang</option>
                                      <option value="3">Cukup</option>
                                      <option value="4">Baik</option>
                                      <option value="5">Sangat Baik</option>
                                    </select>  
                                  </div>
                                </div>  
                                 
                                
                                
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-2 control-label"></label>
                                  <div class="col-sm-10">
                                    <br><button type="submit" value="upload" class="btn btn-info">SIMPAN</button>
                                  </div>
                                </div>
                              </div>
                              <!-- /.box-body -->
                            </form>                                                       
                </div>
              </div>           
            </div>
          </div>         
        </div>       
      </div>           
    </section>
</div>

<?php include 'module/templates/footer.php'; ?>
