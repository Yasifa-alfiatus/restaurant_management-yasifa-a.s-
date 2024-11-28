<?php
include("../koneksi.php");

$id = $_GET['id'];

$query = $db->query("SELECT * FROM  menu WHERE menu_id = '$id'");
$menu = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit menu</title>
</head>
<body>
    <h3>Edit Menu</h3>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="menu_id" value="<?php echo $menu['menu_id']; ?>">
        <table border="0">
        <tr>
    <td>Nama</td>
                <td>
                    <input type="text" name="nama"
                    value="<?php echo $menu['nama']; ?>" required >
                </td>
            </tr>
     <tr>
     <td>Kategori</td>
               <td>
                <select name="kategori" style="width: 100%" required>
                    <option value="" disable>-- Pilih Kategori --</option>
                    <option value="Menu Spesial" <?php echo ($menu['kategori'] == 'Makanan Spesial')
                    ? 'selected' : ''; ?>>Makanan Spesial</option>
                     <option value="Makanan" <?php echo ($menu['kategori'] == 'Makanan')
                    ? 'selected' : ''; ?>>Makanan</option>
                     <option value="Minuman" <?php echo ($menu['kategori'] == 'Minuman')
                    ? 'selected' : ''; ?>>Minuman</option>
                     <option value="Dessert" <?php echo ($menu['kategori '] == 'Dessert')
                    ? 'selected' : ''; ?>>Dessert</option>
                    </select>
                    </td>
                    </tr>
            <tr>
    <td>Harga</td>
               <td>
                <input type="text" name="harga"
                value="<?php echo $menu['harga']; ?>"</td>
            </tr>
            </table>
        <button type="submit" name="simpan">Simpan</button>
</form>
</body>
</html>