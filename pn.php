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
    if ( pn($_POST) > 0 ) {
        echo "
        <script>
        alert('berhasil');
        document.location.href = 'user.php';
        </script>
        ";
    }else{
        echo "<script>
        alert('gagal');
        document.location.href = 'user.php';
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
    <title>Tambah Data Pengunjung</title>
    <link rel="stylesheet" href="assets/bs/bootstrap.css">

</head>
<body>
    <div class="container">
    <h1>Tambah Data Pengunjung</h1>


    <form action="" method="post">
       
            
                <div class="mb-3">
                <label for="nim">Nim</label>
                <input type="text" name="nim" id="nim" class="form-control">
                </div>
           
                <div class="mb-3">
                 <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control"
                require>
                </div>
           
                <div class="mb-3">
                 <label for="prodi">Prodi</label>
                <input type="text" name="prodi" id="prodi" class="form-control">
                </div>
           
                <div class="mb-3">
            <label for="bk">Judul Buku Yang Di Baca</label>
                <input type="text" name="bk" id="bk" class="form-control">
                </div>
           
                <div class="mb-3">
            <label for="tgl">Tanggal Kunjungan</label>
                <input type="datetime-local" name="tgl" id="tgl" class="form-control">
                </div>
               
              <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
              <a href="user.php" class="btn btn-secondary">Kembali</a>
              
    </form>
    </div>
</body>
</html>