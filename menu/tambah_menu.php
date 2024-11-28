<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Restaurant</title>
</head>
<body>
  <h3>Tambah Penerbangan</h3>  
  <form action="proses_tambah.php" method="POST">
  <table border="0">
    <tr>
    <td>Nama</td>
                <td><input type="text" name="nama" required></td>
            </tr>
     <tr>
     <td>Kategori</td>
               <td>
                <select name="kategori" style="width: 100%" required>
                    <option value="" selected disabled>
                        -- Pilih Kategori --
                    </option>
                    <option value="Menu Spesial">Menu Spesial</option>
                    <option value="Makanan">Makanan</option>
                    <option value="Minuman">Minuman</option>
                    <option value="Dessert">Dessert</option>
                    </select>
                    </td>
                    </tr>
    <td>Harga</td>
               <td><input type="text" name="harga"</td>
            </tr>
        </table>
        <button type="submit" name="simpan" class="btn btn-primary">
            Simpan</button>
</form>
</body>
</html>