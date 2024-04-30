<?php

//hubugkan halaman latihan2.php dengan functions.php
require 'functions.php';

//Tampung ke variable data_buku
$daftar_buku = query("SELECT * FROM daftar_buku");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Buku</title>
</head>

<body>
  <h3>Daftar Buku</h3>

  <table border="1" cellpadding="10" cellspasing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>SKU</th>
      <th>Judul</th>
      <th>Aksi</th>
    </tr>
    <?php $i = 1;
    foreach ($daftar_buku as $dabu) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $dabu['gambar'] ?>" width="50" alt="no-image"></td>
        <td><?= $dabu['sku'] ?></td>
        <td><?= $dabu['judul'] ?></td>
        <td>
          <a href="detail_daftar_buku.php?id=<?= $dabu['nomor']; ?>">Detail</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>