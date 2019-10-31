<?php
session_start();
$koneksi = mysqli_connect("localhost", "root", "", "penyewaan");
if (isset($_POST["action"])) {
  $id_mobil = $_POST["id_mobil"];
  $nomor_mobil = $_POST["nomor_mobil"];
  $merk = $_POST["merk"];
  $jenis = $_POST["jenis"];
  $warna = $_POST["warna"];
  $tahun_pembuatan = $_POST["tahun_pembuatan"];
  $biaya_sewa_perhari = $_POST["biaya_sewa_perhari"];
  $stok = $_POST["stok"];


  if ($_POST["action"] == "insert") {
    // menentukan nama file
    $path = pathinfo($_FILES["image"]["name"]);
    $ekstensi = $path["extension"];
    // kita rangkai untuk penamaan file yang akan disimpan
    $filename = $id_mobil."-".rand(1,1000).".".$ekstensi;

    // membuat query
    $sql = "insert into mobil values ('$id_mobil', '$nomor_mobil', '$merk', '$jenis', '$warna', '$tahun_pembuatan', '$biaya_sewa_perhari', '$filename', '$stok')";
if (mysqli_query($koneksi, $sql)) {
  // jika query berhasil
  move_uploaded_file($_FILES["image"]["tmp_name"], "image_mobil/".$filename);
  // buat pesan sukses
  $_SESSION["message"] = array(
    "type" => "success",
    "message" => "Data has been intersed"
  );
} else {
  // jika query gagal
  $_SESSION["message"] = array(
    "type" => "danger",
    "message" => mysqli_error($koneksi)
  );
}
header("location:template.php?page=mobil");

}elseif ($_POST["action"] == "update") {
  if (!empty($_FILES["image"]["name"])) {
    // jika gambarnya diedit
    $sql = "select * from mobil where id_mobil='$id_mobil'";
    // eksekusi query
    $result = mysqli_query($koneksi, $sql);
    // tampung hasil query kedalam array
    $hasil = mysqli_fetch_array($result);
      if (file_exists("image_mobil/".$hasil["image"])) {
      unlink("image_mobil/".$hasil["image"]);
      // menghapus file gambar
      }
      $path = pathinfo($_FILES["image"]["name"]);
      $ekstensi = $path["extension"];
      // kita rangkai untuk penamaan file yang akan disimpan
      $filename = $id_mobil."-".rand(1,1000).".".$ekstensi;

      $sql = "update mobil set nomor_mobil = '$nomor_mobil', merk='$merk', jenis='$jenis', warna = '$warna', tahun_pembuatan = '$tahun_pembuatan', biaya_sewa_perhari = '$biaya_sewa_perhari' , image='$filename', stok='$stok' where id_mobil= '$id_mobil'";
      if (mysqli_query($koneksi, $sql)) {
        // jika query berhasil
        move_uploaded_file($_FILES["image"]["tmp_name"], "image_mobil/".$filename);
        $_SESSION["message"] = array(
          "type" => "success",
          "message" => "Data has been updated"
        );
      } else {
        // jika query gagal
        $_SESSION["message"] = array(
          "type" => "danger",
          "message" => mysqli_error($koneksi)
        );
      }

  } else {
    // jika gambarnya tidak diedit
    $sql = "update mobil set nomor_mobil = '$nomor_mobil', merk='$merk', jenis='$jenis', warna = '$warna', tahun_pembuatan = '$tahun_pembuatan, biaya_sewa_perhari = '$biaya_sewa_perhari, image='$file', stok='$stok' where id_mobil= '$id_mobil'";
    if (mysqli_query($koneksi, $sql)) {
      // jika query berhasil
      $_SESSION["message"] = array(
        "type" => "success",
        "message" => "Data has been updated"
      );
    } else {
      // jika query gagal
      $_SESSION["message"] = array(
        "type" => "danger",
        "message" => mysqli_error($koneksi)
      );
    }
  }
  header("location:template.php?page=mobil");
 }
}

if (isset($_GET["hapus"])) {
  $id_mobil = $_GET["id_mobil"];
  $sql = "select * from mobil where id_mobil='$id_mobil'";
  $result = mysqli_query($koneksi, $sql);
  $hasil = mysqli_fetch_array($result);
  if (file_exists("image_mobil/".$hasil["image"])) {
    // mengecek keberadaan file
    unlink("image_mobil/".$hasil["image"]);
    // menghapus file
  }
    $sql = "delete from mobil where id_mobil ='$id_mobil'";
    if (mysqli_query($koneksi, $sql)) {
      // jika query berhasil
      $_SESSION["message"] = array(
        "type" => "success",
        "message" => "Data has been deleted"
      );
    } else {
      // jika query gagal
      $_SESSION["message"] = array(
        "type" => "danger",
        "message" => mysqli_error($koneksi)
      );
    }
    header("location:template.php?page=mobil");
}


 ?>
