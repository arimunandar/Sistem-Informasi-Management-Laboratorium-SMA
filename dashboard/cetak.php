<?php 
	session_start();
	require_once('../config/db.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<title>Sistem Infomasi Laboratorium</title>
	
	<link rel="icon" href="assets/img/favicon.ico">
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	<!-- BEGIN CSS FRAMEWORK -->
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
	<!-- END CSS FRAMEWORK -->
	
	<!-- BEGIN CSS PLUGIN -->
	<link rel="stylesheet" href="assets/plugins/pace/pace-theme-minimal.css">
	<link rel="stylesheet" href="assets/plugins/jquery-gritter/css/jquery.gritter.css">
	<link rel="stylesheet" href="assets/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" href="assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.css">
	<link rel="stylesheet" href="assets/plugins/icheck/skins/square/blue.css">
	<link rel="stylesheet" href="assets/plugins/switchery/switchery.min.css">
	<link rel="stylesheet" href="assets/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" href="assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
	<link rel="stylesheet" href="assets/plugins/select2/select2.css">
	<link rel="stylesheet" href="assets/plugins/select2/select2-bootstrap.css">
	<link rel="stylesheet" href="assets/plugins/bootstrap-slider/css/slider.css">
	<link rel="stylesheet" href="assets/plugins/bootstrap-summernote/summernote.css">
	<link rel="stylesheet" href="assets/plugins/bootstrap-summernote/summernote-bs3.css">
	<link rel="stylesheet" href="assets/plugins/fullcalendar/fullcalendar.css">
	<link rel="stylesheet" href="assets/plugins/fullcalendar/fullcalendar.print.css">
	<link rel="stylesheet" href="assets/plugins/pace/pace-theme-minimal.css">
	<link rel="stylesheet" href="assets/plugins/jquery-datatables/css/dataTables.bootstrap.css">
	<link rel="stylesheet" href="assets/plugins/jquery-niftymodal/css/component.css">

	<!-- END CSS PLUGIN -->
	
	<!-- BEGIN CSS TEMPLATE -->
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/css/skins.css">
	<!-- END CSS TEMPLATE -->
</head>
<div class="container" style="background:#ffffff;">
	<div class="row">
    <!-- BEGIN BASIC TABLE -->
    <div class="col-md-12">
    	<center>
    		<b>
    			<h2>Laporan Hasil Nilai Pratikum</h2><br>
    			<h4>SMAN 1 Lubuk Sikaping</h4>
    			<hr>
    		</b>
    	</center>
    </div>	
    <div class="col-md-12">
        <?php 
        	if (isset($_POST['hasil-nilai'])) {
        		$semester 	=	$_POST['semester'];
        		$tahun 		=	$_POST['tahun'];
        ?>
		<div class="grid no-border">
            <div class="grid-header">
                <div class="col-md-12" style="padding-top:20px;">
                    <table>
                        <tr>
                            <td width="100px">Nama</td>
                            <td width="30px">:</td>
                            <td><?php echo $_SESSION['name']; ?></td>
                        </tr>
                        <tr>
                            <td width="100px">NIS</td>
                            <td width="30px">:</td>
                            <?php 
                            	$name 	=	$_SESSION['name'];
                            	$siswa 	=	mysql_query("SELECT nomor_induk FROM users WHERE name='$name'");

                            	$data 	=	mysql_fetch_array($siswa);
                            ?>
                            <td><?php echo $data['nomor_induk']; ?></td>
                        </tr>
                        <tr>
                            <td width="100px">Kelas</td>
                            <td width="30px">:</td>
                            <td>
                            	<?php 
                            		$k = $_SESSION['kelas']; 
                            		$kelas = mysql_query("SELECT * FROM kelas WHERE kelas_id='$k'");

                            		$data = mysql_fetch_array($kelas);

                            		echo $data['kelas_nama'];
                            	?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="grid-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th width="3%">#</th>
                            <th>Semester</th>
                            <th>Tahun Ajaran</th>
                            <th width="35%">Nilai Rata-rata Pratikum</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php 
                                $no         =   1;
                                $id       =   $_SESSION['id'];

                                $nilai      =   mysql_query("SELECT AVG(nilai_poin) AS nilai, users.name, semester.semester_nama,
                                							tahun.tahun_nama
                                							FROM nilai
                                							INNER JOIN users ON nilai.id=users.id
                                							INNER JOIN semester ON nilai.semester_id=semester.semester_id
                                							INNER JOIN tahun ON nilai.tahun_id=tahun.tahun_id
                                                            WHERE users.id='$id' AND semester.semester_id='$semester' AND tahun.tahun_id='$tahun'
                                                            ");
                                while ($data=mysql_fetch_array($nilai)) {
                            ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $data['semester_nama']; ?></td>
                                <td><?php echo $data['tahun_nama']; ?></td>

                                <td class="btn-info">
                                	<?php
                                		$poin = ROUND($data['nilai']);
                                        if ($poin == 0) {
                                        	echo "Data Kosong";
                                        }else {
                                        	echo $poin;
                                        }
                                    ?>
                                </td>
                            </tr>
                            <?php
                            	$no++;
                                }
                            ?>                  
                    </tbody>                    
                </table>
                <a href="cetak.php" class="btn btn-info"><span class="fa fa-reply"></span> Back</a>
                <a class="btn btn-warning" onClick="window.print();return false"><span class="fa fa-print"></span> Cetak</a>
            </div>
        </div>
        <?php
        	}else {
        ?>
		<div class="grid">
			<div class="grid-header">
				<i class="fa fa-align-left"></i>
				<span class="grid-title">Laporan Hasil Pratikum</span>
				<div class="pull-right grid-tools">
					<a data-widget="collapse" title="Collapse"><i class="fa fa-chevron-up"></i></a>
					<a data-widget="reload" title="Reload"><i class="fa fa-refresh"></i></a>
				</div>
			</div>
			<div class="grid-body">
				<form role="form" class="form-horizontal" method="post">					
					<div class="form-group">
						<label class="col-sm-2 control-label">Semester</label>
						<div class="col-md-4">
							<select class="form-control" name="semester" required>
								<?php 
									$semester  	=	mysql_query("SELECT * FROM semester");

									while ($data=mysql_fetch_array($semester)) {
								?>
								<option value="<?php echo $data['semester_id']; ?>"><?php echo $data['semester_nama']; ?></option>
								<?php
									}
								?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Tahun</label>
						<div class="col-md-4">
							<select class="form-control" name="tahun" required>
								<?php 
									$tahun  	=	mysql_query("SELECT * FROM tahun");

									while ($data=mysql_fetch_array($tahun)) {
								?>
								<option value="<?php echo $data['tahun_id']; ?>"><?php echo $data['tahun_nama']; ?></option>
								<?php
									}
								?>
							</select>
						</div>
					</div>
					<hr/>
					<div class="form-group">
						<div class="col-md-2"></div>
						<div class="col-md-4 btn-group">
							<button type="submit" class="btn btn-primary" name="hasil-nilai"><span class="fa fa-search"></span> Cari</button>
							<button type="reset" class="btn btn-default"><span class="fa fa-eraser"></span> Cancel</button>
							<a href="index.php?nilai=hasil" class="btn btn-info"><span class="fa fa-reply"></span> Back</a>
						</div>
					</div>
				</form>
			</div>
		</div>
        <?php
        	}
        ?>
    </div>
    <!-- END BASIC TABLE -->
</div>
</div>
<body class="skin-dark">



		<!-- BEGIN SCROLL TO TOP -->
		<div class="scroll-to-top"></div>
		<!-- END SCROLL TO TOP -->
	</div>

	<!-- BEGIN JS FRAMEWORK -->
	<script src="assets/plugins/jquery-2.1.0.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- END JS FRAMEWORK -->
	
	<!-- BEGIN JS PLUGIN -->
	<script src="assets/plugins/dropzone/dropzone.min.js"></script>
	<script src="assets/plugins/jquery-gritter/js/jquery.gritter.min.js"></script>
	<script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
	<script src="assets/plugins/pace/pace.min.js"></script>
	<script src="assets/plugins/jquery-totemticker/jquery.totemticker.min.js"></script>
	<script src="assets/plugins/jquery-resize/jquery.ba-resize.min.js"></script>
	<script src="assets/plugins/jquery-blockui/jquery.blockUI.min.js"></script>
	<script src="assets/plugins/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
	<script src="assets/plugins/switchery/switchery.min.js"></script>
	<script src="assets/plugins/bootstrap-summernote/summernote.min.js"></script>
	<script src="assets/plugins/jquery-datatables/js/jquery.dataTables.min.js"></script>
	<script src="assets/plugins/jquery-datatables/js/dataTables.bootstrap.js"></script>
	<script src="assets/plugins/jquery-niftymodal/js/classie.js"></script>
	<script src="assets/plugins/jquery-niftymodal/js/modalEffects.js"></script>
	<script src="assets/js/datatables.js"></script>
	<script src="assets/plugins/fullcalendar/lib/moment.min.js"></script>
	<script src="assets/plugins/fullcalendar/fullcalendar.min.js"></script>
	<script src="assets/js/calendar.js"></script>
	<script src="assets/plugins/jquery-flot/jquery.flot.min.js"></script>
	<script src="assets/plugins/jquery-flot/jquery.flot.labels.min.js"></script>
	<script src="assets/plugins/jquery-flot/jquery.flot.resize.min.js"></script>
	<script src="assets/plugins/jquery-flot/jquery.flot.orderBars.min.js"></script>
	<script src="assets/plugins/jquery-flot/jquery.flot.pie.min.js"></script>
	<script src="assets/plugins/jquery-flot/curvedLines.js"></script>
	<script src="assets/plugins/skycons/skycons.js"></script>
	<script src="assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
	<script src="assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="assets/plugins/jquery-jvectormap/jquery-jvectormap-us-aea-en.js"></script>

	<script src="assets/plugins/icheck/icheck.min.js"></script>
	<script src="assets/plugins/switchery/switchery.min.js"></script>
	<script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
	<script src="assets/plugins/select2/select2.js"></script>
	<script src="assets/plugins/bootstrap-slider/js/bootstrap-slider.js"></script>
	<script src="assets/js/form.js"></script>
	<script type="text/javascript">
		/* MULTI UPLOAD */
		$("#my-dropzone").dropzone({ url: "/file/post" });
	</script>
	<script type="text/javascript">		
		/* POPUP GALLERY */
		$('.popup-gallery').magnificPopup({
			delegate: 'a',
			type: 'image',
			tLoading: 'Loading image #%curr%...',
			mainClass: 'mfp-img-mobile',
			gallery: {
				enabled: true,
				navigateByImgClick: true,
				preload: [0,1] // Will preload 0 - before current, and 1 after the current image
			},
			image: {
				tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
				titleSrc: function(item) {
					return item.el.attr('title') + '<small>by Ryan McGuire</small>';
				}
			}
		});
		
		/* SWITCHERY */
		if (Array.prototype.forEach) {
			var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
			elems.forEach(function(html) {
				var switchery = new Switchery(html);
			});
		} else {
			var elems = document.querySelectorAll('.js-switch');
			for (var i = 0; i < elems.length; i++) {
				var switchery = new Switchery(elems[i]);
			}
		}
	</script>
	<script type="text/javascript">
		/* SUMMERNOTE WYSIWYG */
		$('#summernote').summernote({
			height: 300
		});

		$('#click2edit').click(function(){
			$(this).summernote({
				focus: true,
				onblur: function(e) {
					$('#click2edit').destroy();
				}
			});
		});

		$('#airmode').summernote({
			height: 300,
			airMode: true
		});
	</script>
	<script type="text/javascript">
		/* MAGNIFIC POPUP */
		$('.popup-gallery').magnificPopup({
			delegate: 'a',
			type: 'image',
			tLoading: 'Loading image #%curr%...',
			mainClass: 'mfp-img-mobile',
			gallery: {
				enabled: true,
				navigateByImgClick: true,
				preload: [0,1] // Will preload 0 - before current, and 1 after the current image
			},
			image: {
				tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
				titleSrc: function(item) {
					return item.el.attr('title') + '<small></small>';
				}
			}
		});
	</script>	
	<!-- END JS PLUGIN -->

	<!-- BEGIN JS TEMPLATE -->
	<script src="assets/js/main.js"></script>
	<script src="assets/js/skin-selector.js"></script>
	<!-- END JS TEMPLATE -->
</body>
</html>