<?php
require "functions.php";
//tekan lihat detail akan keluar detail pelajar---
// 1)amek id dari url yang kita hantar jika (lihat detail ditekan)
$id = $_GET['id'];

//2)query mahasiswa berdasarkan id
$m = query("SELECT * FROM mahasiswa WHERE id = $id");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Pelajar</title>
</head>

<body>
  <h3>Detail Pelajar : </h3>

  <ul>
    <li><img src="img/<?= $m["gambar"]; ?> " alt=""></li>
    <li>Noic : <?= $m["noic"]; ?> </li>
    <li>Nama : <?= $m["nama"]; ?></li>
    <li>Email : <?= $m["email"]; ?></li>
    <li>Jurusan : <?= $m["jurusan"]; ?></li>
    <li>
      <a href="">update</a> | <a href="">delete</a>
    </li>
    <li><a href="proDetail.php">kembali ke senarai pelajar</a></li>
  </ul>
</body>

</html>