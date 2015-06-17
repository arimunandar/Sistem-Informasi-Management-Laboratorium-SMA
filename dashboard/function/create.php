<?php 
	// Admin Create
	if (isset($_POST['create-admin'])) {
		$name			=	$_POST['name'];
		$username		=	$_POST['username'];
		$password		=	$_POST['password'];
		$alamat			=	$_POST['alamat'];
		$telp			=	$_POST['telp'];
		$status			=	$_POST['status'];
		$gender			= 	$_POST['gender'];
		$access			=	'admin';
		$folder 		= 	'foto';
        $tmp_name 		= 	$_FILES["foto"]["tmp_name"];
        $link 			= 	$folder."/".$_FILES["foto"]["name"];

		//Upload ke folder foto
        move_uploaded_file($tmp_name, $link);

		$admin 			=	mysql_query("INSERT INTO users (`id`, `name`, `username`, `password`, `alamat`, 
													`telp`, `status`, `gender`, `foto`, `access`) 
										VALUES (NULL, '$name', '$username', '$password', '$alamat', '$telp', '$status', '$gender', '$link', '$access')");

		if ($admin) {
			echo 	"<div class='alert alert-success alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Done!</strong> Data berhasil di tambah.
					</div>";
			echo "<meta http-equiv='refresh' content='2;URL=?users=admin'>";
		}else{
			echo 	"<div class='alert alert-danger alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Ups!</strong> Data gagal di tambah.
					</div>";
		}			
	}
?>
<?php 
	// Guru Create
	if (isset($_POST['create-guru'])) {
		$noinduk		=	$_POST['noinduk'];
		$name			=	$_POST['name'];
		$username		=	$_POST['username'];
		$password		=	$_POST['password'];
		$alamat			=	$_POST['alamat'];
		$telp			=	$_POST['telp'];
		$status			=	$_POST['status'];
		$gender			= 	$_POST['gender'];
		$access			=	'guru';
		$folder 		= 	'foto';
        $tmp_name 		= 	$_FILES["foto"]["tmp_name"];
        $link 			= 	$folder."/".$_FILES["foto"]["name"];

		//Upload ke folder foto
        move_uploaded_file($tmp_name, $link);

		$guru 			=	mysql_query("INSERT INTO users (`id`, `nomor_induk`, `name`, `username`, `password`, `alamat`, 
													`telp`, `status`, `gender`, `foto`, `kelas_id`, `access`) 
										VALUES (NULL, '$noinduk', '$name', '$username', '$password', '$alamat', '$telp', '$status', '$gender', '$link', NULL, '$access')");

		if ($guru) {
			echo 	"<div class='alert alert-success alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Done!</strong> Data berhasil di tambah.
					</div>";
			echo "<meta http-equiv='refresh' content='2;URL=?users=guru'>";
		}else{
			echo 	"<div class='alert alert-danger alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Ups!</strong> Data gagal di tambah.
					</div>";
		}			
	}

?>
<?php 
	// Siswa Create
	if (isset($_POST['create-siswa'])) {
		$noinduk		=	$_POST['noinduk'];
		$name			=	$_POST['name'];
		$username		=	$_POST['username'];
		$password		=	$_POST['password'];
		$alamat			=	$_POST['alamat'];
		$telp			=	$_POST['telp'];
		$status			=	$_POST['status'];
		$gender			= 	$_POST['gender'];
		$kelas			=	$_POST['kelas'];
		$access			=	'siswa';
		$folder 		= 	'foto';
        $tmp_name 		= 	$_FILES["foto"]["tmp_name"];
        $link 			= 	$folder."/".$_FILES["foto"]["name"];

		//Upload ke folder foto
        move_uploaded_file($tmp_name, $link);

		$siswa 			=	mysql_query("INSERT INTO users (`id`, `nomor_induk`, `name`, `username`, `password`, `alamat`, 
													`telp`, `status`, `gender`, `foto`, `kelas_id`, `access`) 
										VALUES (NULL, '$noinduk', '$name', '$username', '$password', '$alamat', '$telp', '$status', '$gender', '$link', '$kelas', '$access')");

		if ($siswa) {
			echo 	"<div class='alert alert-success alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Done!</strong> Data berhasil di tambah.
					</div>";
			echo "<meta http-equiv='refresh' content='2;URL=?users=siswa'>";
		}else{
			echo 	"<div class='alert alert-danger alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Ups!</strong> Data gagal di tambah.
					</div>";
		}			
	}

?>
<?php 
	// Alat Create
	if (isset($_POST['create-alat'])) {
		$nama		=	$_POST['nama'];
		$jenis 		=	$_POST['jenis'];
		$jumlah 	=	$_POST['jumlah'];
		$rusak 		=	$_POST['rusak'];
		$satuan 	=	$_POST['satuan'];

		$alat 			=	mysql_query("INSERT INTO alat (`alat_id`, `alat_nama`, `alat_jenis`, `alat_jumlah`, `alat_rusak`, `alat_satuan`) 
										VALUES (NULL, '$nama', '$jenis', '$jumlah', '$rusak', '$satuan')");

		if ($alat) {
			echo 	"<div class='alert alert-success alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Done!</strong> Data berhasil di tambah.
					</div>";
			echo "<meta http-equiv='refresh' content='2;URL=?perangkat=alat'>";
		}else{
			echo 	"<div class='alert alert-danger alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Ups!</strong> Data gagal di tambah.
					</div>";
		}			
	}

?>
<?php 
	// Bahan Create
	if (isset($_POST['create-bahan'])) {
		$nama		=	$_POST['nama'];
		$jenis 		=	$_POST['jenis'];
		$jumlah 	=	$_POST['jumlah'];
		$rusak 		=	$_POST['rusak'];
		$satuan 	=	$_POST['satuan'];

		$bahan 			=	mysql_query("INSERT INTO bahan (`bahan_id`, `bahan_nama`, `bahan_jenis`, `bahan_jumlah`, `bahan_rusak`, `bahan_satuan`) 
										VALUES (NULL, '$nama', '$jenis', '$jumlah', '$rusak', '$satuan')");

		if ($bahan) {
			echo 	"<div class='alert alert-success alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Done!</strong> Data berhasil di tambah.
					</div>";
			echo "<meta http-equiv='refresh' content='2;URL=?perangkat=bahan'>";
		}else{
			echo 	"<div class='alert alert-danger alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Ups!</strong> Data gagal di tambah.
					</div>";
		}			
	}

?>
<?php 
	// Kelas Create
	if (isset($_POST['create-kelas'])) {
		$nama		=	$_POST['nama'];

		$kelas 			=	mysql_query("INSERT INTO kelas (`kelas_id`, `kelas_nama`) 
										VALUES (NULL, '$nama')");

		if ($kelas) {
			echo 	"<div class='alert alert-success alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Done!</strong> Data berhasil di tambah.
					</div>";
			echo "<meta http-equiv='refresh' content='2;URL=?akademik=kelas'>";
		}else{
			echo 	"<div class='alert alert-danger alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Ups!</strong> Data gagal di tambah.
					</div>";
		}			
	}

?>
<?php 
	// Semester Create
	if (isset($_POST['create-semester'])) {
		$nama		=	$_POST['nama'];

		$semester 			=	mysql_query("INSERT INTO semester (`semester_id`, `semester_nama`) 
										VALUES (NULL, '$nama')");

		if ($semester) {
			echo 	"<div class='alert alert-success alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Done!</strong> Data berhasil di tambah.
					</div>";
			echo "<meta http-equiv='refresh' content='2;URL=?akademik=semester'>";
		}else{
			echo 	"<div class='alert alert-danger alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Ups!</strong> Data gagal di tambah.
					</div>";
		}			
	}

?>
<?php 
	// Tahun Create
	if (isset($_POST['create-tahun'])) {
		$nama		=	$_POST['nama'];

		$tahun 			=	mysql_query("INSERT INTO tahun (`tahun_id`, `tahun_nama`) 
										VALUES (NULL, '$nama')");

		if ($tahun) {
			echo 	"<div class='alert alert-success alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Done!</strong> Data berhasil di tambah.
					</div>";
			echo "<meta http-equiv='refresh' content='2;URL=?akademik=tahun'>";
		}else{
			echo 	"<div class='alert alert-danger alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Ups!</strong> Data gagal di tambah.
					</div>";
		}			
	}

?>
<?php 
	// Jenis Create
	if (isset($_POST['create-jenis'])) {
		$nama		=	$_POST['nama'];

		$jenis 			=	mysql_query("INSERT INTO jenisnilai (`jenis_id`, `jenis_nama`) 
										VALUES (NULL, '$nama')");

		if ($jenis) {
			echo 	"<div class='alert alert-success alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Done!</strong> Data berhasil di tambah.
					</div>";
			echo "<meta http-equiv='refresh' content='2;URL=?akademik=jenis'>";
		}else{
			echo 	"<div class='alert alert-danger alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Ups!</strong> Data gagal di tambah.
					</div>";
		}			
	}

?>
<?php 
	// Jenis Create
	if (isset($_POST['create-jenisperangkat'])) {
		$nama		=	$_POST['nama'];
		$type 		=	$_POST['type'];

		$jenis 			=	mysql_query("INSERT INTO jenisperangkat (`jenisperangkat_id`, `jenisperangkat_nama`, `jenisperangkat_type`) 
										VALUES (NULL, '$nama', '$type')");

		if ($jenis) {
			echo 	"<div class='alert alert-success alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Done!</strong> Data berhasil di tambah.
					</div>";
			echo "<meta http-equiv='refresh' content='2;URL=?perangkat=jenis'>";
		}else{
			echo 	"<div class='alert alert-danger alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Ups!</strong> Data gagal di tambah.
					</div>";
		}			
	}

?>
<?php 
	// Jadwal Create
	if (isset($_POST['create-jadwal'])) {
		$nama		=	$_POST['name'];
		$tanggal 	=	$_POST['tanggal'];
		$jam 		=	$_POST['jam'];
		$kelas 		=	$_POST['kelas'];

		$jadwal 			=	mysql_query("INSERT INTO jadwal (`jadwal_id`, `jam_id`, `jadwal_tanggal`, `id`, `kelas_id`) 
										VALUES (NULL, '$jam', '$tanggal', '$nama', '$kelas')");

		if ($jadwal) {
			echo 	"<div class='alert alert-success alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Done!</strong> Data berhasil di tambah.
					</div>";
			echo "<meta http-equiv='refresh' content='2;URL=?jadwal=laboratorium'>";
		}else{
			echo 	"<div class='alert alert-danger alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Ups!</strong> Data gagal di tambah.
					</div>";
		}			
	}

?>
<?php 
	// Jadwal Create
	if (isset($_POST['create-jam'])) {
		$nama		=	$_POST['nama'];

		$jam 			=	mysql_query("INSERT INTO jam (`jam_id`, `jam_nama`) 
										VALUES (NULL, '$nama')");

		if ($jam) {
			echo 	"<div class='alert alert-success alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Done!</strong> Data berhasil di tambah.
					</div>";
			echo "<meta http-equiv='refresh' content='2;URL=?jadwal=jam'>";
		}else{
			echo 	"<div class='alert alert-danger alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Ups!</strong> Data gagal di tambah.
					</div>";
		}			
	}

?>
<?php 
	if (isset($_POST['afektif-proses'])) {
		$name 		=	$_POST['name'];
		$semester 	=	$_POST['semester'];
		$jenis 		=	$_POST['jenis'];
		$tahun 		=	$_POST['tahun'];
		$nilaipoin	=	$_POST['nilai'];
		$jumlahdata	=	count($name);

		for($x=0;$x<$jumlahdata;$x++) {
			$nilai	=	mysql_query("INSERT INTO nilai (`nilai_id`, `id`, `jenis_id`, `semester_id`, `tahun_id`, `nilai_poin`) 
										VALUES (NULL, '$name[$x]', '$jenis[$x]', '$semester[$x]', '$tahun[$x]', '$nilaipoin[$x]')");	
			
		}
		if ($nilai) {
			echo 	"<div class='alert alert-success alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Done!</strong> Data berhasil di tambah.
					</div>";
			echo "<meta http-equiv='refresh' content='2;URL=?nilai=afektif'>";
		}else{
			echo 	"<div class='alert alert-danger alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Ups!</strong> Data gagal di tambah.
					</div>";
		}
	}
?>
<?php 
	if (isset($_POST['psikomotor-proses'])) {
		$name 		=	$_POST['name'];
		$semester 	=	$_POST['semester'];
		$jenis 		=	$_POST['jenis'];
		$tahun 		=	$_POST['tahun'];
		$nilaipoin	=	$_POST['nilai'];
		$jumlahdata	=	count($name);

		for($x=0;$x<$jumlahdata;$x++) {
			$nilai	=	mysql_query("INSERT INTO nilai (`nilai_id`, `id`, `jenis_id`, `semester_id`, `tahun_id`, `nilai_poin`) 
										VALUES (NULL, '$name[$x]', '$jenis[$x]', '$semester[$x]', '$tahun[$x]', '$nilaipoin[$x]')");	
			
		}
		if ($nilai) {
			echo 	"<div class='alert alert-success alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Done!</strong> Data berhasil di tambah.
					</div>";
			echo "<meta http-equiv='refresh' content='2;URL=?nilai=psikomotor'>";
		}else{
			echo 	"<div class='alert alert-danger alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Ups!</strong> Data gagal di tambah.
					</div>";
		}
	}
?>
<?php 
	if (isset($_POST['kognitif-proses'])) {
		$name 		=	$_POST['name'];
		$semester 	=	$_POST['semester'];
		$jenis 		=	$_POST['jenis'];
		$tahun 		=	$_POST['tahun'];
		$nilaipoin	=	$_POST['nilai'];
		$jumlahdata	=	count($name);

		for($x=0;$x<$jumlahdata;$x++) {
			$nilai	=	mysql_query("INSERT INTO nilai (`nilai_id`, `id`, `jenis_id`, `semester_id`, `tahun_id`, `nilai_poin`) 
										VALUES (NULL, '$name[$x]', '$jenis[$x]', '$semester[$x]', '$tahun[$x]', '$nilaipoin[$x]')");	
		}
		if ($nilai) {
			echo 	"<div class='alert alert-success alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Done!</strong> Data berhasil di tambah.
					</div>";
			echo "<meta http-equiv='refresh' content='2;URL=?nilai=kognitif'>";
		}else{
			echo 	"<div class='alert alert-danger alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Ups!</strong> Data gagal di tambah.
					</div>";
		}
	}
?>
<?php 
	//Upload Modul
	if(isset($_POST['upload'])){
        $allowed_ext    = array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'rar', 'zip');
        $file_name      = $_FILES['file']['name'];
        $file_ext       = strtolower(end(explode('.', $file_name)));
        $file_size      = $_FILES['file']['size'];
        $file_tmp       = $_FILES['file']['tmp_name'];
        
        $nama           = $_POST['nama'];
        $tgl            = date("Y-m-d");
        
        if(in_array($file_ext, $allowed_ext) === true){
            if($file_size < 20440700){
                $lokasi = '../gallery/'.$nama.'.'.$file_ext;
                move_uploaded_file($file_tmp, $lokasi);
                $in = mysql_query("INSERT INTO download VALUES(NULL, '$tgl', '$nama', '$file_ext', '$file_size', '$lokasi')");
                if($in){
                    echo "<meta http-equiv='refresh' content='0;URL= ?modul=download '/>";
                }else{
                    echo '<div class="error">ERROR: Gagal upload file!</div>';
                }
            }else{
                echo '<div class="error">ERROR: Besar ukuran file (file size) maksimal 20 Mb!</div>';
            }
        }else{
            echo '<div class="error">ERROR: Ekstensi file tidak di izinkan!</div>';
        }
    }
?>
<?php

    if (isset($_POST['upload-foto'])) {
        $nama = $_POST['judul'];
        $keterangan = $_POST['keterangan'];
        $folder = "gallery";
        $tmp_name = $_FILES["foto"]["tmp_name"];
        $link = $folder."/".$_FILES["foto"]["name"];

        //kode untuk upload ke folder uploads
        move_uploaded_file($tmp_name, $link);

        //masukkan datanya ke database
        $galeri = mysql_query("INSERT INTO galeri (galeri_nama, galeri_keterangan, galeri_link, galeri_tgl) VALUES('$nama','$keterangan','$link', now())");

        if ($galeri) {
			echo 	"<div class='alert alert-success alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Done!</strong> Data berhasil di tambah.
					</div>";
			echo "<meta http-equiv='refresh' content='2;URL=?galeri=galeri'>";
		}else{
			echo 	"<div class='alert alert-danger alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Ups!</strong> Data gagal di tambah.
					</div>";
		}
    }
?>

<?php 
	if (isset($_POST['absen-proses'])) {
		$name 		=	$_POST['name'];
		$ket		=	$_POST['ket'];
		$tanggal	=	$_POST['tanggal'];
		$jumlahdata	=	count($name);

		for($x=0;$x<$jumlahdata;$x++) {
			$absen	=	mysql_query("INSERT INTO absen (`absen_id`, `id`, `absen_tgl`, `absen_ket`) 
										VALUES (NULL, '$name[$x]', '$tanggal[$x]', '$ket[$x]')");	

		}

		if ($absen) {
			echo 	"<div class='alert alert-success alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Done!</strong> Data berhasil di tambah.
					</div>";
			echo "<meta http-equiv='refresh' content='2;URL=?jadwal=absen'>";
		}else{
			echo 	"<div class='alert alert-danger alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong>Ups!</strong> Data gagal di tambah.
					</div>";
		}
	}
?>