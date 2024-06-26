<?php

//Koneksi ke DB & pilih DB
$db = mysqli_connect('localhost', 'root', '', 'belajar');

//Query tabel belajar
$result = mysqli_query($db, "SELECT * FROM daftar_buku");

//Ubah data ke dalam array
// $row = mysqli_fetch_row($result); //Array Numeric
// $row = mysqli_fetch_assoc($result); // Aray Associative
$rows = [];
while ($row = mysqli_fetch_array($result)) {
  $rows[] = $row;
}; //Aray Associative dan Numeric

//Tampung ke variable data_buku
$daftar_buku = $rows;

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
      <th>Tahun</th>
      <th>Penulis</th>
      <th>Kategori</th>
      <th>Deskripsi</th>
      <th>Rating</th>
      <th>Aksi</th>
    </tr>
    <?php $i = 1;
    foreach ($daftar_buku as $dabu) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $dabu['gambar'] ?>" width="50" alt="no-image"></td>
        <td><?= $dabu['sku'] ?></td>
        <td><?= $dabu['judul'] ?></td>
        <td><?= $dabu['tahun_terbit'] ?></td>
        <td><?= $dabu['penulis'] ?></td>
        <td><?= $dabu['kategori'] ?></td>
        <td><?= $dabu['deskripsi'] ?></td>
        <td><?= $dabu['rating'] ?></td>
        <td>
          <a href="">Edit</a> | <a href="">Delete</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>