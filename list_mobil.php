<?php
$koneksi = mysqli_connect("localhost","root","","penyewaan");
$sql = "select * from mobil";
$result = mysqli_query($koneksi,$sql);
?>

<div class="row">
  <?php foreach ($result as $hasil): ?>
    <div class="card col-sm-4">
      <div class="card-body">
        <img src="image_mobil/<?php echo $hasil["image"]; ?>" class="img" width="100%" height="auto">
      </div>
      <div class="card-footer">
         <h5 class="text-center"><?php echo $hasil["merk"]; ?></h5>
         <h6 class="text-center">Jenis: <?php echo $hasil["jenis"]; ?></h6>
         <h6 class="text-center">Stok: <?php echo $hasil["stok"]; ?></h6>

         <h6 class="text-center">Rp. <?php echo $hasil["biaya_sewa_perhari"]; ?></h6>
         <a href="db_sewa.php?sewa=true&id_mobil=<?php echo $hasil["id_mobil"]; ?>">
           <button type="button" class="btn btn-info btn-block">
             Sewa
           </button>
         </a>
      </div>
    </div>
  <?php endforeach; ?>
</div>
