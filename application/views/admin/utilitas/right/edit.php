
<?php $this->load->view('admin/utilitas/right/breadcrumbs') ?>

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <?php echo $title_page ?>
            </header>
            <div class="panel-body">
                <form class="form-horizontal" action="<?php echo site_url('utilitas/right/process/edit/' . $data->id_right) ?>" method="POST">
                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label" for="inpIdModul">Nama Modul</label>
                        <div class="col-lg-4">
                            <select class="form-control" name="inpIdModul" readonly="true">                                                
                                <option value="">-Pilih Nama Modul-</option>
                                <?php
                                foreach ($SIList_modul as $row) {
                                    echo "<option value=\"" . $row->id_modul . "\"" . set_select('inpIdModul', $row->id_modul, $row->id_modul == $data->id_modul) . ">" . $row->nama_modul . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label" for="inpKodeRight">Kode Right</label>
                        <div class="col-lg-4">
                            <input type="text" id="inpKodeRight" class="form-control" name="inpKodeRight" value="<?php echo $data->kode_right ?>" readonly="true">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label" for="inpNamaRight">Nama Right</label>
                        <div class="col-lg-4">
                            <input type="text" id="inpNamaRight" class="form-control" name="inpNamaRight" value="<?php echo $data->nama_right ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-4">
                            <button type="submit" class="btn"><?php echo $text['txt']->button['save_add'] ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>
