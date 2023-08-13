<?php

function connect()
{
  return mysqli_connect("localhost", "root", "", "crud_php");
}


function query($query)
{
  $conn = connect();
  $result = mysqli_query($conn, $query);


  //jika hasilnya hanya 1 data
  if (mysqli_num_rows($result)  == 1) {
    return mysqli_fetch_assoc($result);
  } else {

    //jika data banyak
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;
    }
  }
  return $rows;
}

function tambahData($data)
{
  //cek input dari user ada symbol > < guna htmlspecialchar
  $nama = htmlspecialchars($data["nama"]);
  $noic = htmlspecialchars($data["noic"]);
  $email = htmlspecialchars($data["email"]);
  $jurusan = htmlspecialchars($data["jurusan"]);
  $gambar = htmlspecialchars($data["gambar"]);

  $conn = connect();
  $queryTambah = "INSERT INTO mahasiswa
                    VALUES (null, '$nama', '$noic', '$email' , '$jurusan' , '$gambar' )
                    ";
  mysqli_query($conn, $queryTambah);
  // kasitau error untuk debug
  echo mysqli_error($conn);
  //selain tambahdata dia akan return nilai jika 1- berjaya diubah 0-tidak ada pape -1) error
  return mysqli_affected_rows($conn); //untuk kasitau ada baris yang berubah di database
}
