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
                            <th width="30%">Kelas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no             =   1;

                            $jadwal         =   mysql_query("SELECT jadwal.jadwal_id, jam.jam_nama, jadwal.jadwal_tanggal, users.name, kelas.kelas_nama, kelas.kelas_id 
                                                            FROM jadwal INNER JOIN jam ON jadwal.jam_id=jam.jam_id 
                                                            INNER JOIN users ON jadwal.id=users.id 
                                                            INNER JOIN kelas ON users.kelas_id=kelas.kelas_id");
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
            </div>
        </div>
    </div>
    <!-- END BASIC TABLE -->
</div>