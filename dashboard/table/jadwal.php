<?php 
	if (isset($_POST['cari-jadwal'])) {
		include('table/tampil_jadwal.php');
	}else{
?>
<!--
<div class="row">
 BEGIN BASIC FORM 
	<div class="col-md-12">
		<div class="grid">
			<div class="grid-header">
				<i class="fa fa-align-left"></i>
				<span class="grid-title">Jadwal Laboratorium</span>
				<div class="pull-right grid-tools">
					<a data-widget="collapse" title="Collapse"><i class="fa fa-chevron-up"></i></a>
					<a data-widget="reload" title="Reload"><i class="fa fa-refresh"></i></a>
				</div>
			</div>
			<div class="grid-body">				
				<form role="form" class="form-horizontal" enctype="multipart/form-data" method="post">
					<div class="form-group">
						<label class="col-sm-2 control-label">Tanggal</label>
						<div class="col-sm-4">
							<div class="input-group date form_date" data-date-format="dd-mm-yyyy" data-link-field="dtp_input3">
								<input type="text" class="form-control" name="tanggal">
								<span class="input-group-addon"><i class="fa fa-th"></i></span>
							</div>
							<input type="hidden" id="dtp_input3" value="" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Jam</label>
						<div class="col-md-4">
							<select class="form-control" name="jam" required>
								<?php 
									$jam  	=	mysql_query("SELECT * FROM jam");

									while ($data=mysql_fetch_array($jam)) {
								?>
								<option value="<?php echo $data['jam_id']; ?>"><?php echo $data['jam_nama']; ?></option>
								<?php
									}
								?>
							</select>
						</div>
					</div><hr/>
					<div class="form-group">
						<div class="col-md-2"></div>
						<div class="col-md-4 btn-group">
							<button type="submit" class="btn btn-primary" name="cari-jadwal"><span class="fa fa-search"></span> Search</button>
							<button type="reset" class="btn btn-default"><span class="fa fa-eraser"></span> Cancel</button>
							<a href="?jadwal=create" class="btn btn-success"><span class="fa fa-plus"></span> Add Jadwal</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
END BASIC FORM 
</div>
-->
<div class="row">
    <!-- BEGIN BASIC TABLE -->
    <div class="col-md-12">
        <div class="grid no-border">
            <div class="grid-header">
                <i class="fa fa-table"></i>
                <span class="grid-title">Jadwal Laboratorium</span>
                <div class="pull-right grid-tools">
                    <a data-widget="collapse" title="Collapse"><i class="fa fa-chevron-up"></i></a>
                    <a data-widget="reload" title="Reload"><i class="fa fa-refresh"></i></a>
                    <a data-widget="remove" title="Remove"><i class="fa fa-times"></i></a>
                </div>
            </div>
            <div class="grid-body">
                <table id="dataTables1" class="table table-hover display" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th width="3%">#</th>
                            <th width="12%">Jam</th>
                            <th width="12%">Tanggal</th>
                            <th>Nama Guru</th>
                            <th width="10%">Kelas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                                $no             =   1;
                                $jadwal         =   mysql_query("SELECT jadwal.jadwal_id, jam.jam_nama, jadwal.jadwal_tanggal, users.name, kelas.kelas_nama 
                                                                FROM jadwal
                                                                INNER JOIN jam ON jadwal.jam_id=jam.jam_id
                                                                INNER JOIN users ON jadwal.id=users.id
                                                                INNER JOIN kelas ON jadwal.kelas_id=kelas.kelas_id
                                                                ORDER BY jadwal.jadwal_tanggal DESC");
                                while ($data=mysql_fetch_array($jadwal)) { 
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $data['jam_nama']; ?></td>
                            <td><?php echo $data['jadwal_tanggal']; ?></td>
                            <td><?php echo $data['name']; ?></td>
                            <td><?php echo $data['kelas_nama']; ?></td>
                        </tr>
                        <?php
                        		$no++;
                                }
                        ?>                    
                    </tbody>                    
                </table>
                <a href="?jadwal=create" class="btn btn-success"><span class="fa fa-plus"></span> Add Jadwal</a>
            </div>
        </div>
    </div>
    <!-- END BASIC TABLE -->
</div>
<?php
	}
?>
