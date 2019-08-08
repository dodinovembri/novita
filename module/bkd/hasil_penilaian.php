<?php include 'module/koneksi.php'; ?>

  <div class="content-wrapper">
    <section class="content">    
      <div class="row">
        <div class="col-md-12">
          <div class="box">                    
            <div class="box-body">
              <div class="row">
                <div class="col-md-12"> 
                  <div class="col-md-12">
                    
                    <?php 
                      $username = $_SESSION['username'];
                      $query = mysqli_query($koneksi, "SELECT * FROM alternatif");
                    ?>

                    <?php
                        $koneksi = mysqli_connect("localhost","root","", "novita");
                    ?>

                 <?php
                    //---------------------Menyimpan tabel bobot dalam array---------------------
                    $bobot=array();
                    $sql="SELECT * FROM bobot";
                    $hasil=mysqli_query($koneksi, $sql);
                    while($row=mysqli_fetch_assoc($hasil))
                        {
                            $bobot[$row['selisih']]=$row['bobot'];
                        }
                //---------------------Menyimpan tabel sample dalam array---------------------
                    $sql="SELECT * FROM alternatif";
                    $hasil=mysqli_query($koneksi, $sql);
                    while($row=mysqli_fetch_assoc($hasil))
                        {
                            $nilai_sample[$row['pegawai']][$row['kriteria']]=$row['nilai'];
                        }
                //---------------------Menyimpan tabel pegawai dalam array---------------------        
                    $nama_pegawai=array();
                    $nilai_akhir=array();
                    $sql="SELECT * FROM pegawai WHERE `status`='sudah'";
                    $hasil=mysqli_query($koneksi, $sql);
                    while($row=mysqli_fetch_assoc($hasil))
                        {
                            $nama_pegawai[$row['id_pegawai']]=$row['nama_pegawai'];
                            $nilai_akhir[$row['id_pegawai']]=0;
                        }
                //---------------------Menyimpan tabel aspek dalam array---------------------       
                    $nama_aspek=array(); 
                    $nama_singkat=array(); 
                    $jumlah_kolom=array();
                    $ba_all=array();
                    $ba_cf=array();
                    $ba_sf=array();
                    $sql="SELECT *,(SELECT COUNT(id_kriteria) FROM kriteria WHERE aspek=id_aspek) AS jum_kolom 
                         FROM aspek";
                    $hasil=mysqli_query($koneksi, $sql);
                    while($row=mysqli_fetch_assoc($hasil))
                        {
                            $aspek=$row['id_aspek'];
                            $nama_aspek[$row['id_aspek']]=$row['nama_aspek'];
                            $nama_singkat[$row['id_aspek']]=$row['nama_singkat'];
                            $jumlah_kolom[$row['id_aspek']]=$row['jum_kolom'];
                            $ba_all[$row['id_aspek']]=$row['bobot'];
                            $ba_cf[$row['id_aspek']]=$row['bobot_core'];
                            $ba_sf[$row['id_aspek']]=$row['bobot_secondary'];
                            //------------cari index berdasarkan nomor 
                            $sql2="SELECT * FROM kriteria WHERE aspek='$aspek' ORDER BY id_kriteria";
                            $hasil2=mysqli_query($koneksi, $sql2);
                            $kolom=1;
                            while($row2=mysqli_fetch_assoc($hasil2))
                                {
                                    $r_index[$aspek][$kolom]=$row2['id_kriteria'];
                                    $kolom++;
                                }
                                }
                    ?>
           
                    <?php
                        $no=1;
                        //---------------------Menyimpan tabel kriteria dalam array dan menampilkan---------------------
                        $sql="SELECT kriteria.*,nama_aspek,IF(jenis='1','c','s') AS nama_jenis
                            FROM kriteria LEFT JOIN aspek ON aspek=id_aspek ORDER BY aspek,id_kriteria";
                        $hasil=mysqli_query($koneksi, $sql);
                        $target=array();
                        $nama_jenis=array();
                        while($row=mysqli_fetch_assoc($hasil))
                        {       
                            $target[$row['id_kriteria']]=$row['target'];
                            $nama_jenis[$row['id_kriteria']]=$row['nama_jenis'];
                    ?>
                    
                    <?php
                        }
                    ?>
              
                    <?php
                     
                     
                        while (list($key, $value) = each($nama_aspek)) 
                            {       
                                echo "<span style='color: #3c8dbc;'><h4>".$nama_aspek[$key]."</h4></span>";
                             
                    ?>
                         
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <?php for($kol=1;$kol<=$jumlah_kolom[$key];$kol++) {?>
                                <th><?php echo $nama_singkat[$key]; ?><sub><?php echo $kol;?></sub></th>
                                <?php } ?>
                            </tr>
                            <?php
                                reset($nama_pegawai);
                                $nomor=1;   
                                while (list($k, $v) = each($nama_pegawai)) 
                                    {
                                         
                            ?>
                            <tr>
                                <td><?php echo $nomor++;?></td>
                                <td><?php echo $nama_pegawai[$k];?></td>
                                <?php for($kol=1;$kol<=$jumlah_kolom[$key];$kol++) {
                                            $pos=$r_index[$key][$kol];
                                    ?>
                                <td><?php echo $nilai_sample[$k][$pos]; ?></td>
                                <?php } ?>
                            </tr>
                            <?php
                                    }
                            ?>
                        </table>
                    <?php            
                            }
                    ?>
                    <hr />                                        
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>        
      </div>            
    </section>
  </div>

<?php include 'module/templates/footer.php'; ?>