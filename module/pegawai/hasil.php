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
            $sql="SELECT * FROM pegawai where `status`='sudah' ORDER BY id_pegawai";
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
                   
                     
        ?>
                 
               
                    <?php
                        reset($nama_pegawai);
                        $nomor=1;   
                        while (list($k, $v) = each($nama_pegawai)) 
                            {
                                 
                    ?>
                    
                    <?php
                            }
                    ?>
              
        <?php            
                }
        ?>
       
       
        <?php
        reset($nama_aspek);
        while (list($key, $value) = each($nama_aspek)) 
                {       
                   
                     
        ?>
                 
                
                    <?php
                        //---------------------Proses menghitung nilai GAP---------------------     
                        reset($nama_pegawai);
                        $nomor=1;   
                        while (list($k, $v) = each($nama_pegawai)) 
                            {
                                 
                    ?>
                                 
                        <?php for($kol=1;$kol<=$jumlah_kolom[$key];$kol++) {
                                    $pos=$r_index[$key][$kol];
                                    $nilai_gap[$k][$pos]=$nilai_sample[$k][$pos]-$target[$pos]
                            ?>
                        <?php $nilai_sample[$k][$pos];
                         $target[$pos];
                          $nilai_gap[$k][$pos];?>
                        <?php } ?>
          
                    <?php
                            }
                    ?>
                </table>
        <?php            
                }
        ?>
         
            
        <?php
        reset($nama_aspek);
        while (list($key, $value) = each($nama_aspek)) 
                {       
                  
                     
        ?>
                 
               
                    <?php
                        reset($nama_pegawai);
                        $nomor=1;   
                        while (list($k, $v) = each($nama_pegawai)) 
                            {
                                $jum_cf=$jum_sf=$ccf=$csf=0;
                                 
                    ?>
                    <tr>
                      
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
                       
                        <?php }
                         
                            $ncf=$jum_cf/$ccf;
                            $nsf=$jum_sf/$csf;
                            $nilai_bobot[$k][$key]=$ba_cf[$key]*($ncf/100)+$ba_sf[$key]*($nsf/100);
                            $nilai_akhir[$k]+=$nilai_bobot[$k][$key]*($ba_all[$key]/100);
                         ?>
                        
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
                       
        <?php
                         
                       
                        while (list($k, $v) = each($nilai_akhir))   
                            {
            ?>
                       
            <?php                    
                            }
        ?>
                     
             <?php
                //print_r($nilai_akhir);
                reset($nilai_akhir);
                arsort($nilai_akhir);
                //print_r($nilai_akhir);
             ?>
                        <center><span style="color: #3c8dbc;"><h3><b>Nilai Akhir Penilaian Pegawai</b></h3></span></center>                         
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