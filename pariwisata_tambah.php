<?php

include 'conn.php';

$nama_pariwisata = $_POST['nama_pariwisata']??"";
$harga = $_POST['harga']??"";
$deskripsi = $_POST['deskripsi']??"";
$kategori = $_POST['kategori']??"";
$gambar = $_POST['gambar']??"";

$connect->query("INSERT INTO tb_pariwisata (nama_pariwisata, harga, deskripsi, kategori, gambar)

 VALUES ('" . $nama_pariwisata . "','" . $harga . "','" . $deskripsi . "','" . $kategori . "','" . $gambar . "')");

?>