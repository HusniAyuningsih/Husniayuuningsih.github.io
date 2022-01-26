<?php
session_start();

if(isset($_SESSION["registrasi"]) ) {
    header("location: login.php");
    exit;
}

require 'setting.php';

//jika tombol register sudah ditekan
if(isset($_POST["register"]) ) {

    //maka jalankan function registrasi yang dibuatt di halman setting.php
    if( registrasi($_POST) > 0 ) { 

        echo "<script>
            alert('user baru berhasil ditambahkan')
            </script>";
            header("location:login.php");
    } else {
        echo mysqli_error($koneksi);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Registrasi</title>
    <link rel="stylesheet" href="assets/bs/bootstrap.css">


</head>
<body style="background-color: aliceblue ;">

    <div class="container  d-flex justify-content-center 
    align-items-center" style="min-height: 100vh;">
    <form class="border shadow p-3 rounded" action="" method="post"
            style="background-color: ghostwhite; width: 450px;">
            <h1 class="text-center p-3">Registrasi</h1>
            <div class="mb-3">
        <label for="username">Username</label>
    <input type="username" name="username" id="username"
    class="form-control mb-3" placeholder="Masukkan Username">
            </div>

    <div class="mb-3">
    <label for="password">Password</label>
    <input type="password" name="password" id="password"
    class="form-control mb-3" placeholder="Masukkan Password">
    </div>

    <div class="mb-3">
    <label for="password2">Konfirmasi Password</label>
    <input type="password" name="password2" id="password2"
    class="form-control mb-3" placeholder="Ulangi Password">
    </div>
    <button type="submit" name="register" class="btn btn-primary">Daftar</button>
    <a href="login.php" class="btn btn-secondary">Kembali</a>

    </form>
        </div>
</body>
</html>