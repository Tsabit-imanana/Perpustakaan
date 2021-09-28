<?php 

$id = $_GET['id_siswa'];

	if ($id) {
		include "koneksi.php";

		$query_hapus = mysqli_query($conn, "DELETE FROM siswa where id_siswa = $id");
	}


//cek apakah berhasil

	if ($query_hapus) {
		echo "<script>
				alert('Sukses hapus siswa');location.href='tampil_siswa.php';
		</script>";
	}else{

		echo "<script>
				alert('Gagal hapus siswa');location.href='tampil_siswa.php';
		</script>";

	}


 ?>