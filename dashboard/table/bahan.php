<div class="row">
<!-- BEGIN BASIC DATATABLES -->
	<div class="col-md-12">
		<div class="grid no-border">
			<div class="grid-header">
				<i class="fa fa-table"></i>
				<span class="grid-title">Bahan</span>
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
							<th width="3%" align="center">#</th>
							<th>Nama</th>
							<th>Jenis</th>
							<th>Jumlah Bahan</th>
							<th>Jumlah Rusak</th>
							<th>Satuan</th>
							<th width="20%"><center>
								<?php 
									if (isset($_SESSION['access'])) {
										if ($_SESSION['access'] == 'admin') {
											echo "Action";
										}elseif ($_SESSION['access'] == 'guru') {
											echo "Tersedia";
										}
									}
								?>
							</center></th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$no 		=	1;
							$bahan 		=	mysql_query("SELECT * FROM bahan ");

							while ($data=mysql_fetch_array($bahan)) {
						?>
						<tr>
							<td><center><?php echo $no; ?></center></td>
							<td><?php echo $data['bahan_nama']; ?></td>
							<td><?php echo $data['bahan_jenis']; ?></td>
							<td>
								<?php
									echo $data['bahan_jumlah']; 
								?>
							</td>
							<td>
								<?php 
									echo $data['bahan_rusak'];
								?>
							</td>
							<td><?php echo $data['bahan_satuan']; ?></td>
							<?php 
								if (isset($_SESSION['access'])) {
									if ($_SESSION['access'] == 'admin') {
							?>
							<td>
								<center>
									<a href="?bahan-edit=<?php echo $data['bahan_id']; ?>" class="btn btn-warning"><span class="fa fa-edit"></span> Edit</a>
									<a href="?bahan-delete=<?php echo $data['bahan_id']; ?>" class="btn btn-danger"><span class="fa fa-trash-o"></span> Delete</a>
								</center>
							</td>
								
							<?php
									}elseif ($_SESSION['access'] == 'guru') {
										$jumlah = $data['bahan_jumlah'];
										$rusak 	= $data['bahan_rusak']; 
							?>
							<td class="btn-info">
								<center>
									<?php echo $jumlah-$rusak; ?>
								</center>
							</td>
							<?php
									}
								}
							?>
						</tr>
						<?php
							$no++;
							}
						?>						
					</tbody>
				</table>
				<?php 
					if (isset($_SESSION['access'])) {
						if ($_SESSION['access'] == 'admin') {
				?>
				<a href="?perangkat=bahan-create" class="btn btn-primary"><span class="fa fa-plus"></span> Create</a>
				<?php
						}
					}
				?>				
			</div>
		</div>
	</div>
	<!-- END BASIC DATATABLES -->
</div>