<?php
session_start();

if(isset($_SESSION["login"]) ) {
    header("location: index.php");
    exit;
}

//p fngs
require 'setting.php';

if( isset($_POST["login"]) ) {

    $username =$_POST["username"];
    $passworrd = $_POST["password"];

    //a/g u trtn d dl tb u
    $result = mysqli_query($koneksi, "SELECT * FROM users WHERE username = '$username'");

    //cek username
    if( mysqli_num_rows($result) === 1 ) {  // c a ad y dkbldr q r j hs =1 a kl a

        //cek pw
        $row = mysqli_fetch_assoc($result); //d dl r sd a i u p y sd d ack
        if( password_verify($passworrd, $row["password"]) ) {//ngc st = hash if = pw true

            //set session
            $_SESSION["login"] = true;
            header("Location: index.php");  //blh u ms k dl sist

} //u ngtg a br bs y di kbl dr f select

    $error = true;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Login</title>
    <link rel="stylesheet" href="assets/bs/bootstrap.css">
    <link rel="stylesheet" href="assets/fontawesome-free-5.15.4-web/css/all.css">
</head>
<body style="background-color: aliceblue ;">

<?php if ( isset($error) ) :?>
    <p>Username / Password Salah</p>

    <?php endif; ?>

    <div class="container d-flex justify-content-center 
    align-items-center" style="min-height: 100vh;">
   
    <form class="border shadow p-3 rounded" action="" method="post"
            style="background-color: ghostwhite; width: 450px;">
            <h1 class="text-center p-3">Login</h1>
            <div class="mb-3">
        <label for="username" i>Username </label>
    <input type="username" name="username" id="username"
    class="form-control mb-3"  placeholder="Masukkan Username">
    </div>
    <div class="mb-3">
    <label for="password">Password</label>
    <input type="password" name="password" id="password"    class="form-control" placeholder="Masukkan Password">
    </div>

    <button type="submit" name="login" class="btn btn-primary">Login</button>
    <a href="registrasi.php" class="btn btn-secondary">Daftar</a>

    </form>
    </div>
  
</body>
</html>