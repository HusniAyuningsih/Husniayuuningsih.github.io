<?php
session_start();

//jk td a s l l dl
if( !isset($_SESSION["login"]) ) {
  header("Location: login.php");
  exit;
}

require 'setting.php';


//cek apakah sumbit sudah di tekan
if(isset($_POST["submit"]) ){
                   

//    mysqli_query($koneksi, $query);

    //cek berhasil atatu tidak
    if ( tm($_POST) > 0 ) {
        echo "
        <script>
        alert('berhasil');
        document.location.href = 'j.php';
        </script>
        ";
    }else{
        echo "<script>
        alert('gagal');
        document.location.href = 'j.php';
        </script>";
    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Buku Jaringan</title>
    <link rel="stylesheet" href="assets/bs/bootstrap.css">

</head>
<body style="background-color: aliceblue;">
    <div class="container">
      <div class="row">
        <div class="col-8">
          <div class="card">
            <div class="card-body" style="background-color: ghostwhite;">
            <h4>Tambah Data Buku Jaringan</h4>


    <form action="" method="post">
       
            
                <div class="mb-3">
                <label for="judul">Judul</label>
                <input type="text" name="judul" id="judul" class="form-control">
                </div>
           
                <div class="mb-3">
                 <label for="penulis">Penulis</label>
                <input type="text" name="penulis" id="penulis" class="form-control"
                require>
                </div>
           
                <div class="mb-3">
                 <label for="penerbit">Penerbit</label>
                <input type="text" name="penerbit" id="penerbit" class="form-control">
                </div>
           
                <div class="mb-3">
            <label for="tahun_terbit">Tahun Terbit</label>
                <input type="text" name="tahun_terbit" id="tahun_terbit" class="form-control">
                </div>
           
                <div class="mb-3">
            <label for="jumlah_buku">Jumlah Buku</label>
                <input type="text" name="jumlah_buku" id="jumlah_buku" class="form-control">
                </div>
               
              <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
              <a href="j.php" class="btn btn-secondary">Kembali</a>
              
    </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>