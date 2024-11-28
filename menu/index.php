<?php
include("../koneksi.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Restaurant</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px
        }
    </style>
</head>
<body>
   <h2>Data Penerbangan</h2> 

   <?php if (isset($_SESSION['notifikasi'])): ?>
   <p><?php echo $_SESSION['notifikasi']; ?></p>

   <?php unset($_SESSION['notifikasi']); ?>
   <?php endif; ?>
   <table>
    <thead>
    <tr align="center">
                    <th>#</th>
                    <th>Nama</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th><a href="tambah_menu.php">Tambah Data</a></th>
    </tr>
    </thead>
    <tbody>
    <?php
       $no = 1;
       $query = $db->query("SELECT * FROM menu");
       while ($menu = $query->fetch_assoc()){
        ?>
        <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $menu['nama']?></td>
        <td><?php echo $menu['kategori']?></td>
        <td><?php echo $menu['harga']?></td>
        <td align= "center">
        <a href="edit_menu.php?id=<?php echo $menu['menu_id'] ?>">Edit</a>
        <a onclick= "return confirm('Anda yakin ingin menghapus data?')"
         href="hapus_menu.php?id=<?php echo $menu['menu_id'] ?>">Hapus</a>
        </td>
        </tr>
        <?php
    }
    ?>
    <P>Total: <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>