<?php 
$username = $_POST['username'];

if($_POST['upload']){
  $ekstensi_diperbolehkan = array('png','jpg','jpeg');
  $nama_photo = $_FILES['file']['name'];
  $x = explode('.', $nama_photo);
  $ekstensi = strtolower(end($x));
  $ukuran = $_FILES['file']['size'];
  $file_tmp = $_FILES['file']['tmp_name'];  

  if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
    if($ukuran < 1044070){      
      move_uploaded_file($file_tmp, 'assets/file_biodata/'.$nama_photo);   
      $query_user = mysqli_query($koneksi, "UPDATE pegawai SET `file_biodata`='$nama_photo' WHERE `id_pegawai`='$username' ");

      if($query){
        echo "<script>window.location.href = '?module=home';</script>";
      }else{
        echo "<script>
                window.alert('Data Gagal di Upload');
                window.location.href = '?module=file_biodata';
            </script>";
      }
    }else{
      echo 'UKURAN FILE TERLALU BESAR';
    }
  }else{
    echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
  }
} ?>