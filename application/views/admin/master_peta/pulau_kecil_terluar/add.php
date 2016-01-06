
<?php $this->load->view('admin/master_peta/perbatasan/breadcrumbs') ?>

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <?php echo $title_page ?>
            </header>
            <div class="panel-body">
                <form class="form-horizontal" role="form" action="<?php echo site_url('master_peta/perbatasan/process/add/') ?>" method="POST">
                    <div class="form-group">
                        <label for="inpNamaKawasan" class="col-lg-2 col-sm-2 control-label">Provinsi</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="inpNamaKawasan" name="inpNamaKawasan" placeholder="Provinsi">
                        </div>
                    </div>    
                    <div class="form-group">
                        <label for="inpNamaKawasan" class="col-lg-2 col-sm-2 control-label">Kabupaten/Kota</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="inpLuasKawasan" name="inpLuasKawasan" placeholder="Kabupaten/Kota">
                        </div>
                    </div> 
                    <div class="form-group">
                        <label for="inpNamaKawasan" class="col-lg-2 col-sm-2 control-label">Kecamatan</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="inpLuasKawasan" name="inpLuasKawasan" placeholder="Kecamatan">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inpNamaKawasan" class="col-lg-2 col-sm-2 control-label">Desa/Kelurahan</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="inpLuasKawasan" name="inpLuasKawasan" placeholder="Desa/Kelurahan">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inpNamaKawasan" class="col-lg-2 col-sm-2 control-label">Pulau</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="inpLuasKawasan" name="inpLuasKawasan" placeholder="Pulau">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inpNamaKawasan" class="col-lg-2 col-sm-2 control-label">Jumlah Penduduk</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="inpLuasKawasan" name="inpLuasKawasan" placeholder="Jumlah Penduduk">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inpNamaKawasan" class="col-lg-2 col-sm-2 control-label">Jumlah Kepala Keluarga</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="inpLuasKawasan" name="inpLuasKawasan" placeholder="Pulau">
                        </div>
                    </div>                    
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn"><?php echo $text['txt']->button['save_add'] ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>