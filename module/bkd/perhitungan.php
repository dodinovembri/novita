<?php include 'module/koneksi.php'; ?>

  <div class="content-wrapper">
   	<section class="content">    
      <div class="row">
        <div class="col-md-12">
          <div class="box">            
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
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
            $sql="SELECT pegawai.*, pangkat_pendidikan.* FROM pegawai JOIN pangkat_pendidikan ON pegawai.id_pegawai = pangkat_pendidikan.id_pegawai where pangkat_pendidikan.pangkat >= 34 AND pangkat_pendidikan.pendidikan >= 4 AND pegawai.status ='sudah' ORDER BY pegawai.id_pegawai";
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
    <!-- <h1>SPK PM</h1>
        <table class="table">
            <tr>
                <th>No</th>
                <th>Aspek</th>
                <th>Kriteria</th>
                <th>Nilai Target</th>
                <th>Type</th>
            </tr> -->
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
           <!--  <tr>
              <td><?php echo $no++;?></td>
              <td><?php echo $row['nama_aspek'];?></td>
              <td><?php echo $row['nama_kriteria'];?></td>
              <td><?php echo $row['target'];?></td>
              <td><?php echo $row['nama_jenis'];?></td>
          </tr> -->
          <?php
                }
          ?>
        <!-- </table> -->
        <?php
             
             
            while (list($key, $value) = each($nama_aspek)) 
                {       
                    echo "<h3>".$nama_aspek[$key]."</h3>";
                     
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
        <center><span style="color: #3c8dbc;"><h3><b>PERHITUNGAN GAP</b></h3></span></center>
        <?php
        reset($nama_aspek);
        while (list($key, $value) = each($nama_aspek)) 
                {       
                    echo "<h3>Aspek ".$nama_aspek[$key]."</h3>";
                     
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
                        //---------------------Proses menghitung nilai GAP---------------------     
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
                                    $nilai_gap[$k][$pos]=$nilai_sample[$k][$pos]-$target[$pos]
                            ?>
                        <td>(<?php echo $nilai_sample[$k][$pos]; ?>-<?php echo $target[$pos]; ?>)=<strong><?php echo $nilai_gap[$k][$pos];?></strong></td>
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
         <center><span style="color: #3c8dbc;"><h3><b>PEMBOBOTAN</b></h3></span></center>        
        <?php
        reset($nama_aspek);
        while (list($key, $value) = each($nama_aspek)) 
                {       
                    echo "<h3>Aspek ".$nama_aspek[$key]." (".$ba_all[$key]."%)</h3>";
                     
        ?>
                 
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <?php for($kol=1;$kol<=$jumlah_kolom[$key];$kol++) {
                                $pos=$r_index[$key][$kol];
                            ?>
                        <th><?php echo $nama_singkat[$key]; ?><sub><?php echo $kol;?></sub>[<?php echo $nama_jenis[$pos];?>]</th>
                        <?php } ?>
                        <th>rCF (<?php echo $ba_cf[$key];?>%)</th>
                        <th>rSF (<?php echo $ba_sf[$key];?>%)</th>
                        <th>Nilai</th>
                    </tr>
                    <?php
                        reset($nama_pegawai);
                        $nomor=1;   
                        while (list($k, $v) = each($nama_pegawai)) 
                            {
                                $jum_cf=$jum_sf=$ccf=$csf=0;
                                 
                    ?>
                    <tr>
                        <td><?php echo $nomor++;?></td>
                        <td><?php echo $nama_pegawai[$k];?></td>
                        <?php for($kol=1;$kol<=$jumlah_kolom[$key];$kol++) {
                                    $pos=$r_index[$key][$kol];
                                    $nilai_bobot[$k][$pos]=$bobot[$nilai_sample[$k][$pos]-$target[$pos]];
                                    if($nama_jenis[$pos]=="c")
                                        {
                                            $jum_cf+=$nilai_bobot[$k][$pos];
                                            $ccf++; 
                                        }
                                    else
                                        {
                                            $jum_sf+=$nilai_bobot[$k][$pos];
                                            $csf++; 
                                        }   
                                         
                            ?>
                        <td><?php echo $nilai_bobot[$k][$pos];?></td>
                        <?php }
                         
                            $ncf=$jum_cf/$ccf;
                            $nsf=$jum_sf/$csf;
                            $nilai_bobot[$k][$key]=$ba_cf[$key]*($ncf/100)+$ba_sf[$key]*($nsf/100);
                            $nilai_akhir[$k]+=$nilai_bobot[$k][$key]*($ba_all[$key]/100);
                         ?>
                        <td><?php echo $jum_cf."/".$ccf;?>=<?php echo number_format($ncf,2,",","."); ?></td>
                        <td><?php echo $jum_sf."/".$csf;?>=<?php echo number_format($nsf,2,",","."); ?></td>
                        <td><?php echo  number_format($nilai_bobot[$k][$key],2,",","."); ?></td>
                    </tr>
                    <?php
                            }
                    ?>
                </table>
        <?php            
                }
                //print_r($nilai_akhir);
                reset($nilai_akhir);
                //krsort($nilai_akhir);
                //print_r($nilai_akhir);
        ?>
                        <h3>Nilai Akhir Total</h3>
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Nilai</th>
                            </tr>
        <?php
                         
                        $nomor=1;   
                        while (list($k, $v) = each($nilai_akhir))   
                            {
            ?>
                        <tr>
                                <td><?php echo $nomor++; ?></td>
                                <td><?php echo $nama_pegawai[$k]; ?></td>
                                <td><?php echo number_format($nilai_akhir[$k],2,",","."); ?></td>
                            </tr>
            <?php                    
                            }
        ?>
                        </table>
             <?php
                //print_r($nilai_akhir);
                reset($nilai_akhir);
                arsort($nilai_akhir);
                //print_r($nilai_akhir);
             ?> 
                         <center><span style="color: #3c8dbc;"><h3><b>Nilai Akhir Total Sorting</b></h3></span></center>                                        
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Nilai</th>
                            </tr>
        <?php
                         
                        $nomor=1;   
                        while (list($k, $v) = each($nilai_akhir))   
                            {
            ?>
                        <tr>
                                <td><?php echo $nomor++; ?></td>
                                <td><?php echo $nama_pegawai[$k]; ?></td>
                                <td><?php echo number_format($nilai_akhir[$k],2,",","."); ?></td>
                          </tr>
            <?php                    
                            }
        ?>
                        </table>
                </div>
              </div>              
            </div>
          </div>
        </div>        
      </div>            
    </section>
  </div>

<?php include 'module/templates/footer.php'; ?>