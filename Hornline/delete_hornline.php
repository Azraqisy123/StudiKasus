<?php
include "../connection.php";

$id = $_GET['id'];
mysqli_query($connection, "DELETE FROM produk WHERE ID_Produk = '$id'");

header("Location: ../Percussion.php");
