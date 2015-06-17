<div class="row">
	<!-- BEGIN BASIC FORM -->
	<div class="col-md-12">
		<div class="grid">
			<div class="grid-header">
				<i class="fa fa-align-left"></i>
				<span class="grid-title">Siswa</span>
				<div class="pull-right grid-tools">
					<a data-widget="collapse" title="Collapse"><i class="fa fa-chevron-up"></i></a>
					<a data-widget="reload" title="Reload"><i class="fa fa-refresh"></i></a>
				</div>
			</div>
			<div class="grid-body">
				<form role="form" class="form-horizontal" enctype="multipart/form-data" method="post">
					<div class="form-group">
						<label class="col-sm-2 control-label">Nomor Induk</label>
						<div class="col-md-4">
							<input type="text" class="form-control" name="noinduk" placeholder="Enter Nomor Induk" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Nama</label>
						<div class="col-md-4">
							<input type="text" class="form-control" name="name" placeholder="Enter Nama" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Username</label>
						<div class="col-md-4">
							<input type="text" class="form-control" name="username" placeholder="Enter Username" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Password</label>
						<div class="col-md-4">
							<input type="password" class="form-control" name="password" placeholder="Enter Password" required>
						</div>
					</div>					
					<div class="form-group">
						<label class="col-sm-2 control-label">Alamat</label>
						<div class="col-md-4">
							<textarea class="form-control" name="alamat" required></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Telepon</label>
						<div class="col-md-4">
							<input type="text" class="form-control" name="telp" placeholder="No. Telepon" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Status</label>
						<div class="col-md-4">
							<select class="form-control" name="status" required>
								<option>Aktif</option>
								<option>Alumni</option>
								<option>Tidak Aktif</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Gender</label>
						<div class="col-md-4">
							<select class="form-control" name="gender" required>
								<option>Laki-laki</option>
								<option>Perempuan</option>
							</select>
						</div>
					</div>
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
						<label class="col-sm-2 control-label">Pilih Foto</label>
						<div class="col-md-4">
							<input type="file" name="foto" required>
						</div>
					</div>
					<hr/>
					<div class="form-group">
						<div class="col-md-2"></div>
						<div class="col-md-4 btn-group">
							<button type="submit" class="btn btn-primary" name="create-siswa"><span class="fa fa-plus"></span> Create</button>
							<button type="reset" class="btn btn-default"><span class="fa fa-eraser"></span> Cancel</button>
							<a href="?users=siswa" class="btn btn-info"><span class="fa fa-reply"></span> Back</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- END BASIC FORM -->
</div>