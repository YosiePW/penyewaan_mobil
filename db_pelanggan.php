<?php
	session_start();
	$koneksi = mysqli_connect("localhost","root","","penyewaan");

	if (isset($_POST["action"])) {
		$id_pelanggan = $_POST["id_pelanggan"];
		$nama_pelanggan = $_POST["nama_pelanggan"];
    $alamat_pelanggan = $_POST["alamat_pelanggan"];
		$kontak = $_POST["kontak"];
    $username = $_POST["username"];
    $password = md5($_POST["password"]);


		if ($_POST["action"] == "insert") {
			// menentukan nama file
			$path = pathinfo($_FILES["image"]["name"]);
			$ekstensi = $path["extension"];
			$filename = $id_pelanggan."-".rand(1,1000).".".$ekstensi;
			//membuat query
			$sql = "insert into pelanggan values ('$id_pelanggan', '$nama_pelanggan',  '$alamat_pelanggan', '$kontak','$username', '$password', '$filename')";
			if (mysqli_query($koneksi,$sql)) {
				// jika berhasil
				move_uploaded_file($_FILES["image"]["tmp_name"], "image_pelanggan/".$filename);
				// pesan sukses
				$_SESSION["message"] = array(
					"type" => "success",
					"message" => "Insert data berhasil"
				);
			}else{
				// jika gagal
				$_SESSION["message"] = array(
					"type" => "danger",
					"message" => mysqli_error($koneksi)
				);
			}
			header("location:template.php?page=pelanggan");
		}elseif ($_POST["action"] == "update") {
			if (!empty($_FILES['image']['name'])) {
				// jika gambar diedit
				$sql = "select * from pelanggan where id_pelanggan='$id_pelanggan'";
				$result = mysqli_query($koneksi,$sql);
				$hasil = mysqli_fetch_array($result);
				// hapus file lama
				if (file_exists("image_pelanggan/".$hasil["image"])) {
					unlink("image_pelanggan/".$hasil["image"]);
				}
				$path = pathinfo($_FILES["image"]["name"]);
				$ekstensi = $path["extension"];
				$filename = $id_pelanggan."-".rand(1,1000).".".$ekstensi;
				$sql = "update pelanggan set nama_pelanggan='$nama_pelanggan', alamat_pelanggan='$alamat_pelanggan', kontak='$kontak', username = '$username', password ='$password', image='$filename' where id_pelanggan='$id_pelanggan'";
				if (mysqli_query($koneksi,$sql)) {
					// jika berhasil
					move_uploaded_file($_FILES["image"]["tmp_name"], "image_pelanggan/".$filename);
					// pesan sukses
					$_SESSION["message"] = array(
						"type" => "success",
						"message" => "Update data berhasil"
					);
				}else{
					// jika gagal
					$_SESSION["message"] = array(
						"type" => "danger",
						"message" => mysqli_error($koneksi)
					);
				}
			}else{
				// jika gambar tidak diedit
				$sql = "update pelanggan set nama_pelanggan='$nama_pelanggan', alamat_pelanggan='$alamat_pelanggan', kontak='$kontak', username='$username', password='$password' where id_pelanggan='$id_pelanggan'";
				if (mysqli_query($koneksi,$sql)) {
					// jika berhasil
					$_SESSION["message"] = array(
						"type" => "success",
						"message" => "Update data berhasil"
					);
				}else{
					// jika gagal
					$_SESSION["message"] = array(
						"type" => "danger",
						"message" => mysqli_error($koneksi)
					);
				}
			}
			header("location:template.php?page=pelanggan");
		}
	}

	if (isset($_GET["hapus"])) {
		$id_pelanggan = $_GET["id_pelanggan"];
		$sql = "select * from pelanggan where id_pelanggan = '$id_pelanggan'";
		$result = mysqli_query($koneksi,$sql);
		$hasil = mysqli_fetch_array($result);
    if (file_exists("image_pelanggan/".$hasil["image"])) {
      // cek keberadaan file
      unlink("image_pelanggan/".$hasil["image"]);
      // menghapus file
    }
    $sql = "delete from pelanggan where id_pelanggan = '$id_pelanggan'";
    if (mysqli_query($koneksi,$sql)) {
      // jika berhasil
      $_SESSION["message"] = array(
        "type" => "success",
        "message" => "Delete data berhasil"
      );
    }else{
      // jika gagal
      $_SESSION["message"] = array(
        "type" => "danger",
        "message" => mysqli_error($koneksi)
      );
    }
		header("location:template.php?page=pelanggan");
	}
 ?>
