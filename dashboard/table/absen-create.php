<div class="row">
    <!-- BEGIN BASIC TABLE -->
    <div class="col-md-12">
        <div class="grid no-border">
            <div class="grid-header">
                <i class="fa fa-table"></i>
                <span class="grid-title">Absen</span>
                <div class="pull-right grid-tools">
                    <a data-widget="collapse" title="Collapse"><i class="fa fa-chevron-up"></i></a>
                    <a data-widget="reload" title="Reload"><i class="fa fa-refresh"></i></a>
                    <a data-widget="remove" title="Remove"><i class="fa fa-times"></i></a>
                </div>
                <div class="col-md-12" style="padding-top:20px;">
                    <table>
                        <tr>
                            <td width="60%">Kelas</td>
                            <td width="10%">:</td>
                            <td>
                                <?php 
                                    $kelas  =   $_POST['kelas'];

                                    $sql    =   mysql_query("SELECT * FROM kelas WHERE kelas_id='$kelas'");
                                    $row    =   mysql_fetch_array($sql);

                                    echo $row['kelas_nama'];
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="60%">Tanggal</td>
                            <td width="10%">:</td>
                            <td>
                                <?php 
                                    $tanggal  =   $_POST['tanggal'];
                                    echo $tanggal;
                                ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="grid-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th width="3%">#</th>
                            <th>Nama Siswa</th>
                            <th width="15%">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form role="form" method="post">
                            <?php 
                                if (isset($_POST['create-absen'])) {
                                    $no         =   1;
                                    $kelas      =   $_POST['kelas'];
                                    $tanggal  =   $_POST['tanggal'];
                                    $absen    =   mysql_query("SELECT users.id, users.name, users.access, kelas.kelas_nama FROM users
                                                                INNER JOIN kelas ON users.kelas_id=kelas.kelas_id
                                                                WHERE kelas.kelas_id='$kelas' AND users.access='siswa'
                                                                ");
                                    while ($data=mysql_fetch_array($absen)) {
                            ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td>
                                    <input type="hidden" class="form-control" name="name[]" id="name[]" value="<?php echo $data['id']; ?>">
                                    <?php 
                                        echo $data['name'];
                                    ?>
                                    <input type="hidden" name="tanggal[]" id="tanggal[]" value="<?php echo "$tanggal"; ?>">
                                </td>
                                <td>
                                    <select class="form-control" name="ket[]" id="ket[]" required>
                                        <option value="Hadir">Hadir</option>
                                        <option value="Alfa">Alfa</option>
                                        <option value="Sakit">Sakit</option>
                                        <option value="Izin">Izin</option>
                                    </select>
                                </td>
                            </tr>
                            <?php
                                $no++;
                                    }
                            ?>
                            <tr>
                                <td colspan="4" align="right" valign="baseline"><button type="submit" class="btn btn-success" name="absen-proses"><span class="fa fa-gear"></span> Proses</button></td>
                            </tr>
                        </form>
                            <?php
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

