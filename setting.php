<?php
$koneksi = mysqli_connect("localhost", "root", "", "uas");


function query ($query){
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
    }
    return $rows;
}

 function tambah($data) {
    global $koneksi;
    //ambil data
    $judul = htmlspecialchars ($data["judul"]);
    $penulis = $data["penulis"];
    $penerbit = $data["penerbit"];
    $tahun_terbit = $data["tahun_terbit"];
    $jumlah_buku = $data["jumlah_buku"];

     //query insert data
     $query  = "INSERT INTO buku
     VALUES
     ('', '$judul', '$penulis', '$penerbit', '$tahun_terbit', '$jumlah_buku',)
     ";
    

mysqli_query($koneksi, $query);

return mysqli_affected_rows($koneksi);

 }
 
function hapus($id) {
global $koneksi;
mysqli_query($koneksi, "DELETE FROM df WHERE id = $id");

return mysqli_affected_rows($koneksi);
}

function ubah($data){
    global $koneksi;
    //ambil 
    $id = $data["id"];
    $nim = $data["nim"];
    $nama = $data["nama"];
    $prodi = $data["prodi"];
    $bk = $data["bk"];
    $tgl = $data["tgl"];

     //query insert data
     $query  = "UPDATE df SET
                nim = '$nim',
                nama = '$nama',
                prodi = '$prodi',
                bk = '$bk',
                tgl = '$tgl'
                WHERE id = $id 
    ";
     

mysqli_query($koneksi, $query);

return mysqli_affected_rows($koneksi);

}

function cari($keyword) {
    $query = "SELECT * FROM buku
            WHERE
    judul LIKE '%$keyword%' OR
    tahun_terbit LIKE '%$keyword%' OR
    penulis LIKE '%$keyword%' 
    " ;
     //mencari sesuatu dengan flexibel

    return query ($query);
}


function sc($keyword) {
    $query = "SELECT * FROM jr
            WHERE
    judul LIKE '%$keyword%' OR
    tahun_terbit LIKE '%$keyword%' OR
    penulis LIKE '%$keyword%' 
    " ;
     //mencari sesuatu dengan flexibel

    return query ($query);
}

//function ini menerima inputan dari $data yang dikirim dr $_post
function registrasi($data) {
global $koneksi;

//strtolower = huruf kecil
$username = strtolower(stripslashes($data["username"]));
$password = mysqli_real_escape_string($koneksi, $data["password"]);
$password2 = mysqli_real_escape_string($koneksi, $data["password2"]);

//cek unm a/b
$result = mysqli_query($koneksi, "SELECT username FROM users 
WHERE username = '$username'");

//jika fungsi true maka ada
if( mysqli_fetch_assoc($result) )  {
    echo "<script>
    alert('username sudah terdaftar')
    </script>";

    return false; //stop fungsi
}


//cek koonfirmasi password
if( $password !== $password2 ) { //jika p tdk samadg p2 maka
    echo "<script>
    alert('konfirmasi password tidak sesuai');
    </script>";

    return false;
}

//enkripsi password
$password = password_hash($password, PASSWORD_DEFAULT);

// tambahkan user ke db
mysqli_query($koneksi, "INSERT INTO  users VALUES('', '$username', '$password')");

return mysqli_affected_rows($koneksi);

}

//f tb d pd pg
function pn($data) {
    global $koneksi;
    //ambil data
    $nim = htmlspecialchars ($data["nim"]);
    $nama = $data["nama"];
    $prodi = $data["prodi"];
    $bk = $data["bk"];
    $tgl = $data["tgl"];

     //query insert data
     $query  = "INSERT INTO df
     VALUES
     ('', '$nim', '$nama', '$prodi', '$bk', '$tgl' )
     ";
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
    
}

// f tb d pd jr
function tm($data) {
    global $koneksi;
    //ambil data
    $judul = $data["judul"];
    $penulis = $data["penulis"];
    $penerbit = $data["penerbit"];
    $tahun_terbit = $data["tahun_terbit"];
    $jumlah_buku = $data["jumlah_buku"];

     //query insert data
     $query  = "INSERT INTO jr
     VALUES
     ('', '$judul', '$penulis', '$penerbit', '$tahun_terbit', '$jumlah_buku')
     ";
    

mysqli_query($koneksi, $query);

return mysqli_affected_rows($koneksi);

 }

?>