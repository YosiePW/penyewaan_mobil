<script type="text/javascript">
  function Add() {
    // membuat action menjadi insert
    document.getElementById('action').value="insert";
// mengosongkan pop up
    document.getElementById("id_karyawan").value="";
    document.getElementById("nama_karyawan").value="";
  }

  function Edit(index){
    document.getElementById('action').value="update";
// menampung data
    var table = document.getElementById("table_karyawan");
    var id_karyawan = table.rows[index].cells[0].innerHTML;
    var nama_karyawan = table.rows[index].cells[1].innerHTML;
    var alamat_karyawan = table.rows[index].cells[2].innerHTML;
    var kontak = table.rows[index].cells[3].innerHTML;
    var username = table.rows[index].cells[4].innerHTML;
    var password = table.rows[index].cells[5].innerHTML;

// mengisi di tampilan pop up
    document.getElementById("id_karyawan").value = id_karyawan;
    document.getElementById("nama_karyawan").value = nama_karyawan;
    document.getElementById("alamat_karyawan").value = alamat_karyawan;
    document.getElementById("kontak").value = kontak;
    document.getElementById("username").value = username;
    document.getElementById("password").value = password;

  }
</script>
<div class="card col-sm-12">
  <div class="card-header">
    <h4>Daftar Karyawan</h4>
  </div>
  <div class="card-body">
    <?php
    if (isset($_SESSION["message"])): ?>
      <div class="alert alert-<?=($_SESSION["message"]["type"])?>">
        <?php echo $_SESSION["message"]["message"]; ?>
        <?php unset($_SESSION["message"]); ?>
      </div>
    <?php endif; ?>
    <?php
    $koneksi = mysqli_connect("localhost","root","","penyewaan");
    $sql = "select * from karyawan";
    $result = mysqli_query($koneksi,$sql);
    $count = mysqli_num_rows($result);
    ?>

    <?php if ($count == 0): ?>
    <div class="alert alert-info">
      Data belum tersedia
    </div>

  <?php else: ?>
      <table class="table" id="table_karyawan">
        <thead>
          <tr>
            <th>id_karyawan</th>
            <th>nama_karyawan</th>
            <th>alamat_karyawan</th>
            <th>kontak</th>
            <th>username</th>
            <th>password</th>

            <th>Opsi</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($result as $hasil): ?>
            <tr>
              <td><?php echo $hasil ["id_karyawan"]; ?></td>
              <td><?php echo $hasil ["nama_karyawan"]; ?></td>
              <td><?php echo $hasil ["alamat_karyawan"]; ?></td>
              <td><?php echo $hasil ["kontak"]; ?></td>
              <td><?php echo $hasil ["username"]; ?></td>
              <td><?php echo $hasil ["password"]; ?></td>

              <td>
                <button type="button" class="btn btn-info"
                  data-toggle="modal" data-target="#modal"
                  onclick="Edit(this.parentElement.parentElement.rowIndex);">
                  Edit
                </button>

                <a href="db_karyawan.php?hapus=karyawan&id_karyawan=<?php echo $hasil['id_karyawan']; ?>"
                  onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
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
    <button type="button" class="btn btn-success"
      data-toggle="modal" data-target="#modal" onclick = "Add()">
      Tambah
    </button>
  </div>
</div>
</div>

<div class="modal fade" id="modal">
<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <form action="db_karyawan.php" method="post" enctype="multipart/form-data">
      <div class="modal-header">
        <h4>Form Karyawan</h4>
        <span class="close" data-dismiss="modal">&times;</span>
      </div>
      <div class="modal-body">
        <input type="hidden" name="action" id="action">
        id_karyawan
        <input type="text" name="id_karyawan" id="id_karyawan" class="form-control">
        nama_karyawan
        <input type="text" name="nama_karyawan" id="nama_karyawan" class="form-control">
        alamat_karyawan
        <input type="text" name="alamat_karyawan" id="alamat_karyawan" class="form-control">
        kontak
        <input type="text" name="kontak" id="kontak" class="form-control">
        username
        <input type="text" name="username" id="username" class="form-control">
        password
        <input type="password" name="password" id="password" class="form-control">
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">
          Simpan
        </button>
      </div>
    </form>
  </div>
</div>
</div>
