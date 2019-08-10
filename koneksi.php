<?php
$h = 'localhost';
$u = 'root';
$p = '';
$db = 'latihan_crud';

$koneksi = new mysqli($h , $u , $p , $db);
  if ($koneksi->connect_error) {
    echo "gagal connection";
  }
 ?>
