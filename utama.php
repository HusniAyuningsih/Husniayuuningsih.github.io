<?php

session_start();

//jk td a s l m l dl
if( !isset($_SESSION["login"]) ) {
  header("Location: login.php");
  exit;
}

//koneksi db
require  'setting.php';
//memanggil fungsi query di setting
$buku = query("SELECT * FROM buku ");


//jika tombol cari di klik
if(isset($_POST["cari"]) ){
    //buku akan berisi data hasil pencarian cari 
    //dapat data dari apapun yang diketk oleh user
    $buku = cari($_POST["keyword"]);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman</title>
    <link rel="stylesheet" href="assets/bs/bootstrap.css">

</head>
<body style="background-color: aliceblue;">
    <div class="container">
    <h1>Daftar Buku</h1>
    <br><br>



    <div class="container">
      <div class="row">
        <div class="col-4">
          <form action="" method="post" class="d-flex">
        <input class="form-control me-2" type="search" name="keyword" placeholder="Search" aria-label="Search" 
        autofocus autocomplete="off">
        <button class="btn btn-outline-success" type="submit" name="cari">Search</button>
      </form>
      <br>
        </div>
      </div>

    <table class="table table-bordered border-Dark table-light">
  <tr class="table-primary">
      <th>No.</th>
      <th>Judul</th>
      <th>Penulis</th>
      <th>Penerbit</th>
      <th>Tahun Terbit</th>
      <th>Jumlah Buku</th>
  </tr>

<?php $i = 1; ?>
    <?php foreach ($buku as $row) : ?>
    <tr>
    <td><?= $i; ?></td>
        </td>
        <td><?= $row["judul"]; ?></td>
        <td><?=$row["penulis"]; ?></td>
        <td><?=$row["penerbit"]; ?></td>
        <td><?=$row["tahun_terbit"]; ?></td>
        <td><?=$row["jumlah_buku"]; ?></td>
    </tr>
    <?php $i++ ;?>
       <?php endforeach; ?>
</table>
<a href="tambah.php" class="btn btn-secondary">Tambah</a>
<a href="index.php" class="btn btn-primary">Kembali</a>
</div>
</body>
</html>