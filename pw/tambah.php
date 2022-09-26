<?php
require 'function.php';

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('Data berhasil ditambah');
            document.location.href = 'index.php';
          </script>";
  } else {
    echo "<script>
             alert('Data gagal ditambah');
              document.location.href = 'index.php';
          </script>";
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Buku</title>
</head>

<body>
  <h3>Form Tambah Data Buku</h3>
  <form action="" method="POST">
    <ul>
      <li>
        <label>
          Nama :
          <input type="text" name="nama" autofocus required>
        </label>
      </li>
      <li>
        <label>
          Penulis :
          <input type="text" name="penulis" required>
        </label>
      </li>
      <li>
        <label>
          Penerbit :
          <input type="text" name="penerbit" required>
        </label>
      </li>
      <li>
        <label>
          Halaman :
          <input type="text" name="halaman" required>
        </label>
      </li>
      <li>
        <label>
          Gambar :
          <input type="image" name="gambar" required>
        </label>
      </li>
      <li>
        <button type="submit" name="tambah">Tambah Data</button>
      </li>
    </ul>
  </form>
</body>

</html>