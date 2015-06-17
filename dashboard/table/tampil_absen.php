<div class="row">
    <!-- BEGIN BASIC TABLE -->
    <div class="col-md-12">
        <div class="grid no-border">
            <div class="grid-header">
                <i class="fa fa-table"></i>
                <span class="grid-title">Absensi</span>
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
                            <th>Nama Siswa</th>
                            <th width="25%">Tanggal</th>
                            <th width="12%">Kelas</th>
                            <th width="12%">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $no             =   1;
                            $kelas          =   $_POST['kelas'];
                            $tanggal        =   $_POST['tanggal'];
                            $absen          =   mysql_query("SELECT absen.absen_id, absen.absen_tgl, absen.absen_ket, users.name, kelas.kelas_nama, kelas.kelas_id
                                                            FROM absen
                                                            INNER JOIN users ON absen.id=users.id
                                                            INNER JOIN kelas ON users.kelas_id=kelas.kelas_id
                                                            WHERE kelas.kelas_id='$kelas' AND absen.absen_tgl='$tanggal'
                                                            ORDER BY absen.absen_tgl ASC");
                            while ($data=mysql_fetch_array($absen)) { 
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $data['name']; ?></td>
                            <td><?php echo $data['absen_tgl']; ?></td>
                            <td><?php echo $data['kelas_nama']; ?></td>
                            <td><?php echo $data['absen_ket']; ?></td>
                        </tr>
                        <?php
                    		$no++;
                            }
                        ?>                    
                    </tbody>                    
                </table>
                <a href="?jadwal=absen" class="btn btn-info"><span class="fa fa-reply"></span> Back</a>
            </div>
        </div>
    </div>
    <!-- END BASIC TABLE -->
</div>