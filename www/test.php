<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET,POST,PATCH,PUT,DELETE,OPTIONS");

include "db.php";
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $jenis = $_POST['jenis'];
    $nomor = $_POST['nomor'];
    $keterangan = $_POST['keterangan'];

    require_once("db.php");
    $q = mysqli_query($con, "UPDATE `dulux` SET `nama`='$nama',`harga`='$harga',`stok`='$stok',`jenis`='$jenis',`nomor`='$nomor',`keterangan`='$keterangan' where `id`='$id'");
    if ($q)
        echo "success";
    else
        echo "error";
}
