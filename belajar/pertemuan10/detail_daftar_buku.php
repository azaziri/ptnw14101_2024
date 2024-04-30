<?php

//hubugkan halaman latihan2.php dengan functions.php
require 'functions.php';

//ambil id dari URL
$id = $_GET['id'];

//Query daftar buku berdasarkan id (nomor)
$dabu = query("SELECT * FROM daftar_buku WHERE nomor = $id");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Daftar Buku</title>
</head>

<body>
  <h3>Detail Daftar Buku</h3>
  <ul>
    <li><img src="img/<?= $dabu['gambar'] ?>" alt="no-image"></li>
    <li>SKU : <?= $dabu['sku'] ?></li>
    <li>Judul : <?= $dabu['judul'] ?></li>
    <li>Tahun : <?= $dabu['tahun_terbit'] ?></li>
    <li>Penulis : <?= $dabu['penulis'] ?></li>
    <li>Kategori : <?= $dabu['kategori'] ?></li>
    <li>Deskripsi : <?= $dabu['deskripsi'] ?></li>
    <li>Rating : <?= $dabu['rating'] ?></li>
    <li><a href="">Edit | <a href="">Delete</a></a></li>
    <li><a href="latihan3.php">Back</a></li>
  </ul>
</body>

</html>