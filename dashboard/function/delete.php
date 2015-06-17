<?php 
	//Admin Delete
	if (isset($_GET['admin-delete'])) {
		$id 	=	$_GET['admin-delete'];

		$delete 	=	mysql_query("DELETE FROM users WHERE id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?users=admin '/>";
		}
	}elseif (isset($_GET['guru-delete'])) {
		$id 	=	$_GET['guru-delete'];

		$delete 	=	mysql_query("DELETE FROM users WHERE id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?users=guru '/>";
		}
	}elseif (isset($_GET['siswa-delete'])) {
		$id 	=	$_GET['siswa-delete'];

		$delete 	=	mysql_query("DELETE FROM users WHERE id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?users=siswa '/>";
		}
	}elseif (isset($_GET['alat-delete'])) {
		$id 	=	$_GET['alat-delete'];

		$delete 	=	mysql_query("DELETE FROM alat WHERE alat_id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?perangkat=alat '/>";
		}
	}elseif (isset($_GET['bahan-delete'])) {
		$id 	=	$_GET['bahan-delete'];

		$delete 	=	mysql_query("DELETE FROM bahan WHERE bahan_id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?perangkat=bahan '/>";
		}
	}elseif (isset($_GET['kelas-delete'])) {
		$id 	=	$_GET['kelas-delete'];

		$delete 	=	mysql_query("DELETE FROM kelas WHERE kelas_id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?akademik=kelas '/>";
		}
	}elseif (isset($_GET['semester-delete'])) {
		$id 	=	$_GET['semester-delete'];

		$delete 	=	mysql_query("DELETE FROM semester WHERE semester_id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?akademik=semester '/>";
		}
	}elseif (isset($_GET['tahun-delete'])) {
		$id 	=	$_GET['tahun-delete'];

		$delete 	=	mysql_query("DELETE FROM tahun WHERE tahun_id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?akademik=tahun '/>";
		}
	}elseif (isset($_GET['jenis-delete'])) {
		$id 	=	$_GET['jenis-delete'];

		$delete 	=	mysql_query("DELETE FROM jenisnilai WHERE jenis_id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?akademik=jenis '/>";
		}
	}elseif (isset($_GET['jenisperangkat-delete'])) {
		$id 	=	$_GET['jenisperangkat-delete'];

		$delete 	=	mysql_query("DELETE FROM jenisperangkat WHERE jenisperangkat_id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?perangkat=jenis '/>";
		}
	}elseif (isset($_GET['afektif-delete'])) {
		$id 	=	$_GET['afektif-delete'];

		$delete 	=	mysql_query("DELETE FROM nilai WHERE nilai_id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?nilai=afektif '/>";
		}
	}elseif (isset($_GET['psikomotor-delete'])) {
		$id 	=	$_GET['psikomotor-delete'];

		$delete 	=	mysql_query("DELETE FROM nilai WHERE nilai_id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?nilai=psikomotor '/>";
		}
	}elseif (isset($_GET['kognitif-delete'])) {
		$id 	=	$_GET['kognitif-delete'];

		$delete 	=	mysql_query("DELETE FROM nilai WHERE nilai_id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?nilai=kognitif '/>";
		}
	}elseif (isset($_GET['modul-delete'])) {
		$id 	=	$_GET['modul-delete'];

		$delete 	=	mysql_query("DELETE FROM download WHERE id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?modul=download '/>";
		}
	}elseif (isset($_GET['jadwal-delete'])) {
		$id 	=	$_GET['jadwal-delete'];

		$delete 	=	mysql_query("DELETE FROM jadwal WHERE jadwal_id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?jadwal=laboratorium '/>";
		}
	}elseif (isset($_GET['jam-delete'])) {
		$id 	=	$_GET['jam-delete'];

		$delete 	=	mysql_query("DELETE FROM jam WHERE jam_id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?jadwal=jam '/>";
		}
	}elseif (isset($_GET['galeri-delete'])) {
		$id 	=	$_GET['galeri-delete'];

		$delete 	=	mysql_query("DELETE FROM galeri WHERE galeri_id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?galeri=galeri '/>";
		}
	}
?>