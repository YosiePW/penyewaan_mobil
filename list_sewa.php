<div class="card col-sm-12">
  <div class="card-header">
    <h3>List Penyewaan</h3>
  </div>
  <div class="card-body">
    <form action="db_sewa.php?checkout=true" method="post"
    onsubmit="return-confirm('Apakah Anda Yakin dengan pesanan ini')">
    <table class="table">
      <thead>
        <tr>
          <th>Id Mobil</th>
          <th>Merk Mobil</th>
          <th>Image</th>
          <th>Hari</th>
          <th>biaya_sewa_perhari</th>
          <th>
            Option
          </th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($_SESSION["session_sewa"] as $hasil): ?>
          <tr>
            <td><?php echo $hasil["id_mobil"]; ?></td>
            <td><?php echo $hasil["merk"]; ?></td>
            <td>
              <img src="image_mobil/<?php echo $hasil["image"]; ?>" width="100" class="img">
            </td>
            <td>
              <input type="number" name="hari<?php echo $hasil["id_mobil"]; ?>" value="1" min="1" required>
            </td>

            <td>Rp <?php echo number_format($hasil["biaya_sewa_perhari"]); ?></td>            <td>
              <a href="db_sewa.php?hapus=true&id_mobil=<?php echo $hasil["id_mobil"]; ?>">
                <button type="button" class="btn btn-danger">Hapus</button>
              </a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <button type="submit" class="btn btn-block btn-primary">
      CHECKOUT
    </button>
  </form>
    <!-- <a href="db_transaksi.php?checkout=true"
    onclick-"return confirm('Apakah anda yakin dengan pesanan ini?')">
      <button type="button" class="btn btn-danger">
        Checkout
      </button>
    </a> -->
  </div>
</div>
