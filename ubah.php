<?php
session_start();

//jk td a s l l dl
if( !isset($_SESSION["login"]) ) {
  header("Location: login.php");
  exit;
}
require 'setting.php';

//ambil data
$id = $_GET["id"];

//query data
$pj = query("SELECT * FROM df WHERE id = $id")[0];


//cek apakah sumbit sudah di tekan
if(isset($_POST["submit"]) ){
    
    
    //cek berhasil atatu tidak
    if ( ubah($_POST) > 0 ) {
        echo "
        <script>
        alert('Data Berhasil Di Update');
        document.location.href = 'user.php';
        </script>
        ";
    }else{
        echo "<script>
        alert('Upps Data Gagal Di Update');
        document.location.href = 'user.php';
        </script>";
    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Data Pengunjung</title>
    <link rel="stylesheet" href="assets/bs/bootstrap.css">

</head>
<body>
    <div class="container">
    <h1>Update Data Pengunjung</h1>


    <form action="" method="post">

              
    <div class="mb-3">
                <input type="hidden" name="id" id="id" class="form-control" 
                value="<?= $pj["id"]; ?>">

                <label for="nim">Nim</label>
                <input type="text" name="nim" id="nim" class="form-control" 
                value="<?= $pj["nim"]; ?>">
                </div>
           
                <div class="mb-3">
                 <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control"
                require value="<?= $pj["nama"]; ?>">
                </div>
           
                <div class="mb-3">
                 <label for="prodi">Prodi</label>
                <input type="text" name="prodi" id="prodi" class="form-control"
                value="<?= $pj["prodi"]; ?>">
                </div>
           
                <div class="mb-3">
            <label for="bk">Judul Buku Yang Di Baca</label>
                <input type="text" name="bk" id="bk" class="form-control" value="<?= $pj["bk"]; ?>">
                </div>
           
                <div class="mb-3">
            <label for="tgl">Tanggal Kunjungan</label>
                <input type="datetime-local" name="tgl" id="tgl" class="form-control"  class="form-control" value="<?= $pj["tgl"]; ?>">
                </div>
               
              <button type="submit" name="submit" class="btn btn-primary">Update</button>
              <a href="user.php" class="btn btn-secondary">Kembali</a>
            
              
    </form>
    </div>
</body>
</html>