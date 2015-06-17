<div class="row">
	<!-- BEGIN BASIC FORM -->
	<div class="col-md-12">
		<div class="grid">
			<div class="grid-header">
				<i class="fa fa-align-left"></i>
				<span class="grid-title">Alat</span>
				<div class="pull-right grid-tools">
					<a data-widget="collapse" title="Collapse"><i class="fa fa-chevron-up"></i></a>
					<a data-widget="reload" title="Reload"><i class="fa fa-refresh"></i></a>
				</div>
			</div>
			<div class="grid-body">
				<form role="form" class="form-horizontal" enctype="multipart/form-data" method="post">
					<div class="form-group">
						<label class="col-sm-2 control-label">Nama Alat</label>
						<div class="col-md-4">
							<input type="text" class="form-control" name="nama" placeholder="Enter Nama Alat" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Jenis Alat</label>
						<div class="col-md-4">
							<select class="form-control" name="jenis" required>
								<?php 
									$jenis 		=	mysql_query("SELECT * FROM jenisperangkat WHERE jenisperangkat_type='Alat'");

									while ($data=mysql_fetch_array($jenis)) {
								?>
								<option value="<?php echo $data['jenisperangkat_nama']; ?>"><?php echo $data['jenisperangkat_nama']; ?></option>
								<?php
									}
								?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Jumlah Alat</label>
						<div class="col-md-4">
							<input type="text" class="form-control" name="jumlah" placeholder="Jumlah Alat" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Jumlah Alat Rusak</label>
						<div class="col-md-4">
							<input type="text" class="form-control" name="rusak" placeholder="Jumlah Alat Rusak" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Satuan Alat</label>
						<div class="col-md-4">
							<input type="text" class="form-control" name="satuan" placeholder="Satuan Alat" required>
						</div>
					</div><hr/>
					<div class="form-group">
						<div class="col-md-2"></div>
						<div class="col-md-4 btn-group">
							<button type="submit" class="btn btn-primary" name="create-alat"><span class="fa fa-plus"></span> Create</button>
							<button type="reset" class="btn btn-default"><span class="fa fa-eraser"></span> Cancel</button>
							<a href="?perangkat=alat" class="btn btn-info"><span class="fa fa-reply"></span> Back</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- END BASIC FORM -->
</div>