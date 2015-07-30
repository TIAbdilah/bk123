
<?php $this->load->view('admin/master_peta/kumuh/breadcrumbs') ?>

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <?php echo $title_page ?>
            </header>
            <div class="panel-body">
                <form class="form-horizontal" role="form" action="<?php echo site_url('master_peta/kumuh/process/add/') ?>" method="POST">
                    <div class="form-group">
                        <label for="inpNamaKawasan" class="col-lg-2 col-sm-2 control-label">Nama Kawasan</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="inpNamaKawasan" name="inpNamaKawasan" placeholder="Nama Kawasan">
                        </div>
                    </div>    
                    <div class="form-group">
                        <label for="inpKodeDaerah" class="col-lg-2 col-sm-2 control-label">Kode Daerah</label>
                        <div class="col-lg-4">                            
                            <select name="inpKodeDaerah" class="form-control" >  
                                <option>Pilih Kode Daerah</option>
                                <?php
                                $no = 1;
                                foreach ($SIList_kelurahan as $row) {
                                    echo "<option value=\"" . $row->kode_daerah . "\">" . $row->kode_daerah.' - '.$row->nm_daerah . "</option>";
                                    $no++;
                                }
                                ?>
                            </select>
                        </div>
                    </div>   
                    <div class="form-group">
                        <label for="inpLuasKawasan" class="col-lg-2 col-sm-2 control-label">Luas Kawasan</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="inpLuasKawasan" name="inpLuasKawasan" placeholder="Luas Kawasan">
                        </div>
                    </div>   
                    <div class="form-group">
                        <label for="inpJmlKk" class="col-lg-2 col-sm-2 control-label">Jumlah KK</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="inpJmlKk" name="inpJmlKk" placeholder="Jumlah KK">
                        </div>
                    </div>  
                    <div class="form-group">
                        <label for="inpJmlRtlh" class="col-lg-2 col-sm-2 control-label">Jumlah RTLH</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="inpJmlRtlh" name="inpJmlRtlh" placeholder="Jumlah RTLH">
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