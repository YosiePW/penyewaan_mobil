<?php
session_start();
// mencocokan dengan data database
$username = $_POST["username"];
$password = md5($_POST["password"]);

// koneksi database
$koneksi = mysqli_connect("localhost","root","","penyewaan");
$sql = "select * from karyawan where username='$username' and password='$password'";
$result = mysqli_query($koneksi,$sql);
$jumlah = mysqli_num_rows($result);

if ($jumlah == 0) {
  $_SESSION["message"] = array(
    "type" => "danger",
    "message" => "Username/Password Salah"
  );
  // jika jumlah datanya = 0 berarti username/password salah
  header("location:login_karyawan.php");
} else {
  // buat variabel session
  $_SESSION["session_karyawan"] = mysqli_fetch_array($result);
  $_SESSION["session_pelanggan"] = mysqli_fetch_array($result);
  $_SESSION["session_sewa"] = array();

  header("location:template.php");
}

if (isset($_GET["logout"])) {
  // hapus session-nya
  session_destroy();
  header("location:login_karyawan.php");
}
?>
