<?php session_start(); ?>
<?php if (isset($_SESSION["session_pelanggan"])): ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Navbar</title>
    <!-- Load bootstrap css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/template_pembeli.css">
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
        <h3>Nota'S</h3>
      </a>

      <!-- pemanggilan icon menu saat menubar disembunyikan -->
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menu">
        <span class="navbar navbar-toggler-icon"></span>
      </button>

      <!--daftar menu pada navbar -->
      <div class="collapse navbar-collapse" id="menu">
     <ul class="navbar-nav">
          <<li class="nav-item"><a href="template.php?page=list_mobil" class="nav-link">List Mobil</a></li>
          <li class="nav-item"><a href="template_pelanggan.php?page=list_mobil_pelanggan" class="nav-link">List Mobil pelanggan</a></li>
          <!-- <li class="nav-item"><a href="template_siswa.php?page=barang" class="nav-link">barang</a></li> -->
          <!-- <li class="nav-item"><a href="proses_login_pembeli.php" class="nav-link">Login Pembeli</a></li> -->
          <!-- <li class="nav-item"><a href="keranjang.php" class="nav-link">Keranjang</a></li> -->

          </ul>
      </div>

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
<?php endif; ?>
