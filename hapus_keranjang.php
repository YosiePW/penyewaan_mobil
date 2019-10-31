<?php
session_start();
$id_mobil = $_GET["id_mobil"];
unset($_SESSION["keranjang"]["$id_mobil"]);

echo "<script>alert('produk dihapus dari keranjang');</script>";
echo "<script>location='keranjang.php';</script>";
?>
