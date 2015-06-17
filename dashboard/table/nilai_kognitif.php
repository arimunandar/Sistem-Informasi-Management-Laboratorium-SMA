<div class="row">
    <!-- BEGIN BASIC TABLE -->
    <div class="col-md-12">
        <div class="grid no-border">
            <div class="grid-header">
                <i class="fa fa-table"></i>
                <span class="grid-title">Kognitif</span>
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
                            <td width="60%">Semester</td>
                            <td width="10%">:</td>
                            <td>
                                <?php 
                                    $semester  =   $_POST['semester'];

                                    $sql    =   mysql_query("SELECT * FROM semester WHERE semester_id='$semester'");
                                    $row    =   mysql_fetch_array($sql);

                                    echo $row['semester_nama'];
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="60%">Tahun Ajaran</td>
                            <td width="10%">:</td>
                            <td>
                                <?php 
                                    $tahun  =   $_POST['tahun'];

                                    $sql    =   mysql_query("SELECT * FROM tahun WHERE tahun_id='$tahun'");
                                    $row    =   mysql_fetch_array($sql);

                                    echo $row['tahun_nama'];
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
                            <th width="15%">Nilai Poin</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form role="form" method="post">
                            <?php 
                                if (isset($_POST['cari-nilai'])) {
                                    $no         =   1;
                                    $kelas      =   $_POST['kelas'];
                                    $semester   =   $_POST['semester'];
                                    $tahun      =   $_POST['tahun'];
                                    $jenis      =   3;

                                    $kognitif   =   mysql_query("SELECT users.id, users.name, users.access, kelas.kelas_nama FROM users
                                                                INNER JOIN kelas ON users.kelas_id=kelas.kelas_id
                                                                WHERE kelas.kelas_id='$kelas' AND users.access='siswa'
                                                                ");
                                    while ($data=mysql_fetch_array($kognitif)) {
                            ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td>
                                    <input type="hidden" class="form-control" name="name[]" id="name[]" value="<?php echo $data['id']; ?>">
                                    <?php 
                                        echo $data['name'];
                                    ?>
                                    <input type="hidden" name="semester[]" id="semester[]" value="<?php echo "$semester"; ?>">
                                    <input type="hidden" name="jenis[]" id="jenis[]" value="<?php echo "$jenis"; ?>">
                                    <input type="hidden" name="tahun[]" id="tahun[]" value="<?php echo "$tahun"; ?>">
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="nilai[]" id="nilai[]" />
                                </td>
                            </tr>
                            <?php
                                    }
                            ?>
                            <tr>
                                <td colspan="4" align="right" valign="baseline"><button type="submit" class="btn btn-success" name="kognitif-proses"><span class="fa fa-gear"></span> Proses</button></td>
                            </tr>
                        </form>
                            <?php
                                }
                            ?>                        
                    </tbody>                    
                </table>
                <a href="?nilai=kognitif-create" class="btn btn-info"><span class="fa fa-reply"></span> Back</a>
            </div>
        </div>
    </div>
    <!-- END BASIC TABLE -->
</div>