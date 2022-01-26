<?php
session_start();

//jk td a s l l dl
if( !isset($_SESSION["login"]) ) {
  header("Location: login.php");
  exit;
}

require 'setting.php';

$id = $_GET["id"];


if( hapus($id) > 0 ) {
    echo "
    <script>
    alert('berhasil');
    document.location.href = 'user.php';
    </script>
    ";
} else {
    echo "
    <script>
    alert('gagal');
    document.location.href = 'user.php';
    </script>
    ";
}
?>