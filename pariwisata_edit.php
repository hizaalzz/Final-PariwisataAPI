<?php

include 'conn.php';

$id = $_POST['id']??"";
$nama_pariwisata = $_POST['nama_pariwisata']??"";
$harga = $_POST['harga']??"";
$deskripsi = $_POST['deskripsi']??"";
$kategori = $_POST['kategori']??"";
$gambar = $_POST['gambar']??"";

$connect->query("UPDATE tb_pariwisata SET gambar='" . $gambar . "', nama_pariwisata='" . $nama_pariwisata . "', deskripsi='" . $deskripsi . "'WHERE id=" . $id);