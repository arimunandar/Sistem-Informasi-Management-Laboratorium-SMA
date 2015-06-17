<div class="row">
<!-- BEGIN BASIC DATATABLES -->
	<div class="col-md-12">
		<div class="grid no-border">
			<div class="grid-header">
				<i class="fa fa-table"></i>
				<span class="grid-title">Nilai Afektif</span>
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
							<th>Kelas</th>
							<th>Semester</th>
							<th>Tahun</th>
							<th>Nilai Poin</th>
							<th width="20%"><center>Action</center></th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$no 		=	1;
							$nilai 		=	mysql_query("SELECT nilai.nilai_id, nilai.nilai_poin, users.name, users.access, jenisnilai.jenis_nama, kelas.kelas_nama, semester.semester_nama, tahun.tahun_nama
														FROM nilai
														INNER JOIN users ON nilai.id=users.id
														INNER JOIN kelas ON users.kelas_id=kelas.kelas_id
														INNER JOIN jenisnilai ON nilai.jenis_id=jenisnilai.jenis_id
														INNER JOIN semester ON nilai.semester_id=semester.semester_id
														INNER JOIN tahun ON nilai.tahun_id=tahun.tahun_id
														WHERE jenisnilai.jenis_id=1 AND users.access='siswa'
														ORDER BY nilai.nilai_id ASC");

							while ($data=mysql_fetch_array($nilai)) {
						?>
						<tr>
							<td><center><?php echo $no; ?></center></td>
							<td><?php echo $data['name']; ?></td>
							<td><?php echo $data['jenis_nama']; ?></td>
							<td><?php echo $data['kelas_nama']; ?></td>
							<td><?php echo $data['semester_nama']; ?></td>
							<td><?php echo $data['tahun_nama']; ?></td>
							<td><?php echo $data['nilai_poin']; ?></td>
							<td>
								<center>
									<a href="?afektif-edit=<?php echo $data['nilai_id']; ?>" class="btn btn-warning"><span class="fa fa-edit"></span> Edit</a>
									<a href="?afektif-delete=<?php echo $data['nilai_id']; ?>" class="btn btn-danger"><span class="fa fa-trash-o"></span> Delete</a>
								</center>
							</td>
						</tr>
						<?php
							$no++;
							}
						?>						
					</tbody>
				</table>
				<a href="?nilai=afektif-create" class="btn btn-primary"><span class="fa fa-plus"></span> Create</a>				
			</div>
		</div>
	</div>
	<!-- END BASIC DATATABLES -->
</div>