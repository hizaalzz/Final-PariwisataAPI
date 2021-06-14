<?php

$connect = new mysqli("localhost", "root", "", "pariwisata_baru");

 if ($connect) {
     echo "Sukses";
 } else {
     echo "Connection Failed";
    exit();
}

?>