<div class="row">
<!-- BEGIN BASIC DATATABLES -->
	<div class="col-md-12">
		<div class="grid no-border">
			<div class="grid-header">
				<i class="fa fa-table"></i>
				<span class="grid-title">Download Modul</span>
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
                            <th>Judul</th>
                            <th>Tanggal</th>
                            <th>Type Files</th>
                            <th>Ukuran Files</th>
                            <th width="25%">Action</th>
                        </tr>
					</thead>
					<tbody>
						<?php 
							$no 		=	1;
							$alat 		=	mysql_query("SELECT * FROM download ");

							while ($data=mysql_fetch_array($alat)) {
						?>
						<tr>
							<td><center><?php echo $no; ?></center></td>
							<td><?php echo $data['nama_file']; ?></td>
							<td><?php echo $data['tanggal_upload']; ?></td>
							<td><?php echo $data['tipe_file']; ?></td>
							<td><?php echo $data['ukuran_file']; ?></td>
							<td>
                            <?php 
                                if (isset($_SESSION['access'])) {
                                    if ($_SESSION['access'] == 'admin') {
                            ?>
                                    <a href="<?php echo $data['file']; ?>" class="btn btn-success"><span class="fa fa-download"></span> Download</a>
                                    <a href="?modul-delete=<?php echo $data['id']; ?>" class="btn btn-danger"><span class="fa fa-trash-o"></span> Delete</a>
                            <?php
                                    }elseif ($_SESSION['access'] == 'guru') {
                            ?>
                                    <a href="<?php echo $data['file']; ?>" class="btn btn-success"><span class="fa fa-download"></span> Download</a>
                                    <a href="?modul-delete=<?php echo $data['id']; ?>" class="btn btn-danger"><span class="fa fa-trash-o"></span> Delete</a>
                            <?php
                                    }elseif ($_SESSION['access'] == 'siswa') {
                            ?>
                                    <a href="<?php echo $data['file']; ?>" class="btn btn-success"><span class="fa fa-download"></span> Download</a>
                            <?php
                                    }
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
				<?php 
					if (isset($_SESSION['access'])) {
						if ($_SESSION['access'] == 'admin' AND 'guru') {
				?>
				<a href="?modul=upload" class="btn btn-primary"><span class="fa fa-upload"></span> Upload</a>
				<?php
						}
					}
				?>				
			</div>
		</div>
	</div>
	<!-- END BASIC DATATABLES -->
</div>