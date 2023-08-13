<?php
require "functions.php";

//cek data baru yang ditambah kalau button ditekan

if (isset($_POST["tambah"])) {
  if (tambahData($_POST) > 0) {
    echo "<script> 
            alert('data baru berjaya ditambah');
            document.location.href='proDetail.php'; 
        </script>";
  } else {
    echo "<script> 
            alert('data pastikan semua data lengkap')
    
        </script>";
  }
}









?>






<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=
  , initial-scale=1.0">
  <title>tambah data pelajar</title>
</head>

<body>
  <h3>Form Tambah Data Pelajar </h3>

  <form action="" method="POST">
    <div>
      <label>
        Nama :
        <input type="text" name="nama" autofocus required>
      </label>
    </div>
    <div>
      <label>
        Noic :
        <input type="text" name="noic" maxlength="9" required>
      </label>
    </div>
    <div>
      <label>
        Email :
        <input type="email" name="email" required>
      </label>
    </div>
    <div>
      <label>
        Jurusan :
        <input type="text" name="jurusan" required>
      </label>
    </div>
    <div>
      <label>
        Gambar :
        <input type="text" name="gambar" required>
      </label>
    </div>
    <button type="submit" name="tambah">Tambah data</button>
  </form>
</body>

</html>