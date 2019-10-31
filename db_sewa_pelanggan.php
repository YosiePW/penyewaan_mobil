<?php
session_start();
$koneksi = mysqli_connect("localhost","root","","penyewaan");
if (isset($_GET["sewa"])) {
  $id_mobil = $_GET["id_mobil"];
  $sql = "select * from mobil where id_mobil = '$id_mobil'";
  $result = mysqli_query($koneksi,$sql);
  $hasil = mysqli_fetch_array($result);

  // masukkan ke keranjang
  if (!in_array($hasil, $_SESSION["session_sewa"])) {
    array_push($_SESSION["session_sewa"],$hasil);
  }
  header("location:template_pelanggan.php?page=list_mobil_pelanggan");
}
if (isset($_GET["checkout"])) {
  $id_sewa = rand(1,1000).date("dmY");
  $id_pelanggan = $_SESSION["session_pelanggan"]["id_pelanggan"];
  $tgl_sewa = date("Y-m-d");
  $sql = "insert into sewa values('$id_sewa','$id_pelanggan','$tgl_sewa', '$tgl_kembali')";
  if (mysqli_query($koneksi,$sql)) {
    foreach ($_SESSION["session_sewa"] as $hasil) {
      $id_mobil = $hasil["id_mobil"];
      $hari = $_POST['hari'.$hasil["id_mobil"]];
      $biaya_sewa_perhari = $hasil["biaya_sewa_perhari"];
      $sql = "insert into detail_sewa values('$id_sewa','$id_mobil','$hari','$biaya_sewa_perhari')";
      mysqli_query($koneksi,$sql);
    }
    // kosongkan Keranjang
    $_SESSION["session_sewa"] = array();
    header("location: template_pelanggan.php?page=nota_pelanggan&id_sewa=$id_sewa");
  }
}

if (isset($_GET["hapus"])) {
  $id_mobil = $_GET["id_mobil"];
  $index = array_search($id_mobil,array_column($_SESSION["session_sewa"],"id_mobil"));
  array_splice($_SESSION["session_sewa"],$index,1);
  header("location:template_pelanggan.php?page=list_mobil_pelanggan");
}
 ?> -->
