<?php
session_start();
include("../koneksi.php");


if (isset($_GET['id'])) {
    
    $menu_id = $_GET['id'];

   
    $sql = "DELETE FROM menu WHERE menu_id= $menu_id";
    $query = mysqli_query($db, $sql);

   
    if ($query) {
        $_SESSION['notifikasi'] = "menu berhasil dihapus!";
    } else {
        $_SESSION['notifikasi'] = "menu siswa gagal dihapus!";
    }

   
    header('Location: index.php');
} else {

    die("Akses ditolak...");
}
?>