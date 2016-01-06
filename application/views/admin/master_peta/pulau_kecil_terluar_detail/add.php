
<?php $this->load->view('admin/master_peta/pulau_kecil_terluar/breadcrumbs') ?>

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <?php echo $title_page ?>
            </header>
            <div class="panel-body">
                <form class="form-horizontal" role="form" action="<?php echo site_url('master_peta/pulau_kecil_terluar_detail/process/add/') ?>" method="POST">
                    <div class="form-group">
                        <label for="inpNamaKawasan" class="col-lg-2 col-sm-2 control-label">Kluster A</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="inpNamaKawasan" name="inpNamaKawasan" placeholder="Kluster A">
                        </div>
                    </div>   
                    <div class="form-group">
                        <label for="inpNamaKawasan" class="col-lg-2 col-sm-2 control-label">Kluster B</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="inpNamaKawasan" name="inpNamaKawasan" placeholder="Kluster B">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inpNamaKawasan" class="col-lg-2 col-sm-2 control-label">Kluster C</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="inpNamaKawasan" name="inpNamaKawasan" placeholder="Kluster C">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inpNamaKawasan" class="col-lg-2 col-sm-2 control-label">PKN</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="inpNamaKawasan" name="inpNamaKawasan" placeholder="PKN">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inpNamaKawasan" class="col-lg-2 col-sm-2 control-label">PKSN</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="inpNamaKawasan" name="inpNamaKawasan" placeholder="PKSN">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inpNamaKawasan" class="col-lg-2 col-sm-2 control-label">WPS</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="inpNamaKawasan" name="inpNamaKawasan" placeholder="WPS">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inpNamaKawasan" class="col-lg-2 col-sm-2 control-label">KSK</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="inpLuasKawasan" name="inpLuasKawasan" placeholder="KSK">
                        </div>
                    </div>    
                    <div class="form-group">
                        <label for="inpNamaKawasan" class="col-lg-2 col-sm-2 control-label">RTRW</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="inpLuasKawasan" name="inpLuasKawasan" placeholder="RTRW">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inpNamaKawasan" class="col-lg-2 col-sm-2 control-label">PERDA</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="inpLuasKawasan" name="inpLuasKawasan" placeholder="PERDA">
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