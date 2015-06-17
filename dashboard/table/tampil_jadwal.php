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
                            <th width="20%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            if (isset($_POST['cari-jadwal'])) {
                                $no             =   1;
                                $tanggal        =   $_POST['tanggal'];
                                $jam            =   $_POST['jam'];
                                $name           =   $_SESSION['name'];

                                $jadwal         =   mysql_query("SELECT jadwal.jadwal_id, jam.jam_nama, jadwal.jadwal_tanggal, users.name, kelas.kelas_nama 
                                                                FROM jadwal
                                                                INNER JOIN jam ON jadwal.jam_id=jam.jam_id
                                                                INNER JOIN users ON jadwal.id=users.id
                                                                INNER JOIN kelas ON users.kelas_id=kelas.kelas_id
                                                                WHERE jam.jam_id='$jam' AND jadwal.jadwal_tanggal='$tanggal'");
                                while ($data=mysql_fetch_array($jadwal)) { 
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $data['jam_nama']; ?></td>
                            <td><?php echo $tanggal; ?></td>
                            <td><?php echo $data['name']; ?></td>
                            <td><?php echo $data['kelas_nama']; ?></td>
                            <td>
                                <?php 
                                    if ($name == $data['name']) {
                                ?>
                                <a href="?jadwal-edit=<?php echo $data['jadwal_id']; ?>" class="btn btn-warning"><span class="fa fa-edit"></span> Edit</a>
                                <a href="?jadwal-delete=<?php echo $data['jadwal_id']; ?>" class="btn btn-danger"><span class="fa fa-trash-o"></span> Delete</a>
                                <?php
                                    }elseif (isset($_SESSION['access'])) {
                                        if ($_SESSION['access'] == 'admin') {
                                ?>
                                <a href="?jadwal-edit=<?php echo $data['jadwal_id']; ?>" class="btn btn-warning"><span class="fa fa-edit"></span> Edit</a>
                                <a href="?jadwal-delete=<?php echo $data['jadwal_id']; ?>" class="btn btn-danger"><span class="fa fa-trash-o"></span> Delete</a>
                                <?php
                                        }
                                    }
                                ?>
                            </td>
                        </tr>
                        <?php
                                }
                            }
                        ?>                    
                    </tbody>                    
                </table>
                <a href="?jadwal=laboratorium" class="btn btn-info"><span class="fa fa-reply"></span> Back</a>
            </div>
        </div>
    </div>
    <!-- END BASIC TABLE -->
</div>