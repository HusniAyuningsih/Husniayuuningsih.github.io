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
    

    //query insert data
  //  $query  = "INSERT INTO buku
    //            VALUES
      //          ('', '$judul', '$penulis', '$penerbit', '$tahun_terbit', '$jumlah_buku' )
        //        ";
               

//    mysqli_query($koneksi, $query);

    //cek berhasil atatu tidak
    if ( tambah($_POST) > 0 ) {
        echo "
        <script>
        alert('berhasil');
        document.location.href = 'utama.php';
        </script>
        ";
    }else{
        echo "<script>
        alert('gagal');
        document.location.href = 'utama.php';
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
    <title>Tambah Data Buku RPL</title>
    <link rel="stylesheet" href="assets/bs/bootstrap.css">

</head>
<body>
    <div class="container">
    <h1>Tambah Data Buku RPL</h1>


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
                 <label for="penerbit">penerbit</label>
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
              <a href="utama.php" class="btn btn-secondary">Kembali</a>
              
    </form>
    </div>
</body>
</html>