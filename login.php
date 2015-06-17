<!-- Begin Login Proses -->
<?php
	require_once('config/db.php');
	//Login Proses
	if(isset($_POST['signin'])){
		$user 		= 	$_POST['username'];
		$pass 		= 	$_POST['password'];
		$hasil 		= 	mysql_query("SELECT * FROM users WHERE username='$user' AND password='$pass'");
		$data 		= 	mysql_fetch_array($hasil);
		$id 		= 	$data['id'];
		$username 	= 	$data['username'];
		$password 	= 	$data['password'];
		$name 		= 	$data['name'];
		$foto 		= 	$data['foto'];
		$access 	= 	$data['access'];
		$kelas 		=	$data['kelas_id'];
		if($user==$username && $pass=$password){
			session_start();
			$_SESSION['id']			=	$id;
			$_SESSION['username']	=	$username;
			$_SESSION['name']		=	$name;
			$_SESSION['foto']  		=	$foto;
			$_SESSION['access']		=	$access;
			$_SESSION['kelas']		=	$kelas;

			header('Location: index.php');
		}else {
			header('Location: index.php');
		}
	}
?>
<!-- End Login Proses -->