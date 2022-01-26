<?php

session_start();
//jk td a s l l dl
if( !isset($_SESSION["login"]) ) {
  header("Location: login.php");
  exit;
}

//jk td a s l m l dl

//koneksi db
require  'setting.php';
//memanggil fungsi query di setting
//$buku = query("SELECT * FROM buku ");



//jika tombol cari di klik
//if(isset($_POST["cari"]) ){
    //buku akan berisi data hasil pencarian cari 
    //dapat data dari apapun yang diketk oleh user
  //  $buku = cari($_POST["keyword"]);
//}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman</title>
    <link rel="stylesheet" href="assets/bs/bootstrap.css">
    <link rel="stylesheet" href="assets/fontawesome-free-5.15.4-web/css/all.css">

</head>
<body style="background-color: aliceblue;">
  
<a href=""></a>

    <div class="container">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Perpustakaan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Daftar Buku
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="utama.php">RPL</a></li>
            <li><a class="dropdown-item" href="j.php">Jaringan</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="user.php">Daftar Pengunjung</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="us.php">Daftar User</a>
        </li>
        
      </ul>
      
      <a href="logout.php" class="btn btn-light">Logout</a>
      
    </div>
  </div>
</nav>

<br>

<div class="container">
      <div class="row">
        <div class="col-12">
          <div class="card style" style="background-color: ghostwhite;">
            <div class="card-body">
              <div class="section-title">
                <h1>Selamat Datang Di Perpustakaan Universitas Bumigora</h1>
              </div>
              <div class="col-lg-2" data-aos="fade-right">
                <img src="assets/img/logo-ubg.png" class="img-fluid" alt="" />
              </div>
              <h5>
              "Satu-satunya hal yang benar-benar harus kamu ketahui, adalah lokasi perpustakaan." 
              </h5>
              <h5>  - Albert Einstein</h5>
              <br>
              <h5>"Perpustakaan menyimpan energi yang memicu imajinasi. Perpustakaan membuka jendela ke dunia dan menginspirasi kita untuk mengeksplorasi dan mencapai, dan berkontribusi untuk meningkatkan kualitas hidup kita." 
            </h5>
            <h5>- Sidney Sheldon</h5>
            </div>
          </div>
        </div>
    </div>

    <br>
    <!-- end -->
    <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body" style="background-color: ghostwhite";>
            <img src="assets/img/OIP.jpg" class="card-img-top" alt="...">
            Membaca buku dapat melatih otak untuk dapat berpikir lebih kritis maupun menganalisis adanya masalah yang tersaji dalam apa yang kita baca.
Kita seperti mendapatkan akses atau jalan untuk dapat masuk ke dalam alur cerita dan membantu dalam penyelesaian cerita tersebut.</div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="background-color: ghostwhite";>
            <div class="card-body">
            <img src="assets/img/3.jpg" class="card-img-top" alt="...">
            Semakin banyak melakukan kegiatan membaca buku, maka akan semakin banyak kita mendapatkan penjelasan mengenai hal-hal yang belum kita ketahui, serta dapat menambah jumlah kosakata yang bisa kita gunakan dalam kehidupan keseharian kita.</div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-body" style="background-color: ghostwhite";>
            <img src="assets/img/7.jpg" class="card-img-top" alt="...">
            Dengan bertambahnya kosakata yang kita miliki dari kegiatan membaca buku, otomatis dapat membantu kita untuk dapat membuat karya tulis sendiri dengan bahasa yang sebaik atau bahkan bisa lebih baik dari apa yang telah kita baca sebelumnya.</div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-body" style="background-color: ghostwhite";>
            <img src="assets/img/5.jpg" class="card-img-top" alt="...">
            Membaca buku sebanyak-banyaknya dapat memperluas pengetahuan dan mendatangkan banyak pembelajaran baru dalam hidup seseorang. Selain itu, membiasakan diri untuk membaca sejak dini dapat meningkatkan kecerdasan seseorang.</div>
          </div>
        </div>


    <script src="assets/bs/bootstrap.bundle.js"></script>
</body>
</html>