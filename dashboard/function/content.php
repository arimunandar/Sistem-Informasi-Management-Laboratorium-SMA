<?php 
	if (isset($_GET['users'])) {
		if ($_GET['users'] == 'admin') {	//	Admin
			include('table/admin.php');
		}elseif ($_GET['users'] == 'admin-create') {
			include('function/create.php');
			include('forms/create_admin.php');			
		}elseif ($_GET['users'] == 'guru') {	// 	Guru
			include('table/guru.php');
		}elseif ($_GET['users'] == 'guru-create') {
			include('function/create.php');
			include('forms/create_guru.php');		
		}elseif ($_GET['users'] == 'siswa') { 	//	Siswa
			include('table/siswa.php');
		}elseif ($_GET['users'] == 'siswa-create') {
			include('function/create.php');
			include('forms/create_siswa.php');		
		}
	}elseif (isset($_GET['admin-edit'])) {		//	Admin
		include('function/edit.php');
		include('forms/edit_admin.php');
	}elseif (isset($_GET['admin-delete'])) {
		include('function/delete.php');
	}elseif (isset($_GET['guru-edit'])) {		//	Guru
		include('function/edit.php');
		include('forms/edit_guru.php');
	}elseif (isset($_GET['guru-delete'])) {
		include('function/delete.php');
	}elseif (isset($_GET['siswa-edit'])) {		//	Siswa
		include('function/edit.php');
		include('forms/edit_siswa.php');
	}elseif (isset($_GET['siswa-delete'])) {
		include('function/delete.php');
	}elseif (isset($_GET['profile'])) {
		include('function/edit.php');
		include('forms/edit_profile.php');
	}
	elseif (isset($_GET['perangkat'])) {
		if ($_GET['perangkat'] == 'alat') {		//	Alat
			include('table/alat.php');
		}elseif ($_GET['perangkat'] == 'alat-create') {
			include('function/create.php');
			include('forms/create_alat.php');
		}elseif ($_GET['perangkat'] == 'bahan') {	//	Bahan
			include('table/bahan.php');
		}elseif ($_GET['perangkat'] == 'bahan-create') {
			include('function/create.php');
			include('forms/create_bahan.php');
		}elseif ($_GET['perangkat'] == 'jenis') {	//	Bahan
			include('table/jenisperangkat.php');
		}elseif ($_GET['perangkat'] == 'jenisperangkat-create') {
			include('function/create.php');
			include('forms/create_jenisperangkat.php');
		}
	}elseif (isset($_GET['alat-edit'])) { 		//	Alat
		include('function/edit.php');
		include('forms/edit_alat.php');
	}elseif (isset($_GET['alat-delete'])) {
		include('function/delete.php');
	}elseif (isset($_GET['bahan-edit'])) {		//	Bahan
		include('function/edit.php');
		include('forms/edit_bahan.php');
	}elseif (isset($_GET['bahan-delete'])) {
		include('function/delete.php');
	}elseif (isset($_GET['jenisperangkat-edit'])) {		//	Bahan
		include('function/edit.php');
		include('forms/edit_jenisperangkat.php');
	}elseif (isset($_GET['jenisperangkat-delete'])) {
		include('function/delete.php');
	}elseif (isset($_GET['akademik'])) {
		if ($_GET['akademik'] == 'kelas') {
			include('table/kelas.php');
		}elseif ($_GET['akademik'] == 'kelas-create') {
			include('function/create.php');
			include('forms/create_kelas.php');
		}elseif ($_GET['akademik'] == 'semester') {
			include('table/semester.php');
		}elseif ($_GET['akademik'] == 'semester-create') {
			include('function/create.php');
			include('forms/create_semester.php');
		}elseif ($_GET['akademik'] == 'tahun') {
			include('table/tahun.php');
		}elseif ($_GET['akademik'] == 'tahun-create') {
			include('function/create.php');
			include('forms/create_tahun.php');
		}elseif ($_GET['akademik'] == 'jenis') {
			include('table/jenis.php');
		}elseif ($_GET['akademik'] == 'jenis-create') {
			include('function/create.php');
			include('forms/create_jenis.php');
		}
	}elseif (isset($_GET['kelas-edit'])) { 		//	Alat
		include('function/edit.php');
		include('forms/edit_kelas.php');
	}elseif (isset($_GET['kelas-delete'])) {
		include('function/delete.php');
	}elseif (isset($_GET['semester-edit'])) { 		//	Alat
		include('function/edit.php');
		include('forms/edit_semester.php');
	}elseif (isset($_GET['semester-delete'])) {
		include('function/delete.php');
	}elseif (isset($_GET['tahun-edit'])) {		//	Bahan
		include('function/edit.php');
		include('forms/edit_tahun.php');
	}elseif (isset($_GET['tahun-delete'])) {
		include('function/delete.php');
	}elseif (isset($_GET['jenis-edit'])) {		//	Bahan
		include('function/edit.php');
		include('forms/edit_jenis.php');
	}elseif (isset($_GET['jenis-delete'])) {
		include('function/delete.php');
	}elseif (isset($_GET['nilai'])) {
		if ($_GET['nilai'] == 'afektif') {
			include('table/afektif.php');
		}elseif ($_GET['nilai'] == 'afektif-create') {
			include('function/create.php');
			include('forms/create_afektif.php');
		}elseif ($_GET['nilai'] == 'kognitif') {
			include('table/kognitif.php');
		}elseif ($_GET['nilai'] == 'kognitif-create') {
			include('function/create.php');
			include('forms/create_kognitif.php');
		}elseif ($_GET['nilai'] == 'psikomotor') {
			include('table/psikomotor.php');
		}elseif ($_GET['nilai'] == 'psikomotor-create') {
			include('function/create.php');
			include('forms/create_psikomotor.php');
		}elseif ($_GET['nilai'] == 'hasil') {
			include('table/nilai_hasil.php');
		}
	}elseif (isset($_GET['afektif-edit'])) { 		
		include('function/edit.php');
		include('forms/edit_afektif.php');
	}elseif (isset($_GET['afektif-delete'])) {
		include('function/delete.php');
	}elseif (isset($_GET['psikomotor-edit'])) { 		
		include('function/edit.php');
		include('forms/edit_psikomotor.php');
	}elseif (isset($_GET['psikomotor-delete'])) {
		include('function/delete.php');
	}elseif (isset($_GET['kognitif-edit'])) {		
		include('function/edit.php');
		include('forms/edit_kognitif.php');
	}elseif (isset($_GET['kognitif-delete'])) {
		include('function/delete.php');
	}elseif (isset($_GET['modul'])) {
		if ($_GET['modul'] == 'upload') {
			include('function/create.php');
			include('forms/upload.php');
		}elseif ($_GET['modul'] == 'download') {
			include('table/download.php');
		}
	}elseif (isset($_GET['modul-delete'])) {
		include('function/delete.php');
	}elseif (isset($_GET['jadwal'])) {
		if ($_GET['jadwal'] == 'laboratorium') {
			include('table/jadwal.php');
		}elseif ($_GET['jadwal'] == 'create') {
			include('function/create.php');
			include('forms/create_jadwal.php');
		}elseif ($_GET['jadwal'] == 'siswa') {
			include('table/jadwal_siswa.php');
		}elseif ($_GET['jadwal'] == 'jam') {
			include('table/jam.php');
		}elseif ($_GET['jadwal'] == 'jam-create') {
			include('function/create.php');
			include('forms/create_jam.php');
		}elseif ($_GET['jadwal'] == 'absen') {
			include('function/create.php');
			include('table/absen.php');
		}
	}elseif (isset($_GET['jadwal-edit'])) {
		include('function/edit.php');
		include('forms/edit_jadwal.php');
	}elseif (isset($_GET['jadwal-delete'])) {
		include('function/delete.php');
	}elseif (isset($_GET['jam-edit'])) {
		include('function/edit.php');
		include('forms/edit_jam.php');
	}elseif (isset($_GET['jam-delete'])) {
		include('function/delete.php');
	}elseif (isset($_GET['galeri'])) {
		if ($_GET['galeri'] == 'galeri') {
			include('table/galeri.php');
		}elseif ($_GET['galeri'] == 'galeri-create') {
			include('function/create.php');
			include('forms/create_galeri.php');
		}
	}elseif (isset($_GET['galeri-edit'])) {
		include('function/edit.php');
		include('forms/edit_galeri.php');
	}elseif (isset($_GET['galeri-delete'])) {
		include('function/delete.php');
	}elseif (isset($_GET['cetak'])) {
		if ($_GET['cetak'] == 'hasil') {
			include('table/cetak.php');
		}
	}else {
?>
<!-- ================================================================================================ -->
<div class="row">
	<!-- BEGIN PROFILE -->
	<div class="col-md-4">
		<div class="grid box-profile bg-blue">
			<div class="grid-body">							
				<img src="<?php echo $_SESSION['foto']; ?>" class="img-circle" alt="User Profile">
				<h3><?php echo $_SESSION['name']; ?></h3>
				<span></span>
			</div>
			<div class="footer bg-black" style="height: 50px;">
			</div>
		</div>
	</div>
	<!-- END PROFILE -->					
</div>
<!-- ================================================================================================ -->
<?php
	}
?>
