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
