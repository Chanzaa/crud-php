<?php
//sambung dengan fail function untuk guna function tersebut
require "functions.php";
$mahasiswa = query("SELECT * FROM mahasiswa");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Senarai Pelajar </title>
</head>

<body>
  <h1>Senarai Pelajar</h1>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>NoIc</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Action</th>
    </tr>


    <?php
    $i = 1;
    foreach ($mahasiswa as $m) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $m["gambar"]; ?>" alt=""></td>
        <td><?= $m["noic"]; ?></td>
        <td><?= $m["nama"]; ?></td>
        <td><?= $m["email"]; ?></td>
        <td><?= $m["jurusan"]; ?></td>
        <td><a href="">update</a> | <a href="">delete</a></td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>