<?php 
    if (isset($_POST['cari-absen'])) {
        include('table/tampil_absen.php');
    }elseif (isset($_POST['create-absen'])) {        
        include('table/absen-create.php');
    }else{
?>

<div class="row">
    <div class="col-md-12">
        <div class="grid">
            <div class="grid-header">
                <i class="fa fa-align-left"></i>
                <span class="grid-title">Absen</span>
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
                                <input type="text" class="form-control" name="tanggal" required>
                                <span class="input-group-addon"><i class="fa fa-th"></i></span>
                            </div>
                            <input type="hidden" id="dtp_input3" value="" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Kelas</label>
                        <div class="col-md-4">
                            <select class="form-control" name="kelas" required>
                                <?php 
                                    //$kel      =   $_SESSION['kelas'];  
                                    $kelas    =   mysql_query("SELECT * FROM kelas");

                                    while ($data=mysql_fetch_array($kelas)) {
                                ?>
                                <option value="<?php echo $data['kelas_id']; ?>"><?php echo $data['kelas_nama']; ?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div><hr/>
                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <div class="col-md-4 btn-group">
                            <button type="submit" class="btn btn-primary" name="cari-absen"><span class="fa fa-search"></span> Search</button>
                            <button type="reset" class="btn btn-default"><span class="fa fa-eraser"></span> Cancel</button>
                            <button type="submit" class="btn btn-success" name="create-absen"><span class="fa fa-plus"></span> Add Absen</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
    }
?>