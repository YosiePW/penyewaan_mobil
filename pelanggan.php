<script type="text/javascript">
  function Add() {
    document.getElementById('action').value = "insert";

    document.getElementById("id_pelanggan").value = "";
    document.getElementById("nama_pelanggan").value = "";
    document.getElementById("alamat_pelanggan").value = "";
    document.getElementById("kontak").value = "";
    document.getElementById("username").value ="";
    document.getElementById("password").value ="";
  }

  function Edit(index) {
    document.getElementById('action').value = "update";

    var table = document.getElementById("table_pelanggan");

    var id_pelanggan = table.rows[index].cells[0].innerHTML;
    var nama_pelanggan = table.rows[index].cells[1].innerHTML;
    var alamat_pelanggan = table.rows[index].cells[2].innerHTML;
    var kontak = table.rows[index].cells[3].innerHTML;
    var username = table.rows[index].cells[4].innerHTML;
    var password = table.rows[index].cells[5].innerHTML;


    document.getElementById("id_pelanggan").value = id_pelanggan;
    document.getElementById("nama_pelanggan").value = nama_pelanggan;
    document.getElementById("alamat_pelanggan").value = alamat_pelanggan;
    document.getElementById("kontak").value = kontak;
    document.getElementById("username").value = username;
    document.getElementById("password").value = password;

  }
</script>
<div class="card col-sm-12">
  <div class="card-header">
    <h4>PELANGGAN</h4>
  </div>
  <div class="card-body">
    <?php if(isset($_SESSION["message"])): ?>
      <div class="alert alert-<?=($_SESSION["message"]["type"])?>">
        <?php echo $_SESSION["message"]["message"]; ?>
        <?php unset($_SESSION["message"]); ?>
      </div>
    <?php endif; ?>
    <?php
    $koneksi = mysqli_connect("localhost","root","","penyewaan");
    $sql = "select * from pelanggan";
    $result = mysqli_query($koneksi,$sql);
    $count = mysqli_num_rows($result);
    ?>

    <?php if($count == 0): ?>
      <div class="alert alert-info">
        Pelanggan Belum Ada!
      </div>
    <?php else: ?>
      <table class="table" id="table_pelanggan">
        <thead>
          <tr>
            <th>ID Pelanggan</th>
            <th>Nama Pelanggan</th>
            <th>Alamat Pelanggan</th>
            <th>Kontak</th>
            <th>Username</th>
            <th>Password</th>
            <th>Image</th>
            <th>Opsi</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($result as $hasil): ?>
            <tr>
              <td><?php echo $hasil["id_pelanggan"] ?></td>
              <td><?php echo $hasil["nama_pelanggan"] ?></td>
              <td><?php echo $hasil["alamat_pelanggan"] ?></td>
              <td><?php echo $hasil["kontak"] ?></td>
              <td><?php echo $hasil["username"] ?></td>
              <td><?php echo $hasil["password"] ?></td>

              <td>
              <img src="<?php echo "image_pelanggan/".$hasil["image"];?>" id="<?php echo $hasil["id_pelanggan"];?>" class="img" width="100">
              </td>
              <td>
                <button type="button" class="btn btn-warning"
                data-toggle="modal" data-target="#modal"
                onclick="Edit(this.parentElement.parentElement.rowIndex);">
                  Edit
                </button>
                <a href="db_pelanggan.php?hapus=pelanggan&id_pelanggan=<?php echo $hasil["id_pelanggan"]; ?>"
                  onclick="return confirm('Apakah yakin akan dihapus?')">
                  <button type="button" class="btn btn-danger">
                    Hapus
                  </button>
                </a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    <?php endif; ?>
  </div>
  <div class="card-footer">
    <button type="button" class="btn btn-warning"
    data-toggle="modal" data-target="#modal" onclick="Add()">
      Tambah
    </button>
  </div>
</div>

<div class="modal fade" id="modal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form action="db_pelanggan.php" method="post" enctype="multipart/form-data">
        <div class="modal-header">
          <h4>PELANGGAN</h4>
        </div>
        <div class="modal-body">
          <input type="hidden" name="action" id="action">

          ID Pelanggan
          <input type="text" name="id_pelanggan" id="id_pelanggan" class="form-control">
          Nama Pelanggan
          <input type="text" name="nama_pelanggan" id="nama_pelanggan" class="form-control">
          Alamat Pelanggan
          <input type="text" name="alamat_pelanggan" id="alamat_pelanggan" class="form-control">
          Kontak
          <input type="text" name="kontak" id="kontak" class="form-control">
          Username
          <input type="text" name="username" id="username" class="form-control">
          Password
          <input type="password" name="password" id="password" class="form-control">
          Image
          <input type="file" name="image" id="image" class="form-control">
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-warning">
            Simpan
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
