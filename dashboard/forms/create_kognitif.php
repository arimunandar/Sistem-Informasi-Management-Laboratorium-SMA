<?php 
	if (isset($_POST['cari-nilai'])) {
		include('table/nilai_kognitif.php');
	}else{
?>
<div class="row">
	<!-- BEGIN BASIC FORM -->
	<div class="col-md-12">
		<div class="grid">
			<div class="grid-header">
				<i class="fa fa-align-left"></i>
				<span class="grid-title">Kognitif</span>
				<div class="pull-right grid-tools">
					<a data-widget="collapse" title="Collapse"><i class="fa fa-chevron-up"></i></a>
					<a data-widget="reload" title="Reload"><i class="fa fa-refresh"></i></a>
				</div>
			</div>
			<div class="grid-body">
				<form role="form" class="form-horizontal" enctype="multipart/form-data" method="post">					
					<div class="form-group">
						<label class="col-sm-2 control-label">Kelas</label>
						<div class="col-md-4">
							<select class="form-control" name="kelas" required>
								<?php 
									$kelas  	=	mysql_query("SELECT * FROM kelas");

									while ($data=mysql_fetch_array($kelas)) {
								?>
								<option value="<?php echo $data['kelas_id']; ?>"><?php echo $data['kelas_nama']; ?></option>
								<?php
									}
								?>
							</select>
						</div>
					</div>
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
							<button type="submit" class="btn btn-primary" name="cari-nilai"><span class="fa fa-search"></span> Cari</button>
							<button type="reset" class="btn btn-default"><span class="fa fa-eraser"></span> Cancel</button>
							<a href="?users=guru" class="btn btn-info"><span class="fa fa-reply"></span> Back</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- END BASIC FORM -->
</div>
<?php
	}
?>