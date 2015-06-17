<div class="row">
	<!-- BEGIN BASIC FORM -->
	<div class="col-md-12">
		<div class="grid">
			<div class="grid-header">
				<i class="fa fa-align-left"></i>
				<span class="grid-title">Jenis Perangkat</span>
				<div class="pull-right grid-tools">
					<a data-widget="collapse" title="Collapse"><i class="fa fa-chevron-up"></i></a>
					<a data-widget="reload" title="Reload"><i class="fa fa-refresh"></i></a>
				</div>
			</div>
			<div class="grid-body">
				<form role="form" class="form-horizontal" enctype="multipart/form-data" method="post">
					<div class="form-group">
						<label class="col-sm-2 control-label">Nama Jenis</label>
						<div class="col-md-4">
							<input type="text" class="form-control" name="nama" value="<?php echo $row['jenisperangkat_nama']; ?>" placeholder="Enter Nama Jenis" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Perangkat</label>
						<div class="col-md-4">
							<input type="text" class="form-control" name="type" value="<?php echo $row['jenisperangkat_type']; ?>" placeholder="Enter Type Perangkat" required>
						</div>
					</div><hr/>
					<div class="form-group">
						<div class="col-md-2"></div>
						<div class="col-md-4 btn-group">
							<button type="submit" class="btn btn-primary" name="jenisperangkat-update"><span class="fa fa-save"></span> Update</button>
							<button type="reset" class="btn btn-default"><span class="fa fa-eraser"></span> Cancel</button>
							<a href="?perangkat=jenis" class="btn btn-info"><span class="fa fa-reply"></span> Back</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- END BASIC FORM -->
</div>