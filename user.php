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
$users = query("SELECT * FROM df ");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Pengunjung</title>
    <link rel="stylesheet" href="assets/bs/bootstrap.css">

</head>
<body style="background-color: aliceblue;">
<br>
    <div class="container">
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body" style="background-color: ghostwhite;">
    <h4>Tambahkan Daftar Kunjungan Anda</h4>
    <br>
    <table class="table table-bordered border-Dark table-light">
  <tr class="table-primary">
      <th>No.</th>
      <th>Aksi</th>
      <th>Nim</th>
      <th>Nama</th>
      <th>Prodi</th>
      <th>Judul Buku Yang Di Baca</th>
      <th>Tanggal Kunjungan</th>

  </tr>

<?php $i = 1; ?>
    <?php foreach ($users as $row) : ?>
    <tr>
    <td><?= $i; ?></td>
    <td>     
            <a href="ubah.php?id=<?= $row["id"]; ?>">
            <button type="button" class="btn btn-outline-secondary">Update</button>
        </a>
            <a href="hapus.php?id=<?= $row["id"]; ?>" 
            onclick="return confirm('yakin?');">
            <button type="button" class="btn btn-outline-danger">Delete</button>
        </a>
           <td><?= $row["nim"]; ?></td>
        <td><?=$row["nama"]; ?></td>
        <td><?=$row["prodi"]; ?></td>
        <td><?=$row["bk"]; ?></td>
        <td><?=$row["tgl"]; ?></td>
    </tr>
    <?php $i++ ;?>
       <?php endforeach; ?>
</table>
<a href="pn.php" class="btn btn-primary">Tambah</a>
<a href="index.php" class="btn btn-secondary">Kembali</a>
</div>
          </div>
        </div>
    </div>
    
</body>
</html>