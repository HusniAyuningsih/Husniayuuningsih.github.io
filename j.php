<?php
//TABEL BUKU JARINGAN

session_start();

//jk td a s l m l dl
if( !isset($_SESSION["login"]) ) {
  header("Location: login.php");
  exit;
}

//koneksi db
require  'setting.php';
//memanggil fungsi query di setting
$buku = query("SELECT * FROM jr ");


//jika tombol cari di klik
if(isset($_POST["sc"]) ){
    //buku akan berisi data hasil pencarian cari 
    //dapat data dari apapun yang diketk oleh user
    $buku = sc($_POST["keyword"]);
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
        <br>
      <div class="row">
        <div class="col-6">
          <form action="" method="post" class="d-flex">
        <input class="form-control me-2" type="search" name="keyword" placeholder="Search" aria-label="Search" 
        autofocus autocomplete="off">
        <button class="btn btn-outline-success" type="submit" name="sc">Search</button>
      </form>
      <br>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body" style="background-color: ghostwhite;">
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
        <td><?= $row["judul"]; ?></td>
        <td><?=$row["penulis"]; ?></td>
        <td><?=$row["penerbit"]; ?></td>
        <td><?=$row["tahun_terbit"]; ?></td>
        <td><?=$row["jumlah_buku"]; ?></td>
    </tr>
    <?php $i++ ;?>
       <?php endforeach; ?>
</table>
<a href="t.php" class="btn btn-primary">Tambah</a>
<a href="index.php" class="btn btn-secondary">Kembali</a>
</div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>