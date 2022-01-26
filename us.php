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
$users = query("SELECT * FROM users ");

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
        <div class="col-8">
          <div class="card">
            <div class="card-body" style="background-color: ghostwhite;">
              <div class="section-title">
              <h4>Tambahkan Daftar Kunjungan Anda</h4>
              </div>
              
            
    <table class="table table-bordered border-Dark table-light">
  <tr class="table-primary">
      <th>No.</th>
      <th>Nama</th>
  </tr>

<?php $i = 1; ?>
    <?php foreach ($users as $row) : ?>
    <tr>
    <td><?= $i; ?></td>
        <td><?=$row["username"]; ?></td>
    </tr>
    <?php $i++ ;?>
       <?php endforeach; ?>
</table>
<a href="registrasi.php" class="btn btn-primary">Tambah</a>
<a href="index.php" class="btn btn-secondary">Kembali</a>
            </div>
          </div>
        </div>
    </div>
    </div>
</body>
</html>