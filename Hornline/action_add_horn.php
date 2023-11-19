<?php
$ID_Produk = $_POST['ID_Produk'];
$Nama_Produk = $_POST['Nama_Produk'];
$Harga = $_POST['Harga'];
$Stok = $_POST['Stok'];
$ID_Kategori = $_POST['ID_Kategori'];

$Nama_Gambar = $_FILES['Nama_Gambar']['name'];
$gambar_tmp = $_FILES['Nama_Gambar']['tmp_name'];
$upload_dir = "Image/";
move_uploaded_file($upload_dir, $Nama_Gambar);


$path = "../connection.php";
include "$path";


mysqli_query(
    $connection,
    "INSERT INTO `produk` (`ID_Produk`, `Nama_Produk`, `Harga`, `Stok`, `ID_Kategori`, `Nama_Gambar`) VALUES ('$ID_Produk', '$Nama_Produk', '$Harga', '$Stok', '$ID_Kategori', '$Nama_Gambar'); "
);

header("Location: ../hornline.php");
