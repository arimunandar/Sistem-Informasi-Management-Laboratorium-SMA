<div class="row">
	<!-- BEGIN BASIC FORM -->
	<div class="col-md-12">
		<div class="grid">
			<div class="grid-header">
				<i class="fa fa-align-left"></i>
				<span class="grid-title">Admin</span>
				<div class="pull-right grid-tools">
					<a data-widget="collapse" title="Collapse"><i class="fa fa-chevron-up"></i></a>
					<a data-widget="reload" title="Reload"><i class="fa fa-refresh"></i></a>
				</div>
			</div>
			<div class="grid-body">
				<form role="form" class="form-horizontal" method="post">
					<div class="form-group">
						<label class="col-sm-2 control-label">Nama</label>
						<div class="col-md-4">
							<input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>" placeholder="Enter Nama" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Username</label>
						<div class="col-md-4">
							<input type="text" class="form-control" name="username" value="<?php echo $row['username']; ?>" placeholder="Enter Username" required>
						</div>
					</div>				
					<div class="form-group">
						<label class="col-sm-2 control-label">Alamat</label>
						<div class="col-md-4">
							<textarea class="form-control" name="alamat" required><?php echo $row['alamat']; ?></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Telepon</label>
						<div class="col-md-4">
							<input type="text" class="form-control" name="telp" value="<?php echo $row['telp']; ?>" placeholder="No. Telepon" required>
						</div>
					</div><hr/>
					<div class="form-group">
						<div class="col-md-2"></div>
						<div class="col-md-4 btn-group">
							<button type="submit" class="btn btn-primary" name="admin-update"><span class="fa fa-save"></span> Update</button>
							<button type="reset" class="btn btn-default"><span class="fa fa-eraser"></span> Cancel</button>
							<a href="?users=admin" class="btn btn-info"><span class="fa fa-reply"></span> Back</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- END BASIC FORM -->
</div>