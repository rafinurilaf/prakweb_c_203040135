<?php
require 'function.php';

$buku = query("SELECT * FROM buku");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Buku</title>
</head>

<body>
  <div class="container">
    <h1>Daftar Novel</h1>

    <a href="tambah.php">Tambah Data Buku</a>
    <br><br>

    <form action="" method="POST">
      <input type="text" name="keyword" size="50" placeholder="masukkan keyword pencarian.." autocomplete="off" autofocus>
      <button type="submit" name="cari">Cari!</button>
    </form>
    <br><br>


    <table border="1" cellpadding="10" cellspacing="0">

      <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Halaman</th>
        <th>Gambar</th>
      </tr>


      <?php if (empty($buku)) : ?>
        <tr>
          <td colspan="7">
            <p style="color: red; font-style:italic;"><B> Data Buku tidak di temukan </B></p>
          </td>
        </tr>
      <?php endif; ?>

      <?php $i = 1; ?>
      <?php foreach ($buku as $row) : ?>
        <tr>
          <td><?= $i; ?></td>
          <td><?= $row["nama"]; ?></td>
          <td><?= $row["penulis"]; ?></td>
          <td><?= $row["penerbit"]; ?></td>
          <td><?= $row["halaman"]; ?></td>
          <td><img src="assets/img/<?php echo $row["gambar"]; ?>" width="100"></td>
          <td>
            <a href="ubah.php?id_buku=<?= $row['id']; ?>">Ubah</a> |
            <a href="hapus.php?id_buku=<?= $row['id']; ?>" onclick="return confirm('Apakah Anda Yakin?');">Hapus</a>
          </td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
    </table>
  </div>



</body>

</html>