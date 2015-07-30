
<?php $this->load->view('admin/utilitas/modul/breadcrumbs') ?>

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <?php echo $title_page ?>
            </header>
            <div class="panel-body">
                <form class="form-horizontal" action="<?php echo site_url('utilitas/modul/process/edit/' . $data->id_modul) ?>" method="POST">
                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label" for="inpTipeModul">Tipe Modul</label>
                        <div class="col-lg-4">
                            <select class="form-control" name="inpTipeModul" readonly="true">                                                
                                <option value="">-Pilih Tipe Modul-</option>
                                <?php
                                foreach ($SIList_tipeModul as $row) {
                                    echo "<option value=\"" . $row->list_item . "\"" . set_select('inpTipeModul', $row->list_item, $row->list_item == $data->tipe_modul) . ">" . $row->list_item . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label" for="inpKodeModul">Kode Modul</label>
                        <div class="col-lg-4">
                            <input type="text" id="inpKodeModul" class="form-control" name="inpKodeModul" value="<?php echo $data->kode_modul ?>" readonly="true">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label" for="inpNamaModul">Nama Modul</label>
                        <div class="col-lg-4">
                            <input type="text" id="inpNamaModul" class="form-control" name="inpNamaModul" value="<?php echo $data->nama_modul ?>">
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
