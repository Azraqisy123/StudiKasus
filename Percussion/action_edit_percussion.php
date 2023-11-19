<?php

$id = $_GET['id'];

$ID_Produk = $_POST['ID_Produk'];
$Nama_Produk = $_POST['Nama_Produk'];
$Harga = $_POST['Harga'];
$Stok = $_POST['Stok'];

$path = "../connection.php";
include "$path";


mysqli_query(
    $connection,
    "UPDATE `produk` SET ID_Produk = '$ID_Produk', Nama_Produk = '$Nama_Produk', Harga = '$Harga', Stok = '$Stok' WHERE ID_Produk = '$id'"
);

header("Location: ../percussion.php");
