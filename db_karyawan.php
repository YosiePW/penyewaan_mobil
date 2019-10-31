<?php
session_start();
$koneksi = mysqli_connect("localhost","root","","penyewaan");

if (isset($_POST["action"])) {
  $id_karyawan = $_POST["id_karyawan"];
  $nama_karyawan = $_POST["nama_karyawan"];
  $alamat_karyawan = $_POST["alamat_karyawan"];
  $kontak = ($_POST["kontak"]);
  $username = ($_POST["username"]);
  $password = md5($_POST["password"]);


  $action = $_POST["action"];

  if ($_POST["action"] == "insert") {

    $sql = "insert into karyawan values('$id_karyawan','$nama_karyawan', '$alamat_karyawan', '$kontak',
    '$username','$password')";

    if (mysqli_query($koneksi,$sql)) {
      // jika eksekusi berhasil
      $_SESSION["message"] = array (
        "type" => "success",
        "message" => "Insert data has been success"
      );
    }else {
      // jika eksekusi gagal
      $_SESSION["message"] = array(
        "type" => "danger",
        "message" => mysqli_error($koneksi)
      );
    }
    header("location:template.php?page=karyawan");

  } else if($_POST["action"] == "update") {
    // ambil data dari database
    $sql = "select * from where id_karyawan='$id_karyawan'";
    $result = mysqli_query($koneksi,$sql);
    $hasil = mysqli_fetch_array($result);
    // untuk mengkonversi menjadi array
    // if (isset($_FILES["image"])) {
    //   if (file_exists("img_pustakawan/".$hasil["image"])) {
    //     // jika file nya tersedia
    //     unlink("img_pustakawan/".$hasil["image"]);
        // menghapus file

      // ambil ekstensi gambarnya
      // $extensi = $path["extension"];
      // rangkai nama file yang akan disimpan
      // $filename = $nip."-".rand(1,1000).".".$extensi;
      // rand = untuk mengambil nilai random antara 1 sampai 1000

      // simpan file gambar
      $sql = "update karyawan set nama_karyawan='$nama_karyawan', alamat_karyawan='$alamat_karyawan', kontak='$kontak',
      username='$username',password='$password' where id_karyawan='$id_karyawan'";

      if (mysqli_query($koneksi,$sql)) {
        // jika query sukses
        $sql = "update karyawan set nama_karyawan='$nama_karyawan', alamat_karyawan='$alamat_karyawan', kontak='$kontak',
        username='$username',password='$password' where id_karyawan='$id_karyawan'";
        $_SESSION["message"] = array(
          "type" => "success",
          "message" => "Update data has been success"
        );
      } else {
        // jika query gagal
        $_SESSION["message"] = array(
          "type" => "danger",
          "message" => mysqli_error($koneksi)
        );
      }
      }else {
        // jika gambar tidak diedit
        $sql = "update karyawan nama_karyawan='$nama_karyawan', alamat_karyawan='$alamat_karyawan', kontak='$kontak',
        username='$username',password='$password' where id_karyawan='$id_karyawan'";
        if (mysqli_query($koneksi,$sql)) {
          // jika query sukses
          $_SESSION["message"] = array(
            "type" => "success",
            "message" => "Update data has been success"
          );
        }else {
          // jika query gagal
          $_SESSION["message"] = array(
            "type" => "danger",
            "message" => mysqli_error($koneksi)
          );
        }
      }

  header("location:template.php?page=karyawan");
}

if (isset($_GET["hapus"])) {
  // jika yang dikirim adalah variabel GET hapus
  $id_karyawan = $_GET["id_karyawan"];
  $sql = "select * from karyawan where id_karyawan='$id_karyawan'";
  // eksekusi query
  $result = mysqli_query($koneksi,$sql);
  // konversi ke array
  $hasil = mysqli_fetch_array($result);

  $sql = "delete from karyawan where id_karyawan='$id_karyawan'";
  if (mysqli_query($koneksi,$sql)) {
    // jika query sukses
    $_SESSION["message"] = array(
      "type" => "success",
      "message" => "Delete data has been success"
    );
  }else {
    // jika query gagal
    $_SESSION["message"] = array(
      "type" => "danger",
      "message" => mysqli_error($koneksi)
    );
  }
  header("location:template.php?page=karyawan");
}
?>
