<?php

//Koneksi ke DB & pilih DB
function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'belajar');
}

//Query tabel belajar
//$query sebagai parameter
function query($query)
{
  $db = koneksi();

  //Ubah data ke dalam array
  // mysqli_fetch_row($result); //Array Numeric
  // mysqli_fetch_assoc($result); // Aray Associative
  $result = mysqli_query($db, $query); //Aray Associative dan Numeric

  //jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_array($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_array($result)) {
    $rows[] = $row;
  }

  return $rows;
}
