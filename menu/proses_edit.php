<?php

session_start();
include("../koneksi.php");

if (isset($_POST['simpan'])) {
    $menu_id = $_POST['menu_id'];
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga'];

    $sql = "UPDATE menu SET
    nama= '$nama',
    kategori= '$kategori',
    harga= '$harga'
    WHERE menu_id =$menu_id";

    $query = mysqli_query($db, $sql);

    if ($query){
        $_SESSION['notifikasi'] = "Data menu berhasil di perbarui";
    } else {
        $_SESSION['notifikasi'] = "Data menu gagal di perbarui";
    }

    header('Location: index.php');
} else {
    die("Akses ditolak..");
}
?>