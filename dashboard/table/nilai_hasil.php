<div class="row">
    <!-- BEGIN BASIC TABLE -->
    <div class="col-md-12">
        <?php 
        	if (isset($_POST['hasil-nilai'])) {
        		$semester 	=	$_POST['semester'];
        		$tahun 		=	$_POST['tahun'];
        ?>
		<div class="grid no-border">
            <div class="grid-header">
                <i class="fa fa-table"></i>
                <span class="grid-title">Hasil Pratikum</span>
                <div class="pull-right grid-tools">
                    <a data-widget="collapse" title="Collapse"><i class="fa fa-chevron-up"></i></a>
                    <a data-widget="reload" title="Reload"><i class="fa fa-refresh"></i></a>
                    <a data-widget="remove" title="Remove"><i class="fa fa-times"></i></a>
                </div>
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
                            <th width="25%">Nilai Rata-rata Pratikum</th>
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
                <a href="?nilai=hasil" class="btn btn-info"><span class="fa fa-reply"></span> Back</a>
                <a href="cetak.php" class="btn btn-warning"><span class="fa fa-print"></span> Cetak</a>
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
							<a href="index.php" class="btn btn-info"><span class="fa fa-reply"></span> Back</a>
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