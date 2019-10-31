<script type="text/javascript">
  function Print(){
    var printDocument = document.getElementById("report").innerHTML;
    var originalDocument = document.body.innerHTML;
    document.body.innerHTML = printDocument;
    document.getElementById("print").style.display="none";
    window.print();
    document.body.innerHTML = originalDocument;
  }
</script>
<div id="report" class="card col-sm-12">
  <div class="card-header">
    <h3>Nota Penyewaan</h3>
  </div>
  <div class="card-body">
    <?php
    $koneksi = mysqli_connect("localhost","root","","penyewaan");
    $id_sewa = $_GET["id_sewa"];
    // data transaksi
    $sql = "select s.id_sewa, p.nama_pelanggan, s.tgl_sewa
    from sewa s inner join pelanggan p
    on s.id_pelanggan = p.id_pelanggan
    where s.id_sewa='$id_sewa'";
    $result = mysqli_query($koneksi,$sql);
    $hasil = mysqli_fetch_array($result);

    // data Barang
    $sql2 = "select m.*, ds.hari, ds.biaya_sewa_perhari
    from mobil m inner join detail_sewa ds
    on m.id_mobil = ds.id_mobil
    where ds.id_sewa='$id_sewa'";
    $result2 = mysqli_query($koneksi,$sql2);
    ?>

    <h4>ID. Sewa: <?php echo $hasil["id_sewa"]; ?></h4>
    <h4>Nama Pelanggan: <?php echo $hasil["nama_pelanggan"]; ?></h4>
    <h4>Tgl. Sewa: <?php echo $hasil["tgl_sewa"]; ?></h4>

    <table class="table">
      <thead>
        <tr>
          <th>Id Mobil</th>
          <th>Merk Mobil</th>
          <th>Hari sewa</th>
          <th>biaya_sewa_perhari</th>
          <th>Total</th>
        </tr>
      </thead>
      <tbody>
        <?php $total = 0; foreach ($result2 as $mobil): ?>
          <tr>
            <td><?php echo $mobil["id_mobil"]; ?></td>
            <td><?php echo $mobil["merk"]; ?></td>
            <td><?php echo $mobil["hari"]; ?></td>
            <td><?php echo "Rp ".number_format($mobil["biaya_sewa_perhari"]); ?></td>
            <td><?php echo "Rp ".number_format($mobil["biaya_sewa_perhari"]*$mobil["hari"]); ?></td>
          </tr>
          <?php
          $total += $mobil["biaya_sewa_perhari"]*$mobil["hari"];
          endforeach;
           ?>
      </tbody>
    </table>
    <h2 class="text-right text-success">
      <?php echo "Rp ".number_format($total); ?>
    </h2>

    <button id="print" onclick="Print()" type="button" class="btn btn-success">
      Print
    </button>
  </div>
</div>
