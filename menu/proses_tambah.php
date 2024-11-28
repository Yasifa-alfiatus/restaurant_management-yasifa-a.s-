<?php
session_start();
include("../koneksi.php");

if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga'];

    $sql = "INSERT INTO menu
    (nama, kategori, harga)
    VALUES ('$nama', '$kategori', '$harga')";

    $query = mysqli_query($db, $sql);
if ($query){
    $_SESSION['notifikasi'] = "Data menu berhasil di simpan!";
} else {
    $_SESSION['notifikasi'] = "Data menu gagal di simpan!";
}
header('Location: index.php');
}else{
    die("Akses di tolak...");
}
?>