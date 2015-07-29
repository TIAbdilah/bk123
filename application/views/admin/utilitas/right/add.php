
<?php $this->load->view('admin/utilitas/right/breadcrumbs') ?>

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <?php echo $title_page ?>
            </header>
            <div class="panel-body">
                <form class="form-horizontal" action="<?php echo site_url('utilitas/right/process/add') ?>" method="POST">
                    <div class="form-group">
                        <label for="inpIdModul" class="col-lg-2 col-sm-2 control-label">Nama Modul</label>
                        <div class="col-lg-4">
                            <select name="inpIdModul" class="form-control">                                                
                                <option value="">-Pilih Nama Modul-</option>
                                <?php
                                foreach ($SIList_modul as $row) {
                                    echo "<option value=\"" . $row->id_modul . "\">" . $row->nama_modul . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label" for="inpNamaRight">Nama Right</label>
                        <div class="col-lg-4">
                            <input class="form-control" type="text" id="inpNamaRight" name="inpNamaRight" placeholder="Nama Right">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn"><?php echo $text['txt']->button['save_add'] ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>
