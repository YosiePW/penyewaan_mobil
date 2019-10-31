<?php
session_start();
?>
<?php if (isset($_SESSION["session_karyawan"])): ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Navbar</title>
    <!-- Load bootstrap css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/template.css">
    <!-- Load jquery and bootstrap js -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
      <!--
      navbar-expand-md -> menu akan dihidden ketika ditampilkan device berukuran medium
      bg-danger - navbar mempunyai background warna merah
      navbar-dark -> tulisan menu pada navabr akan lebih gelap
      fixed-top -> navbar akan berposisi SELALU DI ATAS -->
      <a href="#" class="text-white">
        <h3>Cika LOVER'S</h3>
      </a>

      <!-- pemanggilan icon menu saat menubar disembunyikan -->
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menu">
        <span class="navbar navbar-toggler-icon"></span>
      </button>

      <!--daftar menu pada navbar -->
      <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav">
          <li class="nav-item"><a href="template.php?page=karyawan" class="nav-link">Karyawan</a></li>
          <li class="nav-item"><a href="template.php?page=Mobil" class="nav-link">Mobil</a></li>
          <li class="nav-item"><a href="template.php?page=Pelanggan" class="nav-link">Pelanggan</a></li>
          <li class="nav-item"><a href="template.php?page=daftar_sewa" class="nav-link">Daftar Sewa</a></li>
          <li class="nav-item"><a href="template.php?page=list_mobil" class="nav-link">List Mobil</a></li>
          <li class="nav-item"><a href="proses_login_karyawan.php?logout=true" class="nav-link">Logout</a></li>

        </ul>
      </div>
      <h4 class="text-warning">Hello, <?php echo $_SESSION["session_karyawan"]["nama_karyawan"]; ?> </h4>
      <a href="template.php?page=list_sewa">
        <b class="text-white">Sewa: <?php echo count($_SESSION["session_sewa"]); ?></b>
      </a>
    </nav>
    <div class="container my-2">
      <?php if (isset($_GET["page"])): ?>
        <?php if ((@include $_GET["page"].".php") === true): ?>
          <?php include $_GET("page").".php"; ?>
        <?php endif; ?>
      <?php endif; ?>
    </div>
  </body>
</html>
<?php else: ?>
<?php header("location: login_karyawan.php") ?>
<?php endif; ?>
