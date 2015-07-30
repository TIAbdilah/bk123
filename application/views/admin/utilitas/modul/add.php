
<?php $this->load->view('admin/utilitas/modul/breadcrumbs') ?>

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <?php echo $title_page ?>
            </header>
            <div class="panel-body">
                <form class="form-horizontal" action="<?php echo site_url('utilitas/modul/process/add') ?>" method="POST">
                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label" for="inpTipeModul">Tipe Modul</label>
                        <div class="col-lg-4">
                            <select class="form-control" name="inpTipeModul">                                                
                                <option value="">-Pilih Tipe Modul-</option>
                                <?php
                                foreach ($SIList_tipeModul as $row) {
                                    echo "<option value=\"" . $row->list_item . "\">" . $row->list_item . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label" for="inpNamaModul">Nama Modul</label>
                        <div class="col-lg-4">
                            <input type="text" id="inpNamaModul" class="form-control" name="inpNamaModul" placeholder="Nama Modul">
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
